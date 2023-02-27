<!DOCTYPE html>
<html lang="zxx">


<?php include 'includes/header-link.php'; ?>
<style>
    .portfolio .filtering span:after {

        background: #000;
    }


    .portfolio .filtering.prangan span:after {
        display: none !important;
    }

    .portfolio .filtering.prangan span {
        letter-spacing: 0px;
    }
    
    /*h2 */
    /*{*/
    /*    color:white;*/
        
    /*}*/
    /* h3 */
    /*{*/
    /*    color:white;*/
        
    /*}*/
</style>

<body>

    <?php include 'includes/header.php'; ?>

    <script>
        jQuery(function() {
            jQuery('#overview').click();
        });
    </script>


    <header class="pages-header bg-img valign parallaxie" data-background="<?= base_url() ?>assets/img/pg1.webp" data-overlay-dark="5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cont text-center">
                        <img src="<?= base_url() ?>uploads/project/prangan-logo-w.webp" alt="project" style="width:350px;">
                        <!--<h4 class="pt-5"> Welcome to a world where you can live your dream.</h4>-->
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section class="st_ul portfolio section-padding project-pd green-tx-bg ">
        <div class="container">
            <div class="row">

                <!-- filter links -->
                <div class="filtering prangan text-center col-12">
                        <div class="filter box justify-content-center" style="row-gap: 5px;">
                        <span data-filter='*' class="active" style="display: none;">All</span>
                        <span data-filter='.overview' id="overview" style="display: none;">Overview</span>
                        <span data-filter='.pgallery'><i class="fas fa-star"></i> Project Gallery</span>
                        <span data-filter='.walkvideo'><i class="fas fa-star"></i> Walk Through</span>
                        <span data-filter='.florplan'><i class="fas fa-star"></i> Floor Plans</span>
                        <span data-filter='.amenities'><i class="fas fa-star"></i> Amenities</span>
                        <span data-filter='.location'><i class="fas fa-star"></i> Location Map</span>
                        <span><a href="<?= base_url() ?>uploads/brochure/prangan-brochure.pdf" target="_blank"><i class="fas fa-star"></i> Download Brochure</a></span>
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
                                                <img src="<?= base_url() ?>assets/img/prangan-overview.jpg" alt="Prangan - Ongoing 3bhk residential flats in Nashik">


                                            </div>

                                            <div class="content pt-20 bg-white">
                                                <div class="row justify-content-center">
                                                    <div class="col-lg-10">
                                                        <div class="cont pt-20 text-justify">
                                                            <div>
                                                                <h3>LIVE THE LIFE YOU HAVE ALWAYS DREAMED OF</h3>
                                                            </div>
                                                            <div>
                                                                <p>A picturesque gated community nestled in the tree lined avenues of Serene Meadows, Nashik. Prangan is an ongoing premium 3BHK Residential flats project, where Luxurious meets peace and serenity. With an abundance of natural beauty around and a world of delightful pools, gardens and relaxation areas inside. This has become one of the landmarks of Nashik&rsquo;s most coveted address. Every detail of this project is thoroughly planned, from its prime location to its immaculately designed residences and plethora of amenities.</p>
                                                                <p>Life at Prangan allows you to enjoy pleasure of residing flats with loads of amenities. The connectivity of big city living and the quiet charm of a life in the very lap of nature. Where every day starts with a view of the scenic hills in the distance and a breath of fresh air. And every day ends with the best of times with friends and family. Here&apos;s an address that gives you everything you have wished for, and then some.</p>
                                                                <p>Leisure. Work. Rejuvenation. Whatever it is you want from life, you&apos;ll find it all, right here at home. There are delightful surprises around every corner and a whole list of lifestyle amenities for you to enjoy with your family. Standing way up here, you could get a little breathless. The view is so beautiful it is known to have that effect on people. So let your eyes rest on the greenery all around and rejuvenate your soul, one deep breath at a time.</p>
                                                            </div>
                                                        </div>
                                                        <div class="author row">
                                                            <div class="author-img col-md-2 grid">
                                                              <a href="https://goo.gl/maps/54unVkE4v6TUwXfy9" target="_blank">  <img src="<?= base_url() ?>assets/img/apartment.webp" alt="Address"  class="width-a" style="width: 50px !important;"></a>
                                                            </div>
                                                            <div class="col-md-10 grid">
                                                                <h6>SITE ADDRESS</h6>
                                                                <p class="m-0"><a href="https://goo.gl/maps/54unVkE4v6TUwXfy9" target="_blank">Serene Meadows, Gangapur Road, Nashik - 422 013.</a></p>
                                                                <img src="<?= base_url() ?>uploads/project/prangan-maharera.webp" alt="Logo" class="w200">
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

                            <?php
                            $gallery =   getRowById('tbl_project_gallery', 'pro_id', '9');
                            if ($gallery) {
                                foreach ($gallery as $img) {
                            ?>
                                    <div class="col-sm-6 grid" style="padding: 6px 5px">

                                        <img src="<?= base_url() ?>uploads/pro_gallery/<?= $img['image'] ?>" alt="Goda Spandan" />

                                    </div>

                            <?php
                                }
                            }
                            ?>


                        </div>

                    </section>





                    <!-- walk through item -->
                    <div class="items walkvideo full-width mt-50">
                        <div class="video-walk pt-20">
                            <h3 class="text-center">
                                WALKTHROUGH VIDEO
                            </h3>
                        </div>
                        <div class="video-walk pt-20">
                            <iframe width="100%" height="450px" src="https://www.youtube.com/embed/nNTnzOz8lgg" title="YouTube video player" frameborder="0" allowfullscreen></iframe>

                        </div>
                    </div>

                    <!-- Floor Plan  item -->
                   <div class="items florplan full-width mt-50">
                        <div class="title-head">
                            <h3 class="text-center">FLOOR PLANS</h3>
                        </div>
                        <div class="row ">

                            <div class="col-md-6 mb-10">
                            <a data-fancybox="gallery" href="<?= base_url() ?>uploads/floorplan/a-wing-evenfloor-big.webp">
                                <img src="<?= base_url() ?>uploads/floorplan/a-wing-evenfloor-big.webp" alt="Floor Plan">
                                <h5 class="aminites-head">A Wing Even Floor Plan</h5>
                            </a>
                            </div>

                            <div class="col-md-6 mb-10 grid">
                                  <a data-fancybox="gallery" href="<?= base_url() ?>uploads/floorplan/a-wing-oddfloor-big.webp">
                                
                                <img src="<?= base_url() ?>uploads/floorplan/a-wing-oddfloor-big.webp" alt="Floor Plan">
                                  </a>
                                <h5 class="aminites-head">A Wing Odd Floor Plan</h5>
                            </div>

                            <div class="col-md-6 mb-10 grid">
                                  <a data-fancybox="gallery" href="<?= base_url() ?>uploads/floorplan/b-wing-evenfloor-big.webp">
                                <img src="<?= base_url() ?>uploads/floorplan/b-wing-evenfloor-big.webp" alt="Floor Plan">
                                  </a>
                                <h5 class="aminites-head">B Wing Even Floor Plan</h5>
                            </div>

                            <div class="col-md-6 mb-10 grid">
                                  <a data-fancybox="gallery" href="<?= base_url() ?>uploads/floorplan/b-wing-oddfloor-big.webp">
                                <img src="<?= base_url() ?>uploads/floorplan/b-wing-oddfloor-big.webp" alt="Floor Plan">
                                  </a>
                                <h5 class="aminites-head">B Wing Odd Floor Plan</h5>
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
                                <h5 >OVER 36 LIFESTYLE AMENITIES</h5>


                                <ul class="row">
                                    <li class="col-md-4 justify-item"> <i class="fas fa-star"></i>Swimming Pool</li>
                                    <li class="col-md-4 justify-item"> <i class="fas fa-star"></i>Waterfall</li>
                                    <li class="col-md-4 justify-item"> <i class="fas fa-star"></i>Water Curtain</li>
                                    <li class="col-md-4 justify-item"> <i class="fas fa-star"></i>Whirlpool Bath</li>
                                    <li class="col-md-4 justify-item"> <i class="fas fa-star"></i>Kids Fun Pool</li>
                                    <li class="col-md-4 justify-item"> <i class="fas fa-star"></i>Guest Suites</li>
                                    <li class="col-md-4 justify-item"> <i class="fas fa-star"></i>Party Lawn</li>
                                    <li class="col-md-4 justify-item"> <i class="fas fa-star"></i>Open Kitchen</li>
                                    <li class="col-md-4 justify-item"> <i class="fas fa-star"></i>Indoor Games</li>
                                    <li class="col-md-4 justify-item"> <i class="fas fa-star"></i>Creche</li>
                                    <li class="col-md-4 justify-item"> <i class="fas fa-star"></i>Common Gym</li>
                                    <li class="col-md-4 justify-item"> <i class="fas fa-star"></i>Ladies Gym</li>
                                    <li class="col-md-4 justify-item"> <i class="fas fa-star"></i>Library</li>

                                    <li class="col-md-4 justify-item"> <i class="fas fa-star"></i>Green Gym</li>
                                    <li class="col-md-4 justify-item"> <i class="fas fa-star"></i>Yoga Hall</li>
                                    <li class="col-md-4 justify-item"> <i class="fas fa-star"></i>Kids Play Area</li>
                                    <li class="col-md-4 justify-item"> <i class="fas fa-star"></i>Walking Track</li>
                                    <li class="col-md-4 justify-item"> <i class="fas fa-star"></i>Sky Deck</li>
                                    <li class="col-md-4 justify-item"> <i class="fas fa-star"></i>Box Cricket</li>
                                    <li class="col-md-4 justify-item"> <i class="fas fa-star"></i>Multi-Games Court</li>
                                    <li class="col-md-4 justify-item"> <i class="fas fa-star"></i>Sky Bridge</li>
                                    <li class="col-md-4 justify-item"> <i class="fas fa-star"></i>Solar Panels</li>
                                    <li class="col-md-4 justify-item"> <i class="fas fa-star"></i>Creative Art Studio</li>
                                    <li class="col-md-4 justify-item"> <i class="fas fa-star"></i>Terrace Lounge</li>
                                    <li class="col-md-4 justify-item"> <i class="fas fa-star"></i>Seniors Corner</li>
                                    <li class="col-md-4 justify-item"> <i class="fas fa-star"></i>Open Chess</li>

                                    <li class="col-md-4 justify-item"> <i class="fas fa-star"></i>Performance Stage</li>
                                    <li class="col-md-4 justify-item"> <i class="fas fa-star"></i>Meditation Area</li>
                                    <li class="col-md-4 justify-item"> <i class="fas fa-star"></i>Hammock</li>
                                    <li class="col-md-4 justify-item"> <i class="fas fa-star"></i>Open Screen</li>
                                    <li class="col-md-4 justify-item"> <i class="fas fa-star"></i>Social Lounge Area</li>
                                    <li class="col-md-4 justify-item"> <i class="fas fa-star"></i>Cctv</li>
                                    <li class="col-md-4 justify-item"> <i class="fas fa-star"></i>Lobby</li>
                                    <li class="col-md-4 justify-item"> <i class="fas fa-star"></i>3 Layer Security</li>
                                    <li class="col-md-4 justify-item"> <i class="fas fa-star"></i>24x7 Security</li>
                                    <li class="col-md-4 justify-item"> <i class="fas fa-star"></i>Power Backup</li>
                                    <li class="col-md-4 justify-item"> <i class="fas fa-star"></i>Fire Fighting</li>
                                    <li class="col-md-4 justify-item"> <i class="fas fa-star"></i>Fibre To Home</li>
                                    <li class="col-md-4 justify-item"> <i class="fas fa-star"></i>Society Office</li>
                                </ul>
                            </div>
                        </div>


                        <div class="row mt-40 bg-ami st_ul_wrapper">
                            <div class="col-sm-12">
                                <h5>INTERNAL AMENITIES</h5>
                                <ul class="row">
                                    <li class="col-md-12 justify-item"> <i class="fas fa-star"></i>Vitrified flooring</li>


                                    <li class="col-md-12 justify-item"> <i class="fas fa-star"></i>POP finish internal walls with plastic paint</li>

                                    <li class="col-md-12 justify-item"> <i class="fas fa-star"></i>Concealed wiring with modular switches</li>
                                    <li class="col-md-12 justify-item"> <i class="fas fa-star"></i>Anti-skid flooring in sundeck</li>

                                    <li class="col-md-12 justify-item"> <i class="fas fa-star"></i>Provision for inverter wiring</li>
                                    <li class="col-md-12 justify-item"> <i class="fas fa-star"></i>Laminated flush doors with elegant fittings</li>
                                    <li class="col-md-12 justify-item"> <i class="fas fa-star"></i>Sand- faced external plaster with acrylic paint</li>
                                    <li class="col-md-12 justify-item"> <i class="fas fa-star"></i>Powder coated aluminum sliding windows</li>
                                    <li class="col-md-12 justify-item"> <i class="fas fa-star"></i>Main entrance with safety door &amp; video door phones</li>
                                    <li class="col-md-12 justify-item"> <i class="fas fa-star"></i>Designer&apos;s bathroom with state-of-the-art sanitary
                                        fixtures &amp; cp fitting</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="items full-width location mt-50">
                        <div class="row">

                            <div class="col-sm-6">
                                <h5 class="text-center pt-20 pb-30">MASTER LAYOUT PLAN</h5>
                                <div class="grid">
                                    <img src="<?= base_url() ?>uploads/layout-plan/parngan-master-layoutplan.webp" alt="master-layoutplan">
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <h5 class="text-center pt-20 pb-30">LOCATION MAP</h5>

                                <div>
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7497.8257040760645!2d73.735061!3d20012172!3m2!1i1024!2i768!4f131!3m3!1m2!1s0x0%3A0x8d8d30c7acbbac63!2sPrangan%20by%20Patil%20Shah%20Housing!5e0!3m2!1sen!2sin!4v1670399894393!5m2!1sen!2sin" width="100%" height="312" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="items location full-width mt-50 row">
                        <div class="col-sm-12">
                            <h5 class="text-center pt-10 pb-30">MAP PLAN</h5>

                            <div>
                                  <a data-fancybox="gallery" href="<?= base_url() ?>uploads/project/plan2.PNG">
                                <img src="<?= base_url() ?>uploads/project/plan2.PNG" alt="master-layoutplan">
                                </a>
                            </div>

                        </div>

                    </div>

                    <!--gallery-->


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