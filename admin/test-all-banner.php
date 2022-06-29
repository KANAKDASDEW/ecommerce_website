<?php
    require_once('functions/main.php');
    needLogged();
    if($_SESSION['role']=='1'){
    get_header();
    get_sidebar();
?>
    <div class="row">
        <div class="col-md-12 main_content">
            <div class="card">
              <div class="card-header">
                  <div class="row">
                      <div class="col-md-8">
                            <h4 class="card_header_title"><i class="fa fa-gg-circle"></i> All service Information</h4>
                      </div>
                      <div class="col-md-4 text-right">
                          <a class="btn btn-sm btn-dark card_top_btn" href="test-add.php"><i class="fa fa-th"></i> Add service Banner</a>
                      </div>
                      <div class="clearfix"></div>
                  </div>
              </div>
              <div class="card-body">
                  <table class="table table-bordered table-striped table-hover custom_table">
                    <thead class="thead-dark">
                      <tr>
                        <th scope="col">Title</th>
                        <th scope="col">Subtitle</th>
                        <th scope="col">Image</th>
                        <th scope="col">Manage</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                          $sel="SELECT * FROM cs_test_gallery ORDER BY test_gallery_id DESC";
                          $Q=mysqli_query($con,$sel);
                          while($data=mysqli_fetch_assoc($Q)){
                      ?>
                        <tr>
                          <td><?= $data['test_gallery_title']; ?></td>
                          <td><?= $data['test_gallery_subtitle']; ?></td>

                          <td>
                            <?php if($data['test_gallery_image']!=''){?>
                              <img height="40" width="50" src="uploads/<?= $data['test_gallery_image']; ?>" alt="photo"/>
                            <?php }else{ ?>
                              <img height="40" width="50" src="uploads/avatar.png" alt="photo"/>
                            <?php } ?>
                          </td>

                          <td>
                              <a href="content-view-message.php?v=<?= $data['test_gallery_id']; ?>"><i class="fa fa-plus-square fa-lg"></i></a>
                              <a href="service-edit-user.php?e=<?= $data['test_gallery_id']; ?>"><i class="fa fa-pencil-square fa-lg"></i></a>
                              <a href="delete-banner.php?d=<?= $data['test_gallery_id']; ?>"><i class="fa fa-trash fa-lg"></i></a>
                          </td>
                        </tr>
                      <?php } ?>
                    </tbody>
                  </table>
              </div>
              <div class="card-footer text-center">
                  .
              </div>
            </div>
        </div>
    </div>
<?php
    get_footer();
  }else{
    header('Location:index.php');
  }
?>
