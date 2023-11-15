<?php
session_start();
if (!isset($_SESSION["user"])) {
  header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">    
    <title>CryptoDex</title>
</head>
<body>
  <section class="bg-dark cont">
    <header data-bs-theme="dark">
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
          <div class="container-fluid">
            <a class="navbar-brand" href="#"><h4 class="text-primary title">CryptoDex</h4></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
              <ul class="navbar-nav me-auto mb-2 mb-md-0">
                <li class="nav-item">
                  <a class="nav-link active menu-items" aria-current="page" href="learn.php"><h5 class="list">Learn</h5></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active menu-items" href="trade.php"><h5 class="list">Trade</h5></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active menu-items" href="wallet.php"><h5 class="list">Wallet</h5></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active menu-items" href="#about"><h5 class="list">About Us</h5></a>
                </li>
              </ul>
              <a href="authentication.php" class="d-block link-body-emphasis text-decoration-none px-3" aria-expanded="false">
            <img src="images/Windows_10_Default_Profile_Picture.svg.png" alt="mdo" width="35" height="32" class="rounded-circle">
            </a>
            <a href="logout.php" class="btn btn-warning">Logout</a>
            </div>
          </div>
        </nav>
      </header>
<div class="b-example-divider"></div>
  <div class="container my-5">
    <div class="row align-items-center rounded-3">
      <div class="col-lg-7 p-3 p-lg-5 pt-lg-3">
        <h1 class="fw-bold text-warning">CryptoDex</h1>
        <p class="lead text-white">CryptoDex is a website about Crypto-Currencies, about their current pricing and learn about blockchain and about Crypto-Currencies. You can track the live prices of Crypto-Currencies and use to buy or sell the cryptocurrencies in future or to learn more about them.</p>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-4 mb-lg-3">
        <a href="https://youtu.be/1YyAzVmP9xQ?si=WGI6ZaNg6Z_BNytn"><button type="button" class="btn btn-outline-primary btn-lg px-4"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-play-fill" viewBox="0 0 16 16">
          <path d="m11.596 8.697-6.363 3.692c-.54.313-1.233-.066-1.233-.697V4.308c0-.63.692-1.01 1.233-.696l6.363 3.692a.802.802 0 0 1 0 1.393z"/>
        </svg> Play Video</button></a>
        </div>
      </div>
      <div class="col-lg-5 p-0 overflow-hidden shadow-lg">
        <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script> 
        <center><dotlottie-player src="https://lottie.host/ce17f69a-0e47-4f89-8609-0ca7bb57d378/ebaiF0hb23.json" background="transparent" speed="1" style="width: auto; height: auto;" loop autoplay></dotlottie-player></center>
      </div>
    </div>
  </div>
    <div class="tradingview-widget-container bg-dark py-5">
      <div class="tradingview-widget-container__widget py-5"></div>
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
  </div>
      <div class="conatiner py-4" id="currency">
        <div class="widget-wizard-screener-settings__preview">
            <div class="tv-external-tools__widget-iframe-wrap js-widget-wizard__example container" style="height:800px; overflow: hidden;"><div class="tradingview-widget-container" style="width: auto; height: 800px;">
            <iframe allowtransparency="true" frameborder="0" src="https://www.tradingview-widget.com/embed-widget/crypto-mkt-screener/?locale=en#%7B%22width%22%3A%22100%25%22%2C%22height%22%3A%22100%25%22%2C%22defaultColumn%22%3A%22overview%22%2C%22screener_type%22%3A%22crypto_mkt%22%2C%22displayCurrency%22%3A%22USD%22%2C%22colorTheme%22%3A%22dark%22%2C%22isTransparent%22%3Afalse%2C%22market%22%3A%22crypto%22%2C%22enableScrolling%22%3Atrue%2C%22utm_source%22%3A%22www.tradingview.com%22%2C%22utm_medium%22%3A%22widget_new%22%2C%22utm_campaign%22%3A%22cryptomktscreener%22%7D" title="crypto mkt-screener TradingView widget" lang="en" style="user-select: none; box-sizing: border-box; display: block; height: calc(100% - 32px); width: 100%;"></iframe>
            </div>
        </div>
      </div>
    </div>
</section>
<section>
  <div class="container col-xl-10 col-xxl-8 px-4 py-5">
    <div class="row align-items-center g-lg-5 py-5">
      <div class="col-lg-7 text-center text-lg-start">
        <h1 class="display-4 fw-bold lh-1 text-warning mb-3">Currency Converter</h1>
        <p class="col-lg-10 fs-4">Convert USD into your's Country currencies for understading the price of cryptocurrencies listed above.
          You can also visit Learn section to learn about top trending cryptocurrencies.
        </p>
      </div>
      <div class="col-md-10 mx-auto col-lg-5">
        <div class="wrapper container">
          <header>Currency Converter</header>
          <form action="#">
            <div class="amount">
              <p>Enter Amount</p>
              <input type="text" value="1">
            </div>
            <div class="drop-list">
              <div class="from">
                <p>From</p>
                <div class="select-box">
                  <img src="https://flagcdn.com/48x36/us.png" alt="flag">
                  <select> <!-- Options tag are inserted from JavaScript --> </select>
                </div>
              </div>
              <div class="icon"><i class="fas fa-exchange-alt"></i></div>
              <div class="to">
                <p>To</p>
                <div class="select-box">
                  <img src="https://flagcdn.com/48x36/np.png" alt="flag">
                  <select> <!-- Options tag are inserted from JavaScript --> </select>
                </div>
              </div>
            </div>
            <div class="exchange-rate">Getting exchange rate...</div>
            <button>Get Exchange Rate</button>
          </form>
        </div>
      </div>
        </div>
      </div>
      </div>
      </div>
    </div>
  </div>
</section>
<script type="text/javascript" src="https://s1.coincarp.com/static/script/widget/coinPrice.min.js"></script><div class="coincarp-blocks-div blocks-div" data-type="blocks" data-currencycode="bitcoin,ethereum,tether,binance-coin,solana,ripple,dogecoin,tron,matictoken,shibainu" data-base="usd" data-theme="dark" data-showicon="true"></div>
<section class="bg-secondary">
<div class="container text-white footer">
  <footer class="py-4" id="about">
    <div class="row">
      <div class="col-6 col-md-2 mb-3">
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Home</a></li>
          <li class="nav-item mb-2"><a href="#currency" class="nav-link p-0 text-white">Currency</a></li>
          <li class="nav-item mb-2"><a href="learn.html" class="nav-link p-0 text-white">Learn</a></li>
        </ul>
      </div>
      <div class="col-6 col-md-2 mb-3">
        <ul class="nav flex-column">
          <li class="nav-item mb-2">IU2141230088 - VINAYAK KASHYAP</li>
        </ul>
      </div>
      <div class="col-6 col-md-2 mb-3">
        <ul class="nav flex-column">
          <li class="nav-item mb-2">IU2141230095 - AYUSH KHANDELWAL</li>
        </ul>
      </div>
      <div class="col-md-5 offset-md-1 mb-3">
        <form>
          <h5>Subscribe to our newsletter</h5>
          <p>Monthly digest of what's new and exciting from us.</p>
          <div class="d-flex flex-column flex-sm-row w-100 gap-2">
            <label for="newsletter1" class="visually-hidden">Email address</label>
            <input id="newsletter1" type="text" class="form-control" placeholder="Email address">
            <button class="btn btn-warning" type="button">Subscribe</button>
          </div>
        </form>
      </div>
      <h5>2023,@ All rights reserved</h5>
    </div>
  </footer>
</div>
</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="script.js"></script>
</body>
</html>
