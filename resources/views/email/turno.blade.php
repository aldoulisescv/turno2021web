@component('mail::message')
<img src="http://turno.mx/storage/logonombre.png" > 

Hola, Usted tiene un turno {{$data['status_turno_name']}}

El establecimiento <b>{{$data['estabname']}}</b> {{$data['accion']}} el siguiente turno:

Nombre: <b>{{$data['name']}} </b> <br>
Email: <b>{{$data['email']}} </b> <br>
Tiempo Inicio: <b>{{$data['hora_inicio']}} </b> <br>
Tipo de Sesión: <b>{{$data['session_name']}} </b> <br>


<!-- Te invitamos a descargar la aplicación y cambiar tu contraseña.  -->

<!-- @component('mail::button', ['url' => ''])
Descargar 
@endcomponent-->

Bienvenido a la innovación,<br>
{{ config('app.name') }}
@endcomponent
 