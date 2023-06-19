<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
    <link rel="stylesheet" href="../public/signup.css">
</head>
<body>
    <div class="logo">
        <img src="img/logo_extended.svg" alt="logo">
    </div>
    <h1>Create new account</h1>
        <div class="signInContainer">
            <form action="{{route('validar-registro')}}" method="post">
                @csrf
                <label for="name">name</label>
                <input type="text" id="name" name="name">

                <label for="fname">surname</label>
                <input type="text" id="surname" name="surname">

                <label for="username">username</label>
                <input type="text" id="username" name="username">

                <label for="email">email</label>
                <input type="text" id="email" name="email">

                <label for="email">email confirmation</label>
                <input type="text" id="emailConf" name="emailConf">

                <label for="password">password</label>
                <input type="password" id="password" name="password">

                <label for="password">password confirmation</label>
                <input type="password" id="passwordConf" name="passwordConf">

                <input class="btnSubmit" type="submit" value="Sign up">
            </form>
        </div>
</body>
</html>
