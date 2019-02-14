<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Profile</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/css/bootstrap.min.css" integrity="sha384-PDle/QlgIONtM1aqA2Qemk5gPOE7wFq8+Em+G/hmo5Iq0CCmYZLv3fVRDJ4MMwEA" crossorigin="anonymous">
  </head>
  <body>

    <div class="container">
      <div class="jumbotron">
        <h1>LOGIN PAGE</h1>
      </div>
    </div>




<?php


  if($_SERVER['REQUEST_METHOD']=="POST"){
    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];

    if($email=="syedmohi04@gmail.com" and $password="testingapp") {
      echo '<p class="alert alert-success">You are logged in...</p>';
    } else {
      echo '<p class="alert alert-danger">Failed to login...</p>';
    }



  }

 ?>

  </body>
</html>
