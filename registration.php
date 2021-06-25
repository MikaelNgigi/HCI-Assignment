<?php
session_start();
    include("includes/dbconn.inc.php");
    include( "includes/functions.inc.php");

    

    if($_SERVER['REQUEST_METHOD'] == "POST"){

        //something was posted
        $username=$_POST['fullname'];
        $email=$_POST['email'];
        $pwd=$_POST['pwd'];

        if(!empty($username) && !empty($email) && !empty($pwd)){

            //read from db
            $query= "insert into users (userName, email, pass) values ('$username', '$email', '$pwd');";

            mysqli_query($conn, $query);

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
    <title>Sign up page</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class=userform>
        <h1>Sign Up page</h1>
        <form action="registration.php" method="post">

            <input class="input-field" type="text" name="fullname" placeholder="full Name"><br>
            <input class="input-field" type="email" name="email" placeholder="example@example.com"><br>
            <input class="input-field" type="password" name="pwd" placeholder="password"><br>
            <button class="form-submit" type="submit" name="submit">Sign Up</button><br>
        </form>
        <a href="login.php">Already have an account?</a>
    </div>
</body>
</html>