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
                <h1 class="col-lg-10 text-center">Telegora Mall-Customer</h1>
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
                        <li><a href="addcus.php">Add Cutomer</a></li>
                        <li><a href="updatecus.php">Update Cutomer</a>
                    </ul>
                </nav>
            </div>
            <main class="col-lg-9">
                <article class="col-lg-12">

                    <?php
        require("connect.php");
        //retrieve the id from the base request
        $invoice_no = $_REQUEST['invoice_no'];
        echo '<h2>Invoice Details</h2>';

        $sql = "SELECT date, cust_id, emp_id, customer.first_name as cfn, customer.last_name as cln ,employee.first_name as efn
        FROM invoice 
        Inner Join Customer ON invoice.cust_id = customer.id
        Inner Join Employee ON invoice.emp_id = employee.id
        WHERE invoice_no =" . $invoice_no;

        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            //open table
            echo '<table class="table table-striped" id="outTable">';
            echo "<tr><th>Invoice Number</th><th>Date</th><th>Customer Name</th><th>Employee Name</th></tr>";
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<tr>
                <td>".$invoice_no."</td>
                <td>" . $row["date"]. "</td>
                <td>" . $row["cfn"]." ". $row["cln"] ."</td>
                <td>" . $row["efn"]. "</td>
                
                
                </tr>";
            }
        } else {
            echo "0 results";
        }
        echo "</table>";


        echo '<h2>Invoice Lines</h2>';
        $sql = "SELECT invoice_no, qty, prod_id, product.name as pn, product.cost_price as pcost
        FROM invoice_line
        Inner Join product ON invoice_line.prod_id = product.id
        WHERE invoice_no =" . $invoice_no;

        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            //open table
            echo '<table class="table table-striped" id="outTable">';
            echo "<tr><th>Product ID</th><th>Product Name</th><th>Price</th><th>Quantity</th></tr>";
            // output data of each row
            $total = 0;
            while($row = $result->fetch_assoc()) {
                $subtotal = $row["qty"] * $row["pcost"];
                $total += $subtotal;
                echo "<tr>
                <td>" . $row["prod_id"]." </td> 
                <td>" . $row["pn"]." </td>         
                <td>" . $row["pcost"]. "</td>
                <td>" . $row["qty"]. "</td>
                </tr>";
            }
        } else {
            echo "0 results";
        }
        echo "</table>";

        echo '<table class="table table-striped" id="outTable">';
            echo "<tr><th>Total Price</th></tr>";
        

        echo "<tr>
                <td>".$total." </td> 

        </tr>";

        echo "</table>";

        $conn->close();
        ?>
            </main>
        </section>
    </div>
</body>


</html>