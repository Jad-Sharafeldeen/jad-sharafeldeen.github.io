<?php
$hostname = 'localhost'; // Change if your database server is located elsewhere
$username = 'root';
$password = '';
$database = 'kft';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the submitted data
    $data = json_decode(file_get_contents('php://input'), true);

  

    $conn = new mysqli($hostname, $username, $password, $database);
    if ($conn->connect_error) {
        die('Connection Failed: ' . $conn->connect_error);
    }

    // Prepared statement with stored procedure
    $stmt = $conn->prepare("DELETE FROM products WHERE title = ?");
    $stmt->bind_param("title", $title);
    
    // Adjust the code above to identify the row to delete based on the provided data
    
    // Execute prepared statement
    $stmt->execute();
    var_dump($stmt->error);

    // Close statement and connection
    $stmt->close();
    $conn->close();

    echo json_encode(['success' => true]);
    exit();
}
?>
