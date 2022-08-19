<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class WelcomeUser extends Mailable
{
    use Queueable, SerializesModels;

    protected $mailData, $password;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($mailData, $password)
    {
        $this->mailData = $mailData;
        $this->password = $password;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('i-NOC Notifikasi: Pendaftaran Pengguna Baharu')
            ->view('email.email_welcome')
            ->with('data', $this->mailData)
            ->with('password', $this->password);
    }
}
