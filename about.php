<?php
    require_once('functions/manage.php');
    get_header();
?>

    <div class="page-title" style="background-image: url(images/page-title.png)">
        <h1>About us</h1>
    </div>

    <section id="about-us">
        <div class="container">
            <div class="row">
                <?php
                  $sel2="SELECT * FROM cs_content WHERE content_id='2'";
                  $Q2=mysqli_query($con,$sel2);
                  $cont2=mysqli_fetch_assoc($Q2);
                ?>
                <div class="col-md-7">
                    <div class="about-img">
                        <img src="admin/uploads/<?= $cont2['content_image']; ?>" alt="">
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="about-content">
                        <h2><?= $cont2['content_title'];?></h2>
                        <p><?= $cont2['content_details'];?></p>
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
                      <?php
                        $se14="SELECT * FROM cs_content WHERE content_id='7'";
                        $Q14=mysqli_query($con,$se14);
                        $cont14=mysqli_fetch_assoc($Q14);
                      ?>
                        <h2><?= $cont14['content_title'];?></h2>
                        <p><?= $cont14['content_subtitle'];?></p>
                    </div>
                </div>
                <!--/.col-sm-6-->


                  <?php
                    $selskil="SELECT * FROM cs_skil ORDER BY skil_id ASC limit 0,2 ";
                    $Qskil=mysqli_query($con,$selskil);
                    while($skil=mysqli_fetch_assoc($Qskil)){
                  ?>
                    <div class="col-sm-6">
                    <div class="progress-wrap">
                        <h3><?= $skil['skil_title'];?></h3>
                        <div class="progress">
                            <div class="progress-bar  color1" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 85%">
                                <span class="bar-width"><?= $skil['skil_subtitle'];?></span>
                            </div>

                        </div>
                    </div>

                    <div class="progress-wrap">
                        <h3><?= $skil['skil_title1'];?></h3>
                        <div class="progress">
                            <div class="progress-bar color2" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 95%">
                                <span class="bar-width"><?= $skil['skil_subtitle2'];?></span>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
            <!--/.row-->
        </div>
        <!--/.container-->
    </section>
    <!--/#middle-->

    <section id="team-area">
        <div class="container">
            <div class="center fadeInDown">
              <?php
                $sel9="SELECT * FROM cs_content WHERE content_id='6'";
                $Q9=mysqli_query($con,$sel9);
                $cont9=mysqli_fetch_assoc($Q9);
              ?>
                <h2><?= $cont9['content_title'];?></h2>
                <p class="lead"><?= $cont9['content_subtitle'];?></p>
            </div>
            <div class="row">
              <?php
                $selab="SELECT * FROM cs_about ORDER BY about_id ASC limit 0,6 ";
                $Qab=mysqli_query($con,$selab);
                while($about=mysqli_fetch_assoc($Qab)){
              ?>
                <div class="col-md-4 col-sm-6 single-team">
                    <div class="inner">
                        <div class="team-img">
                            <img src="admin/uploads/<?= $about['about_image']; ?>" alt="">
                        </div>
                        <div class="team-content">
                            <h4><?= $about['about_title'];?></h4>
                            <span class="desg"><?= $about['about_subtitle'];?></span>
                            <div class="team-social">
                                <a class="fa <?= $about['about_icon'];?>" href="#"></a>
                                <a class="fa <?= $about['about_icon2'];?>" href="#"></a>
                                <a class="fa <?= $about['about_icon3'];?>" href="#"></a>
                                <a class="fa <?= $about['about_icon4'];?>" href="#"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>

            </div>
        </div>
    </section>
<?php
    get_footer();
?>
