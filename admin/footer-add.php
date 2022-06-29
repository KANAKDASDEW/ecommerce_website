
<?php
    require_once('functions/main.php');
    needLogged();
    if($_SESSION['role']=='1'){
    get_header();
    get_sidebar();
    if(!empty($_POST)){
      $title=$_POST['title'];
      $subtitle1=$_POST['subtitle1'];
      $subtitle2=$_POST['$subtitle2'];
      $subtitle3=$_POST['$subtitle3'];
      $subtitle4=$_POST['$subtitle4'];
      $subtitle5=$_POST['$subtitle5'];
      $subtitle6=$_POST['$subtitle6'];
      $subtitle7=$_POST['$subtitle7'];
      $image=$_FILES['pic'];
      $imageName='';
      if($image['name']!=''){
        $imageName='user_'.time().'_'.rand(100000,1000000).'.'.pathinfo($image['name'],PATHINFO_EXTENSION);
      }
      $insert="INSERT INTO cs_footer(footer_title,footer_subtitle1,footer_subtitle2,footer_subtitle3,footer_subtitle4,footer_subtitle4,footer_subtitle5,footer_subtitle6,footer_subtitle7,)
      VALUES('$title','$subtitle1','$subtitle2','$subtitle3','$subtitle4','$subtitle5','$subtitle6','$subtitle7')";

      if(!empty($title)){
        if (!empty($subtitle1)) {
          if (!empty($subtitle2)) {
            if(mysqli_query($con,$insert)){
              move_uploaded_file($image['tmp_name'],'uploads/'.$imageName);
              echo "Banner upload successful!";
            }else {
              echo "Banner upload failed!";
            }
          }else {
            echo "Please enter subtitle2!!";
          }
        }else {
          echo "Please enter subtitle1!";
        }
      }else {
        echo "Please enter title!";
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
                              <h4 class="card_header_title"><i class="fa fa-gg-circle"></i> Upload Banner Information</h4>
                        </div>
                        <div class="col-md-4 text-right">
                            <a class="btn btn-sm btn-dark card_top_btn" href="footer-all-banner.php"><i class="fa fa-th"></i> All Banner</a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="card-body">
                   <div class="form-group row custom_form_group">
                      <label class="col-sm-3 col-form-label">Footer Title:</label>
                      <div class="col-sm-7">
                        <input type="text" class="form-control" id="" name="title">
                      </div>
                    </div>
                    <div class="form-group row custom_form_group">
                       <label class="col-sm-3 col-form-label">Footer Subtitle1:</label>
                       <div class="col-sm-7">
                         <input type="text" class="form-control" id="" name="subtitle">
                       </div>
                    </div>
                    <div class="form-group row custom_form_group">
                       <label class="col-sm-3 col-form-label">Footer Subtitle2:</label>
                       <div class="col-sm-7">
                         <input type="text" class="form-control" id="" name="subtitle">
                       </div>
                    </div>
                    <div class="form-group row custom_form_group">
                       <label class="col-sm-3 col-form-label">Footer Subtitle3:</label>
                       <div class="col-sm-7">
                         <input type="text" class="form-control" id="" name="subtitle">
                       </div>
                    </div>
                    <div class="form-group row custom_form_group">
                       <label class="col-sm-3 col-form-label">Footer Subtitle4:</label>
                       <div class="col-sm-7">
                         <input type="text" class="form-control" id="" name="subtitle">
                       </div>
                    </div>
                    <div class="form-group row custom_form_group">
                       <label class="col-sm-3 col-form-label">Footer Subtitle5:</label>
                       <div class="col-sm-7">
                         <input type="text" class="form-control" id="" name="subtitle">
                       </div>
                    </div>
                    <div class="form-group row custom_form_group">
                       <label class="col-sm-3 col-form-label">Footer Subtitle6:</label>
                       <div class="col-sm-7">
                         <input type="text" class="form-control" id="" name="subtitle">
                       </div>
                    </div>
                    <div class="form-group row custom_form_group">
                       <label class="col-sm-3 col-form-label">Footer Subtitle7:</label>
                       <div class="col-sm-7">
                         <input type="text" class="form-control" id="" name="subtitle">
                       </div>
                    </div>



                </div>
                <div class="card-footer text-center">
                    <button type="submit" class="btn btn-sm btn-dark submit_btn">UPLOAD</button>
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
