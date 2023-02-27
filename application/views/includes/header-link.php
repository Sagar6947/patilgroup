<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title><?= $title ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="keywords" content="Property in nasik, Nashik, hot properties in nasik, nashik, nasik builders, 4bhk flats in nasik,Nashik, 4bhk apartments in nashik, nasik, home in nasik, Nashik, top builders in nasik, nashik, builders in nasik, nashik, 3bhk flats in nasik, nashik, developers in nasik, nashik, spacious apartments in nasik, nashik, construction sites in nasik, nashik, Nashik, project with all amenities in nasik, nashik, project in gangapur road area, Serene meadows, project in college road area, hot properties in nasik, nashik, luxurious apartments in nasik, nashik, penthouse in nasik, nashik, spacious penthouse in nasik, nashik, project with all modern amenities in nasik, nashik, nasik based builders, nashik, lifestyle projects in nasik, nashik, lifestyle apartments, flats in nasik, nashik, prestigious projects, garden flats in nasik, nashik, best project in nasik, nashik,nashik, good builders in nasik, nashik, best developer in nasik, nashik, Apartments, Ekaant, Prangan, Patil Parichay" />
    <meta name="description" content="The Patil Group has become synonymous with quality, timely executions, customer satisfaction and most importantly, unique innovations." />
    <meta name="author" content="Patil Group" />
    
    <script src="<?= base_url() ?>assets/js/scripts.js" defer></script>
    
    <script>
        var wind = $(window);

  wind.on("scroll", function () {
    var bodyScroll = wind.scrollTop(),
      navbar = $(".navbar.change"),
      logo = $(".navbar.change .logo> img");

    if (bodyScroll > 300) {
      navbar.addClass("nav-scroll");
      logo.attr(
        "src",
        "https://www.kydigitals.com/patilgroup/assets/img/logo-patil-shah.webp"
      );
    } else {
      navbar.removeClass("nav-scroll");
      logo.attr(
        "src",
        "https://www.kydigitals.com/patilgroup/assets/img/logo.webp"
      );
    }
  });

  $(".navbar .search .icon").on("click", function () {
    $(".navbar .search .search-form").fadeIn();
  });

  $(".navbar .search .search-form .close").on("click", function () {
    $(".navbar .search .search-form").fadeOut();
  });
    </script>


    <!-- Favicon -->
    <link rel="shortcut icon" href="<?= base_url() ?>assets/img/favicon.webp" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Teko:300,400,500,600,700&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,500,600,700,800,900&amp;display=swap" rel="stylesheet">

    <!-- Plugins -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/plugins.css" />
    <!-- <link href="<?= base_url() ?>assets/css/twentytwenty.css" rel="stylesheet" type="text/css" /> -->

    <!-- Core Style Css -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/style.css" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css"> 

</head>