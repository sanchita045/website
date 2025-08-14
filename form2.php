<?php

$servername = "localhost"; // lowercase 'localhost'
$username = "root";
$password = "";
$dbname = "new_t";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$date = $_POST['date'];
$file = $_POST['file'];
$no = $_POST['no'];

// Insert query
$sql = "INSERT INTO info2 (date, file, no) VALUES ('$date', '$file', '$no')";

// Execute query
if ($conn->query($sql) === TRUE) {
    echo "Data inserted";
} else {
    echo "Invalid: " . $conn->error; // fixed variable name
}

$conn->close();
?>
