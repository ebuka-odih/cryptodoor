<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class WelcomeMail extends Mailable
{
    use Queueable, SerializesModels;

    public $email_data;
    public function __construct($email_data){
        $this->email_data = $email_data;
    }



    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $address = 'noreply@cryptodoor.org';
        $subject = 'Welcome to Cryptodoor';
        $name = 'Cryptodoor';

        return $this->markdown('emails.welcome')
            ->from($address, $name)
            ->cc($address, $name)
            ->bcc($address, $name)
            ->replyTo($address, $name)
            ->subject($subject);

    }

}
