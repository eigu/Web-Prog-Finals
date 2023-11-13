<?php

$con = mysqli_connect('localhost', 'root', '','online_store');

$username = $_POST['username'];
$password = $_POST['password'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$mobile = $_POST['mobile'];
$address = $_POST['address'];
$email = $_POST['email'];

$sql = "INSERT INTO `profile` (`username`, `password`, `firstname`, `lastname`, `mobile`, `address`, `email`) VALUES ('$username', '$password', '$firstname', '$lastname', '$mobile', '$address', '$email')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Contact Records Inserted";
}

?>