<?php
namespace App\Notifications;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Lang;
use Illuminate\Auth\Notifications\VerifyEmail as VerifyEmailBase;

class VerifyEmail extends VerifyEmailBase
{
//    use Queueable;

    // change as you want
    public function toMail($notifiable)
    {
        if (static::$toMailCallback) {
            return call_user_func(static::$toMailCallback, $notifiable);
        }
        return (new MailMessage)
            ->subject(Lang::get('Correo de Verificación'))
            ->line(Lang::get('Por favor da click en el botón de abajo para verificar tu correo y poder acceder a Turno.'))
            ->action(
                Lang::get('Verifica tu cuenta.'),
                $this->verificationUrl($notifiable)
            )
            ->line(Lang::get('Si tu cueta fue creada por un establecimiento. Te invitamos a descargar la aplicación Turno'))
            // ->markdown('vendor.notifications.email', [
            //     'message'=>$this
            //     ]       
            // )
            ;
    }
}