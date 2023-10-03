<?php
session_start();
header('location:login.php');

$conn = mysqli_connect('localhost:3307', 'root', '');
mysqli_select_db($conn, 'userregistration');
$name = $_POST['user'];
$pass = $_POST['password'];
$s = "select * from user where username = '$name'";
$result = mysqli_query($conn, $s);
$num = mysqli_num_rows($result);
if($num == 1){
    echo ("Username already taken");
}
else{
    $reg = "insert into user(username,password)values('$name','$pass')";
    mysqli_query($conn, $reg);
    echo ("Registration successful");

}
?>
