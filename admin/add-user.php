<?php
    require_once('functions/main.php');
    needLogged();
    if($_SESSION['role']=='1'){
    get_header();
    get_sidebar();

    if(!empty($_POST)){
        $date = date('Y-m-d h:i:s',time() + 5*3600);
        $name=$_POST['name'];
        $phone=$_POST['phone'];
        $email=$_POST['email'];
        $user=$_POST['username'];
        $pw=md5($_POST['pass']);
        $rpw=md5($_POST['repass']);
        $role=$_POST['role'];
        $image=$_FILES['pic'];
        $imageName='';
        if($image['name']!=''){
          $imageName='user_'.time().'_'.rand(100000,1000000).'.'.pathinfo($image['name'],PATHINFO_EXTENSION);
        }
        $insert="INSERT INTO cs_user(user_name,user_phone,user_email,user_username,user_password,role_id,user_photo,user_reg_time)
        VALUES('$name','$phone','$email','$user','$pw','$role','$imageName','$date')";

        if(!empty($name)){
          if(!empty($user)){
            if(!empty($pw)){
              if(!empty($pw===$rpw)){
                if(!empty($role)){
                  if(mysqli_query($con,$insert)){
                      move_uploaded_file($image['tmp_name'],'uploads/'.$imageName);
                      echo "User registration success.";
                  }else{
                      echo "Registration failed! please try again.";
                  }
                }else{
                  echo "Please select user role!";
                }
              }else{
                  echo "Password did'nt match!";
              }
            }else{
                echo "Please enter password!";
            }
          }else{
              echo "Please enter username!";
          }
       }else{
            echo "Please enter name!";
       }
    }
?>
    <div class="row">
        <div class="col-md-12 main_content">
            <form method="post" action="" enctype="multipart/form-data">
              <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-8">
                              <h4 class="card_header_title"><i class="fa fa-gg-circle"></i> User Registration</h4>
                        </div>
                        <div class="col-md-4 text-right">
                            <a class="btn btn-sm btn-dark card_top_btn" href="all-user.php"><i class="fa fa-th"></i> All User</a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="card-body">
                   <div class="form-group row custom_form_group">
                      <label class="col-sm-3 col-form-label">Name:</label>
                      <div class="col-sm-7">
                        <input type="text" class="form-control" id="" name="name">
                      </div>
                    </div>
                    <div class="form-group row custom_form_group">
                       <label class="col-sm-3 col-form-label">Phone:</label>
                       <div class="col-sm-7">
                         <input type="text" class="form-control" id="" name="phone">
                       </div>
                    </div>
                    <div class="form-group row custom_form_group">
                      <label class="col-sm-3 col-form-label">Email:</label>
                      <div class="col-sm-7">
                        <input type="email" class="form-control" id="" name="email">
                      </div>
                    </div>
                    <div class="form-group row custom_form_group">
                       <label class="col-sm-3 col-form-label">Username:</label>
                       <div class="col-sm-7">
                         <input type="text" class="form-control" id="" name="username">
                       </div>
                    </div>
                    <div class="form-group row custom_form_group">
                       <label class="col-sm-3 col-form-label">Password:</label>
                       <div class="col-sm-7">
                         <input type="password" class="form-control" id="" name="pass">
                       </div>
                    </div>
                    <div class="form-group row custom_form_group">
                       <label class="col-sm-3 col-form-label">Confirm-Password:</label>
                       <div class="col-sm-7">
                         <input type="password" class="form-control" id="" name="repass">
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
                           <option value="<?= $urole['role_id']; ?>"><?= $urole['role_name']; ?></option>
                          <?php } ?>
                         </select>
                       </div>
                    </div>
                    <div class="form-group row custom_form_group">
                       <label class="col-sm-3 col-form-label">Image:</label>
                       <div class="col-sm-4">
                         <input type="file" id="upload" name="pic">
                         <img id="view_img" class="img-fluid img-thumbnail" src="images/avatar.png" alt="">
                       </div>
                    </div>
                </div>
                <div class="card-footer text-center">
                    <button type="submit" class="btn btn-sm btn-dark submit_btn">REGISTRATION</button>
                </div>
              </div>
          </form>
        </div>
    </div>
<?php
    get_footer();
  }else{
    header('Location:index.php');
  }
?>
