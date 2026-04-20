<?php

use App\Http\Controllers\ShortLinkController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Phase 1 — Public link shortening (IP rate-limited)
Route::post('/shorten', [ShortLinkController::class, 'shorten']);

// Phase 1 — Public stats lookup
Route::get('/stats/{shortPath}', [ShortLinkController::class, 'stats']);
