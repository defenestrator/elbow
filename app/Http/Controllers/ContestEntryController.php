<?php

namespace Elbow\Http\Controllers;

use Elbow\Mail\ContestEntryVerificationMail;
use Elbow\ContestEntry;
use Illuminate\Http\Request;
use Ramsey\Uuid\Uuid;
use Illuminate\Contracts\Mail\Mailer;
class ContestEntryController extends Controller
{
    private $contestEntry;
    private $mail;
    /**
     * Where to redirect users after verification.
     *
     * @var string
     */
    protected $redirectTo = '/contest-entries';

    public function __construct(ContestEntry $contestEntry, Mailer $mail)
    {
        $this->contestEntry = $contestEntry;
        $this->mail = $mail;
    }

    /**
     * Contact form processing.
     * @param Request $request
     * @return Redirect
     */
    public function create(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email'
        ]);

        if (ContestEntry::where('email', '=', $request->email)->count() > 0) {

            $resend = ContestEntry::where('email', '=', $request->email)->first();

            if ($resend->uuid == '' || null) {
                $resend->update(['uuid' => Uuid::uuid4()]);
            }

            $this->mail->to($request->email)->send(new ContestEntryVerificationMail($resend));

            return response([
                    'message' => 'An entry for this contest already exists for ' . $request->email . '. Please confirm your email address',
                    'success' => true
                ]
            );
        };

        $entry = ContestEntry::create([
            'email' => $request->email,
            'uuid' => Uuid::uuid4(),
            'giveaway_id' => 1
        ]);

        $this->mail->to($request->email)->send(new ContestEntryVerificationMail($entry));
        return response([
            'message' => 'Entered contest with email: '. $request->email . '. Please confirm your email address',
            'success' => true
        ]);
    }

    /**
     * @param $uuid
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function confirm($uuid)
    {
        $message = 'Sorry, we do not recognize that link';
        $account = ContestEntry::where('uuid', '=', $uuid)->first();
        if( $account instanceof $this->contestEntry ) {
            $account->update(['email_verified_at' => now()->toDateTimeString(), 'uuid' => null]);
            $message = 'Confirmed your contest entry for'. $account->email .'. Thanks!';
            return view('thanks', compact('message'));
        };
        return view('thanks', compact('message'));
    }
}