<?php
    require_once('functions/manage.php');
    get_header();
?>
    <section id="main-slider" class="no-margin">
        <?php
          $i=1;
          $sel="SELECT * FROM cs_banner ORDER BY ban_id ASC";
          $Q=mysqli_query($con,$sel);
        ?>
        <ol class="carousel-indicators">
            <?php
            $i=1;
            $sel="SELECT * FROM cs_banner ORDER BY ban_id ASC";
            $Q=mysqli_query($con,$sel);
            while($banner=mysqli_fetch_assoc($Q)){
            ?>
            <li data-target="#main-slider" data-slide-to="<?= $i++; ?>" class="<?php if($i++=='2'){echo 'active';} ?>"></li>
            <?php } ?>
        </ol>
        <div class="carousel slide">
            <div class="carousel-inner">
                <?php
                  $i=1;
                  $sel="SELECT * FROM cs_banner ORDER BY ban_id ASC";
                  $Q=mysqli_query($con,$sel);
                  while($banner=mysqli_fetch_assoc($Q)){
                ?>
                <div class="item <?php if($i++=='2'){echo 'active';} ?>" style="background-image: url(admin/uploads/<?= $banner['ban_image']; ?>)">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="carousel-content">
                                    <h1 class="animation animated-item-1">Help Finding Information Online</h1>
                                    <div class="animation animated-item-2">
                                        Every new computer that’s brought home from the store has an operating system installed onto it.
                                    </div>
                                    <a class="btn-slide animation animated-item-3" href="#">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
        <a class="prev hidden-xs hidden-sm" href="#main-slider" data-slide="prev">
            <i class="fa fa-chevron-left"></i>
        </a>
        <a class="next hidden-xs hidden-sm" href="#main-slider" data-slide="next">
            <i class="fa fa-chevron-right"></i>
        </a>
    </section>
    <section id="feature">
        <div class="container">
            <div class="center fadeInDown">
              <?php
                $sel1="SELECT * FROM cs_content WHERE content_id='1'";
                $Q1=mysqli_query($con,$sel1);
                $cont1=mysqli_fetch_assoc($Q1);
              ?>
                <h2><?= $cont1['content_title']; ?></h2>
                <p class="lead"><?= $cont1['content_subtitle']; ?></p>
            </div>

            <div class="row">
                <div class="features">
                    <?php
                      $selfe="SELECT * FROM cs_feature ORDER BY feature_id ASC limit 0,4 ";
                      $Qfe=mysqli_query($con,$selfe);
                      while($feat=mysqli_fetch_assoc($Qfe)){
                    ?>
                    <div class="col-md-3 col-sm-4 fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <div class="icon">
                                <i class="fa <?= $feat['feature_image'];?>"></i>
                            </div>
                            <h2><?= $feat['feature_title'];?></h2>
                            <p><?= $feat['feature_details'];?></p>
                        </div>
                    </div>
                  <?php } ?>
                </div>
                <!--/.services-->
            </div>
            <!--/.row-->
        </div>
        <!--/.container-->
    </section>
    <!--/#feature-->

    <section id="recent-works">
        <div class="container">
            <div class="center fadeInDown">
                <h2>Recent Works</h2>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
            </div>

            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-4 single-work">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="images/portfolio/item-1.png" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <a class="preview" href="images/portfolio/item-1.png" rel="prettyPhoto"><i class="fa fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-4 single-work">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="images/portfolio/item-2.png" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <a class="preview" href="images/portfolio/item-2.png" rel="prettyPhoto"><i class="fa fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-4 single-work">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="images/portfolio/item-3.png" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <a class="preview" href="images/portfolio/item-3.png" rel="prettyPhoto"><i class="fa fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-4 single-work">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="images/portfolio/item-4.png" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <a class="preview" href="images/portfolio/item-4.png" rel="prettyPhoto"><i class="fa fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-4 single-work">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="images/portfolio/item-5.png" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <a class="preview" href="images/portfolio/item-5.png" rel="prettyPhoto"><i class="fa fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-4 single-work">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="images/portfolio/item-6.png" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <a class="preview" href="images/portfolio/item-6.png" rel="prettyPhoto"><i class="fa fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/.row-->
            <div class="clearfix text-center">
                <br>
                <br>
                <a href="#" class="btn btn-primary">Show More</a>
            </div>
        </div>
        <!--/.container-->
    </section>
    <!--/#recent-works-->

    <section id="services" class="service-item">
        <div class="container">
            <div class="center fadeInDown">
                <h2>Our Service</h2>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
            </div>

            <div class="row">

                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="images/services/ux.svg">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">UI/UX Design</h3>
                            <p>Hydroderm is the highly desired anti-aging cream on</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="images/services/web.svg">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Web Design</h3>
                            <p>Hydroderm is the highly desired anti-aging cream on</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="images/services/motion.svg">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Motion Graphics</h3>
                            <p>Hydroderm is the highly desired anti-aging cream on</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="images/services/mobile-ui.svg">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Mobile UI/UX</h3>
                            <p>Hydroderm is the highly desired anti-aging cream on</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="images/services/web-app.svg">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Web Applications</h3>
                            <p>Hydroderm is the highly desired anti-aging cream on</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="images/services/mobile-ui.svg">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">SEO Marketing</h3>
                            <p>Hydroderm is the highly desired anti-aging cream on</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="middle" class="skill-area" style="background-image: url(images/skill-bg.png)">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 fadeInDown">
                    <div class="skill">
                        <h2>Our Skills</h2>
                        <p>All users on MySpace will know that there are millions of people out there. Every <br> day besides so many people joining this community.</p>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="progress-wrap">
                        <h3>Graphic Design</h3>
                        <div class="progress">
                            <div class="progress-bar  color1" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 85%">
                                <span class="bar-width">85%</span>
                            </div>

                        </div>
                    </div>

                    <div class="progress-wrap">
                        <h3>HTML</h3>
                        <div class="progress">
                            <div class="progress-bar color2" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 95%">
                                <span class="bar-width">95%</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="progress-wrap">
                        <h3>CSS</h3>
                        <div class="progress">
                            <div class="progress-bar color3" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                <span class="bar-width">80%</span>
                            </div>
                        </div>
                    </div>

                    <div class="progress-wrap">
                        <h3>Wordpress</h3>
                        <div class="progress">
                            <div class="progress-bar color4" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
                                <span class="bar-width">90%</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="content">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-10 col-sm-offset-1 fadeInDown">
                    <div class="tab-wrap">
                        <div class="media">
                            <div class="parrent pull-left">
                                <ul class="nav nav-tabs nav-stacked">
                                    <li class=""><a href="#tab1" data-toggle="tab" class="analistic-01">Responsive Web Design</a></li>
                                    <li class="active"><a href="#tab2" data-toggle="tab" class="analistic-02">Premium Plugin Included</a></li>
                                    <li class=""><a href="#tab3" data-toggle="tab" class="tehnical">Predefine Layout</a></li>
                                    <li class=""><a href="#tab4" data-toggle="tab" class="tehnical">Our Philosopy</a></li>
                                    <li class=""><a href="#tab5" data-toggle="tab" class="tehnical">What We Do?</a></li>
                                </ul>
                            </div>

                            <div class="parrent media-body">
                                <div class="tab-content">
                                    <div class="tab-pane fade" id="tab1">
                                        <div class="media">
                                            <div class="pull-left">
                                                <img class="img-responsive" src="images/tab2.png">
                                            </div>
                                            <div class="media-body">
                                                <h2>Adipisicing elit</h2>
                                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab-pane fade active in text-right" id="tab2">
                                        <div class="video-box">
                                            <img src="images/tab-video-bg.png" alt="video">
                                            <a class="video-icon" href="http://www.youtube.com/watch?v=cH6kxtzovew" rel="prettyPhoto"><i class="fa fa-play"></i></a>
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="tab3">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit.</p>
                                    </div>

                                    <div class="tab-pane fade" id="tab4">
                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words</p>
                                    </div>

                                    <div class="tab-pane fade" id="tab5">
                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures,</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="testimonial">
        <div class="container">
            <div class="center fadeInDown">
                <h2>Testimonials</h2>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
            </div>
            <div class="testimonial-slider owl-carousel">
                <div class="single-slide">
                    <div class="slide-img">
                        <img src="images/client1.jpg" alt="">
                    </div>
                    <div class="content">
                        <img src="images/review.png" alt="">
                        <p>If you are looking at blank cassettes on the web, you may be very confused at the difference in price.</p>
                        <h4>- Charlotte Daniels</h4>
                    </div>
                </div>
                <div class="single-slide">
                    <div class="slide-img">
                        <img src="images/client2.jpg" alt="">
                    </div>
                    <div class="content">
                        <img src="images/review.png" alt="">
                        <p>If you are looking at blank cassettes on the web, you may be very confused at the difference in price.</p>
                        <h4>- Charlotte Daniels</h4>
                    </div>
                </div>
                <div class="single-slide">
                    <div class="slide-img">
                        <img src="images/client3.jpg" alt="">
                    </div>
                    <div class="content">
                        <img src="images/review.png" alt="">
                        <p>If you are looking at blank cassettes on the web, you may be very confused at the difference in price.</p>
                        <h4>- Charlotte Daniels</h4>
                    </div>
                </div>
                <div class="single-slide">
                    <div class="slide-img">
                        <img src="images/client2.jpg" alt="">
                    </div>
                    <div class="content">
                        <img src="images/review.png" alt="">
                        <p>If you are looking at blank cassettes on the web, you may be very confused at the difference in price.</p>
                        <h4>- Charlotte Daniels</h4>
                    </div>
                </div>
                <div class="single-slide">
                    <div class="slide-img">
                        <img src="images/client1.jpg" alt="">
                    </div>
                    <div class="content">
                        <img src="images/review.png" alt="">
                        <p>If you are looking at blank cassettes on the web, you may be very confused at the difference in price.</p>
                        <h4>- Charlotte Daniels</h4>
                    </div>
                </div>
                <div class="single-slide">
                    <div class="slide-img">
                        <img src="images/client3.jpg" alt="">
                    </div>
                    <div class="content">
                        <img src="images/review.png" alt="">
                        <p>If you are looking at blank cassettes on the web, you may be very confused at the difference in price.</p>
                        <h4>- Charlotte Daniels</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="partner">
        <div class="container">
            <div class="center fadeInDown">
                <h2>Our Partners</h2>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
            </div>
            <div class="partners">
                <ul>
                    <li>
                        <a href="#"><img class="img-responsive fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms" src="images/partners/brand-1.png"></a>
                    </li>
                    <li>
                        <a href="#"><img class="img-responsive fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms" src="images/partners/brand-2.png"></a>
                    </li>
                    <li>
                        <a href="#"><img class="img-responsive fadeInDown" data-wow-duration="1000ms" data-wow-delay="900ms" src="images/partners/brand-3.png"></a>
                    </li>
                    <li>
                        <a href="#"><img class="img-responsive fadeInDown" data-wow-duration="1000ms" data-wow-delay="1200ms" src="images/partners/brand-4.png"></a>
                    </li>
                    <li>
                        <a href="#"><img class="img-responsive fadeInDown" data-wow-duration="1000ms" data-wow-delay="1500ms" src="images/partners/brand-5.png"></a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
<?php
    get_footer();
?>
