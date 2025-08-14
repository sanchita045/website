<?php

$servername="Localhost";
$username="root";
$password="";
$dbname="t_name";
$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error)
{
    die("connection failed".$conn->connect_error);
}

$name = $_POST['name'];
$email = $_POST['email'];                                                                               
$message = $_POST['message'];
$sql = "insert into info1(name,email,message)values('$name','$email','$message')";

if($conn->query($sql)===true)
{
    echo "data inserted";

}
else{
    echo "invalid".$conn_error;
}
$conn->close();
?>