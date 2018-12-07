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

            $this->mail->to($request->email)->queue(newContestEntryVerificationMail($resend));

            return response([
                    'message' => 'An entry already exists for ' . $request->email . '. Please confirm your email, check your Spam folder for emails from @mg.elbow.farm.',
                    'success' => true
                ]
            );
        };

        $entry = ContestEntry::create([
            'email' => $request->email,
            'uuid' => Uuid::uuid4(),
            'giveaway_id' => $request->giveaway_id
        ]);

        $this->mail->to($request->email)->queue(newContestEntryVerificationMail($entry));
        return response([
            'message' => 'Entered contest with email: '. $request->email . '. Please confirm your email. Check spam for support@mg.elbow.farm or re-enter your email.',
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
            $message = 'Contest entry for '. $account->email .' is complete. Thanks!';
            return view('thanks', compact('message'));
        };
        return view('thanks', compact('message'));
    }
}