<?php
if(isset($_POST['add'])){
    require 'connection.php';
    $name_category=$_POST['name'];
    $status_category=($_POST['status']);

    $insert_category="INSERT INTO categories (c_name , c_status ) VALUES ('$name_category','$status_category')";

    $conn->query($insert_category);
    header("location:../categories.php");





}

?>