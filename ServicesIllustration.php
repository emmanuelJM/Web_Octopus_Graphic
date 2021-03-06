<?php session_start(); ?>

<!doctype html>
<html lang="en">
<head>

<!-- Required meta tags -->

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Web Octopus Graphic, here we help you with all the visual communication problems you need.">
  <meta name="keywords" content="HTML, CSS, JavaScript">
  <meta name="author" content="Emmanuel Jarquin">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="robots" content="noindex" />

<!-- Font CSS -->

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">

<!-- Bootstrap CSS -->

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

<!-- CSS -->

  <link rel="stylesheet" href="./CSS/main.css">

<!-- Icons CSS -->

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/v4-shims.css">
  <link rel="stylesheet" href="./fonts/icomoon/style.css">

<!-- jquery -->

  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

  <title>Octopus Graphic</title>
  <link rel="shortcut icon" href="./Img/Icon_web.ico">

<!-- canonical -->

  <link rel=“canonical” href=“https://www.octopus-graphic.glitch.me” />

<!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-RWC7Z0XSP2"></script>

<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'G-RWC7Z0XSP2');
</script>

</head>

<body> 

  <!-- Screen Loading -->

  <?php include("./widget/ScreenLoading.html"); ?> 

  <!-- Start header -->

  <?php include("./widget/header.php"); ?> 

  <!-- End header -->

  <span class="ir-arriba icon-arrow-up2"><i class="fas fa-chevron-up"></i></span>

<!-- Start Body -->

<div class="container-body">

  <div class="container container-breadcrumb-services">

    <div class="row row-title row-fluid row-breadcrumb">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="Services.php">Services</a></li>
          <li class="breadcrumb-item active" aria-current="page">Illustration</li>
        </ol>
      </nav>
    </div>

  </div>

  <div class="container container-About-Us-title container-title-primary">

    <div class="row row-title row-fluid">
      <div class="col col-title">
        Illustration 
      </div>
    </div>

    <div class="row row-underline-title row-fluid">
      <div class="col-underline-title">
      </div>
    </div>

  </div>

  <div class="container container-Service">

    <div class="row align-items-start row-fluid row-Service">

      <div class="col-sm col-Service">

        <h2 class="Subtitle-Service">AN ART TO USE</h2>

        <p class="paragraph-Service">Octopus Graphic, creates the most appropriate way to communicate what your business or company offers. We always project in a creative and fresh way the best qualities of your company in order to express your ideas, messages and products.</p>

        <p class="paragraph-Service">A good illustration is not just a good drawing. An illustration always has a function, it always does something: tell a story, sell a product, describe an environment and show how something works.</p>

      </div>

      <div class="col-sm col-Service">
        <img src="Img/Illustration-Services.png" class="img-fluid img-Service" alt="Illustration-Services">
      </div>

    </div>

    <div class="row row-title row-fluid">
      <div class="col col-title">
        Services
      </div>
    </div>

    <div class="row row-title row-fluid">
      <div class="col-underline-title">
      </div>
    </div>

    <div class="row row-fluid row--Service-list">
      <div class="col-sm col-Service-list">
        <div data-aos="fade-right" data-aos-easing="linear" ><i class="far fa-check-circle" ></i></div>
        <h1 class="title-Service-list">T-shirts and merchandising</h1>
        <p class="paragraph-Service-list">A cool T-shirt to your liking? It's possible. We are experts in illustrations and drawings for t-shirts, merchandising, mugs and all kinds of objects.</p>
      </div>
      <div class="col-sm col-Service-list">
        <div data-aos="fade-right" data-aos-easing="linear" ><i class="far fa-check-circle" ></i></div>
        <h1 class="title-Service-list">Character Design</h1>
        <p class="paragraph-Service-list">We are experts in character design. We love to create characters for videogames, advertising, television, animation.</p>
      </div>
    </div>

    <div class="row row-fluid row--Service-list">
      <div class="col-sm col-Service-list">
        <div data-aos="fade-right" data-aos-easing="linear" ><i class="far fa-check-circle" ></i></div>
        <h1 class="title-Service-list">Editorial Illustration</h1>
        <p class="paragraph-Service-list">We have a wide experience in editorial illustration. We work for magazines, publications, magazines, blogs, illustrated children's stories.</p>
      </div>
      <div class="col-sm col-Service-list">
      </div>
    </div>

  <div class="row row-fluid">

    <a type="button" class="btn btn-primary btn-primary-Contacts" href="ContactsUs.php">Contacts</a>

  </div>

  <div class="LatestProjectsIllustration"></div>

</div>

<!-- End Body -->

  <!-- Start Footer -->

  <?php include("./widget/footer.html"); ?> 

  <!-- End Footer -->

  <!-- Bootstrap Js  -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

  <!-- Icons Js  -->

  <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js"></script>
  <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/v4-shims.js"></script>

  <!-- Js AOS Animate -->

  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>

  <!-- Js  -->

  <script defer src="JS/main.js"></script>

  <!-- Start of HubSpot Embed Code -->

  <script type="text/javascript" id="hs-script-loader" async defer src="//js-na1.hs-scripts.com/20977624.js"></script>

</body>
</html>




