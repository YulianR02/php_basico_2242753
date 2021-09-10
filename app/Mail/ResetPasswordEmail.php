<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ResetPasswordEmail extends Mailable
{
    use Queueable, SerializesModels;


    public $token;



    public function __construct($token)
    {
        //
        $this->token = $token;
    }


    public function build()
    {

        return $this->subject('reseteo de password ROCKSTAR')->view('emails.reset-link');
        // return $this->view('view.name');
    }
}
