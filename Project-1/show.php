

<?php
// Here we get all the information from the fields sent over by the form.
$formno = $_POST['formNo'];
$name= $_POST['name'];


include('connection.php');
$sql="select * from form where formNo='$formno' OR name LIKE '$name%' ";
$result = mysqli_query($con,$sql);

while($row=mysqli_fetch_array($result))
{

$p=$row["id"];
$p0=$row["formNo"];
$p1=$row["name"];
$p2=$row["phone"];
$p3=$row["email"];
$p4=$row["gender"];
$p5=$row["ip"];
$p6=$row["date"];

?>

<tr>
  <td><?php echo $p; ?></td>
  <td><?php echo $p0; ?></td>
  <td><?php echo $p1; ?></td>
  <td><?php echo $p2; ?></td>
  <td><?php echo $p3; ?></td>
  <td><?php echo $p4; ?></td>
  <td><?php echo $p5; ?></td>
  <td><?php echo $p6; ?></td>
  <td><a href="searchResult.html?myVar1='<?php echo $p0; ?>'"><i class="fas fa-eye fa-2x"></i></a></td>
</tr>

<?php

}




?>
