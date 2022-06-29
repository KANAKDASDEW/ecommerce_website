<?php
    require_once('functions/main.php');
    needLogged();
    $id=$_GET['d'];
    $del="DELETE FROM cs_user WHERE user_id='$id'";
    if(mysqli_query($con,$del)){
      header('Location:all-user.php');
    }
?>
