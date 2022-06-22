<?php
include_once './Modules/Customer.php';

session_start();
$infoErrors = [
    'fnameError' => '',
    'lnameError' => '',
    'emailError' => '',
    'addressError' => '',
    'cityError' => '',
    'zipcodeError' => '',
];
if (isset($_POST['submit'])) {
    $fname = strip_tags($_POST['fname']);
    if (empty($fname)) {
        $infoErrors['fnameError'] = 'First Name is Important';
    }
    $lname = strip_tags($_POST['lname']);
    if (empty($lname)) {
        $infoErrors['lnameError'] = 'Last Name is Important';
    }
    $email = strip_tags($_POST['email']);
    if (empty($email)) {
        $infoErrors['emailError'] = 'Email is Important';
    }    
    $address = strip_tags($_POST['address']);
    if (empty($address)) {
        $infoErrors['addressError'] = 'Address is Important';
    }
    $city = strip_tags($_POST['city']);
    if (empty($city)) {
        $infoErrors['cityError'] = 'City is Important';
    }
    $zipcode = strip_tags($_POST['zipcode']);
    if (empty($zipcode)) {
        $infoErrors['zipcodeError'] = 'Zipcode is Important';
    }

    if (!array_filter($infoErrors)) {
        saveCustomer($fname, $lname, $email, $address, $city, $zipcode);
        $_SESSION["fname"] = $_POST['fname'];
        $_SESSION["lname"] = $_POST['lname'];
        $_SESSION["email"] = $_POST['email'];
        $_SESSION["address"] = $_POST['address'];
        $_SESSION["city"] = $_POST['city'];
        $_SESSION["zipcode"] = $_POST['zipcode'];
        header("location:products.php");
    }


}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Info Page</title>
</head>

<body>
    <div class="container"><br><br>
        <h2 class="text-primary mb-4">Fill in your information.</h2>
        <form action="customer.php " method="post">
        <div class="input-group">
                 <span class="input-group-text">First and last name</span>
                 <input type="text" name="fname" class="form-control">
                 <div class="error text-danger"><?php echo $infoErrors['fnameError'];  ?></div>
                 <input type="text" name="lname" class="form-control">
                 <div class="error text-danger"><?php echo $infoErrors['lnameError'];  ?></div>
        </div>
        <br>
        <div class="form-group">
                <input type="text" name="email" placeholder="Email" class="form-control"> <br>
                <div class="error text-danger"><?php echo $infoErrors['emailError'];  ?></div>
                <input type="text" name="address" placeholder="address" class="form-control"> <br>
                <div class="error text-danger"><?php echo $infoErrors['addressError'];  ?></div>
                <input type="text" name="city" placeholder="city" class="form-control"> <br>
                <div class="error text-danger"><?php echo $infoErrors['cityError'];  ?></div>
                <input type="text" name="zipcode" placeholder="zipcode" class="form-control"> <br>
                <div class="error text-danger"><?php echo $infoErrors['zipcodeError'];  ?></div> <br>
                <button type="submit" name="submit" class="btn btn-primary">OK</button>
            </div>
        </form>
    </div>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>

<?php


?>
