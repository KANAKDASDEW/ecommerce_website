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
                            <h4 class="card_header_title"><i class="fa fa-gg-circle"></i> All Contact Message</h4>
                      </div>
                      <div class="col-md-4 text-right">
                          <a class="btn btn-sm btn-dark card_top_btn" href="#"><i class="fa fa-th"></i> Link</a>
                      </div>
                      <div class="clearfix"></div>
                  </div>
              </div>
              <div class="card-body">
                  <table class="table table-bordered table-striped table-hover custom_table">
                    <thead class="thead-dark">
                      <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Email</th>
                        <th scope="col">Subject</th>
                        <th scope="col">Message</th>
                        <th scope="col">Manage</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                          $sel="SELECT * FROM cs_contact ORDER BY conus_id DESC";
                          $Q=mysqli_query($con,$sel);
                          while($data=mysqli_fetch_assoc($Q)){
                      ?>
                        <tr>
                          <td><?= $data['conus_name']; ?></td>
                          <td><?= $data['conus_phone']; ?></td>
                          <td><?= $data['conus_email']; ?></td>
                          <td><?= substr($data['conus_sub'],0,10); ?>...</td>
                          <td><?= substr($data['conus_mess'],0,20); ?>...</td>
                          <td>
                              <a href="view-message.php?v=<?= $data['conus_id']; ?>"><i class="fa fa-plus-square fa-lg"></i></a>
                              <a href="delete-message.php?d=<?= $data['conus_id']; ?>"><i class="fa fa-trash fa-lg"></i></a>
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
