<?php
if(isset($_POST['edit'])){
    require 'connection.php';
    $id=$_POST['id'];
    $name= $_POST['name'];

    $status=$_POST['status'];

    $update_category="UPDATE  categories SET c_name = '$name' , c_status='$status' WHERE id =$id";

    $conn->query($update_category);
    header("location:../categories.php");





}

?>