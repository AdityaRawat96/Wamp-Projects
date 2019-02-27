

<?php
// Here we get all the information from the fields sent over by the form.
$formno = $_POST['formNo'];
//$name= $_POST['name'];


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

?>

<div class="row">
  <div class="col-lg-2" align="right">
    <label><strong style="color: white;">Form Number:</strong></label>
  </div>
  <div class="col-lg-8">
    <label><strong style="color: white;" id="formNo"><?php echo $p; ?></strong></label>
  </div>
  <div class="col-lg-2">
  </div>
</div><br>
<div class="row">
  <div class="col-lg-2" align="right">
    <label><strong style="color: white;">Name:</strong></label>
  </div>
  <div class="col-lg-8">
    <input class="form-control" type="text" name="" value="<?php echo $p0; ?>" id="name">
  </div>
  <div class="col-lg-2">
  </div>
</div><br>
<div class="row">
  <div class="col-lg-2" align="right">
    <label><strong style="color: white;">Password:</strong></label>
  </div>
  <div class="col-lg-8">
    <input class="form-control" type="text" name="" value="<?php echo $p1; ?>" id="password">
  </div>
  <div class="col-lg-2">
  </div>
</div><br>
<div class="row">
  <div class="col-lg-2" align="right">
    <label><strong style="color: white;">Phone:</strong></label>
  </div>
  <div class="col-lg-8">
    <input class="form-control" type="text" name="" value="<?php echo $p2; ?>" id="phone">
  </div>
  <div class="col-lg-2">
  </div>
</div><br>
<div class="row">
  <div class="col-lg-2" align="right">
    <label><strong style="color: white;">E-mail:</strong></label>
  </div>
  <div class="col-lg-8">
    <input class="form-control" type="text" name="" value="<?php echo $p3; ?>" id="email">
  </div>
  <div class="col-lg-2">
  </div>
</div><br>
<div class="row">
  <div class="col-lg-2" align="right">
    <label><strong style="color: white;">Gender:</strong></label>
  </div>
  <div class="col-lg-8">
    <input class="form-control" type="text" name="" value="<?php echo $p4; ?>" id="gender">
  </div>
  <div class="col-lg-2">
  </div>
</div><br>
<div class="row">
  <div class="col-lg-2" align="right">
    <label><strong style="color: white;">Category:</strong></label>
  </div>
  <div class="col-lg-8">
    <input class="form-control" type="text" name="" value="<?php echo $p5; ?>" id="category">
  </div>
  <div class="col-lg-2">
  </div>
</div><br>
<div class="row">
  <div class="col-lg-2" align="right">
    <label><strong style="color: white;">Suggestion:</strong></label>
  </div>
  <div class="col-lg-8">
    <input class="form-control" type="text" name="" value="<?php echo $p6; ?>" id="suggestion">
  </div>
  <div class="col-lg-2">
  </div>
</div>


<?php
}

?>
