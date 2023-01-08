<?php include('navbar.php') ?>

<link rel="stylesheet" href="css/index.css">

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



<div class="container trend">
    <div>
    <h1>Medical Treatment Fundraiser</h1>
    </div>
    <div>
        <div class="row">
        <?php

        include 'config.php';

        $alldata = mysqli_query($conn, "SELECT * FROM `teacher` WHERE department='BBA'");

        while ($row = mysqli_fetch_array($alldata)) {
        echo "<div class='col-lg-4'>
        <div class='card' style='width: 18rem;'>
            <img src='...' class='card-img-top' alt='...'>
            <div class='card-body'>
                <h5 class='card-title'>Card title</h5>
                <p>by friends</p>
                <div class='d-flex'>
                    <h4>$549</h4>
                    <p>Raised out $549</p>
                </div>
                <p class='card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
            </div>
        </div>
        </div>"
        }
    </div>
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