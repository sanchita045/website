<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "orders_db";

// Connect to database
$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Safely retrieve POST data
$name = isset($_POST['name']) ? $_POST['name'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$item = isset($_POST['item']) ? $_POST['item'] : '';
$quantity = isset($_POST['quantity']) ? $_POST['quantity'] : 0;

// Optional: Validate inputs
if ($name && $email && $item && $quantity > 0) {
  $sql = "INSERT INTO orders (name, email, item, quantity) VALUES ('$name', '$email', '$item', $quantity)";
  if ($conn->query($sql) === TRUE) {
    echo "<script>alert('order is palced!');</script>";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
} else {
  echo "<script>alert('try again');</script>";
}

$conn->close();
?>
