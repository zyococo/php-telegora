<!DOCTYPE html>
<html lang="en">

<head>
    <title>First Page</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="homePage.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript  -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>

<body>
    <div class="container">
        <header class="row">
            <div class="col-lg-12 bg-success">
                <img src="shop.png" alt="our company logo" class="col-lg-2">
                <h1 class="col-lg-10 text-center">Telegora Mall-Employee</h1>
            </div>
        </header>

        <div class="row">
            <header class="col-lg-12 bg-info">

                <div class="col-lg-2  text-center"><a href="index.php">Home</a></div>
                <div class="col-lg-2  text-center"> <a href="supplier.php">Supplier</a> </div>
                <div class="col-lg-2  text-center"><a href="employee.php">Employee</a> </div>
                <div class="col-lg-2  text-center"><a href="customer.php">Customer</a> </div>
                <div class="col-lg-2  text-center"><a href="product.php">Product</a> </div>
                <div class="col-lg-2  text-center"><a href="invoice.php">Invoice</a> </div>
            </header>


        </div>




        <section class="row">
            <div class="col-lg-3">
                <nav class="sidebar-nav">
                    <ul class="nav nav-pills nav-stacked">
                        <li><a href="addemp.php">Add Employee</a></li>
                        <li><a href="updateemp.php">Update Employee</a>
                    </ul>
                </nav>
            </div>
            <main class="col-lg-9">
                <article class="col-lg-12">
                    <h2>Employee Invoice Details</h2>

<?php
            require("connect.php");

            //retrieve the id from the base request
            $id = $_REQUEST['id'];

            $sql = "SELECT invoice_no, date, cust_id, emp_id FROM Invoice WHERE cust_id =" . $id;
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                //open table
                echo '<table class="table table-striped" id="outTable">';
                echo "<tr><th>Invoice Number</th><th>Date</th><th>Customer ID</th><th>Employee ID</th><th>Link</th></tr>";
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    echo "<tr>
                    <td>" . $row["invoice_no"]. "</td>
                    <td>" . $row["date"]. "</td>
                    <td>" . $row["cust_id"]. "</td>
                    <td>" . $row["emp_id"]. "</td>
                    <td><a href='Invoice2.php?invoice_no=" . $row['invoice_no'] . "'>invoice</a></td>
                    </tr>";
                }
            } else {
                echo "0 results";
            }
            $conn->close();
            ?>
            </article>           
        </main>
    </section>
    </div>
</body>


</html>