<?php

require("connect.php");
$sql = "SELECT id, first_name, last_name, phone, address, suburb, post_code FROM customer";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
	//open table
	echo '<table class="table table-striped" id="outTable">';
	echo "<tr><th>id</th><th>first_name</th><th>last_name</th><th>phone</th><th>address</th><th>suburb</th><th>post_code</th><th>Invoice</th>
	<th>Delete</th></tr>";
	// output data of each row
	while($row = $result->fetch_assoc()) {
		echo "<tr>
		<td onclick=popfields(" . $row["id"] . ")>" . $row["id"]. "</td>
		<td>" . $row["first_name"]. "</td>
		<td>" . $row["last_name"]. "</td>
		<td>" . $row["phone"]. "</td>
		<td>" . $row["address"]. "</td>
		<td>" . $row["suburb"]. "</td>
		<td>" . $row["post_code"]. "</td>

		<td><a href='cusinv.php?id=" . $row['id']. "'>inv</a></td>
		<td><a href='delcus_scr.php?id=" . $row['id']. "'>Del</a></td>
		</tr>";
	}
} else {
	echo "0 results";
}
$conn->close();
?>