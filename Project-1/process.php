<?php

$dateTime = new DateTime('now', new DateTimeZone('Asia/Kolkata'));

$form=$_POST['formNo'];
$name=$_POST['name'];
$password=md5($_POST['password']);
$phone=$_POST['phone'];
$email=$_POST['email'];
$gender=$_POST['gender'];
$category=$_POST['category'];
$suggestion=$_POST['suggestion'];
$date = $dateTime->format("d/m/y  H:i A");
$ip=$_POST['ip'];

include('connection.php');


$sql= mysqli_query($con, "insert into form(formNo,name,password,phone,email,gender,category,suggestion,date,ip) values ('$form','$name','$password','$phone','$email','$gender','$category','$suggestion','$date','$ip')")

or die('Uppss.. an Error accured...(unable to process this request)<br>Reason : &nbsp;'. mysqli_error($con).'<br><hr width=800 style=height:1px;></hr><center><input type=button value=OK class=buttons id=1 onclick=cancelit();></center>' );



echo"Data sucessfully Uploaded.<br><hr width=800 style=height:1px;></hr><center><input type=button value=OK id=1 class=buttons onclick=cancelit();></center>";

 ?>
