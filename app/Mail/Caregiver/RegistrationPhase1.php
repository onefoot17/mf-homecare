<?php

namespace App\Mail\Caregiver;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

use App\Models\User;

class RegistrationPhase1 extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(User $user, \Illuminate\Http\Client\Response $certn_response)
    {
        $this->user = $user;
        $this->certn_reponse = $certn_response;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('MF Homecare - Registration')
        ->view('mail.caregivers.registration_phase_1')
        ->with([
            'user' => $this->user,
            'certn_response' => $this->certn_reponse->json()
        ]);
    }
}
