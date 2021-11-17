<?php

namespace App\Mail;

use App\Models\contact;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NewUser extends Mailable
{
    use Queueable, SerializesModels;

    public $contact;
    public $simulation;

    public function __construct($contact,$simulation)
    {
            $this->contact=$contact;
            $this->simulation=$simulation;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.newUser');
    }
}
