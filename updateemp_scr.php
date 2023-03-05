<?php

//create connection
require("connect.php");
$id = $_POST["id"];
$first_name = $_POST["first_name"];
$last_name = $_POST["last_name"];
$position = $_POST["position"];
$dob = $_POST["dob"];
$tfn = $_POST["tfn"];
$start_date = $_POST["start_date"];

$sql = "UPDATE `employee` SET first_name = '" . $first_name . "', last_name = '" . $last_name . "', position = '" . $position . "', dob = '" . $dob . "' , tfn = '" . $tfn . "', start_date = '" . $start_date . "'
    WHERE id = '" . $id . "'";
if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
header("Location: employee.php");
?>
