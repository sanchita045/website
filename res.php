<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "orders_db";

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$name = isset($_POST['name']) ? $_POST['name'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$date = isset($_POST['date']) ? $_POST['date'] : '';
$no_t = isset($_POST['no_t']) ? $_POST['no_t'] : 0;

if ($name && $email && $date && $no_t > 0) {
  $sql = "INSERT INTO res (name, email, date, no_t) VALUES ('$name', '$email', '$date', '$no_t')";

  if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Reservation successful!');</script>";
  } else {
    echo "<script>alert('Error saving reservation');</script>";
  }
}

$conn->close();
?>
