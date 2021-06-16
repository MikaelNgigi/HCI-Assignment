<?php
session_start();
    include("includes/dbconn.inc.php");
    include( "includes/functions.inc.php");

    $user_data =check_login($conn);

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My website</title>
</head>
<body>

    <a href="includes/logout.inc.php">Logout</a>
    <h1>This is the index page</h1>
    <p>Hello, <?php echo $user_data['email']; ?> </p>

</body>
</html>