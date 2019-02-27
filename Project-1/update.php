<?php

$formNo = $_POST['formNo'];
$name = $_POST['name'];
$password = $_POST['password'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$gender= $_POST['gender'];
$category = $_POST['category'];
$suggestion = $_POST['suggestion'];

include('connection.php');

$sql = "UPDATE form SET name = '$name', password = '$password', phone = '$phone', email = '$email', gender = '$gender', category = '$category', suggestion = '$suggestion' WHERE formNo = '$formNo' ";

if (mysqli_query($con, $sql)) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . mysqli_error($con);
}


 ?>
