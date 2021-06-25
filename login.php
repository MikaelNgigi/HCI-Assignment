<?php
session_start();
    include("includes/dbconn.inc.php");
    include( "includes/functions.inc.php");

    if($_SERVER['REQUEST_METHOD'] == "POST"){

        //something was posted
        $email=$_POST['email'];
        $pwd=$_POST['pwd'];

        if(!empty($email) && !empty($pwd)){

            //read from db
            $query= "select * from users where email ='$email' limit 1;";

            $result =mysqli_query($conn, $query);

            if($result){

                if($result && mysqli_num_rows($result) > 0){

                    $user_data = mysqli_fetch_assoc($result);
                    if($user_data['pass']===$pwd){

                        $_SESSION['user_email'] =$user_data['email'];
                        header("Location: indexlog.php");
                        die;
                    }
                }
            }
            
        }
    }

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class=userform>
    <h1>Sign In Page</h1>
    <form  action="login.php" method='post'>

        <input class="input-field" type="email" name="email" placeholder="example@example.com"><br>
        <input class="input-field" type="password" name="pwd" placeholder="password"><br>
        <button class="submit btn" type="submit" name="login" value="login">login</button>
        
    </form>
    <p class="index">Don't have an account? <br> </p>
    <a class="link" href="registration.php"  >Register now</a>
    </div>
</body>
</html>