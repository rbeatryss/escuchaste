<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página privada</title>
    <style></style>
</head>
<body>
    <span>Página privada de @auth {{Auth::user()->name}} @endauth</span>
    <button><a href="{{route('logout')}}">Salir</a></button>
</body>
</html>