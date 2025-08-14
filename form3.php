<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "try";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data safely
$radio = isset($_POST['radio']) ? $_POST['radio'] : '';
$sel = isset($_POST['sel']) ? $_POST['sel'] : '';
$check1 = isset($_POST['check1']) ? $_POST['check1'] : '';
$check2 = isset($_POST['check2']) ? $_POST['check2'] : '';

// Prepare SQL query
$sql = "INSERT INTO info4 (radio, sel, check1, check2) 
        VALUES ('$radio', '$sel', '$check1', '$check2')";

// Execute query
if ($conn->query($sql) === TRUE) {
    echo "Data inserted";
} else {
    echo "Invalid: " . $conn->error;
}

$conn->close();
?>
