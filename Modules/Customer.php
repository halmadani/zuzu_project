<?php 
include_once './Modules/config.php';
include_once './Classes/Customer.php';

function saveCustomer($fname,$lname,$email,$address,$city,$zipcode){
    global $pdo;
    $q = "INSERT INTO customer (`fname`, `lname`, `email`, `address`, `city`, `zipcode`) VALUES (:fname, :lname, :email, :address, :city, :zipcode)";
    $stmt = $pdo->prepare($q);
    $stmt->bindParam(':fname', $fname);
    $stmt->bindParam(':lname', $lname);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':address', $address);
    $stmt->bindParam(':city', $city);
    $stmt->bindParam(':zipcode', $zipcode);

    $stmt->execute();

}


function getCustomer(){
    global $pdo;
    $q = "SELECT * FROM customer ";
    $stmt = $pdo->prepare($q);
    $stmt->setFetchMode(PDO::FETCH_CLASS, 'Customer');
    $stmt->execute();
}





?>