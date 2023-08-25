<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class contactUs extends Controller
{
    public function send(Request $request)
    {

        $request->validate([
            'name' => 'required|min:3|max:20',
            'email' => 'required',

        ]);
        $code = time();
        $email_data = [
            'reciver' => 'aboudnaser20@gmail.com',
            'fromEmail' => $request->email,
            'fromName' => $request->name,
            'subject' => 'laravel confirm code ',
            'body' => 'this your email veryfication code do not share this with any one  ' . $code
        ];
        Mail::send('email-template', $email_data, function ($message) use ($email_data) {
            $message->to($email_data['fromEmail'])
                ->from($email_data['reciver'])
                ->subject($email_data['subject']);
        });

        return redirect()->route('confirm.email')->with('done' , 'Email Sent');
    }

  
}

