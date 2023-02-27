<!DOCTYPE html>
<html lang="zxx">


<?php include 'includes/header-link.php'; ?>
<style>
    .fa,
    .fas {
        font-weight: 900;
        font-size: 6px;

    }

    .portfolio .filtering span:after {

        display: none !important;
    }

    .portfolio .filtering span.active {
        /*color: #4db7ac;*/
        display: none !important;
    }

    h3 {
        padding-bottom: 20px;
    }

    i {
        color: #4db7ac;
    }
</style>

<body>

    <?php include 'includes/header.php'; ?>


    <header class="pages-header bg-img valign parallaxie" data-background="<?= base_url() ?>uploads/ekaant/bg.jpg" data-overlay-dark="5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cont text-center">
                        <img src="<?= base_url() ?>uploads/ekaant/logo.png" alt="project" style="width:350px;">
                        <!--<h4 class="pt-5"> The extravagant 4 bhk luxurious apartments <br> are right in the lap of of Moher Nature</h4>-->
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
                <div class="filter box justify-content-center" style="row-gap: 5px;">
                        <span data-filter='.overview' class="active" style="display: none;">Overview</span>
                        <span data-filter='.pgallery'><i class="fa fa-circle" aria-hidden="true"></i> Project Gallery</span>
                        <span data-filter='.walkvideo'><i class="fa fa-circle" aria-hidden="true"></i> Walk Through</span>
                        <span data-filter='.florplan'><i class="fa fa-circle" aria-hidden="true"></i> Floor Plans</span>
                        <span data-filter='.amenities'><i class="fa fa-circle" aria-hidden="true"></i> Amenities</span>
                        <span data-filter='.location'><i class="fa fa-circle" aria-hidden="true"></i> Location Map</span>
                        <span><a href="<?= base_url() ?>uploads/ekaant/EKAANT.eBROCHURE.pdf" target="_blank"><i class="fa fa-circle" aria-hidden="true"></i> Download Brochure</a></span>
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
                                            <div class="img main-img grid">
                                                <img src="<?= base_url() ?>uploads/ekaant/DJI_0557-min-min.jpg" alt="ekaant -  4bhk residential flats in Nashik">
                                            </div>


                                            <div class="content pt-20">
                                                <div class="row justify-content-center">
                                                    <div class="col-lg-10">
                                                        <div class="numbers author">
                                                            <div class="container">
                                                                <div class="row">
                                                                    <div class="col-lg-3 col-md-6">
                                                                        <div class="item">
                                                                            <h4><span class="nbr custom-font counter" data-target="12">12</span></h4>
                                                                            <h6>Floor</h6>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-3 col-md-6">
                                                                        <div class="item">
                                                                            <h4><span class="nbr custom-font counter" data-target="120">120</span></h4>
                                                                            <h6>Feet High</h6>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-3 col-md-6">
                                                                        <div class="item">
                                                                            <h4><span class="nbr custom-font counter" data-target="25">25</span><i>+</i></h4>
                                                                            <h6>Lifestyle Amenities</h6>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-3 col-md-6">
                                                                        <div class="item">
                                                                            <h4><span class="nbr custom-font counter" data-target="72">72</span></h4>
                                                                            <h6>4BHK Luxury Unites</h6>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="cont pt-20 text-justify">
                                                            <h3>LOOK AROUND</h3>
                                                            <p>Ekaant is the perfect blend of modern architecture and quaint natural surroundings. At Ekaant, the extravagant 4BHK luxurious apartments are complimented by turquoise waters and rich green foliage that guarantee you and your family a well-deserved, healthy lifestyle.
                                                                These luxury living spaces take you away from the fast-paced city life and places you right in the lap of Mother Nature.
                                                            <p>
                                                            <p>Ekaant has been conceived and planned by Architect Umesh Bagul.
                                                                The site has been meticulously executed to provide residents with a one of a kind experience in Nashik that makes the most of the area's abundance of fresh air, flowing water and natural sunlight.
                                                            <p>
                                                        </div>
                                                        <div class="author row">
                                                            <div class="author-img col-md-2 grid">
                                                                <img src="<?= base_url() ?>assets/img/apartment.webp" alt="Address" class="width-a" style="width: 50px !important;">
                                                            </div>
                                                            <div class="col-md-10 grid">
                                                                <h6>SITE ADDRESS</h6>
                                                                <p class="m-0">Ekaant, Near Gangajal Nursery, Shankar Nagar, Gangapur Road, Nashik - 422013</p>
                                                                <!--<h6><span>-->
                                                                <!--        <img src="<?= base_url() ?>uploads/project/goda-registration.webp" alt="Logo" class="w200">-->
                                                                <!--    </span> </h6>-->

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

                    <section class=" items pgallery full-width mt-50">
                        <div class="row">


                            <?php include 'ekaant-gallery.php'; ?>
                        </div>

                    </section>



                    <div class="items walkvideo full-width mt-50">
                        <div class="video-walk pt-20">
                            <h3 class="text-center">
                                WALKTHROUGH VIDEO
                            </h3>
                        </div>
                        <div class="row video-walk pt-20">

                            <div class="col-sm-12 grid">
                                <div>
                                    <iframe width="100%" height="445" src="https://www.youtube.com/embed/SYTY9Yb06_4">
                                    </iframe>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Floor Plan  item -->
                    <div class="items florplan full-width mt-50">
                        <div class="title-head">
                            <h3 class="text-center">FLOOR PLANS</h3>
                        </div>
                        <div class="row">


                            <div class="col-md-6 mb-10">
                                <a data-fancybox="gallery" href="<?= base_url() ?>uploads/ekaant/floor-plan.PNG">
                                    <img src="<?= base_url() ?>uploads/ekaant/floor-plan.PNG" alt="Floor Plan">
                                </a>
                                <h5 class="aminites-head">4BHK</h5>
                            </div>
                            <div class="col-md-6 mb-10">
                                <a data-fancybox="gallery" href="<?= base_url() ?>uploads/ekaant/floor-plan.PNG">
                                    <img src="<?= base_url() ?>uploads/ekaant/floor-plan.PNG" alt="Floor Plan">
                                </a>
                                <h5 class="aminites-head">4BHK</h5>
                            </div>






                        </div>
                    </div>

                    <!-- Amenties item -->
                    <div class="st_amini items amenities full-width mt-50">
                        <div class="video-walk pt-20">
                            <h3 class="text-center">
                                AMENITIES
                            </h3>
                        </div>
                        <div class="row mt-40 bg-ami st_ul_wrapper">

                            <div class="col-sm-12">
                                <h5 class="pd-10">INTERNAL AMENITIES</h5>

                                <div class="pt-2 pb-2">
                                    <ul class="row ">
                                        <li class="col-md-6 justify-item"> <i class="fa fa-circle" aria-hidden="true"></i> Vitrified flooring</li>
                                        <li class="col-md-6 justify-item"> <i class="fa fa-circle" aria-hidden="true"></i> Modular switches with concealed wiring</li>
                                        <li class="col-md-6 justify-item"> <i class="fa fa-circle" aria-hidden="true"></i> Designer Bathroom with exquisite fittings</li>
                                        <li class="col-md-6 justify-item"> <i class="fa fa-circle" aria-hidden="true"></i> Modular kitchen with granite top</li>
                                        <li class="col-md-6 justify-item"> <i class="fa fa-circle" aria-hidden="true"></i> Anodized 3 track aluminum sliding windows with safety grill</li>
                                        <li class="col-md-6 justify-item"> <i class="fa fa-circle" aria-hidden="true"></i> Laminated flush door with elegant fittings</li>

                                        <li class="col-md-6 justify-item"> <i class="fa fa-circle" aria-hidden="true"></i> P.O.P finish walls</li>
                                        <li class="col-md-6 justify-item"> <i class="fa fa-circle" aria-hidden="true"></i> Sandfaced external plaster with acrylic paint</li>
                                        <li class="col-md-6 justify-item"> <i class="fa fa-circle" aria-hidden="true"></i> Wooden ceiling to sit out (Deck)</li>
                                        <li class="col-md-6 justify-item"> <i class="fa fa-circle" aria-hidden="true"></i>Provision for inverter wiring</li>
                                        <li class="col-md-6 justify-item"> <i class="fa fa-circle" aria-hidden="true"></i> Main entrance with security door</li>

                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-40 bg-ami st_ul_wrapper">

                            <div class="col-sm-12">
                                <h5 class="pd-10">EXTERNAL AMENITIES</h5>

                                <div class="pt-2 pb-2">
                                    <ul class="row ">
                                        <li class="col-md-6 justify-item"> <i class="fa fa-circle" aria-hidden="true"></i> Club house with swimming pool & gymnasium</li>
                                        <li class="col-md-6 justify-item"> <i class="fa fa-circle" aria-hidden="true"></i> Children's play area</li>
                                        <li class="col-md-6 justify-item"> <i class="fa fa-circle" aria-hidden="true"></i> Table tennis / Rink cricket</li>
                                        <li class="col-md-6 justify-item"> <i class="fa fa-circle" aria-hidden="true"></i> Two car's park per apartment</li>
                                        <li class="col-md-6 justify-item"> <i class="fa fa-circle" aria-hidden="true"></i> Yoga center, Jogging track & Deck on top terrace 24 hrs security
                                        </li>
                                        <li class="col-md-6 justify-item"> <i class="fa fa-circle" aria-hidden="true"></i>Gas Pipe lines</li>
                                        <li class="col-md-6 justify-item"> <i class="fa fa-circle" aria-hidden="true"></i> Guest rooms</li>
                                        <li class="col-md-6 justify-item"> <i class="fa fa-circle" aria-hidden="true"></i> Driver's room & car wash area</li>
                                        <li class="col-md-6 justify-item"> <i class="fa fa-circle" aria-hidden="true"></i> Kitchen for common functions</li>
                                        <li class="col-md-6 justify-item"> <i class="fa fa-circle" aria-hidden="true"></i> Two elevators per wing</li>
                                        <li class="col-md-6 justify-item"> <i class="fa fa-circle" aria-hidden="true"></i> Power backup for Lift & common areas</li>
                                        <li class="col-md-6 justify-item"> <i class="fa fa-circle" aria-hidden="true"></i> Video door phone, C.C. TV & Intercom Rain water harvesting</li>

                                    </ul>
                                </div>
                            </div>
                        </div>



                    </div>



                    <!-- Location item -->
                    <div class="items location full-width mt-50 row">
                        <!--<div class="col-sm-6">-->

                        <!--    <h5 class="text-center pt-20 pb-30">MASTER LAYOUT PLAN</h5>-->
                        <!--    <div class="grid">-->
                        <!--        <img src="<?= base_url() ?>uploads/ekaant/floor-plan.PNG" alt="master-layoutplan">-->
                        <!--    </div>-->
                        <!--</div>-->
                        <div class="col-sm-12">
                            <h5 class="text-center pt-10 pb-30">LOCATION MAP</h5>

                            <div>
                                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14994.969582722046!2d73.7513991!3d20.0193236!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xa9ae9d550e19ac09!2sEkaant!5e0!3m2!1sen!2sin!4v1672937885629!5m2!1sen!2sin" width="100%" height="550" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="items location full-width mt-50 row">

                        <div class="col-sm-12">
                            <h5 class="text-center pt-10 pb-30">MAP PLAN</h5>

                            <div>
                                <a data-fancybox="gallery" href="<?= base_url() ?>uploads/project/PLAN3.PNG">
                                    <img src="<?= base_url() ?>uploads/project/PLAN3.PNG" alt="master-layoutplan">
                                </a>
                            </div>

                        </div>

                    </div>

                </div>

            </div>
        </div>
    </section>

    <div id="lightbox">
        <img id="lightbox-img">
    </div>




    <?php include 'includes/footer.php'; ?>
    <?php include 'includes/footer-link.php'; ?>

</body>


</html>