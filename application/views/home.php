<!DOCTYPE html>
<html lang="zxx">


<?php include 'includes/header-link.php'; ?>
<style>
    .home_new_banner{
    background-image: url("https://www.thinkdigitalindia.in/patilgroup/assets/img/slid/11.webp");
    background-size: cover;
    height: 100vh;
    background-position: center;
    display: flex;
    align-items: center;
    justify-content: center;
}

.home_new_banner .caption h2{
    color: #fff;
}

.home_new_banner::before {
    content: '';
    background: rgba(0,0,0,0.5);
    width: 100%;
    height: 100%;
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
}

.home_new_banner .caption p{
        color: #dad6d6;
    }

@media (max-width: 991px){
    .home_new_banner .caption h2{
        font-size: 25px;
    }
    
}

</style>

<body>


    <?php include 'includes/header.php'; ?>

    <!--<header class="bg-img valign parallaxie home-bg1" data-background="<?= base_url() ?>assets/img/slid/11.webp" data-overlay-dark="5" style="background-position: center center fixed;-o-background-size: cover;-->
    <!---moz-background-size: cover;-webkit-background-size:cover; background-size: cover; background-size : 100% 100%;">-->
    <!--    <div class="container">-->
    <!--        <div class="row justify-content-center text-center">-->
    <!--            <div class="col-lg-12 col-md-9">-->
    <!--                <div class="caption center">-->
    <!--                    <h2 data-splitting class="playfont"><a href="#0">-->
    <!--                            WE BUILD WITH STEEL, STONE & CEMENT <br> BUT WE START WITH VISION-->
    <!--                        </a>-->
    <!--                    </h2>-->
    <!--                    <p class="mt-10">The essence of luxury is to enjoy your time and-->
    <!--                        to have the freedom of choice. </p>-->
    <!--                    <a href="<?= base_url('about-us') ?>" class="btn-curve btn-bord btn-lit mt-30">-->
    <!--                        <span>Know More</span>-->
    <!--                    </a>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</header>-->
    
    <div class="home_new_banner">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-12 col-md-9">
                    <div class="caption center">
                        <h2 data-splitting class="playfont"><a href="#0">
                                WE BUILD WITH STEEL, STONE & CEMENT <br> BUT WE START WITH VISION
                            </a>
                        </h2>
                        <p class="mt-10">The essence of luxury is to enjoy your time and
                            to have the freedom of choice. </p>
                        <a href="<?= base_url('about-us') ?>" class="btn-curve btn-bord btn-lit mt-30">
                            <span>Know More</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section class="about section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="exp-img wow fadeInUp" data-wow-delay=".3s">
                        <div class="img bg-img wow imago grid" data-background="<?= base_url() ?>assets/img/exp.jpg">
                            <div class="since custom-font">
                                <span>Since</span>
                                <span>1990</span>
                            </div>
                            <div class="years custom-font">
                                <h2>32</h2>
                                <h5>Years Experience</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 valign">
                    <div class="exp-content wow fadeInUp" data-wow-delay=".3s">
                        <h6 class="sub-title">A Brief About Us</h6>
                        <h2 class="mb-20 playfont">WHEN WE BUILD, <br> WE BUILD WITH A CONSCIENCE</h2>
                        <p>We don't just build homes and office spaces, we build a whole new world that re-defines the
                            way people live, work and play. That means creating insightful designs that reflect the
                            essence of the modern world.</p>
                        <a href="<?= base_url('about-us') ?>" class="btn-curve btn-color mt-30">
                            <span>
                                Read More
                            </span>
                        </a>
                        <div class="numbers mt-50">
                            <div class="row">

                                <div class="col-md-4">
                                    <div class="item">
                                        <h3><span class="nbr custom-font counter" data-target="1000000">10,00,000</span></h3>
                                        <h6>SQ.FT.</h6>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="item">
                                        <h3><span class="nbr custom-font counter" data-target="700">700</span> <span class="counter_plus bigplus text-black">+</span></h3>
                                        <h6>FAMILIES </h6>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="item">
                                        <h3><span class="nbr custom-font counter" data-target="1990">1990</span></h3>
                                        <h6>INCEPTION </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="team section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="tit pb-30">
                        <h6 class="custom-font mb-10 wow fadeInDown" data-wow-delay=".3s">When we build, we build with a
                            Conscience.</h6>
                        <h3 class="wow flipInX" data-wow-delay=".5s">Awards and recognitions</h3>
                        <p class="wow fadeInUp text-justify" data-wow-delay=".3s"><b>The last decade has been glorious
                                for the company as they were
                                awarded for their projects:
                                EKAANT AND PRANGAN </b></p>
                        <p class="wow fadeInUp text-justify" data-wow-delay=".3s">We don't just build homes and office spaces, we
                            build a whole new world that re-defines the way people live, work and play. That means
                            creating insightful designs that reflect the essence of the modern world. We offer solutions
                            that are technologically advanced as well as environmentally sustainable.
                          
                        </p>
                        <div class="navs mt-30 wow fadeInUp desktop_view" data-wow-delay=".3s">
                            <span class="prev">
                                <i class="fas fa-long-arrow-alt-left"></i>
                            </span>
                            <span class="next">
                                <i class="fas fa-long-arrow-alt-right"></i>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="team-container ">


                        <div class="item wow fadeInUp" data-wow-delay=".3s">
                            <div class="img wow imago ">
                                <img src="<?= base_url() ?>assets/img/st_images/awards/award2.webp" alt="award2">

                            </div>

                        </div>
                        <div class="item wow fadeInUp" data-wow-delay=".3s">
                            <div class="img wow imago ">
                                <img src="<?= base_url() ?>assets/img/st_images/awards/award3.webp" alt="award3">

                            </div>

                        </div>
                        <div class="item wow fadeInUp" data-wow-delay=".3s">
                            <div class="img wow imago ">
                                <img src="<?= base_url() ?>assets/img/st_images/awards/award1.webp" alt="award3">

                            </div>

                        </div>
                        <div class="item wow fadeInUp" data-wow-delay=".3s">
                            <div class="img wow imago ">
                                <img src="<?= base_url() ?>assets/img/st_images/awards/award2.webp" alt="award1">

                            </div>

                        </div>
                        <div class="item wow fadeInUp" data-wow-delay=".3s">
                            <div class="img wow imago ">
                                <img src="<?= base_url() ?>assets/img/st_images/awards/award3.webp" alt="award1">

                            </div>

                        </div>
                    </div>
                    <div class="navs mt-30 wow fadeInUp mobile_view" data-wow-delay=".3s">
                        <span class="prev">
                            <i class="fas fa-long-arrow-alt-left"></i>
                        </span>
                        <span class="next">
                            <i class="fas fa-long-arrow-alt-right"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="dots-half bg-img bg-repeat" data-background="<?= base_url() ?>assets/img/dots.webp"></div>
    </section>

    <section class="work-carousel metro section-padding bg-img bg-repeat" data-background="assets/img/dots.webp">
        <div class="container-fluid">
            <!-- <div class="container">
                <div class="section-head text-center">
                    <div class="row justify-content-center">
                        <div class="col-lg-6 col-md-8 col-sm-10">
                            <h4 class="playfont wow flipInX" data-wow-delay=".5s">ONGOING PROJECTS</h4>
                            <h6 class="custom-font wow fadeInDown" data-wow-delay=".3s">Core values of trust, innovation
                                and quality define the blue print for its entire portfolio of projects</h6>
                        </div>
                    </div>
                </div>
            </div> -->
            <div class="row">
                <div class="col-lg-12 no-padding">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="content wow fadeInUp" data-wow-delay=".3s">
                                    <div class="item-img bg-img wow imago grid ovrly item-img1" data-background="<?= base_url() ?>assets/img/v1.jpg" style="background-position: center">
                                        <div class="ovrly-content">
                                            <h6 class=" tcenter">ABOUT</h6>
                                            <h2 class=" tcenter">PATIL GROUP</h2>
                                            <p class="tcenter about_para">Patil Group is one of Nashik's top builders and
                                                developers with over thirty two years of expertise in building luxurious
                                                residential projects. Incepted in 1990, Patil Shah Housing has advocated
                                                insightful designs, eco-friendly construction techniques and alluring
                                                spaces
                                                at mesmerizing locations. Each home is build with kinship and a generous
                                                sprinkle of innovation. The company has established itself on the
                                                foundation
                                                of timely and quality executions, distinctive ideas and trust. Working
                                                on
                                                diverse projects, the company has proudly made its mark as one of the
                                                most
                                                prestigious real-estate companies in Nashik. Patil Shah Housing's
                                                commitment
                                                to excellence has converted various locations in Nashik into luxury
                                                homes
                                                and commercial spaces.</p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="content wow fadeInUp" data-wow-delay=".3s">
                                    <div class="item-img bg-img wow imago grid ovrly item-img1" data-background="<?= base_url() ?>assets/img/v1.jpg" style="background-position: center">
                                        <div class="ovrly-content">
                                            <h6 class=" tcenter">OUR</h6>
                                            <h2 class=" tcenter">VISION</h2>
                                            <p class="tcenter about_para">For most people, home is not just about four walls shaped with bricks and
                                                cement, but a world where love resides, memories are created and a
                                                foundation of a lifetime is being laid. Being a responsible real estate
                                                developer, the Group takes responsibility to provide them with luxurious
                                                residential apartments, complimented with the highest standard of
                                                design,
                                                innovation, and execution. Built on the foundation of trust, integrity,
                                                customer-centric approach and perfection, the company’s work always
                                                displays
                                                its core values. All this makes the experience of owning a Patil Group
                                                property comparable with none.</p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="content wow fadeInUp" data-wow-delay=".3s">
                                    <div class="item-img bg-img wow imago grid ovrly item-img1" data-background="<?= base_url() ?>assets/img/v1.jpg">
                                        <div class="ovrly-content">
                                            <h6 class=" tcenter">OUR</h6>
                                            <h2 class=" tcenter">POLICY</h2>
                                            <p class="tcenter about_para">We are committed to develop and construct aesthetically designed and
                                                economically viable
                                                residential establishments by understanding the needs & expectations of
                                                interested parties
                                                aiming for total customer satisfaction.
                                                To construct and deliver projects with quality workmanship & in stipulated
                                                timeframe.
                                                To comply with applicable statutory and regulatory norms & protect
                                                consumer interest.
                                                To create value in every project we develop & compete on product
                                                differentiation
                                                rather than price.. To provide exceptional customer service, reliability & customer
                                                satisfaction. Power back up for lift and common areas.

                                                Our latest Residential project Prangan, located in the lush green Serene
                                                Meadows, Gangapur
                                                Road is a state of art Residential Apartment with luxurious amenities.
                                            </p>
                                        </div>
                                    </div>

                                </div>
                            </div>


                        </div>

                        <!-- slider setting -->
                        <div class="swiper-button-next swiper-nav-ctrl next-ctrl cursor-pointer">
                            <i class="ion-ios-arrow-right"></i>
                        </div>
                        <div class="swiper-button-prev swiper-nav-ctrl prev-ctrl cursor-pointer">
                            <i class="ion-ios-arrow-left"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="work-carousel metro section-padding dark">
        <div class="container-fluid">
            <div class="container">
                <div class="section-head text-center">
                    <div class="row justify-content-center">
                        <div class="col-lg-6 col-md-8 col-sm-10">
                            <h4 class="playfont wow flipInX" data-wow-delay=".5s">ONGOING PROJECTS</h4>
                            <p class="wow fadeInUp" data-wow-delay=".3s">Core values of trust, innovation
                                and quality define portfolio of projects</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 no-padding">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="content wow fadeInUp" data-wow-delay=".3s">
                                    
                                    <a href="<?= base_url('goda-spandan') ?>" class="item-img project_img bg-img wow imago grid w-100" data-background="<?= base_url() ?>assets/img/st_images/godda.webp" style="background-position: center">
                                    </a>
                                    <div class="cont">
                                        <h4><a href="<?= base_url('goda-spandan') ?>"><img src="<?= base_url() ?>uploads/project/goda.webp" alt="project" style="height: 84px;
    width: 300px;
    object-fit: contain;"></a></h4>
                                        <h5><a href="<?= base_url('goda-spandan') ?>" class="f-16 pt-10">WE BUILD WITH STEEL, STONE & CEMENT <br>
