<?php
if (isset($_POST['edit'])) {
    require 'connection.php';
$id=$_POST['id'];
    $name = $_POST['name'];
    $details = $conn->real_escape_string($_POST['details']);
    $category = $_POST['category'];
    $price = $_POST['price'];
    $discount = $_POST['discount'];
    $stock = $_POST['stock'];
    $product_image = $_FILES['image']['name'];
    $image_temp = $_FILES['image']['tmp_name'];
    move_uploaded_file($image_temp, "../images/products/$product_image");
    if (!empty($product_image)){
        $update_image= "UPDATE products SET p_image = '$product_image' WHERE id=$id ";
        $conn->query($update_image);

    }
    $update_product = "UPDATE products SET p_name='$name',p_details='$details',p_price='$price',p_discount='$discount'
                    ,p_stock='$stock',id_category='$category' WHERE id=$id";
    $conn->query($update_product);
    header("location:../products.php");
}
?>
