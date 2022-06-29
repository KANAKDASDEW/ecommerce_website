
<?php
    $db_name='corlate';
    $db_host='localhost';
    $db_user='root';
    $db_pass='';

    $con=mysqli_connect($db_host,$db_user,$db_pass,$db_name);
    if(!$con){
        echo "Database connection error!";
    }
?>

<section id="bottom">
    <div class="container fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
        <div class="row">
            <div class="col-md-2">
                <a href="#" class="footer-logo">
                    <img src="images/logo-black.png" alt="logo">
                </a>
            </div>
            <div class="col-md-10">
                <div class="row">
                  <?php
                    $selfo="SELECT * FROM cs_footer ORDER BY footer_id ASC limit 0,7 ";
                    $Qfo=mysqli_query($con,$selfo);
                    while($footer=mysqli_fetch_assoc($Qfo)){
                  ?>

                    <div class="col-md-3 col-sm-6">
                        <div class="widget">
                            <h3><?= $footer['footer_title']; ?></h3>
                            <ul>
                                <li><a href="#"><?= $footer['footer_subtitle1']; ?></a></li>
                                <li><a href="#"><?= $footer['footer_subtitle2']; ?></a></li>
                                <li><a href="#"><?= $footer['footer_subtitle3']; ?></a></li>
                                <li><a href="#"><?= $footer['footer_subtitle4']; ?></a></li>
                                <li><a href="#"><?= $footer['footer_subtitle5']; ?></a></li>
                                <li><a href="#"><?= $footer['footer_subtitle6']; ?></a></li>
                                <li><a href="#"><?= $footer['footer_subtitle7']; ?></a></li>

                            </ul>
                        </div>
                    </div>
                  <?php } ?>

                </div>

            </div>


        </div>
    </div>
</section>
<!--/#bottom-->

<footer id="footer" class="midnight-blue">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                &copy; 2013 <a target="_blank" href="http://shapebootstrap.net/" title="Free Twitter Bootstrap WordPress Themes and HTML templates">ShapeBootstrap</a>. All Rights Reserved.
            </div>
            <div class="col-sm-6">

                <ul class="pull-right">
                  <?php
                    $selfoo="SELECT * FROM cs_fot_sc ORDER BY footer_id ASC limit 0,4 ";
                    $Qfoo=mysqli_query($con,$selfoo);
                    while($footero=mysqli_fetch_assoc($Qfoo)){
                  ?>
                    <li><a href="#"><?= $footero['footer_subtitle1']; ?></a></li>
                    <li><a href="#"><?= $footero['footer_subtitle2']; ?></a></li>
                    <li><a href="#"><?= $footero['footer_subtitle3']; ?></a></li>
                    <li><a href="#"><?= $footero['footer_subtitle4']; ?></a></li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</footer>
<!--/#footer-->

<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.prettyPhoto.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.isotope.min.js"></script>
<script src="js/main.js"></script>
</body>

</html>
