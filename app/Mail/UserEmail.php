<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class UserEmail extends Mailable
{
    use Queueable, SerializesModels;
    // protected $userData;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user)
    {
        // 
    $this->userData=$user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('email.userEmail',['name'=>$this->userData->name]);
    }
}
