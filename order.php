<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <title>Overview</title>
</head>

<body>
    <div class="container mt-5">
        <div class="confirm-page ">
            <h1 class="text-primary">Overview : Order</h1>
            <h3 class="text-info">Customer information</h3>
            <div class="customer-info">
                <?php session_start();  ?>
                <p class="text-secondary">First Name: <?= $_SESSION["fname"] ?> <br>
                    Last Name: <?= $_SESSION["lname"] ?> <br>
                    Email: <?= $_SESSION["email"] ?> <br>
                    Address: <?= $_SESSION["address"] ?> <br>
                    City: <?= $_SESSION["city"] ?> <br>
                    Zipcode: <?= $_SESSION["zipcode"] ?>
                </p>
            </div>
            <hr class="p-auto">
            <h3 class="text-info">Order details</h3>
            <div class="order-info class="text-secondary"">
                Sushi: <?= $_SESSION["order"] ?> <br>
                Amount: <?= $_SESSION["quantity"] ?>
                </p>
                <form action="" method="POST">
                   <a href="customer.php"> <button type="submit" class="btn btn-primary">OK</button></a> 
                </form>

            </div>
        </div>
    </div>
    

</body>

<script src="js/bootstrap.min.js"></script>
</html>
<?php
if (isset($_POST['submit'])) {
    session_destroy();
    
}

?>