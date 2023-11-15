<?php
if (isset($_POST['add'])) {
    require 'connection.php';

    $name = $_POST['name'];
    $details = $conn->real_escape_string( $_POST['details']);
    $category = isset($_POST['category']) ? $_POST['category'] : null; // Check if set
    $price = $_POST['price'];
    $discount = $_POST['discount'];
    $stock = $_POST['stock'];
    $product_image = $_FILES['image']['name'];
    $image_temp = $_FILES['image']['tmp_name'];
    move_uploaded_file($image_temp, "../images/products/$product_image");
    $date = date("Y-m-d");

    // Check if 'id_category' is set before executing the query
    if ($category !== null) {
        // Use prepared statement to prevent SQL injection
        $insert_product = $conn->prepare("INSERT INTO products (p_name, p_details, p_image, p_price, p_discount, p_stock, p_date, id_category)
                                          VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
        $insert_product->bind_param("sssdsssi", $name, $details, $product_image, $price, $discount, $stock, $date, $category);

        if ($insert_product->execute()) {
            // Redirect to the products page after successful insertion
            header("location:../products.php");
            exit(); // Always exit after a header redirect
        } else {
            // Handle the case where the execution fails
            echo "Error inserting product: " . $conn->error;
        }

        $insert_product->close();
    } else {
        echo "Error: 'id_category' is not set.";
    }

    $conn->close();
}
?>