BUT WE START WITH VISION </a></h5>

                                        <p ><a href="<?= base_url('goda-spandan') ?>" class="mt-15 pb-20">

                                                <b>LOCATION :</b> Near Someshwar Temple, River Front, Gangapur Road, Nashik</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="content wow fadeInUp" data-wow-delay=".3s">
                                    <a href="<?= base_url('prangan') ?>" class="item-img project_img bg-img wow imago grid w-100" data-background="<?= base_url() ?>assets/img/st_images/new-prangan.webp" style="background-position: center">
                                    </a>
                                    <div class="cont">
                                        <h5><a href="<?= base_url('prangan') ?>"><img src="<?= base_url() ?>uploads/project/prangan-logo-w.webp" alt="project" style="width:300px;"></a></h5>
                                        <h4><a href="<?= base_url('prangan') ?>" class="f-16 pt-10">
                                        LIFE UNDER THE STARS
                                        <br>
                                        WELCOME TO
                                                A WORLD WHERE YOU CAN
                                                LIVE YOUR DREAM.</a></h4>
                                        <p><a href="<?= base_url('prangan') ?>" class="mt-15"> <b>LOCATION :</b> Serene Meadows, Gangapur Road, Nashik - 422013.</a></p>

                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
    </section>



    <section class="testimonials team section-padding paper-tex" data-overlay-dark="8">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mb-50">
                    <div class="tit text-center">
                        <!-- <h6 class="custom-font mb-10 wow fadeInDown" data-wow-delay=".3s">Some thoughts from Us</h6> -->
                        <h3 class="wow flipInX" data-wow-delay=".5s">COMPANY MILESTONES</h3>
                        <p class="wow fadeInUp" data-wow-delay=".3s">Patil Group has become synonymous with quality,
                            timely executions, customer satisfaction and most importantly, unique innovations.</p>
                    </div>
                </div>
            </div>
            <div class="row partners_wrapper">
                <div class="col-sm-1"></div>
                <div class="col-sm-10 row grid partners">
                    <div class="col-sm-4 pos-center border-right">
                        <img class="milestons_images" src="<?= base_url() ?>assets/img/st_images/client/patil-classic-w.PNG" alt="patil group">
                    </div>
                    <div class="col-sm-4 pos-center border-right">
                        <img class="milestons_images" src="<?= base_url() ?>assets/img/st_images/client/patil-ekaant-w.PNG" alt="patil group">
                    </div>
                    <div class="col-sm-4 pos-center ">
                        <img class="milestons_images" src="<?= base_url() ?>assets/img/st_images/client/patil-estate-w.PNG" alt="patil group">
                    </div>
                    <div class="col-sm-4 pos-center border-right">
                        <img class="milestons_images" src="<?= base_url() ?>assets/img/st_images/client/patil-garden-w.PNG" alt="patil group">
                    </div>
                    <div class="col-sm-4 pos-center border-right">
                        <img class="milestons_images" src="<?= base_url() ?>assets/img/st_images/client/patil-nest-w.PNG" alt="patil group">
                    </div>
                    <div class="col-sm-4 pos-center ">
                        <img class="milestons_images" src="<?= base_url() ?>assets/img/st_images/client/patil-parichay-w.PNG" alt="patil group">
                    </div>
                    <div class="col-sm-4 pos-center border-right">
                        <img class="milestons_images" src="<?= base_url() ?>assets/img/st_images/client/patil-park-w.PNG" alt="patil group">
                    </div>
                    <div class="col-sm-4 pos-center border-right">
                        <img class="milestons_images" src="<?= base_url() ?>assets/img/st_images/client/patil-plaza-w.PNG" alt="patil group">
                    </div>
                    <div class="col-sm-4 pos-center ">
                        <img class="milestons_images" src="<?= base_url() ?>assets/img/st_images/client/patil-prestige-w.PNG" alt="patil group">
                    </div>
                                      
                    <div class="col-sm-4 pos-center  border-right">
                        <img class="milestons_images" src="<?= base_url() ?>assets/img/st_images/client/patil-rajgruhi.PNG" alt="patil group">
                    </div>
                    <div class="col-sm-4 pos-center  border-right">
                        <img class="milestons_images" src="<?= base_url() ?>assets/img/st_images/client/patil-prangan.PNG" alt="patil group">
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <section class="contact cont-map">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-6 contact-form wow fadeInDown" data-wow-delay=".3s">
                    <form method="post" action="<?= base_url('contact') ?>">
                        <div class="section-head">
                            <h6 class="custom-font">Contact Us</h6>
                            <h4 class="playfont">Request A Call Back</h4>
                        </div>


                        <div class="controls">

                            <div class="form-group">
                                <input id="form_name" type="text" name="name" placeholder="Name" required="required">
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
        <div class="contact-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14996.442103851836!2d73.75165060781251!3d20.003875400000023!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bddeb9f207af567%3A0xba42142d3032bdc5!2sPatil%20Group%20Builders%20%26%20Developers%2C%20Nashik!5e0!3m2!1sen!2sin!4v1669803323942!5m2!1sen!2sin" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="bg-img" data-background="<?= base_url() ?>assets/img/2.webp"></div>
    </section>

    <?php include 'includes/footer.php'; ?>


    <?php include 'includes/footer-link.php'; ?>

</body>


</html>