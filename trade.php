<?php
session_start();
if (!isset($_SESSION["user"])) {
    header("Location: login.php");
}
if($_SESSION["sub"] == "no")
{
    header("Location: wallet.php");
}
?>
<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <title>Trade</title>
</head>
<body>
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
              <h1 class="fw-light text-warning">Trade - Buy or Sell</h1>
              <p>
                <a href="index.php" class="btn btn-warning my-2">Home</a>
                <a href="login.php" class="btn btn-secondary my-2">Login</a>
              </p>
            </div>
          </div>
        </section>
      
        <div class="album py-5 bg-secondary">
        <section class="bg-secondary">
  <div class="container py-5">
    <div class="row">
      <div class="col">
        <nav aria-label="breadcrumb" class="bg-dark rounded-3 p-3 mb-4">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Trade</li>
          </ol>
        </nav>
      </div>
    </div>

    <div class="row bg-secondary">
      <div class="col-lg-4">
        <div class="card mb-4">
          <div class="card-body text-center">
            <h5 class="my-3">Total Money</h5>
            <h2 class="text-muted mb-4"><?php
              echo"$".$_SESSION["money"];
            ?>
            </h2>
            <div class="d-flex justify-content-center mb-2">
              <a class="btn btn-warning" href="wallet.php">Wallet</a>
            </div>
          </div>
        </div>
        <div class="mb-4 mb-lg-0">
          <div class="card-body p-0">
            <!-- Crypto Converter ⚡ Widget --><crypto-converter-widget shadow symbol live background-color="#383a59" border-radius="0.60rem" fiat="united-states-dollar" crypto="bitcoin" amount="1" decimal-places="2"></crypto-converter-widget><script async src="https://cdn.jsdelivr.net/gh/dejurin/crypto-converter-widget@1.5.2/dist/latest.min.js"></script><!-- /Crypto Converter ⚡ Widget -->
          </div>
        </div>
        <div class="row mb-4 mb-lg-0 my-3">
          <div class="card-body p-0">
          <iframe src="https://bit2me.com/widget/buy/v2?currency=BTC&amount=100&method=card" style="display:block;width:100%;max-width:auto;height:26rem;margin:0 auto;" frameborder="0"></iframe>
        </div>
      </div>
      
</div>
<div class="col-lg-8">
        <div class="mb-4">
          <div class="card-body">
            <div class="container">
              
<script src="https://price-static.crypto.com/latest/public/static/widget/index.js"></script>
<div
  id="crypto-widget-CoinList"
  
  data-theme="dark"
  data-design="modern"
  data-coin-ids="1,166,136,382,20,1986,440,29,418,2283" style="overflow: hidden;"></div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-10">
            <div class="mb-4 mb-md-0">
              <div class="card-body">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
        </div>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="script.js"></script>
</body>
</html> 