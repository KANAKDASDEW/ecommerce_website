<?php
    require_once('functions/main.php');
    needLogged();
    get_header();
    get_sidebar();

    $eid=$_GET['e'];
    $sel="SELECT * FROM cs_test_gallery WHERE test_gallery_id='$eid'";
    $Q=mysqli_query($con,$sel);
    $data=mysqli_fetch_assoc($Q);

    if(!empty($_POST)){
        $id=$_POST['id'];
        $title=$_POST['title'];
        $subtitle=$_POST['subtitle'];
        $role=$_POST['role'];
        $imageName='';
        if($image['name']!=''){
          $imageName='user_'.time().'_'.rand(100000,1000000).'.'.pathinfo($image['name'],PATHINFO_EXTENSION);
        }

        $update="UPDATE cs_test_gallery SET test_gallery_title='$title', test_gallery_subtitle='$subtitle',test_gallery_image='$imageName' role_id='$role' WHERE user_id='$id'";
        if(!empty($name)){
            if(mysqli_query($con,$update)){
              header('Location: view-user.php?v='.$id);
            }else{
              echo "Update failed!";
            }
        }else{
            echo "Please enter your name!";
        }
    }
?>
    <div class="row">
        <div class="col-md-12 main_content">
            <form method="post" action="">
              <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-8">
                              <h4 class="card_header_title"><i class="fa fa-gg-circle"></i> Update User Information</h4>
                        </div>
                        <div class="col-md-4 text-right">
                            <a class="btn btn-sm btn-dark card_top_btn" href="test-all-banner.php"><i class="fa fa-th"></i> All User</a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="card-body">
                   <div class="form-group row custom_form_group">
                      <label class="col-sm-3 col-form-label">Title:</label>
                      <div class="col-sm-7">
                        <input type="hidden" name="id" value="<?= $data['test_gallery_id']; ?>"/>
                        <input type="text" class="form-control" id="" name="name" value="<?= $data['test_gallery_title']; ?>">
                      </div>
                    </div>
                    <div class="form-group row custom_form_group">
                       <label class="col-sm-3 col-form-label">Subtitle:</label>
                       <div class="col-sm-7">
                         <input type="text" class="form-control" id="" name="phone" value="<?= $data['test_gallery_subtitle']; ?>">
                       </div>
                    </div>


                    <div class="form-group row custom_form_group">
                       <label class="col-sm-3 col-form-label">User Role:</label>
                       <div class="col-sm-7">
                         <select class="form-control" name="role">
                           <option value="">---------</option>
                           <?php
                              $selr="SELECT * FROM cs_role ORDER BY role_id ASC";
                              $Qr=mysqli_query($con,$selr);
                              while($urole=mysqli_fetch_assoc($Qr)){
                           ?>
                           <option value="<?= $urole['role_id']; ?>" <?php if($urole['role_id']==$data['role_id']) echo "selected"; ?>><?= $urole['role_name']; ?></option>
                          <?php } ?>
                         </select>
                       </div>
                    </div>
                    <div class="form-group row custom_form_group">
                       <label class="col-sm-3 col-form-label">Image:</label>
                       <div class="col-sm-7">
                         <input type="file" id="" name="pic">
                       </div>
                    </div>
                </div>
                <div class="card-footer text-center">
                    <button type="submit" class="btn btn-sm btn-dark submit_btn">UPDATE</button>
                </div>
              </div>
          </form>
        </div>
    </div>
<?php
    get_footer();
?>
