<?php
session_start();
    include("includes/dbconn.inc.php");
    include( "includes/functions.inc.php");

    $user_data =check_login($conn);

?>

<?php 
include_once 'navigation/header.php'
?>
    
    <div class="userContent">
        <h1>This is the index page</h1>
        <p>Hello, <?php echo $user_data['userName']; ?> </p>
        <a href="includes/logout.inc.php">Logout</a>
    </div>

<?php 
include_once 'navigation/footer.php'
?>