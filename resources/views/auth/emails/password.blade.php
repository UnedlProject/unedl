Si tu solicitaste el cambio de la contraseña da click si no ignora el mensaje <br>

Click para restablacer la contraseña: <a href="{{ $link = url('password/reset', $token).'?email='.urlencode($user->getEmailForPasswordReset()) }}"> {{ $link }} </a>
