@component('mail::message')
<img src="{{ asset('/storage/logonombre.png' ) }}" > 

Hola, Bienvenido a Turno

El establecimiento <b>{{$data['estabname']}}</b>  creó tu cuenta con los siguientes datos:

Nombre: <b>{{$data['name']}} </b> <br>
Email: <b>{{$data['email']}} </b> <br>
Teléfono: <b>{{$data['phone']}} </b> <br>
Contraseña (generada por sistema): <b> {{$data['pass']}} </b>


<!-- Te invitamos a descargar la aplicación y cambiar tu contraseña.  -->

<!-- @component('mail::button', ['url' => ''])
Descargar 
@endcomponent-->

Bienvenido a la innovación,<br>
{{ config('app.name') }}
@endcomponent
 