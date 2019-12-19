<?php
include_once 'includes/session.php'
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
      <div class = "container"> 
          

      <nav class="navbar navbar-expand-lg navbar-dark bg-info">
  <a class="navbar-brand" href="index.php"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" 
  data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" 
  aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav mr-auto">
      <a class="nav-item nav-link active" href="index.php">Home <span class="sr-only">(current)</span></a>
      <a class=" nav-link" href="viewrecords.php">View Attendees</a>
    </div>
    <div class="navbar-nav ml-auto">

      <?php
        if(!isset($_SESSION['userid'])){
      ?>
      <a class="nav-item nav-link active" href="login.php">Logout <span class="sr-only">(current)</span></a>
          <?php }else{  ?>
          <span> <span> Welcome <?php echo $_SESSION['userName'] ?> ! </span> </span> <span class="sr-only">(current)</span></a>
          <a class="nav-item nav-link active" href="#"> <a class="nav-item nav-link active" 
          href="logout.php">Logout <span class="sr-only">(current)</span></a>     
         <?php }?>
    </div>
  </div>
</nav>
<br/>
