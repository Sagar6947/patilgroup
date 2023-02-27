<!DOCTYPE html>
<html lang="zxx">


<?php include 'includes/header-link.php'; ?>

<body>


    <?php include 'includes/header.php'; ?>

    <header class="pages-header bg-img valign parallaxie" data-background="<?= base_url() ?>assets/img/career1.jpg" data-overlay-dark="5" style="background-position: center -100px; !important">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cont text-center">
                        <h1>Career In Patil Group</h1>

                    </div>
                </div>
            </div>
        </div>
    </header>

    <section class="contact cont-map career">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 contact-form wow fadeInDown" data-wow-delay=".3s">
                    <form method="post" action="" enctype="multipart/form-data">
                        <div class="section-head">

                            <h4 class="playfont">JOB APPLICATION</h4>
                            <p>If you would like to be a part of our team, send us your details by filling below form. <br>We will soon get in touch with you. Required fields are marked *</p>

                            <?php if ($msg = $this->session->flashdata('msg')) :
                                $msg_class = $this->session->flashdata('msg_class') ?>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="alert alert-success"><?= $msg; ?></div>
                                    </div>
                                </div>
                            <?php
                                $this->session->unset_userdata('msg');
                            endif; ?>
                        </div>



                        <div class="controls row">

                            <div class="form-group col-sm-6">
                                <input id="form_name" type="text" name="name" placeholder="Name*" required="required">
                            </div>
                            <div class="form-group col-sm-6">
                                <input id="form_name" type="text" name="number" placeholder="Mobile*" required="required">
                            </div>

                            <div class="form-group col-sm-6">
                                <input id="form_email" type="email" name="email" placeholder="Email*" required="required">
                            </div>
                            <div class="form-group col-sm-6">
                                <input id="form_email" type="file" name="image" placeholder="Resume*" required="required" accept="image/pdf, image/txt, image/doc , image/docx">
                                <span>
                                    Allowed only .pdf, txt , word files size below 1 mb.
                                </span>
                            </div>
                            <div class="form-group col-sm-12">
                                <textarea id="form_message" name="message" placeholder="Message" rows="2" required="required"></textarea>
                            </div>

                            <div class="form-group col-sm-12">
                                <br>
                                <button type="submit" class="btn-curve btn-color"><span>Send Message</span></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- <div class="contact-map">
         <img src="<?= base_url() ?>assets/img/pg2.webp" width="100%">
        </div> -->
        <div class="bg-img" data-background="<?= base_url() ?>assets/img/career.webp"></div>
    </section>

    <?php include 'includes/footer.php'; ?>


    <?php include 'includes/footer-link.php'; ?>

</body>


</html>