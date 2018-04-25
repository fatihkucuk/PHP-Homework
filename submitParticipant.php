<?php
require 'Db.php';
// Quote and escape submitted form values (input sanitation)
$FirstName = stripslashes($_POST['firstName']);
$LastName = stripslashes($_POST['lastName']);
$Day = stripslashes($_POST['day']);
$Month = stripslashes($_POST['month']);
$Year = stripslashes($_POST['year']);
$Gender = stripslashes($_POST['gender']);

$DateOfBirth = $Year . "-" . $Month . "-" . $Day;

// $State = stripslashes($_POST['state']);
$City = stripslashes($_POST['city']);
$Zip = stripslashes($_POST['zip']);
$Address = stripslashes($_POST['address']);
$Phone = stripslashes($_POST['phone']);
$Email = stripslashes($_POST['email']);
$CustomerNo = Db:: getMaxCustomerNo();

// Db::insertCustomer($CustomerNo, $FirstName, $LastName, $DateOfBirth,
// $Gender, $State, $City, $Zip, $Address, $Email, $Phone);

Db::insertCustomer($CustomerNo, $FirstName, $LastName, $DateOfBirth,
$Gender, $City, $Zip, $Address, $Email, $Phone);
?>

