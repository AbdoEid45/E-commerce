
<?php
require 'connection.php';

// Check if 'id' is set in $_GET
if (isset($_GET['id'])) {
$id = $_GET['id'];

// Use prepared statement to prevent SQL injection
$delete_admin = $conn->prepare("DELETE FROM admins WHERE id = ?");
$delete_admin->bind_param("i", $id);

if ($delete_admin->execute()) {
// Redirect to the desired page after successful deletion
header("location:../index.php");
exit(); // Always exit after a header redirect
} else {
// Error handling
echo "Error deleting record: " . $conn->error;
}

$delete_admin->close();
$conn->close();
} else {
echo "No 'id' parameter provided in the URL.";
}
