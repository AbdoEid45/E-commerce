
<?php
require 'connection.php';

// Check if 'id' is set in $_GET
if (isset($_GET['id'])) {
    $id = $_GET['id'];

// Use prepared statement to prevent SQL injection
    $delete_category = $conn->prepare("DELETE FROM categories WHERE id = ?");
    $delete_category->bind_param("i", $id);

    if ($delete_category->execute()) {
// Redirect to the desired page after successful deletion
        header("location:../categories.php");
        exit(); // Always exit after a header redirect
    } else {
// Error handling
        echo "Error deleting record: " . $conn->error;
    }

    $delete_category->close();
    $conn->close();
} else {
    echo "No 'id' parameter provided in the URL.";
}
