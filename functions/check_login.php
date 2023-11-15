<?php
if(isset($_POST['send'])){
    session_start();
    require 'connection.php';
    $username=$_POST['name'];
    $password=md5($_POST['password']);


    $select_admin="SELECT * from ADMINS WHERE username='$username'AND password= '$password' ";
    $result_admin=$conn->query($select_admin);
    $row_admin=$result_admin->fetch_assoc();
    $count=$result_admin->num_rows;
    $id=$row_admin['id'];
    $image=$row_admin['image'];

    if($count > 0){
        $_SESSION['id']=$id;
        $_SESSION['username']=$username;
        $_SESSION['image']=$image;


        header("location:../index.php ");
    }
    else{

        header("location:../login.php ");

    }


}
?>


