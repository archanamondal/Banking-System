<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

    <link href="https://fonts.googleapis.com/css2?family=Jost&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/style.css">
    <title>Online Banking</title>
  </head>
  <body>


<?php
  include 'navbar.php';
?>


      <section class="jumbotron text-center">
        <div class="intro">
          <h1>Welcome To Online Banking</h1>
          <p class="lead text-center text-black">Online Banking, India's leading private sector bank, offers, <br> Online NetBanking Services & Personal Banking Services like Accounts & Deposits, Cards, Loans, ...</p>
        </div>
      </section>


        <div class="container">
        <div>
  <h2 class="text-center mt-5">Our Services</h2>
</div>
        <div class="row mt-5">
          <div class="col-lg-4 text-center my-3">
            <img class="rounded-circle" src="img/client.jpg" alt=" " width="140" height="140">
            <h2 class="my-3">Our Customer</h2>
            <p>View all customer's data</p>
            <p><a class="btn btn-success" href="transfermoney.php" role="button">View details &raquo;</a></p>
          </div>


          <div class="col-lg-4 text-center my-3">
            <img class="rounded-circle" src="img/transfer.jpg" alt=" " width="140" height="140">
            <h2 class="my-3">Transfer Money </h2>
            <p>Transfer money between multiple acounts.</p>
            <p><a class="btn btn-success" href="transfermoney.php" role="button">View details &raquo;</a></p>
          </div>


          <div class="col-lg-4 text-center my-3">
            <img class="rounded-circle" src="img/transection.jpg" alt=" " width="140" height="140">
            <h2 class="my-3">Transaction History</h2>
            <p>View all the past transactions happend between different accounts </p>
            <p><a class="btn btn-success" href="transactionhistory.php" role="button">View details &raquo;</a></p>
          </div>
          
        </div>
        </div>


<section class="my-5">
  <div>
  <h2 class="text-center">MANAGE YOUR FINANCES BETTER</h2>
</div>

<div class="container-fluid">
  <div class="row">
    <div class="col-lg-4 col-md-4 col-12 mt-5">
    <div class="card">
  <img class="card-img-top" src="img/card1.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">CREDIT CARD</h5>
    <p class="card-text">Amazing deals and rewards</p>
  </div>
  <div class="card-body">
    <a href="#" class="card-link">View</a>
    <a href="#" class="card-link">Know more</a>
  </div>
</div>
  </div>

    <div class="col-lg-4 col-md-4 col-12 mt-5">
    <div class="card">
  <img class="card-img-top" src="img/card2.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">LOAN</h5>
    <p class="card-text">Wide range of financial products at low interest rates</p>
  </div>
  <div class="card-body">
    <a href="#" class="card-link">View</a>
    <a href="#" class="card-link">Know more</a>
  </div>
</div>
  </div>

    <div class="col-lg-4 col-md-4 col-12 mt-5">
    <div class="card">
  <img class="card-img-top" src="img/card3.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">INSURANCE</h5>
    <p class="card-text">Wide coverage & affortable premium services</p>
  </div>

  <div class="card-body">
    <a href="#" class="card-link">View</a>
    <a href="#" class="card-link">Know more</a>
  </div>
</div>
  </div>
</section>


<footer class="container">
        <hr>
            <p class="float-right"><a href="#">Back to top</a></p>
            <p>© 2021 www.OnlineBanking.com - All rights reserve <a href="#">Privacy</a> · <a href="#">Terms</a></p>
            <hr>
</footer>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>