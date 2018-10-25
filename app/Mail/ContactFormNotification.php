<?php

namespace Elbow\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Elbow\ContactFormMessage;

class ContactFormNotification extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * @var Contact
     */
    protected $contact;

    /**
     * ContactFormNotification constructor.
     * @param ContactFormMessage $contact
     */
    public function __construct(ContactFormMessage $contact)
    {
        $this->contact = $contact;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.contact-form')
            ->with([
                'data' => $this->contact
            ]);
    }
}
