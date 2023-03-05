<?php
require("connect.php");

$name = $_POST["name"];
$phone = $_POST["phone"];
$email = $_POST["email"];

$sql = "INSERT INTO `supplier` (name,phone,email) VALUES 
('" . $name . "','" . $phone . "','" . $email . "')";


if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
header("Location: supplier.php");

?>
