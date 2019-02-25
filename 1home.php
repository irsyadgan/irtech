<?php
include "1database.php";

// Check user login or not
if(!isset($_SESSION['uname'])){
    header('Location: login.html');
}

// logout
if(isset($_POST['but_logout'])){
    session_destroy();
    header('Location: login.html');
}
?>
<!doctype html>
<html>
    <head>
    <title>Login page with jQuery and AJAX</title>
    </head>
    <body>
        <h1>Homepage</h1>
        <form method='post' action="">
            <input type="submit" value="Logout" name="but_logout">
        </form>
    </body>
</html>