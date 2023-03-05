<?php

//create connection
require("connect.php");
$id = $_POST["id"];
$cat_id = $_POST["cat_id"];
$supp_id = $_POST["supp_id"];
$name = $_POST["name"];
$description = $_POST["description"];
$cost_price = $_POST["cost_price"];
$size = $_POST["size"];

$sql = "UPDATE `product` SET cat_id = '" . $cat_id . "', supp_id = '" . $supp_id . "', name = '" . $name . "', description = '" . $description . "', cost_price = '" . $cost_price . "', size = '" . $size . "'
    WHERE id = '" . $id . "'";
if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
header("Location: product.php");
?>
