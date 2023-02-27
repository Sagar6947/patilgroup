<!DOCTYPE html>
<html lang="zxx">


<?php include 'includes/header-link.php'; ?>

<body>


    <?php include 'includes/header.php'; ?>

    <header class="pages-header bg-img valign parallaxie" data-background="<?= base_url() ?>assets/img/pg2.webp" data-overlay-dark="5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cont text-center">
                        <h1>Contact Us</h1>

                    </div>
                </div>
            </div>
        </div>
    </header>


    <section class="contact">
        <div class="info pt-80 pb-80"  style="background-image:url('<?= base_url() ?>assets/img/bg-pattern.webp');    background-position: top;
    background-size: cover;">
            <div class="container">
                <div class="row">
                    <!-- <div class="col-lg-6 border-sha">
                        <div class="item">
                            <span class="icon pe-7s-office"></span>
                            <div class="cont">
                                <h6>Site Office</h6>
                                 <b> Address : </b> Godaspandan, Near Someshwar
                                    Temple, Gangapur Road, Nashik - 422013
                                    <br>
                                    <b> Contact No.</b> : <a href="tel:8888001701"> +91- 8888001701</a> <br>
                                    <b> Email : </b>  <a href="mailto:patilgroupsales@gmail.com" >patilgroupsales@gmail.com</a>
                    
                   
                            </div>
                        </div>
                    </div> -->
                    <div class="col-lg-12 border-sha">
                        <div class="item">
                            <span class="icon pe-office"></span>
                            <div class="cont">
                                <h6>Registered Office</h6>
                                <b> Address : </b> Patil Plaza, Canada
                        Corner, Sharanpur Road, Nashik - 422005<br>
                        <b>Contact No. : </b> <a href="tel:88880 01501"> +91 88880 01501 </a> , <a href="tel:88880 01701"> 88880 01701 </a> <br>
                        <b>Landline No. : </b> <a href="tel:02532313172"> 0253- 2313172 </a> <br>
                        <b> Email : </b>   <a href="mailto:patilgroup.india@gmail.com" >patilgroup.india@gmail.com</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 map-box">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14996.442103851836!2d73.75165060781251!3d20.003875400000023!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bddeb9f207af567%3A0xba42142d3032bdc5!2sPatil%20Group%20Builders%20%26%20Developers%2C%20Nashik!5e0!3m2!1sen!2sin!4v1669803323942!5m2!1sen!2sin" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="col-lg-6 form">
                    <?php if ($msg = $this->session->flashdata('msg')) :
                        $msg_class = $this->session->flashdata('msg_class') ?>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="alert  <?= $msg_class; ?>"><?= $msg; ?></div>
                            </div>
                        </div>
                    <?php
                        $this->session->unset_userdata('msg');
                    endif; ?>
                    <form method="post" action="">
                        <div class="controls">

                            <div class="form-group">
                                <input id="form_name" type="text" name="name" placeholder="Name" required="required">
                            </div>

                            <div class="form-group">
                                <input id="form_name" type="text" name="number" placeholder="Mobile*" required="required" maxlength="10" >
                            </div>
                            <div class="form-group">
                                <input id="form_email" type="email" name="email" placeholder="Email" required="required">
                            </div>

                            <div class="form-group">
                                <textarea id="form_message" name="message" placeholder="Message" rows="4" required="required"></textarea>
                            </div>

                            <button type="submit" class="btn-curve btn-color"><span>Send Message</span></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>



    <?php include 'includes/footer.php'; ?>


    <?php include 'includes/footer-link.php'; ?>

</body>


</html>

 <script>
     window.setTimeout(function() {
         $(".alert").fadeTo(200, 0).slideUp(200, function() {
             $(this).remove();
         });
     }, 4000);
</script>    
     