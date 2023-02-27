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


    <header class="pages-header bg-img valign parallaxie" data-background="<?= base_url() ?>uploads/pro_gallery/1901695618q4.webp" data-overlay-dark="5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cont text-center">
                        <img src="<?= base_url() ?>uploads/project/goda.webp" alt="project" style="width:350px;">
                        <!--<h4 class="pt-5">   We build with Steel, Stone & Cement </br>but we start with vision.</h4>-->
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
                        <span data-filter='.pgallery'> <i class="fa fa-circle" aria-hidden="true"></i> Project Gallery</span>
                        <span data-filter='.walkvideo'><i class="fa fa-circle" aria-hidden="true"></i> Walk Through</span>
                        <span data-filter='.florplan'><i class="fa fa-circle" aria-hidden="true"></i> Floor Plans</span>
                        <span data-filter='.amenities'><i class="fa fa-circle" aria-hidden="true"></i> Amenities</span>
                        <span data-filter='.location'><i class="fa fa-circle" aria-hidden="true"></i> Location Map</span>
                        <span><a href="<?= base_url() ?>uploads/brochure/goda spandan brochure .pdf" target="_blank" class="download-brochure brocuer_d"><i class="fa fa-download" aria-hidden="true"></i>Brochure</a></span>
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
                                                <img src="<?= base_url() ?>assets/img/goda-overview.jpg" alt="Goda Spandan - Ongoing 4bhk residential flats in Nashik">
                                            </div>


                                            <div class="content pt-20">
                                                <div class="row justify-content-center">
                                                    <div class="col-lg-10">
                                                        <div class="numbers author">
                                                            <div class="container">
                                                                <div class="row ongoing_projects_counter">
                                                                    <div class="col-lg-3 col-md-6">
                                                                        <div class="item">
                                                                            <h4><span class="nbr custom-font counter" data-target="36">36</span></h4>
                                                                            <h6>Floors</h6>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-3 col-md-6">
                                                                        <div class="item">
                                                                            <h4><span class="nbr custom-font counter" data-target="400">400</span></h4>
                                                                            <h6>Feet High</h6>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-3 col-md-6">
                                                                        <div class="item">
                                                                            <h4><span class="nbr custom-font counter" data-target="100">100</span><i>+</i></h4>
                                                                            <h6>Lifestyle Amenities</h6>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-3 col-md-6">
                                                                        <div class="item">
                                                                            <h4><span class="nbr custom-font counter" data-target="145">145</span></h4>
                                                                            <h6>4BHK Luxury Unit</h6>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="cont pt-20 text-justify">
                                                            <h3>REWARD YOURSELF WITH THE GIFT OF LUXURY AT IT'S PINNACLE</h3>
                                                            <p>At Goda Spandan, you will experience magnificent 4BHK apartments accompanied by Godavari's holy water and surrounded by lush foliage. Here, you and your family will enjoy the grandeur living space that blurs the line between indoor and outdoor
                                                                <br><br>
                                                                Each apartment in Goda Spandan is positioned and designed in a way to compliment the flexibility of choice; to the most splendid sight in town. Relish being in the lap of nature, and encounter the ever-changing city skyline by just turning around.
                                                                <br><br>
                                                                "Sky is no longer the limit". At Goda Spandan, experience living in the clouds as you watch the city run at a glance. Explore beyond the realms of possibilities with the elevated height. Be an audience to the performance of nature; watch the clouds dance as they change their appearance and the river sing as it gushes beneath you.
                                                            <p>
                                                        </div>
                                                        <div class="author row">
                                                            <div class="author-img col-md-2 grid">
                                                               <a href="https://goo.gl/maps/XFjjyYf2uFvPgqNc9" target="_blank"> <img src="<?= base_url() ?>assets/img/apartment.webp" alt="Address" class="" style="width: 50px !important;"></a>
                                                            </div>
                                                            <div class="col-md-10 grid">
                                                                <h6>SITE ADDRESS</h6>
                                                                <p class="m-0"><a href="https://goo.gl/maps/XFjjyYf2uFvPgqNc9" target="_blank">Godaspandan, Near Someshwar Temple, Gangapur Road, Nashik - 422013</a></br>
                                                                 
                                                                
                                                                        <img src="<?= base_url() ?>uploads/project/goda-registration.webp" alt="Logo"  style="width:300px;">
                                                                     </p>

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


                            <?php include 'goda-gallery.php'; ?>
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
                                    <img src="<?= base_url() ?>uploads/project/2.png" alt="master-layoutplan" class="h300">
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


                            <div class="col-md-4 mb-10">
                                    
                                <a data-fancybox="gallery" href="<?= base_url() ?>uploads/floorplan/t1.webp">
                                    <img src="<?= base_url() ?>uploads/floorplan/t1.webp" alt="Floor Plan">
                                </a>
                                <h5 class="aminites-head">A Wing 4BHK 101-2901</h5>
                            </div>

                            <div class="col-md-4 mb-10">
                                <a data-fancybox="gallery" href="<?= base_url() ?>uploads/floorplan/f2.webp">
                                    <img src="<?= base_url() ?>uploads/floorplan/f2.webp" alt="Floor Plan">
                                </a>
                                <h5 class="aminites-head">B Wing 4BHK 101-2901</h5>
                            </div>

                            <div class="col-md-4 mb-10">
                                <a data-fancybox="gallery" href="<?= base_url() ?>uploads/floorplan/f3.webp">
                                    <img src="<?= base_url() ?>uploads/floorplan/f3.webp" alt="Floor Plan">
                                </a>
                                <h5 class="aminites-head">B Wing 4BHK 102-2902</h5>
                            </div>

                            <div class="col-md-4 mb-10">
                                <a data-fancybox="gallery" href="<?= base_url() ?>uploads/floorplan/f4.webp">
                                    <img src="<?= base_url() ?>uploads/floorplan/f4.webp" alt="Floor Plan">
                                </a>
                                <h5 class="aminites-head">C Wing 4BHK 101-2901</h5>
                            </div>

                            <div class="col-md-4 mb-10">
                                <a data-fancybox="gallery" href="<?= base_url() ?>uploads/floorplan/f5.webp">
                                    <img src="<?= base_url() ?>uploads/floorplan/f5.webp" alt="Floor Plan">
                                </a>
                                <h5 class="aminites-head">C Wing 4BHK 102-2902</h5>
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
                                <h5 class="pd-10">PODIUM FLOOR AMENITIES</h5>

                                <div class="pt-2 pb-2">
                                    <ul class="row ">
                                        <li class="col-md-4 justify-item"> <i class="fa fa-circle" aria-hidden="true"></i> Business centre</li>
                                        <li class="col-md-4 justify-item"> <i class="fa fa-circle" aria-hidden="true"></i> Conference room</li>
                                        <li class="col-md-4 justify-item"> <i class="fa fa-circle" aria-hidden="true"></i> Accounts office</li>
                                        <li class="col-md-4 justify-item"> <i class="fa fa-circle" aria-hidden="true"></i> Admin office</li>
                                        <li class="col-md-4 justify-item"> <i class="fa fa-circle" aria-hidden="true"></i> Ladies gymnasium</li>
                                        <li class="col-md-4 justify-item"> <i class="fa fa-circle" aria-hidden="true"></i> Ladies salon and spa</li>

                                        <li class="col-md-4 justify-item"> <i class="fa fa-circle" aria-hidden="true"></i> Gents gymnasium</li>
                                        <li class="col-md-4 justify-item"> <i class="fa fa-circle" aria-hidden="true"></i> Gents salon &amp; spa</li>
                                        <li class="col-md-4 justify-item"> <i class="fa fa-circle" aria-hidden="true"></i> Senior citizen&rsquo;s area</li>
                                        <li class="col-md-4 justify-item"> <i class="fa fa-circle" aria-hidden="true"></i> Jogging track</li>
                                        <li class="col-md-4 justify-item"> <i class="fa fa-circle" aria-hidden="true"></i> River view deck</li>
                                        <li class="col-md-4 justify-item"> <i class="fa fa-circle" aria-hidden="true"></i> Outdoor seating</li>

                                        <li class="col-md-4 justify-item"> <i class="fa fa-circle" aria-hidden="true"></i> Mini-theatre</li>
                                        <li class="col-md-4 justify-item"> <i class="fa fa-circle" aria-hidden="true"></i> Indoor games</li>
                                        <li class="col-md-4 justify-item"> <i class="fa fa-circle" aria-hidden="true"></i> Billiard room</li>
                                        <li class="col-md-4 justify-item"> <i class="fa fa-circle" aria-hidden="true"></i> Card room</li>
                                        <li class="col-md-4 justify-item"> <i class="fa fa-circle" aria-hidden="true"></i> Baby&rsquo;s day care</li>
                                        <li class="col-md-4 justify-item"> <i class="fa fa-circle" aria-hidden="true"></i> Laundry</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-40 bg-ami st_ul_wrapper">
                            <div class="col-sm-12">
                                <h5 class="pd-10">SOUTH SIDE PODIUM AMENITIES</h5>


                                <ul class="row">
                                    <li class="col-md-4 justify-item"> <i class="fa fa-circle" aria-hidden="true"></i> Heated swimming pool</li>
                                    <li class="col-md-4 justify-item"> <i class="fa fa-circle" aria-hidden="true"></i> Rain shower dome</li>
                                    <li class="col-md-4 justify-item"> <i class="fa fa-circle" aria-hidden="true"></i> Outdoor screen</li>

                                    <li class="col-md-4 justify-item"> <i class="fa fa-circle" aria-hidden="true"></i> Baby pool</li>
                                    <li class="col-md-4 justify-item"> <i class="fa fa-circle" aria-hidden="true"></i> Changing rooms</li>

                                    <li class="col-md-4 justify-item"> <i class="fa fa-circle" aria-hidden="true"></i> Whirlpool bath</li>
                                    <li class="col-md-4 justify-item"> <i class="fa fa-circle" aria-hidden="true"></i> Party lawn with performance stage</li>
                                </ul>
                            </div>

                        </div>
                        <div class="row mt-40 bg-ami st_ul_wrapper">
                            <div class="col-sm-12">
                                <h5 class="pd-10">RECREATIONAL FLOOR ONE AMENITIES</h5>


                                <ul class="row">
                                    <li class="col-md-4 justify-item"> <i class="fa fa-circle" aria-hidden="true"></i> Open gym</li>
                                    <li class="col-md-4 justify-item"> <i class="fa fa-circle" aria-hidden="true"></i> Fitness lounge</li>
                                    <li class="col-md-4 justify-item"> <i class="fa fa-circle" aria-hidden="true"></i> Mini golf</li>
                                    <li class="col-md-4 justify-item"> <i class="fa fa-circle" aria-hidden="true"></i> Outdoor bowling alley</li>
                                    <li class="col-md-4 justify-item"> <i class="fa fa-circle" aria-hidden="true"></i> Children play area</li>

                                    <li class="col-md-4 justify-item"> <i class="fa fa-circle" aria-hidden="true"></i> Creative art studio</li>
                                    <li class="col-md-4 justify-item"> <i class="fa fa-circle" aria-hidden="true"></i> Clay room</li>
                                    <li class="col-md-4 justify-item"> <i class="fa fa-circle" aria-hidden="true"></i> Video games</li>
                                    <li class="col-md-4 justify-item"> <i class="fa fa-circle" aria-hidden="true"></i> Snakes and ladders</li>
                                    <li class="col-md-4 justify-item"> <i class="fa fa-circle" aria-hidden="true"></i> Ludo</li>

                                    <li class="col-md-4 justify-item"> <i class="fa fa-circle" aria-hidden="true"></i> Hopscotch</li>
                                    <li class="col-md-4 justify-item"> <i class="fa fa-circle" aria-hidden="true"></i> Crossword</li>
                                    <li class="col-md-4 justify-item"> <i class="fa fa-circle" aria-hidden="true"></i> Archery</li>
                                    <li class="col-md-4 justify-item"> <i class="fa fa-circle" aria-hidden="true"></i> Building block</li>
                                    <li class="col-md-4 justify-item"> <i class="fa fa-circle" aria-hidden="true"></i> Ring throw</li>
                                </ul>
                            </div>

                        </div>
                        <div class="row mt-40 bg-ami st_ul_wrapper">
                            <div class="col-sm-12">
                                <h5 class="pd-10">RECREATIONAL FLOOR TWO AMENITIES</h5>


                                <ul class="row">
                                    <li class="col-md-4 justify-item"> <i class="fa fa-circle" aria-hidden="true"></i> Open library</li>
                                    <li class="col-md-4 justify-item"> <i class="fa fa-circle" aria-hidden="true"></i> Internet cafe</li>
                                    <li class="col-md-4 justify-item"> <i class="fa fa-circle" aria-hidden="true"></i> Foot reflexology</li>

                                    <li class="col-md-4 justify-item"> <i class="fa fa-circle" aria-hidden="true"></i> Party area</li>
                                    <li class="col-md-4 justify-item"> <i class="fa fa-circle" aria-hidden="true"></i> Kitchen &amp; juice bar area</li>
                                    <li class="col-md-4 justify-item"> <i class="fa fa-circle" aria-hidden="true"></i> Event lawn</li>

                                    <li class="col-md-4 justify-item"> <i class="fa fa-circle" aria-hidden="true"></i> Aroma garden</li>
                                    <li class="col-md-4 justify-item"> <i class="fa fa-circle" aria-hidden="true"></i> Meditation zone</li>
                                    <li class="col-md-4 justify-item"> <i class="fa fa-circle" aria-hidden="true"></i> Quarantine zone</li>
                                </ul>
                            </div>

                        </div>

                        <div class="row mt-40 bg-ami st_ul_wrapper">
                            <div class="col-sm-12">
                                <h5 class="pd-10">D WING AMENITIES</h5>


                                <ul class="row">
                                    <li class="col-md-4 justify-item"> <i class="fa fa-circle" aria-hidden="true"></i> Restaurant &amp; Mocktail bar</li>
                                    <li class="col-md-4 justify-item"> <i class="fa fa-circle" aria-hidden="true"></i> Garden restaurant</li>
                                    <li class="col-md-4 justify-item"> <i class="fa fa-circle" aria-hidden="true"></i> Badminton court</li>


                                    <li class="col-md-4 justify-item"> <i class="fa fa-circle" aria-hidden="true"></i> Community kitchen</li>
                                    <li class="col-md-4 justify-item"> <i class="fa fa-circle" aria-hidden="true"></i> Guest rooms</li>
                                    <li class="col-md-4 justify-item"> <i class="fa fa-circle" aria-hidden="true"></i> Multi-purpose court</li>

                                    <li class="col-md-4 justify-item"> <i class="fa fa-circle" aria-hidden="true"></i> Table tennis hall</li>
                                    <li class="col-md-4 justify-item"> <i class="fa fa-circle" aria-hidden="true"></i> Squash court</li>
                                </ul>
                           


                        </div>
                    </div>

                    <div class="row mt-40 bg-ami st_ul_wrapper">
                        <div class="col-sm-12">
                            <h5 class="pd-10">TERRACE AMENITIES</h5>


                            <ul class="row">
                                <li class="col-md-4 justify-item"> <i class="fa fa-circle" aria-hidden="true"></i> Green gym</li>
                                <li class="col-md-4 justify-item"> <i class="fa fa-circle" aria-hidden="true"></i> Yoga zone</li>
                                <li class="col-md-4 justify-item"> <i class="fa fa-circle" aria-hidden="true"></i> Walking track with music system</li>
                                <li class="col-md-4 justify-item"> <i class="fa fa-circle" aria-hidden="true"></i> Terrace lounge</li>

                                <li class="col-md-4 justify-item"> <i class="fa fa-circle" aria-hidden="true"></i> Hopscotch</li>
                                <li class="col-md-4 justify-item"> <i class="fa fa-circle" aria-hidden="true"></i> Reflexology path</li>
                                <li class="col-md-4 justify-item"> <i class="fa fa-circle" aria-hidden="true"></i> Cooling mist pod</li>
                                <li class="col-md-4 justify-item"> <i class="fa fa-circle" aria-hidden="true"></i> River view deck</li>


                                <li class="col-md-4 justify-item"> <i class="fa fa-circle" aria-hidden="true"></i> City view deck</li>
                                <li class="col-md-4 justify-item"> <i class="fa fa-circle" aria-hidden="true"></i> Sky deck</li>
                                <li class="col-md-4 justify-item"> <i class="fa fa-circle" aria-hidden="true"></i> Binoculars point at 400&rsquo; height</li>
                                <li class="col-md-4 justify-item"> <i class="fa fa-circle" aria-hidden="true"></i> Solar roof (net metering)</li>
                            </ul>
                        </div>

                    </div>
                    <div class="row mt-40 bg-ami st_ul_wrapper">
                        <div class="col-sm-12">
                            <h5 class="pd-10">ANCILLARY AMENITIES</h5>


                            <ul class="row">
                                <li class="col-md-4 justify-item"> <i class="fa fa-circle" aria-hidden="true"></i> Spacious entrance lobby</li>
                                <li class="col-md-4 justify-item"> <i class="fa fa-circle" aria-hidden="true"></i> Grand driveway</li>
                                <li class="col-md-4 justify-item"> <i class="fa fa-circle" aria-hidden="true"></i> Car lift</li>
                                <li class="col-md-4 justify-item"> <i class="fa fa-circle" aria-hidden="true"></i> Guest car parking</li>

                                <li class="col-md-4 justify-item"> <i class="fa fa-circle" aria-hidden="true"></i> Electric charging station for vehicle</li>
                                <li class="col-md-4 justify-item"> <i class="fa fa-circle" aria-hidden="true"></i> Driver&apos;s room</li>
                                <li class="col-md-4 justify-item"> <i class="fa fa-circle" aria-hidden="true"></i> Gas pipeline</li>
                                <li class="col-md-4 justify-item"> <i class="fa fa-circle" aria-hidden="true"></i> High-speed elevators</li>

                                <li class="col-md-4 justify-item"> <i class="fa fa-circle" aria-hidden="true"></i> Property manager services</li>
                                <li class="col-md-4 justify-item"> <i class="fa fa-circle" aria-hidden="true"></i> Service elevators</li>
                                <li class="col-md-8 justify-item"> <i class="fa fa-circle" aria-hidden="true"></i> Optimum lighting system (common area)</li>
                            </ul>
                        </div>


                    </div>

                    <div class="row mt-40 bg-ami st_ul_wrapper">
                        <div class="col-sm-12">
                            <h5 class="pd-10">LIFESTYLE AMENITIES</h5>
                            <ul class="row">
                                <li class="col-md-4 justify-item"> <i class="fa fa-circle" aria-hidden="true"></i> Hot water system</li>
                                <li class="col-md-4 justify-item"> <i class="fa fa-circle" aria-hidden="true"></i> Fibre to home</li>
                                <li class="col-md-4 justify-item"> <i class="fa fa-circle" aria-hidden="true"></i> Luggage carrier</li>
                                <li class="col-md-4 justify-item"> <i class="fa fa-circle" aria-hidden="true"></i> Wheelchair &amp; stretcher</li>
                                <li class="col-md-4 justify-item"> <i class="fa fa-circle" aria-hidden="true"></i> Vegetable &amp; fruit vendor point</li>

                                <li class="col-md-4 justify-item"> <i class="fa fa-circle" aria-hidden="true"></i> Housekeeping station</li>
                                <li class="col-md-4 justify-item"> <i class="fa fa-circle" aria-hidden="true"></i> Safety &amp; Security</li>
                                <li class="col-md-4 justify-item"> <i class="fa fa-circle" aria-hidden="true"></i> Fire fighting system</li>
                                <li class="col-md-4 justify-item"> <i class="fa fa-circle" aria-hidden="true"></i> Security cabin</li>

                                <li class="col-md-4 justify-item"> <i class="fa fa-circle" aria-hidden="true"></i> Multi-layer security</li>
                                <li class="col-md-4 justify-item"> <i class="fa fa-circle" aria-hidden="true"></i> CCTV surveillance for common areas</li>
                                <li class="col-md-4 justify-item"> <i class="fa fa-circle" aria-hidden="true"></i> Generator backup for common area</li>
                                <li class="col-md-4 justify-item"> <i class="fa fa-circle" aria-hidden="true"></i> First aid &amp; emergency setup</li>
                            </ul>
                        </div>


                    </div>

                    <div class="row mt-40 bg-ami st_ul_wrapper">
                        <div class="col-sm-12">
                            <h5 class="pd-10">ECO FRIENDLY AMENITIES</h5>

                            <ul class="row">
                                <li class="col-md-4 justify-item"> <i class="fa fa-circle" aria-hidden="true"></i> Garbage chute</li>

                                <li class="col-md-4 justify-item"> <i class="fa fa-circle" aria-hidden="true"></i> Sewage treatment plant</li>

                                <li class="col-md-4 justify-item"> <i class="fa fa-circle" aria-hidden="true"></i> Rainwater harvesting</li>
                            </ul>
                        </div>

                    </div>
                    <div class="row mt-40 bg-ami st_ul_wrapper">
                        <div class="col-sm-12">
                            <h5 class="pd-10">INTERNAL AMENITIES</h5>

                            <ul class="row">
                                <li class="col-md-4 justify-item"> <i class="fa fa-circle" aria-hidden="true"></i> Vitrified tile flooring</li>
                               
                                <li class="col-md-4 justify-item"> <i class="fa fa-circle" aria-hidden="true"></i> System windows with performance glass</li>
                                <li class="col-md-4 justify-item"> <i class="fa fa-circle" aria-hidden="true"></i> Fully air-conditioned apartments</li>
                                <li class="col-md-4 justify-item"> <i class="fa fa-circle" aria-hidden="true"></i> False ceiling in gypsum board</li>
                                <li class="col-md-4 justify-item"> <i class="fa fa-circle" aria-hidden="true"></i> Acrylic paint for exterior</li>

                                <li class="col-md-4 justify-item"> <i class="fa fa-circle" aria-hidden="true"></i> Kitchen platform top in Granite </li>
                                <li class="col-md-4 justify-item"> <i class="fa fa-circle" aria-hidden="true"></i> Quartz with Stainless steel sink</li>
                               
                                <li class="col-md-4 justify-item"> <i class="fa fa-circle" aria-hidden="true"></i> Main entrance with Video door phone</li>
                                <li class="col-md-4 justify-item"> <i class="fa fa-circle" aria-hidden="true"></i> Digital lock for main door</li>
                                <li class="col-md-4 justify-item"> <i class="fa fa-circle" aria-hidden="true"></i> Concealed wiring with modular switches</li>
                                <li class="col-md-4 justify-item"> <i class="fa fa-circle" aria-hidden="true"></i> Provision for inverter wiring</li>

                                <li class="col-md-4 justify-item"> <i class="fa fa-circle" aria-hidden="true"></i> Wooden look false ceiling in deck</li>
                                <li class="col-md-4 justify-item"> <i class="fa fa-circle" aria-hidden="true"></i> Glass railing in sit out</li>
                                <li class="col-md-4 justify-item"> <i class="fa fa-circle" aria-hidden="true"></i> Fire sprinklers in all rooms</li>

                                <li class="col-md-4 justify-item"> <i class="fa fa-circle" aria-hidden="true"></i> 7&rsquo; height tiles dado in toilets</li>
                                <li class="col-md-4 justify-item"> <i class="fa fa-circle" aria-hidden="true"></i> Window sill in granite / vitrified slab</li>

                            

                                    <li class="col-md-6 justify-item"> <i class="fa fa-circle" aria-hidden="true"></i> Gypsum finish internal walls with plastic paint
                                </li>
                                <li class="col-md-4 justify-item"> <i class="fa fa-circle" aria-hidden="true"></i> Laminated flush doors with elegant fittings</li>
                                <li class="col-md-7 justify-item"> <i class="fa fa-circle" aria-hidden="true"></i> Designer&rsquo;s bathroom with state-of-the-art
                                    sanitary fixtures </li>
                            </ul>
                        </div>

                    </div>
                </div>



                <!-- Location item -->
                <div class="items location full-width mt-50 row border_box">
                    <div class="col-sm-6">

                        <h5 class="text-center pt-20 pb-30">MASTER LAYOUT PLAN</h5>
                        <div class="grid">
                            <img src="<?= base_url() ?>uploads/layout-plan/GROUND LEVEL PLAN_22.09.22_page-0001-02.webp" alt="master-layoutplan">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <h5 class="text-center pt-10 pb-30">LOCATION MAP</h5>

                        <div>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7497.393656225389!2d73.727821!3d20.021235!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xacb7ae3deb1d8404!2sGoda%20Spandan!5e0!3m2!1sen!2sin!4v1670398900687!5m2!1sen!2sin" width="100%" height="330" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
                <div class="items location full-width mt-50 row ">

                    <div class="col-sm-12 border_box">
                        <h5 class="text-center pt-10 pb-30">MAP PLAN</h5>

                      <div>
                            <a data-fancybox="gallery" href="<?= base_url() ?>uploads/project/plan.PNG">
                                <img src="<?= base_url() ?>uploads/project/plan.PNG" alt="master-layoutplan">
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