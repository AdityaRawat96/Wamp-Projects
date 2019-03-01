<?php

$formno = $_POST['formNo'];
$password = $_POST['password'];

include('connection.php');
$sql="select * from form where formNo='$formno'";
$result = mysqli_query($con,$sql);

while($row=mysqli_fetch_array($result))
{

$p=$row["formNo"];
$p0=$row["name"];
$p1=$row["password"];
$p2=$row["phone"];
$p3=$row["email"];
$p4=$row["gender"];
$p5=$row["category"];
$p6=$row["suggestion"];

}

if(md5($password) == $p1)
{
  echo "matched";
}
else {
  echo "notMatched";
}
