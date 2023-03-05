
<?php

require("connect.php");
$sql = "SELECT supp_id,name, description, cost_price, size FROM product ORDER BY supp_id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	echo '<h2>Products by supplier</h2>';
	//open table
	echo '<table class="table table-striped" id="outTable">';
	echo "<tr><th>Supplier ID</th><th>Name</th><th>Description</th><th>Cost Price</th><th>Size</th><th>Del</th></tr>";
	// output data of each row
	while($row = $result->fetch_assoc()) {
		echo "<tr>
		<td onclick=popfields(" . $row['supp_id'] . ")>" . $row["supp_id"]. "</td>
		
		<td>" . $row["name"]. "</td>
		<td>" . $row["description"]. "</td>
		<td>" . $row["cost_price"]. "</td>
		<td>" . $row["size"]. "</td>
		<td><a href='delpro_scr.php?id=" . $row['id'] . "'>Del</a></td></tr>";
	}
} else {
	echo "0 results";
}
echo "</table>";

require("connect.php");
$sql = "SELECT cat_id, name, description, cost_price, size FROM product ORDER BY cat_id";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
	echo '<h2>Products by category</h2>';
	//open table
	echo '<table class="table table-striped" id="outTable">';
	echo "<tr><th>Category ID</th><th>Name</th><th>Description</th><th>Cost Price</th><th>Size</th><th>Del</th></tr>";
	// output data of each row
	while($row = $result->fetch_assoc()) {
		echo "<tr>
		<td onclick=popfields(" . $row['cat_id'] . ")>" . $row["cat_id"]. "</td>
		
		<td>" . $row["name"]. "</td>
		<td>" . $row["description"]. "</td>
		<td>" . $row["cost_price"]. "</td>
		<td>" . $row["size"]. "</td>
		<td><a href='delpro_scr.php?id=" . $row['id'] . "'>Del</a></td></tr>";
	}
} else {
	echo "0 results";
}
echo "</table>";

$conn->close();
?>
