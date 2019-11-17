<?php include 'header.php'; ?>
<?php
    if(isset($_POST['con_submit'])){
        
    $username=$email=$phone=$website=$comment ='';
        $username = $_POST['username'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $website = $_POST['website'];
        $comment = $_POST['message'];
        
        $sql = "INSERT INTO contact(username, email, phone, website, comment) VALUES('$username', '$email', '$phone', '$website', '$comment')";
        mysqli_query($db, $sql);
        
        
    }


?>
   
   
    <section id="contact_banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <h1>contact us</h1>
                    <h4>Lorem Ipsum is simply dummy text of the printing</h4>
                </div>
            </div>
        </div>
    </section>
    <!--contact_banner part ends-->
    <div class="clearfix"></div>
    <section id="contact_text">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 contact_text_part">
                    <h2>Our location</h2>
                    <p>Map here</p>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1825.790409097106!2d90.36242545794285!3d23.762323050971926!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755bf587a547079%3A0x12c2bb254bc386ed!2s26%2F14+Sher+Shah+Suri+Road%2C+Mohammadpur%2C+Dhaka+-+1207%2C+26%2F14+Sher+Shah+Suri+Rd%2C+Dhaka+1207!5e0!3m2!1sen!2sbd!4v1540017965607" width="1200" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12 contact_icon text-center">
                    
                    <h4></h4>
                    <p></p>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12 contact_icon text-center">
                   
                    <h4></h4>
                    <p></p>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12 contact_icon text-center">
                    
                    <h4></h4>
                    <p></p>
                </div>
                <div class="contact_border hidden-sm hidden-xs"></div>
            </div>
        </div>
    </section>
    <!--contact_banner part ends-->
    <div class="clearfix"></div>
    <section id="contact_form">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                    <h2>contact form</h2>
                    <form action="" method="post">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" class="name" name="username" placeholder="NAME" required>
                            <input type="text" class="name" name="phone" placeholder="PHONE" required>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" class="email" name="email" placeholder="EMAIL" required>
                            <input type="text" class="name" name="website" placeholder="WEBSITE">
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <textarea class="messagebox" name="message" id="" cols="30" rows="10" placeholder="COMMENT" required></textarea>
                        </div>
                        <input type="submit" class="sub_button" name="con_submit" value="SUBMIT">
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!--contact_form part ends-->
    <?php include 'footer.php'; ?>