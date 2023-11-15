<?php
if(isset($_POST['add'])){
    require 'connection.php';
    $username_admin=$_POST['username'];
$password_admin=md5($_POST['password']);
$email_admin=$_POST['email'];
$role_admin=$_POST['role'];
$image_admin=$_FILES['image']['name'];
$image_temp=$_FILES['image']['tmp_name'];
move_uploaded_file($image_temp,"../images/admins/$image_admin");
    $date=date("Y-m-d");

$inser_admin="INSERT INTO admins (username , password , email , image , role ,a_date ) VALUES ('$username_admin','$password_admin', '$email_admin' , '$image_admin', '$role_admin' , '$date')";

$conn->query($inser_admin);
header("location:../index.php");





}

?>