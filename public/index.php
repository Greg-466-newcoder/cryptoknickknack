<?php require_once("../resources/config.php"); ?>

<?php include(TEMPLATE_FRONT . DS . "header.php") ?>

    <!-- Page Content -->

    <div class="container">

        <div class="row">

          <?php include(TEMPLATE_FRONT . DS . "side_nav.php") ?>

          <!-- Categories Here -->

            <div class="col-md-9">

                <div class="row carousel-holder">

                    <div class="col-md-12">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

                          <?php include(TEMPLATE_FRONT . DS . "slider.php") ?>
                          <br> <!-- line breack -->
                    </div>

                </div>

                <hr>
                <h1>What is Cryptocurrency?</h1>
                <h3>A cryptocurrency is a digital or virtual currency that is secured by cryptography,
                   which makes it nearly impossible to counterfeit or double-spend. Many cryptocurrencies
                    are decentralized networks based on blockchain technology—a distributed ledger enforced
                     by a disparate network of computers. A defining feature of cryptocurrencies is that they
                      are generally not issued by any central authority, rendering them theoretically immune
                       to government interference or manipulation.</h3>
                <hr>
                <h1>What is bitcoin?</h1>
                <h3>At its most basic principle, Bitcoin is a relatively new and purely digital currency that
                   offers each and every one of us a fairer financial system where everyone is an equal.

                   There are no physical bitcoins in existence with ownership provided by a public ledger
                    to give complete transparency across all currency holders. Since its launch in 2009,
                     Bitcoin has grown to be the largest crypto currency sparking a new wave of financial
                      transactions with many other digital currencies following in the innovative footsteps.</h3>
                <hr>


                <div class="row">


                  <?php get_products(); ?>

                </div> <!-- Row ends here -->

            </div>

        </div>

    </div>
    <!-- /.container -->



<?php include(TEMPLATE_FRONT . DS . "footer.php") ?>
