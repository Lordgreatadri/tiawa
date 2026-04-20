<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\View\View;

class ContactController extends Controller
{
    public function show(): View
    {
        return view('contact');
    }

    public function send(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name'              => ['required', 'string', 'max:100'],
            'email'             => ['required', 'email', 'max:255'],
            'phone'             => ['nullable', 'string', 'max:30'],
            'subject'           => ['required', 'string', 'max:100'],
            'preferred_contact' => ['nullable', 'string', 'max:50'],
            'preferred_time'    => ['nullable', 'string', 'max:100'],
            'message'           => ['required', 'string', 'min:10', 'max:3000'],
        ]);

        // TODO: send email / store in DB when mail is configured
        // Mail::to(config('mail.from.address'))->send(new \App\Mail\ContactFormMail($validated));

        // Log for now so nothing is silently dropped
        logger()->info('Contact form submission', $validated);

        return redirect()->route('contact')
            ->with('success', "Thanks {$validated['name']}! We received your message and will get back to you soon.");
    }
}
