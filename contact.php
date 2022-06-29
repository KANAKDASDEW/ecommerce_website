<?php
    require_once('functions/manage.php');
    get_header();
?>
    <div class="page-title" style="background-image: url(images/page-title.png)">
        <h1>Contact us</h1>
    </div>

    <section id="contact-page">
        <div class="container">
            <div class="large-title text-center">
                <h2>Drop Your Message</h2>
                <p>All users on MySpace will know that there are millions of people out there. Every day <br> besides so many people joining this community.</p>
            </div>
            <div class="row contact-wrap">
                <div class="status alert alert-success" style="display: none"></div>
                <?php
                    if(isset($_POST['submit'])){
                        $name=htmlentities($_POST['name'],ENT_QUOTES);
                        $email=htmlentities($_POST['email'],ENT_QUOTES);
                        $phone=htmlentities($_POST['phone'],ENT_QUOTES);
                        $sub=htmlentities($_POST['subject'],ENT_QUOTES);
                        $mess=htmlentities($_POST['message'],ENT_QUOTES);
                        //$msg='Name: '.$name.'/n'.'Email: '.$email.'/n'.'Phone: '.$phone.'/n'.'Subejct: '.$sub.'/n'.'Message: '.$mess.'/n';
                        $insert="INSERT INTO cs_contact(conus_name,conus_email,conus_phone,conus_sub,conus_mess)
                        VALUES('$name','$email','$phone','$sub','$mess')";

                        if(mysqli_query($con,$insert)){
                            //mail("uzzal@gmail.com","Creative :: Contact Us",$msg);
                            echo "<script>alert('Successfully send your information!')</script>";
                        }else{
                          echo "<script>alert('Mewssage send failed!')</script>";
                        }

                    }
                ?>
                <form class="contact-form" method="post" action="">
                    <div class="col-sm-5 col-sm-offset-1">
                        <div class="form-group">
                            <label>Name *</label>
                            <input type="text" name="name" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>Email *</label>
                            <input type="email" name="email" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="text" name="phone" class="form-control">
                        </div>

                    </div>
                    <div class="col-sm-5">
                        <div class="form-group">
                            <label>Subject *</label>
                            <input type="text" name="subject" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>Message *</label>
                            <textarea name="message" id="message" required="required" class="form-control" rows="6"></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" name="submit" class="btn btn-primary btn-lg">Submit Message</button>
                        </div>
                    </div>
                </form>
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#contact-page-->
<?php
    get_footer();
?>
