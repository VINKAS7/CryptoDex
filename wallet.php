<?php
session_start();
if (!isset($_SESSION["user"])) {
    header("Location: login.php");
}
if ($_SESSION["sub"]=="yes")
{
    header("Location: sub_wallet.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>
<body class="bg-secondary">
        <!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container bg-dark">
    <div class="tradingview-widget-container__widget bg-dark"></div>
    <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
    {
    "symbols": [
      {
        "proName": "FOREXCOM:SPXUSD",
        "title": "S&P 500"
      },
      {
        "proName": "FOREXCOM:NSXUSD",
        "title": "US 100"
      },
      {
        "proName": "FX_IDC:EURUSD",
        "title": "EUR to USD"
      },
      {
        "proName": "BITSTAMP:BTCUSD",
        "title": "Bitcoin"
      },
      {
        "proName": "BITSTAMP:ETHUSD",
        "title": "Ethereum"
      }
    ],
    "showSymbolLogo": true,
    "colorTheme": "dark",
    "isTransparent": true,
    "displayMode": "adaptive",
    "locale": "en"
  }
    </script>
  </div>
  <!-- TradingView Widget END -->
    <main class="bg-dark text-white">
        <section class="py-5 text-center container">
          <div class="row py-lg-5">
            <div class="col-lg-6 col-md-8 mx-auto"> 
              <h1 class="fw-light text-warning">Wallet and Subscription</h1>
              <p>
                <a href="index.html" class="btn btn-warning my-2">Home</a>
                <a href="login.html" class="btn btn-secondary my-2">Login</a>
              </p>
            </div>
          </div>
        </section>
      
        <div class="album py-5 bg-secondary">
        <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
      <h1 class="display-4 text-warning">Pricing</h1>
      <p class="lead">Quickly build an effective pricing table for your potential customers with this Bootstrap example. It's built with default Bootstrap components and utilities with little customization.</p>
    </div>
    <div class="container">
      <div class="card-deck mb-3 text-center">
        <div class="card mb-4 box-shadow">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">Wallet</h4>
          </div>
          <div class="card-body bg-dark text-warning">
          <h5 class="text-warning">Total Balance</h5>
            <h1 class="card-title pricing-card-title"><?php 
            echo "$".$_SESSION["money"]." USD";
            ?>
            <small class="text-muted"></small></h1>
            <a class="btn btn-lg btn-block btn-warning" href="add_money.php">Add Money</a>
          </div>
        </div>
        <div class="card mb-4 box-shadow">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">User</h4>
          </div>
          <div class="card-body bg-dark text-warning">
            <h1 class="card-title pricing-card-title">Free <small class="text-muted"></small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>Watch Live Crypto Prices</li>
              <li>Analysis of Crypto</li>
              <li>Learn About Crypto</li>
            </ul>
            <a class="btn btn-lg btn-block btn-warning" href="learn.php">Learn</a>
          </div>
        </div>
        <div class="card mb-4 box-shadow">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">PRO</h4>
          </div>
          <div class="card-body bg-dark text-warning">
            <h1 class="card-title pricing-card-title">$30 <small class="text-warning">/ mo</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>Watch Live Crypto Prices</li>
              <li>Analysis of Crypto</li>
              <li>Phone and email support</li>
              <li>Learn About Crypto</li>
              <li>Trade Crypto</li>
            </ul>
            <a class="btn btn-lg btn-block btn-warning" href="buy.php">Buy Now</a>
            <a class="btn btn-lg btn-block btn-warning">Trade</a>
          </div>
        </div>
      </div>
    </div>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>
</html>