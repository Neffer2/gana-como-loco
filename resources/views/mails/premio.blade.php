<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h3>¡Hola {{ $user->name }}!</h3>
    <p>¡Tenemos grandes noticias para ti!  ¡Eres uno de los afortunados ganadores de nuestra promoción Gana Como Loco!</p>

    Has ganado el: {{ $premio->descripcion }}.
    <br>
    ¡Felicidades!

    Pero la diversi&oacute;n no termina aqu&iacute;, a&uacute;n puedes seguir participando en nuestra promoci&oacute;n y ganar m&aacute;s premios.
</body>
</html>
