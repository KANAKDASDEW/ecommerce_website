<?php
    require_once('functions/main.php');
    needLogged();
    if($_SESSION['role']=='1'){
    get_header();
    get_sidebar();

    if(!empty($_POST)){
      $title=$_POST['title'];
      $subtitle=$_POST['subtitle'];
      $image=$_FILES['pic'];
      $imageName='';
      if($image['name']!=''){
        $imageName='user_'.time().'_'.rand(100000,1000000).'.'.pathinfo($image['name'],PATHINFO_EXTENSION);
      }

      $insert="INSERT INTO cs_service_gallery(service_gallery_title,service_gallery_subtitle,service_gallery_image)
      VALUES('$title','$subtitle','$details','$imageName')";

      if(!empty($title)){
        if (!empty($subtitle)) {
          if (!empty($details)) {
            if(mysqli_query($con,$insert)){
              move_uploaded_file($image['tmp_name'],'uploads/'.$imageName);
              echo "image upload successful!";
            }else {
              echo "image upload failed!";
            }
          }else {
          echo "Please enter subtitle!";
        }
      }else {
        echo "Please enter title!";
      }
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
                              <h4 class="card_header_title"><i class="fa fa-gg-circle"></i> Upload service Information</h4>
                        </div>
                        <div class="col-md-4 text-right">
                            <a class="btn btn-sm btn-dark card_top_btn" href="service-all-banner.php"><i class="fa fa-th"></i> All service Banner</a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="card-body">
                   <div class="form-group row custom_form_group">
                      <label class="col-sm-3 col-form-label">Servicr Title:</label>
                      <div class="col-sm-7">
                        <input type="text" class="form-control" id="" name="title">
                      </div>
                    </div>
                    <div class="form-group row custom_form_group">
                       <label class="col-sm-3 col-form-label">Service Subtitle:</label>
                       <div class="col-sm-7">
                         <input type="text" class="form-control" id="" name="subtitle">
                       </div>
                    </div>


                    <div class="form-group row custom_form_group">
                       <label class="col-sm-3 col-form-label">service Image:</label>
                       <div class="col-sm-4">
                         <input type="file" id="upload" name="pic">
                         <img id="view_img" class="img-fluid img-thumbnail" src="images/avatar.png" alt="">
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
