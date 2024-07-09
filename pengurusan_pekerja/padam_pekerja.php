<?php
include 'config.php';

// Check if the 'id' parameter is set in the URL
if (isset($_GET['id'])) {
    // Get the 'id' parameter from the URL
    $id = $_GET['id'];

    // Prepare the SQL delete statement
    $sql = "DELETE FROM pekerja WHERE id = ?";

    // Initialize the statement
    $stmt = $conn->prepare($sql);

    // Bind the 'id' parameter to the statement
    $stmt->bind_param("i", $id);

    // Execute the statement
    if ($stmt->execute()) {
        // If the record is deleted successfully, redirect to the main page
        header("Location: index.php");
    } else {
        // If there is an error, display an error message
        echo "Error deleting record: " . $conn->error;
    }

    // Close the statement
    $stmt->close();
} else {
    // If the 'id' parameter is not set, redirect to the main page
    header("Location: index.php");
}

// Close the database connection
$conn->close();
?>
