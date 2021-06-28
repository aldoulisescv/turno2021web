<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TurnoMail extends Mailable
{
    use Queueable, SerializesModels;

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
        $input = array(
            'estabname'     => $this->mailData['estabname'],
            'name'     => $this->mailData['name'],
            'email'     => $this->mailData['email'],
            'asunto'     => $this->mailData['asunto'],
            'status_turno_name'     => $this->mailData['status_turno_name'],
            'accion'     => $this->mailData['accion'],
            'hora_inicio'     => $this->mailData['hora_inicio'],
            'session_name'     => $this->mailData['session_name'],
        );
    return $this->markdown('email.turno')
         ->subject($input['asunto'])
        ->with([
            'data' => $input,
        ]);
    
    }
}
