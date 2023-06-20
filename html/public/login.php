<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="logo">
        <img src="img/logo_extended.svg" alt="logo">
    </div>
    <h1>Log in</h1>
        <div class="signInContainer">
            <form name="formulario" action="#" onsubmit="return validateLogin()" method="post">
                <label for="email">email</label>
                <input type="text" id="email" name="email">

                <label for="password">password</label>
                <input type="password" id="password" name="password">

                <input class="btnSubmit" type="submit" value="Submit">
            </form>
            <div class="dividerContainer">
                <div class="dividerLine"></div>
                <div class="orText">or</div>
                <div class="dividerLine"></div>
            </div>
            <a href="signup.php" class="btnSignUp">Sign up</a>
        </div>
        <script src="validateLogin.js"></script>
</body>
</html>
