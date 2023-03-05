<?php
require("connect.php");

$cat_id = $_POST["cat_id"];
$supp_id = $_POST["supp_id"];
$name = $_POST["name"];
$description = $_POST["description"];
$cost_price = $_POST["cost_price"];
$size = $_POST["size"];

$sql = "INSERT INTO `product` (cat_id,supp_id,name,description,cost_price,size) VALUES 
('" . $cat_id . "','" . $supp_id . "','" . $name . "','" . $description . "','" . $cost_price . "','" . $size . "')";


if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
header("Location: product.php");

?>
