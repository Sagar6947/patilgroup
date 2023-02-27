<!DOCTYPE html>
<html lang="zxx">


<?php include 'includes/header-link.php'; ?>

<body>


    <?php include 'includes/header.php'; ?>

    <header class="pages-header bg-img valign parallaxie" data-background="<?= base_url() ?>assets/img/pg3.webp" data-overlay-dark="5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cont text-center">
                        <h1>Completed Projects</h1>
                        <div class="path">
                            <!--Quality, timely executions, customer satisfaction and most importantly, unique innovations-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>


    <section class="blog-grid center bg-gray section-padding" data-background="<?= base_url() ?>assets/img/009.png" data-overlay-light="9">
        <div class="container">
            

            <div class="row">

                <?php
                $i = 1;
                if (!empty($project)) {
                    foreach ($project as $row) {
                ?>

                        <div class="col-lg-6">
                            <div class="item wow fadeInUp md-mb50 bproject" data-wow-delay=".3s">
                                <div class="post-img">
                                    <div class="img">
                                        <img src="<?= base_url() ?>uploads/complete-project/<?= $row['image'] ?>" alt="<?= $row['title'] ?>">
                                    </div>
                                </div>
                                <div class="cont">
                                    <img src="<?= base_url() ?>uploads/complete-project/<?= $row['com_logo'] ?>" alt="<?= $row['title'] ?>" class="h120">

                                    <h5 class="playfont"><?= $row['title'] ?>
                                    </h5>
                                    <div class="info">
                                        <i class="fa fa-map-marker" aria-hidden="true"></i> <?= $row['address'] ?>

                                    </div>
                                </div>
                            </div>
                        </div>

                <?php
                        $i++;
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