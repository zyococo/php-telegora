<?php

//create connection
require("connect.php");
$id = $_POST["id"];
$first_name = $_POST["first_name"];
$last_name = $_POST["last_name"];
$phone = $_POST["phone"];
$address = $_POST["address"];
$suburb = $_POST["suburb"];
$post_code = $_POST["post_code"];

$sql = "UPDATE `customer` SET first_name = '" . $first_name . "', last_name = '" . $last_name . "', phone = '" . $phone . "', address = '" . $address . "' , suburb = '" . $suburb . "', post_code = '" . $post_code . "'
    WHERE id = '" . $id . "'";
if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
header("Location: customer.php");
?>
