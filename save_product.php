
<?php
$hostname = 'localhost'; // Change if your database server is located elsewhere
$username = 'root';
$password = '';
$database = 'kft'; 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the submitted data
   

// Access the values
/* $name = $data['name'];
$age = $data['age'];
$email = $data['email']; */

$data = json_decode(file_get_contents('php://input'), true);
    $title = $data['title'];
    $description =$data['description'];
    $price = $data['price'];
    $imageArray = $data['imageArray'];


   /*  echo json_encode(['success' => true]); */
}

$conn = new mysqli($hostname, $username, $password, $database);
  if ($conn->connect_error) {
    die('Connection Failed : ' . $conn->connect_error);
  } else {
    // Prepared statement with stored procedure
    $stmt = $conn->prepare("insert into products(title, price, description, imageArray) values(?, ?, ?, ?)");
$imageArrayencoded=json_encode($imageArray);
    // Bind parameters with types
    $stmt->bind_param("siss", $title, $price, $description, $imageArrayencoded);
    // Execute prepared statement
    $stmt->execute();
    var_dump($stmt->error);

    // Close statement and connection
    $stmt->close();
    $conn->close();

    echo "<script>window.location.href='admin.php?success';</script>";
    exit();
    
  }
?>