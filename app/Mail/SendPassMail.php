<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendPassMail extends Mailable
{
    use Queueable, SerializesModels;
    public $mailData;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($mailData)
    {
        $this->mailData = $mailData;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // Array for Blade
    $input = array(
        'estabname'     => $this->mailData['estabname'],
        'name'     => $this->mailData['name'],
        'phone'     => $this->mailData['phone'],
        'email'     => $this->mailData['email'],
        'pass'     => $this->mailData['pass'],
    );

    return $this->markdown('email.sendpass')
    ->subject('Bienvenida')
    ->with([
        'data' => $input,
        ]);
        // return $this->markdown('email.sendpass');
    }
}
