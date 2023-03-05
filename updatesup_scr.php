<?php

//create connection
require("connect.php");
$id = $_POST["id"];
$name = $_POST["name"];
$phone = $_POST["phone"];
$email = $_POST["email"];

$sql = "UPDATE `supplier` SET name = '" . $name . "', phone = '" . $phone . "', email = '" . $email . "'
    WHERE id = '" . $id . "'";
if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
header("Location: supplier.php");
?>
