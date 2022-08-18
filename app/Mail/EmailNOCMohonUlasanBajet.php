<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EmailNOCMohonUlasanBajet extends Mailable
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

        return $this->subject('i-NOC Notifikasi : Permohonan Ulasan Bajet')
            ->view('email.emailMohonUlasanNoc')
            ->with('data', $this->dataMail);
    }
}
