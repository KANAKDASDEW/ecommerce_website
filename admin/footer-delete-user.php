<?php
    require_once('functions/main.php');
    needLogged();
    $id=$_GET['d'];
    $del="DELETE FROM cs_footer WHERE footer_id='$id'";
    if(mysqli_query($con,$del)){
      header('Location:footer-all-user.php');
    }
?>
