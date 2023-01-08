<?php include('navbar.php') ?>

<link rel="stylesheet" href="css/index.css">

<style>
    .pg-footer {
    width:100% !important;
      background-color: #004658;
      color: #fff;
   
  }
  
</style>

<div class="container-fluid">
    <div class="row carouselside">
        <div class="col-lg-6">
            <img src="img/c1.jpg" alt="chil" class="img-fluid img-responsive">
        </div>
        <div class="col-lg-6 textfield">
            <h2>Need Funds to Pay For a Medical Emergency or Social Cause?</h2>
            <div class="d-flex platformdiv">
                <div>
                    <h6 class="title">0%</h6>
                    <h6 >Platform Fee</h6>
                </div>
                <div>
                    <h6 class="title">72</h6>
                    <h6 >Donors</h6>
                </div>
                <div>
                    <h6 class="title">32</h6>
                    <h6 >Foundraisers</h6>
                </div>
            </div>
            <div class="fund">
                <a href="fundraiser.php" class="founraiserbtn">Start A Fund Raiser For Free</a>
            </div>
        </div>
    </div>
</div>


<div class="donate">
    <div class="d-flex">
        <div class="me-4">
        <a href="" class="btn btn-info text-white">Donate Now</a>
        </div>
        <div>
            <h6>Start Monthly Donation to Save Lives</h6>
            <p>Every 2 minutes, a child dies because they can't afford medical aid. With Social Impact Plan , we are on a mission to make healthcare a reality for everyone, no matter who you are.</p>
        </div>
    </div>
</div>


<div class="main">
        <h1 class="mtitle">Latest News</h1>
        <ul class="cards">
            <?php

            include 'config.php';

            $alldata = mysqli_query($conn, "SELECT * FROM `fundraiser`");

            while ($row = mysqli_fetch_array($alldata)) {
                echo "    <li class='cards_item'>
                <div class='card'>
                <div class='card_image'><img src='admin/$row[image]'></div>
                <div class='card_content'>
                <h2 class='card_title mb-3'>$row[title]........</h2>
    
                <a href='newsshow.php? id=$row[id]' class='btn card_btn'>Read More</a>
                </div>
                </div>
            </li>";
            }
            ?>

        </ul>
    </div>


<div class="container successstory">
    <h1>Success Stories</h1>
    <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="row">
                    <div class="col-lg-6"> <img src="..." class="d-block w-100" alt="..."></div>
                    <div class="col-lg-6 textcarousel">  
                    <h5>You are the reason Suraj gets to live his dream</h5>
                    <p>Trans Siberian Extreme is Worlds's Longest Bicycle Stage Race held in Russia. The total distance for the race is 9100 kms, to be done in 15 stages over a period of 25 days. No Indian has ever participated in Trans Siberian Extreme Race.
                        To race successfully at Trans Siberian Extreme, Amit Samarth needs to raise Rs 10,00,000 to meet the race expenses.
                        Amit Samarth is an accomplished Endurance Athlete. Some of his major achievements are -</p></div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
        </div>
</div>


<?php include('footer.php') ?>