<?php

namespace Elbow\Mail;

use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Elbow\ContestEntry;
use Illuminate\Bus\Queueable;
class ContestEntryVerificationMail extends Mailable
{
    use Queueable, SerializesModels;

    protected $contest;

    /**
     * ContestEntryConfirmation constructor.
     * @param ContestEntry $contest
     */
    public function __construct(ContestEntry $contest)
    {
        $this->contest = $contest;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.confirm-contest-entry')
            ->with([
                'url'=> url('/contest-entries/' . $this->contest->uuid)
            ]);
    }
}
