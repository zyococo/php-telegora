
<?php

require("connect.php");
$sql = "SELECT id, first_name, last_name, position, dob, tfn, start_date FROM employee";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
	//open table
	echo '<table class="table table-striped" id="outTable">';
	echo "<tr><th>id</th><th>first_name</th><th>last_name</th><th>position</th><th>dob</th><th>tfn</th><th>start_date</th><th>Invoice</th>
	<th>Delete</th></tr>";
	// output data of each row
	while($row = $result->fetch_assoc()) {
		echo "<tr>
		<td onclick=popfields(" . $row["id"] . ")>" . $row["id"]. "</td>
		<td>" . $row["first_name"]. "</td>
		<td>" . $row["last_name"]. "</td>
		<td>" . $row["position"]. "</td>
		<td>" . $row["dob"]. "</td>
		<td>" . $row["tfn"]. "</td>
		<td>" . $row["start_date"]. "</td>

		<td><a href='empinv.php?id=" . $row['id']. "'>inv</a></td>
		<td><a href='delemp_scr.php?id=" . $row['id']. "'>Del</a></td>
		</tr>";

	}
} else {
	echo "0 results";
}
$conn->close();
?>
