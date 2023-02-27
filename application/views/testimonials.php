<!DOCTYPE html>
<html lang="zxx">


<?php include 'includes/header-link.php'; ?>

<body>


    <?php include 'includes/header.php'; ?>

    <header class="pages-header bg-img valign parallaxie" data-background="<?= base_url() ?>assets/img/pg1.webp" data-overlay-dark="5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cont text-center">
                        <h1>TESTIMONIALS</h1>
                        <div class="path">
                            <p>Quality, timely executions, customer satisfaction and most importantly, unique innovations</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>


    <section class="blog-pg section-padding  bg-gray ">
        <div class="container">

            <div class="posts row" style="justify-content: center;" >

                <?php
                if ($details) {
                    foreach ($details as $test) {

                ?>
                        
                        <div class="col-sm-10 mb-40">

                            <div class="content text-content-box row">
                                <div class="col-sm-4">
                                    <img src="<?= base_url() ?>uploads/testimonial/<?= $test['image'] ?>" alt="<?= $test['name'] ?>" class="full-width" style="height: auto; width:100%">
                                </div>
                                <div class="col-sm-8">
                                    <h4 class="title"><?= $test['name'] ?></h4>
                                    <div class="tags">
                                        <?= $test['name'] ?>
                                    </div>
                                    <p id="more"><?= $test['testimonial'] ?>
                                    </p>
                                </div>

                            </div>
                        </div>




                <?php
                    }
                }
                ?>



            </div>
        </div>
    </section>

    <?php include 'includes/footer.php'; ?>


    <?php include 'includes/footer-link.php'; ?>

</body>


</html>