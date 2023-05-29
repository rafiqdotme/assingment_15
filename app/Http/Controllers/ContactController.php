<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function __invoke(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        // Send email
        $to = 'rafiqulislam474@@gmail.com'; // Replace with the actual email address
        $subject = 'Contact Form Submission';
        $body = "Name: {$validatedData['name']}\n";
        $body .= "Email: {$validatedData['email']}\n";
        $body .= "Message: {$validatedData['message']}\n";

        Mail::raw($body, function ($message) use ($to, $subject) {
            $message->to($to);
            $message->subject($subject);
        });

        return redirect()->back()->with('success', 'Your message has been submitted. Thank you!');
    }
}
