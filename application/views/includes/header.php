<nav class="navbar change navbar-expand-lg">
    <div class="container">

        <!-- Logo -->
        <a class="logo mobile_logo" href="<?= base_url() ?>">
            <img src="<?= base_url() ?>assets/img/logo.webp" alt="logo" style="width:260px">
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"><i class="fas fa-bars"></i></span>
        </button>

        <!-- navbar links -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link" href="<?= base_url() ?>" role="button" aria-haspopup="true" aria-expanded="false">Home</a>

                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="<?= base_url() ?>" role="button" aria-haspopup="true" aria-expanded="false">About</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="<?= base_url('about-us') ?>">About the Company</a>
                        <a class="dropdown-item" href="<?= base_url('about-nashik') ?>">About Nashik</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="<?= base_url() ?>" role="button" aria-haspopup="true" aria-expanded="false">Ongoing Projects</a>
                    <div class="dropdown-menu">

                        <a class="dropdown-item" href="<?= base_url('goda-spandan') ?>">Goda Spandan</a>
                        <a class="dropdown-item" href="<?= base_url('prangan') ?>">Prangan</a>


                    </div>
                </li>
                <!-- <li class="nav-item">
                        <a class="nav-link" href="<?= base_url() ?>">About Nashik</a>
                    </li> -->
                <!--<li class="nav-item">-->
                <!--    <a class="nav-link" href="<?= base_url('complete-project') ?>">Completed Projects</a>-->
                <!--</li>-->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="<?= base_url() ?>" role="button" aria-haspopup="true" aria-expanded="false">Completed Projects</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="<?= base_url('ekaant') ?>">Ekaant</a>
                        <a class="dropdown-item" href="<?= base_url('complete-project') ?>">All Projects</a>
                    </div>
                </li>
                
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="<?= base_url() ?>" role="button" aria-haspopup="true" aria-expanded="false">Testimonials</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="<?= base_url('prangan-testimonial') ?>">Prangan</a>
                        <a class="dropdown-item" href="<?= base_url('testimonial') ?>/10/Ekaant">Ekaant</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('career') ?>">Careers</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('contact') ?>">Contact Us</a>
                </li>
            </ul>

        </div>
    </div>
</nav>