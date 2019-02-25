<?php
// Here we get all the information from the fields sent over by the form.
$a = $_POST['imageroot'];
$b = $_POST['formno'];
$c = $_POST['rollno'];
$d = $_POST['studentname'];
$e = $_POST['fathername'];
$f = $_POST['dater'];
$g = $_POST['dateofbirth'];
$h = $_POST['monthofbirth'];
$i = $_POST['yearofbirth'];
$j = $_POST['gender'];
$k = $_POST['klass'];
$l = $_POST['address'];
$m = $_POST['phone'];
$n = $_POST['category'];
$o = $_POST['religion'];
?>
<?php
sleep(1);
$con= mysql_connect("localhost", "root", "yes")
 or die("Unable to connect to the database server!"); 
 $roh= mysql_select_db('sym')
  or die("Unable to connect to the database server! <br><hr width=800 style=height:1px;></hr><center><input type=button value=OK id=1 class=buttons onclick=cancelit();></center>"); 


  
$sql= mysql_query("insert into student(form_no,roll_no,student_image,student_name,father_name,date_of_reg,date_of_birth,month_of_birth,year_of_birth,gender,klass,address,phone,category,religion) values ('$b',$c,'$a','$d','$e','$f','$g','$h','$i','$j','$k','$l','$m','$n','$o')") 

or die('Uppss.. an Error accured...(unable to process this request)<br>Reason : &nbsp;'. mysql_error().'<br><hr width=800 style=height:1px;></hr><center><input type=button value=OK class=buttons id=1 onclick=cancelit();></center>' );
  
  

echo"Data sucessfully Uploaded.<br><hr width=800 style=height:1px;></hr><center><input type=button value=OK id=1 class=buttons onclick=cancelit();></center>";





?>
 

