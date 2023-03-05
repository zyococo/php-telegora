<?php
require("connect.php");

$first_name = $_POST["first_name"];
$last_name = $_POST["last_name"];
$position = $_POST["position"];
$dob = $_POST["dob"];
$tfn = $_POST["tfn"];
$start_date = $_POST["start_date"];

$sql = "INSERT INTO `employee` (first_name,last_name,position,dob,tfn,start_date) VALUES 
('" . $first_name . "','" . $last_name . "','" . $position . "','" . $dob . "','" . $tfn . "','" . $start_date . "')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
header("Location: employee.php");

?>
