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
                        <img src="<?= base_url() ?>uploads/project/<?= $details[0]['logo'] ?>" alt="project" style="width:300px;">
                        <h4 class="pt-5"><?= $details[0]['name'] ?></h4>
                    </div>
                </div>
            </div>
        </div>
    </header>


    <section class="st_ul portfolio section-padding project-pd paper-tx-bg">
        <div class="container">
            <div class="row">

                <!-- filter links -->
                <div class="filtering text-center col-12">
                    <div class="filter box">
                        <span data-filter='.overview' class="active">Overview</span>
                        <span data-filter='.pgallery'>Project Gallery</span>
                        <span data-filter='.walkvideo'>Walk Through</span>
                        <span data-filter='.florplan'>Floor Plans</span>
                        <span data-filter='.amenities'>Amenities</span>
                        <span data-filter='.location'>Location Map</span>
                        <span><a href="<?= base_url() ?>uploads/brochure/<?= $details[0]['brochure'] ?>" target="_blank"> Download Brochure</a></span>
                    </div>
                </div>



                <!-- gallery -->
                <div class="gallery twsty inf-lit full-width">
                    <!-- overview item -->
                    <div class="items overview full-width mt-50">
                        <div class="blog-pg single">
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-lg-11">
                                        <div class="post">
                                            <div class="title-head">
                                                <h2>OVERVIEW</h2>
                                            </div>
                                            <div class="img main-img">
                                                <?php $data = getSingleRowById('tbl_project_gallery', array('pro_id' => $details[0]['id'])); ?>
                                                <img src="<?= base_url() ?>uploads/pro_gallery/<?= $data['image'] ?>" alt="<?= $details[0]['name'] ?>" class="thumparallax">


                                            </div>
                                            <div class="overview-tab">
                                                <img src="<?= base_url() ?>uploads/project/<?= $details[0]['logo'] ?>" alt="Logo" class="w200">
                                                <img src="<?= base_url() ?>uploads/project/<?= $details[0]['registration_no'] ?>" alt="Logo" class="w200">
                                            </div>
                                            <div class="content pt-20">
                                                <div class="row justify-content-center">
                                                    <div class="col-lg-10">
                                                        <div class="cont pt-20 text-justify">
                                                            <?= $details[0]['desription'] ?>
                                                        </div>
                                                        <div class="author row">
                                                            <div class="author-img col-md-2">
                                                                <img src="<?= base_url() ?>assets/img/apartment.webp" alt="Address" class="width-a">
                                                            </div>
                                                            <div class="col-md-10">
                                                                <h6>SITE ADDRESS</h6>
                                                                <p class="m-0"><?= $details[0]['address'] ?></p>
                                                            </div>
                                                        </div>

                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- gallery item -->
                    <div class="items pgallery full-width mt-50">
                        <div class="gallery11">

                            <?php
                            $gallery = getRowById('tbl_project_gallery', 'pro_id', $details[0]['id']);

                            if ($gallery) {
                                foreach ($gallery as $img) {

                            ?>
                                    <img src="<?= base_url() ?>uploads/pro_gallery/<?= $img['image'] ?>" alt="<?= $details[0]['name'] ?>" />

                            <?php
                                }
                            }
                            ?>


                        </div>
                    </div>

                    <!-- walk through item -->
                    <div class="items walkvideo full-width mt-50">
                        <div class="video-walk pt-20">
                            <?php if ($details[0]['walkthrough'] != '') {  ?>
                                <iframe width="100%" height="450px" src="https://www.youtube.com/embed/nNTnzOz8lgg" title="YouTube video player" frameborder="0" allowfullscreen></iframe>

                            <?php
                            } else { ?>
                                <h3 class="text-center">
                                    WALKTHROUGH VIDEO COMING SOON
                                </h3>
                            <?php
                            }
                            ?>
                        </div>
                    </div>

                    <!-- Floor Plan  item -->
                    <div class="items florplan full-width mt-50">
                        <div class="row">
                            <?php
                            $plan = getRowById('tbl_floorplan', 'pro_id', $details[0]['id']);

                            if ($plan) {
                                foreach ($plan as $fplan) {

                            ?>

                                    <div class="col-md-4 mb-10">
                                        <img src="<?= base_url() ?>uploads/floorplan/<?= $fplan['image'] ?>" alt="Floor Plan">
                                        <h5 class="aminites-head"><?= $fplan['title'] ?></h5>
                                    </div>
                            <?php
                                }
                            }
                            ?>


                        </div>
                    </div>

                    <!-- Amenties item -->
                    <div class="st_amini items amenities full-width mt-50">
                        <div class="row">
                            <div class="col-md-12 text-center pt-5 pb-50">
                                <h4>AMENITIES</h4>
                            </div>
                            <div class="col-md-6 mtcmk">
                                <h6>A POOL AND A GARDEN. WHY SHOULD YOU HAVE TO CHOOSE ONE OR THE OTHER?</h6>
                                <p class="text-justify">They say growing up is all about learning how to compromise and settle for the right choices. We think otherwise. We think when it comes to finding your dream home, you shouldn't have to settle. You should have it all.</p>
                            </div>
                            <div class="col-md-6">
                                <img src="<?= base_url() ?>assets/img/1.webp" alt="Floor Plan">
                            </div>

                        </div>
                        <div class="row mt-40 bg-ami st_ul_wrapper">

                            <?= $details[0]['amebities'] ?>
                        </div>


                    </div>

                    <!-- Location item -->
                    <div class="items location full-width mt-50">
                        <h5 class="text-center pt-10 pb-30">LOCATION MAP</h5>

                        <div>
                            <?= $details[0]['map'] ?>"
                        </div>
                        <h5 class="text-center pt-20 pb-30">MASTER LAYOUT PLAN</h5>
                        <div>
                            <img src="<?= base_url() ?>uploads/layout-plan/<?= $details[0]['layout_plan'] ?>" alt="master-layoutplan">
                        </div>
                    </div>



                </div>

            </div>
        </div>
    </section>


    <?php include 'includes/footer.php'; ?>


    <?php include 'includes/footer-link.php'; ?>

</body>


</html>