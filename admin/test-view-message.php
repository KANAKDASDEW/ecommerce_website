<?php
    require_once('functions/main.php');
    get_header();
    get_sidebar();

    $id=$_GET['v'];
    $sel="SELECT * FROM cs_test_gallery WHERE test_gallery_id='$id'";
    $Q=mysqli_query($con,$sel);
    $info=mysqli_fetch_assoc($Q);
?>
    <div class="row">
        <div class="col-md-12 main_content">
            <div class="card">
              <div class="card-header">
                  <div class="row">
                      <div class="col-md-8">
                            <h4 class="card_header_title"><i class="fa fa-gg-circle"></i> View Contact Message</h4>
                      </div>
                      <div class="col-md-4 text-right">
                          <a class="btn btn-sm btn-dark card_top_btn" href="test-all-message.php"><i class="fa fa-th"></i> All Message</a>
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
                                  <td><?= $info['test_gallery_title']; ?></td>
                              </tr>
                              <tr>
                                  <td>Subtitle</td>
                                  <td>:</td>
                                  <td><?= $info['test_gallery_subtitle']; ?></td>
                              </tr>


                              <tr>
                                  <td>Message</td>
                                  <td>:</td>
                                  <td><?= $info['conus_mess']; ?></td>
                              </tr>
                              <tr>
                                  <td>Message Time</td>
                                  <td>:</td>
                                  <td>...</td>
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
