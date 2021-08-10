<?php require_once("../resources/config.php"); ?>

<?php include(TEMPLATE_FRONT . DS . "header.php") ?>

    <!-- Page Content -->
    <div class="container">

        <!-- Jumbotron Header -->
        <header>
          <h1> Coin Listings</h1>
        </header>

        <hr>



        <!-- /.row -->

        <!-- Page Features -->
        <div class="row text-center">

          <div class="cryptohopper-web-widget" data-id="2" data-theme="dark"></div>
          <br>
          <div class="cryptohopper-web-widget" data-id="3" data-coins="bitcoin,ethereum,binance-coin,cardano,ripple,tether,polkadot,uniswap,litecoin,dogecoin,chainlink,stellar,theta-token,filecoin,usd-coin,vechain,solana,crypto-com-chain,monero,binance-usd,aave" data-theme="dark" data-card_design="3" data-realtime="on"></div>

        </div>
        <!-- /.row -->


    </div>
    <!-- /.container -->


<?php include(TEMPLATE_FRONT . DS . "footer.php") ?>
