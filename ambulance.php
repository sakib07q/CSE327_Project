<!DOCTYPE html>
<html lang="en">
<head>
  <title>Nearby Hospitals</title>
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
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Gothic+A1|Inconsolata|Roboto|Montserrat|Abril+Fatface" rel="stylesheet">
</head>
<body>
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
<p id="bmi">A hospital is no place to be sick.</p>
<br>
<div class="container-fluid">
  <form action="hospital_list.php" method="post">
    <div class="search-box">
      <input class="search-text" type="text" name = "search" placeholder="Type to search" >
      <button class="search-btn" type="submit" name="submit"><i class="fas fa-search"></i></button>
    </div>
  </form>  
</div>
</body>
<footer>
    <div class="row">
    <div class="col-sm-4"><p class="footer-heading">COMPANY</p><p class="footer-body"><a href="#" class="footer-body">About us</a><br><a href="#" class="footer-body">Our services</a><br><a href="#" class="footer-body">Contacts</a><br><a href="#" class="footer-body">Blog</a></p></div>
    <div class="col-sm-4"><p class="footer-heading">CONTACT</p><p class="footer-body">ishaqniloy1996@gmial.com<br>+880 167676****<br></p>
      <p class="p-company">&copy North South University</p>
    </div>
    <div class="col-sm-4"><p class="footer-heading">ADDRESS</p><p class="footer-body">45/2, Link Road, Gulshan,<br> Dhaka-1200</p></div>
  </div>
  </footer>
</html>