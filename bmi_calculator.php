<!DOCTYPE html>
<html lang="en">
<head>
  <title>BMI Calculator</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel ="stylesheet" href="css_files/index.css">
  <script src="js/jquery-2.1.3.min.js"></script>
  <script src="js/cycle2.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <link rel ="stylesheet" href="css_files/index.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Gothic+A1|Inconsolata|Roboto|Montserrat|Abril+Fatface" rel="stylesheet">
</head>
<body>
	<?php
		if(isset($_POST['submit'])){
			$feet = $_POST['feet'];
			$inches = $_POST['inches'];
		    $weight = $_POST['weight'];

		    $height = (($feet * 30.48) / 100) + (($inches * 2.54) / 100);

		    $bmi = $weight / ($height * $height);
		}
	?>
<nav class="navbar navbar-inverse navbar-expand-md bg-dark navbar-dark" style="background-image: linear-gradient(to right, #0D0D0D, #0D0D0D);">
  <a href="navigation.html" class="logo" style="float: "><img src="images/logo.png"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="logout.php" style="color: #F7B800;">LogOut</a>
      </li>    
    </ul>
  </div>  
</nav>
<p id="bmi">Champions train loosers complain</p>
<br>
<div class="container-fluid">
  <div class="row" id="form_row">
    <div class="col-sm-12">
        <div class="col-sm-3"></div>
    <div class="col-sm-3" style="background-color: rgb(0,0,0,0.3); margin-left: -10%">
    <form action="bmi_calculator.php" method="post">
    <div class="row">
        <div class="col-sm-12">
          <p id="bmi_para">BMI</p>
          <form action="bmi_calculator.php" method="post">
          <p style="font-weight: bold; color: #fff;letter-spacing: 1px; margin-top: 15px">Enter your height</p><br>
          <div class="form-group">
          <input type ="number" class="form-control" id="form-control" name = "feet" placeholder="Feet" style="float: left; width: 49%;">
          <input type ="number" class="form-control" id="form-control" name = "inches" placeholder="Inches" style="float: right; width: 49%;"><br>
          </div>
          <p style="font-weight: bold; color: #fff;letter-spacing: 1px">Enter your weight</p><br>
          <div class="from-group">
          <input type = "number" class="form-control" id="form-control" name="weight" placeholder="Kilograms"><br>
        </div>
        <div class="col-sm-12" style="margin-bottom: 0px;padding-bottom: 0px"> 
          <button type="submit" class="btn btn-default" name="submit" id="btn-submit" style="margin-left: 66%; margin-top: 20%;
          margin-bottom: 15%; float: left; background-color: rgb(255,255,255); ">Calculate</button><br><br>
      </form>
        </div>
        </div>
        </div>
        </form>
      </div>
      <div class="col-sm-6"></div>
    </div>
    </div> 
  </div>
</div>
<div id="result">
<p style="text-align: center; font-size: 150%; margin-bottom: 0px; margin-top: 30px"><?php
        if(isset($_POST['submit'])){
          echo "Your BMI is";
        } 
      ?></p>

<p style="font-family: 'Inconsolata'; font-size: 500%; margin-top: ; margin-bottom: -45px; text-align: center;"><?php if(isset($_POST['submit'])){
		echo round($bmi,2); 
		
	}?></p>
</div>
</body>
<footer>
	<div class="container-fluid">
    <div class="row">
    <div class="col-sm-4"><p class="footer-heading">COMPANY</p><p class="footer-body"><a href="#" class="footer-body">About us</a><br><a href="#" class="footer-body">Our services</a><br><a href="#" class="footer-body">Contacts</a><br><a href="#" class="footer-body">Blog</a></p></div>
    <div class="col-sm-4"><p class="footer-heading">CONTACT</p><p class="footer-body">ishaqniloy1996@gmial.com<br>+880 167676****<br></p>
      <p class="p-company">&copy North South University</p>
    </div>
    <div class="col-sm-4"><p class="footer-heading">ADDRESS</p><p class="footer-body">45/2, Link Road, Gulshan,<br> Dhaka-1200</p></div>
  </div>
</div>
  </footer>
</html>