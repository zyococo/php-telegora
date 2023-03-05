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
                <h1 class="col-lg-10 text-center">Telegora Mall-Add Product</h1>
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
                        <li><a href="addpro.php">Add Product</a></li>
                        <li><a href="updatepro.php">Update Product</a>
                    </ul>
                </nav>
            </div>
            
            <main class="col-lg-9">
            <article class="col-lg-12">
                <h2>Add Product</h2>
                <form action="addpro_scr.php" method="post">
                    <div class="form-group">
                        <label for="CategoryID">Category ID:</label>
                        <input type="text" class="form-control" id="cat_id" name="cat_id">
                    </div>
                    <div class="form-group">
                        <label for="SupplierID">Supplier ID:</label>
                        <input type="text" class="form-control" id="supp_id" name="supp_id">
                    </div>
                    <div class="form-group">
                        <label for="Name">Name:</label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>
                    <div class="form-group">
                        <label for="Description">Description:</label>
                        <input type="text" class="form-control" id="description" name="description">
                    </div>
                    <div class="form-group">
                        <label for="CostPrice">Cost Price:</label>
                        <input type="text" class="form-control" id="cost_price" name="cost_price">
                    </div>
                    <div class="form-group">
                        <label for="Size">Size:</label>
                        <input type="text" class="form-control" id="size" name="size">
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                </form>
            </article>
            <article class="col-lg-12">
                <h2>Product List</h2>
                <div class="form-group">
                    <label for="CategoryID">Category ID:</label>
                    <input type="text" class="form-control" id="cat_id" name="cat_id">
                </div>
                <div class="form-group">
                    <label for="SupplierID">Supplier ID:</label>
                    <input type="text" class="form-control" id="supp_id" name="supp_id">
                </div>
                <button type="search" class="btn btn-default">Search</button>
               
                <h2>Product List</h2>
                <?php include 'prolist_scr.php'; ?>

            </article>

        </main>
    </section>
    </div>
</body>