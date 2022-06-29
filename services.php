<?php
    require_once('functions/manage.php');
    get_header();
?>

    <div class="page-title" style="background-image: url(images/page-title.png)">
        <h1>Services</h1>
    </div>

    <section id="services" class="service-item">
        <div class="container">
          <?php
            $sel2="SELECT * FROM cs_content WHERE content_id='3'";
            $Q2=mysqli_query($con,$sel2);
            $cont2=mysqli_fetch_assoc($Q2);
          ?>
            <div class="center fadeInDown">
                <h2><?= $cont2['content_title']; ?></h2>
                <p class="lead"><?= $cont2['content_subtitle']; ?></p>
            </div>

            <div class="row">
              <?php
                $selga="SELECT * FROM cs_service_gallery ORDER BY service_gallery_id ASC limit 0,6 ";
                $Qga=mysqli_query($con,$selga);
                while($fga=mysqli_fetch_assoc($Qga)){
              ?>

                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="admin/uploads/<?= $fga['service_gallery_image']; ?>">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading"><?= $fga['service_gallery_title'];?></h3>
                            <p><?= $fga['service_gallery_subtitle'];?></p>
                        </div>
                    </div>
                </div>
              <?php } ?>
            </div>
            <!--/.row-->
        </div>
        <!--/.container-->
    </section>
    <!--/#services-->


    <section id="testimonial">
        <div class="container">
            <div class="center fadeInDown">
              <?php
                $sel3="SELECT * FROM cs_content WHERE content_id='4'";
                $Q3=mysqli_query($con,$sel3);
                $cont3=mysqli_fetch_assoc($Q3);
              ?>
                <h2><?= $cont3['content_title']; ?></h2>
                <p class="lead"><?= $cont3['content_subtitle']; ?></p>
            </div>
            <div class="testimonial-slider owl-carousel">
              <?php
                $selt="SELECT * FROM cs_test_gallery ORDER BY test_gallery_id ASC limit 0,6 ";
                $Qt=mysqli_query($con,$selt);
                while($test=mysqli_fetch_assoc($Qt)){
              ?>

                <div class="single-slide">
                    <div class="slide-img">
                        <img src="admin/uploads/<?= $test['test_gallery_image']; ?>" alt="">
                    </div>
                    <div class="content">
                        <img src="admin/uploads/<?= $test['serv_gastar_image']; ?>" alt="">
                        <p><?= $test['test_gallery_subtitle']; ?></p>
                        <h4><?= $test['test_gallery_title']; ?></h4>

                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </section>


    <section id="partner">
        <div class="container">
          <?php
            $sel5="SELECT * FROM cs_content WHERE content_id='5'";
            $Q5=mysqli_query($con,$sel5);
            $cont5=mysqli_fetch_assoc($Q5);
          ?>
            <div class="center fadeInDown">
                <h2><?= $cont5['content_title']; ?></h2>
                <p class="lead"><?= $cont5['content_subtitle']; ?></p>
            </div>

            <div class="partners">
                <ul>
                  <?php
                    $selp="SELECT * FROM cs_partners ORDER BY partners_id ASC limit 0,5 ";
                    $Qp=mysqli_query($con,$selp);
                    while($partners=mysqli_fetch_assoc($Qp)){
                  ?>
                    <li>
                        <a href="#"><img class="img-responsive fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms" src="admin/uploads/<?= $partners['partners_image']; ?>"></a>
                    </li>

                    <?php } ?>
                </ul>
            </div>
        </div>
        <!--/.container-->
    </section>
  <?php
    get_footer();
  ?>
