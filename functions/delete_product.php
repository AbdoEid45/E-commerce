
<?php
require 'connection.php';

// Check if 'id' is set in $_GET
if (isset($_GET['id'])) {
    $id = $_GET['id'];

// Use prepared statement to prevent SQL injection
    $delete_product = $conn->prepare("DELETE FROM products WHERE id = ?");
    $delete_product->bind_param("i", $id);

    if ($delete_product->execute()) {
// Redirect to the desired page after successful deletion
        header("location:../products.php");
        exit(); // Always exit after a header redirect
    } else {
// Error handling
        echo "Error deleting record: " . $conn->error;
    }

    $delete_product->close();
    $conn->close();
} else {
    echo "No 'id' parameter provided in the URL.";
}
