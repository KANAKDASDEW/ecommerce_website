<?php
    require_once('functions/main.php');
    get_header();
    get_sidebar();

    $id=$_GET['v'];
    $sel="SELECT * FROM cs_footer WHERE footer_id='$id'";
    $Q=mysqli_query($con,$sel);
    $info=mysqli_fetch_assoc($Q);
?>
    <div class="row">
        <div class="col-md-12 main_content">
            <div class="card">
              <div class="card-header">
                  <div class="row">
                      <div class="col-md-8">
                            <h4 class="card_header_title"><i class="fa fa-gg-circle"></i> View footer Message</h4>
                      </div>
                      <div class="col-md-4 text-right">
                          <a class="btn btn-sm btn-dark card_top_btn" href="footer-all-message.php"><i class="fa fa-th"></i> All Message</a>
                      </div>
                      <div class="clearfix"></div>
                  </div>
              </div>
              <div class="card-body">
                  <div class="row">
                      <div class="col-md-2"></div>
                      <div class="col-md-8">
                          <table class="table table-bordered table-striped table-hover custom_view_table">
                              <tr>
                                  <td>Title</td>
                                  <td>:</td>
                                  <td><?= $info['footer_title']; ?></td>
                              </tr>
                              <tr>
                                  <td>Subtitle</td>
                                  <td>:</td>
                                  <td><?= $info['footer_subtitle1']; ?></td>
                              </tr>
                              <tr>
                                  <td>Subtitle</td>
                                  <td>:</td>
                                  <td><?= $info['footer_subtitle2']; ?></td>
                              </tr>
                              <tr>
                                  <td>Subtitle</td>
                                  <td>:</td>
                                  <td><?= $info['footer_subtitle3']; ?></td>
                              </tr>
                              <tr>
                                  <td>Subtitle</td>
                                  <td>:</td>
                                  <td><?= $info['footer_subtitle4']; ?></td>
                              </tr>
                              <tr>
                                  <td>Subtitle</td>
                                  <td>:</td>
                                  <td><?= $info['footer_subtitle5']; ?></td>
                              </tr>
                              <tr>
                                  <td>Subtitle</td>
                                  <td>:</td>
                                  <td><?= $info['footer_subtitle6']; ?></td>
                              </tr>
                              <tr>
                                  <td>Subtitle</td>
                                  <td>:</td>
                                  <td><?= $info['footer_subtitle7']; ?></td>
                              </tr>

                          </table>
                      </div>
                      <div class="col-md-2"></div>
                  </div>
              </div>
              <div class="card-footer text-center">
                  .
              </div>
            </div>
        </div>
    </div>
<?php
    get_footer();
?>
