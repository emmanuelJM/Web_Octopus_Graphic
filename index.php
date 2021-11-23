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

  <!-- Start Cover Home -->

    <div class="row">
      <div class="col Col-Cover-Home">
        <img src="Img/Cover-Page-Home.png" alt="Cover-Page-Home" class="Cover-Page-Home w-100 d-block">
                
          <div class="container-Cover-Title">
            <h5 class="Cover-Home-Title">Create - Design - Code</h5>
              <a type="button" class="btn btn-light bt-Cover-Home" href="./En/Portfolio.php">Our Portfolio</a>
          </div>
            <h5 class="Cover-Home-Title-Img">THE WORLD <br> IS DESIGN</h5>
      </div>
    </div>

  <!-- End Cover Home -->

  <!-- Start introductory text -->

    <div class="row row-introductory-text">   
      <div class="col col-introductory-text" data-aos="fade-right" data-aos-easing="linear">
        Octopus Graphic is the solution to all your
        <p class="underlined-introductory-text"> branding and design </p>
        problems <br>I am a designer who meets the 
        <p class="marking-introductory-text"> goals and aspirations </p> 
        of my clients
        <p class="marking-introductory-text"> | </p>
      </div>
    </div>

  <!-- End introductory text -->

  <!-- Start introductory text -->

    <div class="container-Service-Categories">

      <div class="row row-Service-Categories row-fluid">

        <div class="col-sm col-Service-Categories" data-aos="flip-left" data-aos-easing="linear" data-aos-duration="2500">
          <i class="fas fa-pen-nib Service-Categories-Icon"></i>
          <h1 class="Service-Categories-title">Graphic Design</h1>
          <p class="Service-Categories-paragraph">Corporate Image, Branding & Logo, Advertising ...</p>
          <a type="button" class="btn btn-link" href="/En/ServicesGraphicDesign.html">View more</a>
        </div>

        <div class="col-sm col-Service-Categories" data-aos="flip-left" data-aos-easing="linear" data-aos-duration="2500">
          <i class="fas fa-desktop Service-Categories-Icon"></i>
          <h1 class="Service-Categories-title">Web Design</h1>
          <p class="Service-Categories-paragraph">User Experience, User Interface, System Design, Prototyping, Web Design, Web Development ...</p>
          <a type="button" class="btn btn-link" href="/En/ServicesWebDesign.html">View more</a>
        </div>

        <div class="col-sm col-Service-Categories" data-aos="flip-left" data-aos-easing="linear" data-aos-duration="2500">
          <i class="fas fa-bezier-curve Service-Categories-Icon"></i>
          <h1 class="Service-Categories-title">Illustration</h1>
          <p class="Service-Categories-paragraph">Print Illustrations, Website Illustrations, Icon Sets ...</p>
          <a type="button" class="btn btn-link" href="/En/ServicesIllustration.html">View more</a>
        </div>

      </div>

    </div>

  <!-- End introductory text -->

  <!-- Start My Work -->

  <?php include("./widget/MyWork.html"); ?> 

  <!-- End My Work -->

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