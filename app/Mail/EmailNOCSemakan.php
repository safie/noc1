<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EmailNOCSemakan extends Mailable
{
    use Queueable, SerializesModels;

    // protected $to;
    protected $semakan;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($semakan)
    {
        // $this->toEmail       =   $to;
        $this->semakan  =   $semakan;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        return $this->subject('i-NOC Notifikasi : Semakan')
                    ->view('email.email_noc')
                    ->with('semakan',$this->semakan);
    }
}
