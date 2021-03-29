<?php

session_start();
error_reporting(0);
if(!isset($POST['sub']))

{

	$u = $_POST['user'];

	$p = $_POST['pass'];

	if($u =="bilal" && $p=="123")

	{

	$_SESSION['luser'] = $u;

	$_SESSION['start'] = time();

	 // taking now logged in time
	$_SESSION['expire'] = $_SESSION['start'] + (1 * 60) ; 

	// ending a session in 1  minutes from the starting time
	header('Location: HomePage.php');

	}

	else

	{

	$err= "<font color='red'>Invalid user login </font>";

	}

}

?>







<html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>Login</title>
  </head>
  <style>
  .form-control ,.btn ,.border,.rounded{
    border-radius:10PX;
  }
  </style>
  <body>

 
 <!-- Login Form-->
 <section class="bg-home">
<div class="home-center">
<div class="home-desc-center">
<div class="container">
<div class="row align-items-center">
<div class="col-lg-8 col-md-6">
<div class="mr-lg-5 my-5">
<img src="1.png" class="img-fluid d-block mx-auto" alt="">
</div>
</div>
<div class="col-lg-4 col-md-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
<div class="login-page bg-white shadow rounded p-4">
<div class="text-center">
<h4 class="mb-4">Login</h4>
</div>
<form method="POST" class="login-form">

<div class="row">
<div class="col-lg-12">
<div class="form-group position-relative">
<label>Username <span class="text-danger">*</span></label>
<input type="text" class="form-control pl-5" placeholder="Username" name="user" required>

</div>
</div>
<div class="col-lg-12 my-2">
<div class="form-group position-relative">
<label>Password <span class="text-danger">*</span></label>
<input type="password" class="form-control pl-5" placeholder="Password" name="pass" required>
</div>
</div>

<div class="col-lg-12 mb-0 my-4">
<button type="submit" class="btn btn-primary w-100 sign-in-button" name="sub">Sign in</button>
</div>

</div>
</form>
</div>
</div> 
</div>
</div> 
</div>
</div>
</section>
  

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
  </body>
</html>








