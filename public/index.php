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



                <div class="row">


                  <?php get_products(); ?>

                </div> <!-- Row ends here -->

            </div>

        </div>

    </div>
    <!-- /.container -->



<?php include(TEMPLATE_FRONT . DS . "footer.php") ?>
