<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Carousel</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

    <script src="//cdnjs.cloudflare.com/ajax/libs/annyang/2.6.1/annyang.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script type="text/javascript" src='Assets/JS/search.js'></script>

    <link rel="stylesheet" href="Assets/CSS/style.css">

  </head>
  <body style='background-color:#616663;' oncontextmenu="return false" onselectstart="return false" ondragstart="return false" oncopy="return false" onpaste="return false" onload="showResult()" onblur="window.close();">

    <div class="container-fluid loader" style="position:fixed; height:100%; width:100%; background-color:black; display:none;">
      <center>
        <span style='position:absolute;left:0px;top:40%;color:white;width:100%;align-text:center;'>
          <h1 id="responseText"></h1>
          <h4>Your response has been recorded.</h4>
        </span>
      </center>
    </div>


    <nav class="navbar navbar-expand-md bg-dark navbar-dark sticky-top" style="background-color:#fff;padding:20px 60px 20px 60px;">
      <!-- Brand -->
      <a href="index.html"><i class="fab fa-angrycreative fa-3x"></i></a>

      <!-- Toggler/collapsibe Button -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Navbar links -->
      <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="https://www.facebook.com/adityavickyrawat"><i class="fab fa-facebook-square fa-2x"></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://twitter.com/AdityaR71488398"><i class="fab fa-twitter-square fa-2x"></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://github.com/AdityaRawat96"><i class="fab fa-github-square fa-2x"></i></a>
          </li>
        </ul>
      </div>
    </nav>
    <br>
    <div class="blurDiv">
      <div class="container-fluid" id='resultname'>

        <?php
        // Here we get all the information from the fields sent over by the form.
        $formno = $_GET['myVar1'];
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

      </div>
      <br>
      <div class="container-fluid" id='editDiv'>
        <div class="row">
          <div class="col-lg-12" align='center'>
            <button type="button" class="btn btn-primary" onclick="editResult('<?php echo $p; ?>')">Edit</button>
          </div>
        </div>
      </div>

    </div>

  </body>
</html>
