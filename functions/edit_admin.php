<?php
if(isset($_POST['edit'])){
    require 'connection.php';
    $id=$_POST['id'];
    $username_admin= $_POST['username'];
    $password_admin=md5($_POST['password']);
    $email_admin=$_POST['email'];
    $role_admin=$_POST['role'];
    $image_admin=$_FILES['image']['name'];
    $image_temp=$_FILES['image']['tmp_name'];
    move_uploaded_file($image_temp,"../images/admins/$image_admin");


    if (!empty($image_admin)){
        $update_image= "UPDATE admins SET image = '$image_admin' WHERE id=$id ";
        $conn->query($update_image);

    }

    $update_admin="UPDATE  admins SET username = '$username_admin', password='$password_admin' , email='$email_admin' 
                 , role='$role_admin',  a_date='$date' WHERE id =$id";

    $conn->query($update_admin);
    header("location:../index.php");





}

?>