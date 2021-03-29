<?php
 
session_start();
 
if(!isset($_SESSION['luser']))
 
{
 
    echo "<h3 align='center'>Please <strong>Login</strong> again <a href='index.php '>Click Here to Login</a></h3>";
 
}
 
else

{

 
    $now = time();
 // checking the time now when home page starts
 
    if($now > $_SESSION['expire'])
 
    {
 
        session_destroy();
 
      
        echo "<h3 align='center'><strong>Your session has expired !</strong> <a href='index.php'>Login Here</a></h3>";
 
    }
 
    else
 
  { 
 //starting this else one [else1]
 
?>
 
 
 
 <html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>Details</title>
  </head>
  <style>
  .form-control{
    border-radius:10PX;
  }
  </style>
  <body>
  <?php

echo "<div class= container my-5 col-xl-3 mx-auto>
<h1 class=text-center> Hello  ".$_SESSION['luser']." <br>! Fill Your  Details !</h1><br><br>
";
 ?>
  
 <div class="container my-5 col-xl-3 mx-auto  ">
 <form method=post action='display.php'>
  <div class="mb-2  ">
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input type="text" class="form-control " name="sname" required>
  </div>
  <div class="mb-3  ">
    <label for="exampleInputPassword1" class="form-label">City</label>
    <input type="text" class="form-control"  name="scity" required>
  </div>
  <div class="mb-3  ">
    <label for="exampleInputPassword1" class="form-label">Phone </label>
    <input type="text" class="form-control" name="sno" required>
  </div>

  <div class="d-grid gap-2 col-6 col-xl-4 mx-auto">
  <button type="submit" class="btn btn-primary ">Submit</button>
  </div>
</form> 
 </div>
 

 <?php
 
}

}
?>
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