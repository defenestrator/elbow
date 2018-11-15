<?php

namespace Elbow\Http\Controllers;

use Illuminate\Http\Request;
use Elbow\ContactFormMessage;
use Illuminate\Support\Facades\Lang;
use Elbow\Mail\ContactFormNotification;
use Illuminate\Contracts\Mail\Mailer;

class ContactFormController extends Controller
{
    private $mail;

    public function __construct(Mailer $mail)
    {
        return $this->mail = $mail;
    }
    public function create(Request $request)
    {
        // Data to be used on the email view
        $request->validate([
            'contact-name' => 'required|min:2',
            'contact-email' => 'required|email',
            'contact-msg' => 'required|min:7'
        ]);

//        if (config('app.env') !== 'testing' ||config('app.env') !== 'local') {
//            $request->validate([
//                'g-recaptcha-response' => 'required|recaptcha'
//            ]);
//        }

        // Save the message to DB
        $data = ContactFormMessage::create([
            'name' => $request
                ->get('contact-name'),
            'email_address' => $request->get('contact-email'),
            'message' => $request->get('contact-msg'),
        ]);

        $this->mail->to('support@mg.elbow.farm')->queue(newContactFormNotification($data));
        return view('thanks')->with('message', 'We will get back to you as quick as we can!');
    }
}
