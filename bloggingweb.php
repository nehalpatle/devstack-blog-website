<!DOCTYPE html>
<html>
<head>
  <title>BLOG WEBSITE</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style>
     .nav-item:hover{border-bottom: 1px solid rgb(252, 3, 15);transition: 1.2s;}
  </style>
</head>
<body>
<section>
	<div><nav class="navbar navbar-expand-md  fixed-top" style="padding: 10px 0px 10px 6px;background-color:black;">
		<ul class="navbar-nav">
      <li class="navbar-brand"></li>
			<li class="navbar-brand" style="color: white;font-family:cursive;text-shadow: 0 0 25px white" ><b>DEVSTACK</b></li>
			<li class="nav-item" style="margin-left: 830px;color: white">
				<a class="nav-link" href="#HOME" style="text-shadow: 0 0 25px white"><b>HOME</b></a>
			</li>
			<li class="nav-item" style="margin-left: 30px;color: white">
				<a class="nav-link" href="#RD" style="text-shadow: 0 0 25px white"><b>READ BLOGS</b></a>
			</li>
			<li class="nav-item" style="margin-left:25px;color: white">
				<a class="nav-link" href="http://localhost/tcs/blog.php" style="text-shadow: 0 0 25px white"><b>WRITE BLOGS</b></a>
			</li>
      <li class="nav-item" style="margin-left: 30px;color: white">
				<a class="nav-link" href="#hy" style="text-shadow: 0 0 25px white"><b>CONTACT US</b></a>
			</li>
		</ul>
  </nav>
</div>
</section>

<div class="container-fluid" style="background-image:url('bank/blog.jpg');background-repeat: no-repeat;background-size:cover;padding: 120px 5px 420px 0px;" id="HOME">
  <h1 style="text-align: center;color: whitesmoke;font-size: 105px;font-family: cursive;margin:0px 0px 20px 20px;text-shadow: 0 0 20px rgb(227, 32, 220)">DEVSTACK</h1><br>
  <h5 style="text-align: center;color: whitesmoke;font-family: cursive;font-size:25px;text-shadow: 0 0 15px red;margin:0px 0px 20px 20px"><B>BLOGGING WEBSITE</B></h5>
</div><br>


<div id="RD" class="container-fluid">
    <h2 style="padding-top: 70px; text-align: center;font-size:xxx-large">
    <b>YOU CAN READ PUBLISHED BLOGS HERE</b>
    </h2><br>
<?php

include_once 'dbconfig.php';
include_once 'dbOperation.php';

$dbObj = new Employees($DB_con);

$dbObj->getEmployeesDetails();

?>
</div>
<div class="container-fluid jumbotron text-light" style="background-color:black" id="hy"><p style="text-align: center;">

<a href="https://www.instagram.com/_nehalpatle.03/" style="text-decoration: none;">
</b>
  <img src="bank/1.png" width="48px" height="45px" style="border-radius: 10px;padding: 5px;">
  <span style="position: absolute;margin-top: 40px;margin-left: -63px;color: white">Instagram</span>
</a>
<a href="https://api.whatsapp.com/qr/QHND6UERXJXUB1" style="text-decoration: none;margin-left: 30px;">
  <img src="bank/2.png" width="48px" height="46px" style="border-radius: 10px;padding: 5px;">
  <span style="position: absolute;margin-top: 40px;margin-left: -60px;color: white;">Whatsapp</span>
</a>
<a href="https://api.whatsapp.com/qr/QHND6UERXJXUB1" style="text-decoration: none;margin-left: 33px;">
  <img src="bank/3.png" width="48px" height=46px" style="border-radius: 10px;padding: 5px;"><span style="position: absolute;margin-top: 40px;margin-left: -55px;color: white">LinkedIn</span>
</a>
<a href="https://api.whatsapp.com/qr/QHND6UERXJXUB1" style="text-decoration: none;margin-left: 30px;">
  <img src="bank/4.png" width="48px" height="46px" style="border-radius: 10px;padding: 5px;"><span style="position: absolute;margin-top: 40px;margin-left: -57px;color: white">Facebook</span>
</a>
<a href="https://api.whatsapp.com/qr/QHND6UERXJXUB1" style="text-decoration: none;margin-left: 30px;"><img src="bank/5.jpg" width="48px" height="46px" style="border-radius: 10px;padding: 5px;"><span style="position: absolute;margin-top: 40px;margin-left: -50px;color: white">Twitter</span>
</a>
</p><br><br><br>
<hr style="background-color: white;">
<br>
<div class="row">
  <div class="col-4" style="text-align: center;">
    <address style="display: block;font-style: italic;">
      <h6>
        <B>YOU CAN VISIT US TO THIS ADDRESS ::</B>
      </h6>
      <br>
      <img src="bank/6.png"  width="30px" height="30px" style="border-radius: 10px;"> 
      264,
     JAWAHAR NAGAR,<br>
     , RAJENDRA NAGAR,<br>
     INDORE,<br>
      452012</address>
  </div>
    <div class="col-4" style="text-align: center;">
<h6 style="padding-left: 18px;font-style: italic;"><b>CONTACT US ::</b></h6>
<br>
<img src="bank/7.png"  width="30px" height="30px" style="border-radius: 10px;"> 
6265866760 , 7898333595
<br>
0731-6535364
</P>
    </div>
    <div class="col-4" style="text-align: center;">
      <h6 style="font-style: italic;"><b>EMAIL US AT ::</b></h6>
      <BR>
        <img src="bank/8.png" width="30px" height="30px" style="border-radius: 10px;"> 
      NehalPatle2@Gmail.com<br>
      
      
    </div>
</div>

<hr style="background-color: whitesmoke;"><br>
<div style="text-align: center;">
 Copyright Design Nehal Patle © 2021. All right reserved.
</div></div>
<hr>

</div></div>
</div>
</body>
</html>
                               
                           