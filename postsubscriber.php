<?php
include_once 'connect.php';
// *******

$name= $_POST['name'];
$email= $_POST['email'];

$sql= " INSERT INTO subscribers (FullName ,Email) 
VALUES ('$name' ,'$email') ;";
$res=mysqli_query($conn ,$sql);

?>


