<?php
require("connect.php");

$first_name = $_POST["first_name"];
$last_name = $_POST["last_name"];
$phone = $_POST["phone"];
$address = $_POST["address"];
$suburb = $_POST["suburb"];
$post_code = $_POST["post_code"];

$sql = "INSERT INTO `customer` (first_name,last_name,phone,address,suburb,post_code) VALUES 
('" . $first_name . "','" . $last_name . "','" . $phone . "','" . $address . "','" . $suburb . "','" . $post_code . "')";


if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
header("Location: customer.php");

?>
