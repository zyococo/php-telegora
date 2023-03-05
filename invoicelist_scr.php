<?php

require("connect.php");


$sql = "SELECT invoice_no, date, cust_id, emp_id FROM Invoice ORDER BY cust_id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo '<h2>Invoices by customer</h2>';
    //open table
    echo '<table class="table table-striped" id="outTable">';
    echo "<tr><th>Customer ID</th><th>Invoice Number</th><th>Employee ID</th><th>Date</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr>
        <td>" . $row["cust_id"]. "</td>
        <td>" . $row["invoice_no"]. "</td>
        <td>" . $row["emp_id"]. "</td>
        <td>" . $row["date"]. "</td>
        

        </tr>";
    }
} else {
    echo "0 results";
}
echo "</table>";

$sql = "SELECT invoice_no, date, cust_id, emp_id FROM Invoice ORDER BY emp_id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo '<h2>Invoices by employee</h2>';
    //open table
    echo '<table class="table table-striped" id="outTable">';
    echo "<tr><th>Employee ID</th><th>Invoice Number</th><th>Customer ID</th><th>Date</th></tr>";
        // output data of each row
        while($row = $result->fetch_assoc()) {
                echo "<tr>
                <td>" . $row["emp_id"]. "</td>
                <td>" . $row["invoice_no"]. "</td>
                <td>" . $row["cust_id"]. "</td>
                <td>" . $row["date"]. "</td>
                </tr>";
                }
            } else {
                echo "0 results";
            }
echo "</table>";

$conn->close();
?>