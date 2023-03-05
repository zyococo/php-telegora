<?php

require("connect.php");
$sql = "SELECT id, name, phone, email FROM supplier";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
	//open table
	echo '<table class="table table-striped" id="outTable">';
	echo "<tr><th>id</th><th>name</th><th>phone</th><th>email</th>
	<th>Delete</th></tr>";
	// output data of each row
	while($row = $result->fetch_assoc()) {
		// $id = trim(htmlspecialchars($row["id"])); 
		// $name = trim(htmlspecialchars($row["name"])); 
		// $phone = trim(htmlspecialchars($row["phone"])); 
		// $email = trim(htmlspecialchars($row["email"])); 

		// echo "<tr>
		// <td onclick=popfields(" . $id . ")>" . $id. "</td>
		// <td>" . $name. "</td><td>" . $phone. "</td>
		// <td>" . $email. "</td>
		

		// <td><a href='delcus_scr.php?id=" . $id . "'>Del</a></td></tr>";

		echo "<tr>
		<td onclick=popfields(" . $row["id"] . ")>" . $row["id"]. "</td>
		<td>" . $row["name"]. "</td>
		<td>" . $row["phone"]. "</td>
		<td>" . $row["email"]. "</td>

		
		<td><a href='delsup_scr.php?id=" . $row['id']. "'>Del</a></td>
		</tr>";
	}
} else {
	echo "0 results";
}
$conn->close();
?>