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
    <title>Learn</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
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
              <h1 class="fw-light text-warning">Learn about Crypto-Currencies</h1>
              <p>
                <a href="index.php" class="btn btn-warning my-2">Home</a>
                <a href="login.php" class="btn btn-secondary my-2">Login</a>
              </p>
            </div>
          </div>
        </section>
      
        <div class="album py-5 bg-secondary">
          <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
              <div class="col">
                <div class="card shadow-sm bg-dark text-white">
                  <img src="images/blockchain.png" alt="Blockchain">
                  <div class="card-body">
                    <h5 class="card-text fw-bold text-warning">Blockchain</h5>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="btn-group">
                        <a href="contents/blockchain.html"><button type="button" class="btn btn-sm btn-outline-warning text-white">View</button></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card shadow-sm bg-dark text-white">
                  <img src="images/Bitcoin1.webp" alt="Blockchain">
                  <div class="card-body">
                    <h5 class="card-text fw-bold text-warning">Bitcoin</h5>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="btn-group">
                        <a href="contents/bitcoin.html"><button type="button" class="btn btn-sm btn-outline-warning text-white">View</button></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card shadow-sm bg-dark text-white">
                  <img src="images/solana.jpg" alt="Blockchain">
                  <div class="card-body">
                    <h5 class="card-text fw-bold text-warning">Solana</h5>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="btn-group">
                        <a href="contents/solana.html"><button type="button" class="btn btn-sm btn-outline-warning text-white">View</button></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
      
              <div class="col">
                <div class="card shadow-sm bg-dark text-white">
                  <img src="images/ethereum.jpeg" alt="Blockchain">
                  <div class="card-body">
                    <h5 class="card-text fw-bold text-warning">Ethereum</h5>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="btn-group">
                        <a href="contents/ethereum.html"><button type="button" class="btn btn-sm btn-outline-warning text-white">View</button></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card shadow-sm bg-dark text-white">
                  <img src="images/cardona.jpg" alt="Blockchain">
                  <div class="card-body">
                    <h5 class="card-text fw-bold text-warning">Cardona</h5>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="btn-group">
                        <a href="contents/cardona.html"><button type="button" class="btn btn-sm btn-outline-warning text-white">View</button></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card shadow-sm bg-dark text-white">
                  <img src="images/dogecoin-card.png" alt="Blockchain">
                  <div class="card-body">
                    <h5 class="card-text fw-bold text-warning">Dogecoin</h5>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="btn-group">
                        <a href="contents/dogecoin.html"><button type="button" class="btn btn-sm btn-outline-warning text-white">View</button></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
      
              <div class="col">
                <div class="card shadow-sm bg-dark text-white">
                  <img src="images/tron.jpg" alt="Blockchain">
                  <div class="card-body">
                    <h5 class="card-text fw-bold text-warning">Tron</h5>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="btn-group">
                        <a href="contents/tron.html"><button type="button" class="btn btn-sm btn-outline-warning text-white">View</button></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card shadow-sm bg-dark text-white">
                  <img src="images/tether-social.jpg" alt="Blockchain">
                  <div class="card-body">
                    <h5 class="card-text fw-bold text-warning">Tether</h5>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="btn-group">
                        <a href="contents/tether.html"><button type="button" class="btn btn-sm btn-outline-warning text-white">View</button></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card shadow-sm bg-dark text-white">
                  <img src="images/binance.jpeg" alt="Blockchain">
                  <div class="card-body">
                    <h5 class="card-text fw-bold text-warning">Binance Coin</h5>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="btn-group">
                        <a href="contents/binance.html"><button type="button" class="btn btn-sm btn-outline-warning text-white">View</button></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      
      </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>
</html>
