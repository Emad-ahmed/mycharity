<?php

include 'config.php';

session_start();


if(isset($_SESSION['email']))
{
  $email = $_SESSION['email'];
  $datafetchquery = mysqli_query($conn, "SELECT * FROM `user` WHERE email = '$email'");

  $data = mysqli_fetch_array($datafetchquery);
  $name = $data['name'];
}



?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/dropdown.css">
    
  </head>
  <body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary p-3">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Charity</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-4">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Browse Foundraisers</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">How It Works</a>
        </li>
        
        <form class="d-flex ms-5" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
        </form>
      </ul>
  
      <div class="d-flex ms-5">
           <a href="" class='btn btn-outline-success me-2'><i class="fa fa-whatsapp text-success" aria-hidden="true"></i> Chat</a>
           <a href="" class='btn btn-outline-info'>Start A Fundraiser</a>

           
            <?php
            if(isset($_SESSION['email'])){
            echo "<div class='dropdown'>
            <button class='dropbtn'>$name <i class='fa fa-sort-desc' aria-hidden='true'></i></button>
            <div class='dropdown-content'>
                <a href='profile.php'>View Profile</a>
                <a href='#'>My Funraisers</a>   
                <a href='#'>My Donations</a>
                <a href='#'>Start A New Fundraiser</a>
                <a href='logout.php'>Logout</a>
            </div>
            </div>";
            }
            else{
              echo "<a href='register.php' class='btn btn-outline-success ms-3'>Sign in</a>";
            }

            ?>
            

            
      </div>
    
    </div>
  </div>
</nav>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>