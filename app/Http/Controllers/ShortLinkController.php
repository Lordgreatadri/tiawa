<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\RateLimiter;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class ShortLinkController extends Controller
{
    private string $apiBase;
    private ?string $apiKey;

    public function __construct()
    {
        $this->apiBase = rtrim(config('services.tiawa.base_url', 'https://api.44labs.co'), '/');
        $this->apiKey  = config('services.tiawa.api_key');
    }

    /**
     * Phase 1: Create a short link (no auth required, IP-rate-limited).
     */
    public function shorten(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'url' => ['required', 'url', 'max:2048'],
        ]);

        // IP-based rate limit: 10 requests per hour for anonymous users
        $key = 'shorten|' . $request->ip();

        if (RateLimiter::tooManyAttempts($key, 10)) {
            $seconds = RateLimiter::availableIn($key);

            return response()->json([
                'message' => "Hourly limit reached. Try again in {$seconds} seconds.",
            ], 429);
        }

        RateLimiter::hit($key, 3600);

        $response = Http::timeout(10)
            ->withHeaders($this->authHeaders())
            ->post($this->apiBase . '/requests/create', [
            'url'        => $validated['url'],
            'short_path' => '',
        ]);

        if ($response->failed()) {
            return response()->json([
                'message' => 'Failed to create short link. Please try again.',
            ], 502);
        }

        $data = $response->json('data');

        if (empty($data['short_url'])) {
            return response()->json([
                'message' => 'Unexpected response from link service. Please try again.',
            ], 502);
        }

        // Generate QR code as base64-encoded SVG
        $qrSvg = QrCode::format('svg')
            ->size(200)
            ->margin(1)
            ->generate($data['short_url']);

        return response()->json([
            'short_url'  => $data['short_url'],
            'short_path' => $data['short_path'],
            'qr_code'    => 'data:image/svg+xml;base64,' . base64_encode($qrSvg),
        ]);
    }

    /**
     * Get stats for a short link (Phase 2: requires auth for full analytics).
     */
    public function stats(string $shortPath): JsonResponse
    {
        // Sanitise path to alphanumeric and safe chars only
        $shortPath = preg_replace('/[^a-zA-Z0-9_\-]/', '', $shortPath);

        if (empty($shortPath)) {
            return response()->json(['message' => 'Invalid short path.'], 422);
        }

        $response = Http::timeout(10)
            ->withHeaders($this->authHeaders())
            ->get($this->apiBase . '/reports/' . $shortPath . '/');

        if ($response->failed()) {
            return response()->json(['message' => 'Link not found.'], 404);
        }

        return response()->json($response->json('data'));
    }

    private function authHeaders(): array
    {
        if (empty($this->apiKey)) {
            return [];
        }

        return ['Authorization' => 'Bearer ' . $this->apiKey];
    }
}
