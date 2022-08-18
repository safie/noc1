<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EmailNOCHantarUlasanBajet extends Mailable
{
    use Queueable, SerializesModels;

    // protected $to;
    protected $dataMail;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($dataMail)
    {
        // $this->toEmail       =   $to;
        $this->dataMail  =  $dataMail;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        return $this->subject('i-NOC Notifikasi : Semakan Ulasan Bajet')
            ->view('email.emailHantarUlasanNoc')
            ->with('data', $this->dataMail);
    }
}
