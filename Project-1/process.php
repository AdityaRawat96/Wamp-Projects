<?php

$dateTime = new DateTime('now', new DateTimeZone('Asia/Kolkata'));

$form=$_POST['formNo'];
$name=$_POST['name'];
$password=$_POST['password'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$gender=$_POST['gender'];
$category=$_POST['category'];
$suggestion=$_POST['suggestion'];
$date = $dateTime->format("d/m/y  H:i A");
$ip=$_POST['ip'];

$con= mysqli_connect("localhost", "root", "")
 or die("Unable to connect to the database server!");
 $roh= mysqli_select_db($con, 'wt')
  or die("Unable to connect to the database server! <br><hr width=800 style=height:1px;></hr><center><input type=button value=OK id=1 class=buttons onclick=cancelit();></center>");



$sql= mysqli_query($con, "insert into form(formNo,name,password,phone,email,gender,category,suggestion,date,ip) values ('$form','$name','$password','$phone','$email','$gender','$category','$suggestion','$date','$ip')")

or die('Uppss.. an Error accured...(unable to process this request)<br>Reason : &nbsp;'. mysqli_error($con).'<br><hr width=800 style=height:1px;></hr><center><input type=button value=OK class=buttons id=1 onclick=cancelit();></center>' );



echo"Data sucessfully Uploaded.<br><hr width=800 style=height:1px;></hr><center><input type=button value=OK id=1 class=buttons onclick=cancelit();></center>";

 ?>
