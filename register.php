<?php

session_start();
require_once('connect.php');
if(isset($_POST['save'])){

 

  $fname = $_POST["fname"];
  $lname = $_POST["lname"];
  $email = $_POST['email'];
  $pass = $_POST["pass"];
  $cpass = $_POST["cpass"];
  $vpassid=  $_POST["vpassid"];
  $exists=false;
//   if(($pass == $cpass) && $exists==false){
      $sql = "INSERT INTO `info` ( `fname`,`lname`, `email`,`pass`,`cpass`,`vpassid`) VALUES ('$fname','$lname','$email', '$pass','$cpass','$vpassid')";
      $result = mysqli_query($con, $sql);
      if ($result){
        echo '<div class="alert alert-success" role="alert">
        SignUp Seccesfull!!!
      </div>';
      ?> <a href="login1.php"><input type="button" value="Next Level" name="but"></a> <?php
      }
//   }
//   else{
//     echo '<div class="alert alert-danger" role="alert">
//     Passwords doesnot match!!!
//   </div>
//     ';
//   }



}










?>







<?php require 'partials/_nav.php' ?>

<html>
    <head>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" 
          integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" 
          crossorigin="anonymous">
        <title>
          
        </title>
    </head>
    <body>
    
        
    

<div class="form" >
  <form  method="POST">
    
<div class="row g-3">
  <div class="col">
    <input type="text" class="form-control" placeholder="First name" name="fname"aria-label="First name">
  </div>
  <div class="col">
    <input type="text" class="form-control" placeholder="Last name" name="lname" aria-label="Last name">
  </div>
</div>
  <div class="row mb-3">
    <label for="email" class="col-sm-2 col-form-label">Enter Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="email" name="email">
    </div>
  </div>
<div class="mb-3">
  <label for="pass" class="form-label" >Password</label>
  <input type="password" class="form-control" id="pass" name="pass" placeholder="Enter Password">
</div>
<div class="mb-3">
  <label for="cpass" class="form-label">Confirm Password</label>
  <input type="password" class="form-control" id="cpass" name="cpass" placeholder="Confirm Password">
</div>
<div class="mb-3">
  <label for="vpassid" class="form-label">Enter your VPass ID</label>
  <input type="text" class="form-control" id="vpassid" name="vpassid" placeholder="VPass ID">
</div>
<div>
    
  <input type="submit" name="save">
</div>

</form>
</div>

</body>

</html>