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
                            <h4 class="card_header_title"><i class="fa fa-gg-circle"></i> All User Information</h4>
                      </div>
                      <div class="col-md-4 text-right">
                          <a class="btn btn-sm btn-dark card_top_btn" href="footer-add-.php"><i class="fa fa-th"></i> Add User</a>
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
                        <th scope="col">Username</th>
                        <th scope="col">Role</th>
                        <th scope="col">Photo</th>
                        <th scope="col">Manage</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                          $sel="SELECT * FROM cs_user NATURAL JOIN cs_role ORDER BY user_id DESC";
                          $Q=mysqli_query($con,$sel);
                          while($data=mysqli_fetch_assoc($Q)){
                      ?>
                        <tr>
                          <td><?php echo $data['footer_title']; ?></td>
                          <td><?= $data['footer_subtitle1']; ?></td>
                          <td><?= $data['footer_subtitle2']; ?></td>
                          <td><?= $data['footer_subtitle3']; ?></td>
                          <td><?= $data['footer_subtitle4']; ?></td>
                          <td><?= $data['footer_subtitle5']; ?></td>
                          <td><?= $data['footer_subtitle6']; ?></td>
                          <td><?= $data['footer_subtitle7']; ?></td>

                          <td>
                            <?php if($data['user_photo']!=''){?>
                              <img height="40" width="50" src="uploads/<?= $data['user_photo']; ?>" alt="photo"/>
                            <?php }else{ ?>
                              <img height="40" width="50" src="uploads/avatar.png" alt="photo"/>
                            <?php } ?>
                          </td>
                          <td>
                              <a href="footer-view-user.php?v=<?= $data['footer_id']; ?>"><i class="fa fa-plus-square fa-lg"></i></a>
                              <a href="footer-edit-user.php?e=<?= $data['footer_id']; ?>"><i class="fa fa-pencil-square fa-lg"></i></a>
                              <a href="footer-delete-user.php?d=<?= $data['footer_id']; ?>"><i class="fa fa-trash fa-lg"></i></a>
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
