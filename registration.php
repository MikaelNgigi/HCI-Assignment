<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up page</title>
</head>
<body>
    <p >Registration</p>
    <form action="registration.php" method="post">

        <input class="input-field" type="text" name="fullname" placeholder="full Name"><br>
        <input class="input-field" type="email" name="email" placeholder="example@example.com"><br>
        <input class="input-field" type="text" name="phone" placeholder="+2547********"><br>
        <input class="input-field" type="password" name="pwd" placeholder="password"><br>
        <input class="input-field" type="password" name="pwdrepeat"placeholder="confirm password"><br>
        <button class="form-submit" type="submit" name="submit">Sign Up</button><br>
    </form>
    <a href="login.php">Already have an account?</a>
</body>
</html>