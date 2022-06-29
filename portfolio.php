<?php
    require_once('functions/manage.php');
    get_header();
?>

    <div class="page-title" style="background-image: url(images/page-title.png)">
        <h1>Portfolio</h1>
    </div>

    <section id="portfolio">
        <div class="container">
          <?php
            $sel5="SELECT * FROM cs_content WHERE content_id='8'";
            $Q15=mysqli_query($con,$sel5);
            $cont15=mysqli_fetch_assoc($Q15);
          ?>
            <div class="center">
                <h2><?= $cont15['content_title']; ?></h2>
                <p class="lead"><?= $cont15['content_subtitle']; ?></p>
            </div>


            <ul class="portfolio-filter text-center">
              <?php
                $selportfolio="SELECT * FROM cs_portfolio ORDER BY portfolio_id ASC limit 0,4 ";
                $Qportfolio=mysqli_query($con,$selportfolio);
                while($portfolio=mysqli_fetch_assoc($Qportfolio)){
              ?>
                <li><a class="btn btn-default active" href="#" data-filter="*"><?=$portfolio['portfolio_title']; ?></a></li>
              <?php } ?>
            </ul>
            <!--/#portfolio-filter-->

            <div class="row">
                <div class="portfolio-items">
                  <?php
                    $selportg="SELECT * FROM cs_port_gallery ORDER BY gallery_id ASC limit 0,8 ";
                    $Qportg=mysqli_query($con,$selportg);
                    while($Qportga=mysqli_fetch_assoc($Qportg)){
                  ?>
                    <div class="portfolio-item apps col-xs-12 col-sm-4 col-md-3 single-work">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="admin/uploads/<?= $Qportga['gallery_image1']; ?>" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <a class="preview" href="admin/uploads/<?= $Qportga['gallery_image2']; ?>" rel="prettyPhoto"><i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                  <?php } ?>

                </div>
            </div>
        </div>
    </section>
<?php
    get_footer();
?>
