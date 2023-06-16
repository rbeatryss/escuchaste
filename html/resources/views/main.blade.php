<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        header{
    display: flex;
    justify-content: space-between;
}
    </style>
</head>
<body>
    <header>
        <section>
            <span>Escuchaste?</span>
        </section>
        <section>
            <a href="{{route('login')}}">Login</a>
            <a href="{{route('registro')}}">Register</a>
        </section>
    </header>
</body>
</html>