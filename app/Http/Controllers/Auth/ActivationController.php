<?php

namespace Elbow\Http\Controllers\Auth;

use Elbow\Http\Controllers\Controller as Controller;
use Elbow\Mail\ActivateUser;
use Elbow\User;
use Elbow\Http\Utilities\FlashMessaging as Message;
use Illuminate\Support\Facades\Mail;

class ActivationController extends Controller
{
    /**
     * @param $code
     * @param Message $message
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function activateAccount(Message $message, $code)
    {
        if ($user = User::where('activation_token', '=', $code)->first()) {
            $user->active = true;
            $user->activation_token = null;
            $user->save();
            if ($user->save()) {
                \Auth::login($user);
                $message->flash(\Lang::get('auth.successActivated'), 'success');
            }
            return view('/home');
        }

        if (\Auth::user() && \Auth::user()->active == true) {
            \Auth::user()->activation_token = null;
            \Auth::user()->save();
            $message->flash('Your account is already active. let\'s grow something!', 'warning');
            return view('home');
        }

        $message->flash('Sorry, friend, that is not a valid link. '.\Lang::get('auth.pleaseActivate'), 'warning');
        return redirect('auth.guest_activate');
    }

    /**
     * @param User $user
     */
    public function sendEmail(User $user)
    {
        $data = array(
            'email' => $user->email,
            'code' => $user->activation_token,
        );
        return Mail::to($data[ 'email' ])->send(new ActivateUser($user->activation_token));
    }

    /**
     * @return $this
     */
    public function resendEmail(Message $message)
    {
        $user = \Auth::user();
        if ($user->resent >= 5) {
            $flashMessage = $message->flash(\Lang::get('auth.tooManyEmails'), 'danger');
            return view('auth.activate_account')->with('email', $user->email, $flashMessage);
        } else {
            $user->resent = $user->resent + 1;
            $user->save();
            $this->sendEmail($user);
            return view('auth.activate_account')
                ->with('email', $user->email);
        }
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function please() {
        return view('auth.guest_activate');
    }
}