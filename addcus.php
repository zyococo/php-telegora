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
                <h1 class="col-lg-10 text-center">Telegora Mall-Add Customer</h1>
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
                    <h2>Add Customer</h2>
                    <form action="addcus_scr.php" method="post">
                        <div class="form-group">
                            <label for="id">ID:</label>
                            <input type="number" class="form-control" id="id" name="id">
                        </div>
                        <div class="form-group">
                            <label for="first_name">first name:</label>
                            <input type="text" class="form-control" id="first_name" name="first_name">
                        </div>
                        <div class="form-group">
                            <label for="last_name">last name:</label>
                            <input type="text" class="form-control" id="last_name" name="last_name">
                        </div>
                        <div class="form-group">
                            <label for="phone">phone number:</label>
                            <input type="tel" class="form-control" id="phone" name="phone">
                        </div>
                        <div class="form-group">
                            <label for="address">Address:</label>
                            <input type="text" class="form-control" id="address" name="address">
                        </div>
                        <div class="form-group">
                            <label for="suburb">suburb:</label>
                            <input type="text" class="form-control" id="suburb" name="suburb">
                        </div>
                        <div class="form-group">
                            <label for="post_code">post code:</label>
                            <input type="number" class="form-control" id="post_code" name="post_code">
                        </div>


                        <button type="add" class="btn btn-default">Add</button>
                        <button type="update" class="btn btn-default">Update</button>
                    </form>
                </article>
                <article class="col-lg-12">
                    <h2>Customer List</h2>
                    <?php include 'cuslist_scr.php'; ?>
                </article>
            </main>

        </section>
        </div>
    </div>
</body>

</html>