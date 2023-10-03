<?php

session_start();

if(!isset($_SESSION['username'])){
    header('location:login.php');
}
?>

<html>
    <head>
        <title>home</title>
    </head>
    <body>



<a href="logout.php">Logout</a>
       <h1>  Welcome<?php echo $_SESSION ['username'];?> </h1> 
    </body>
</html>