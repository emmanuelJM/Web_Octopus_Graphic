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

  <div class="container container-About-Us-title container-title-primary">

    <div class="row row-title row-fluid">
      <div class="col col-title">
        Contacts Us
      </div>
    </div>

    <div class="row row-underline-title row-fluid">
      <div class="col-underline-title">
      </div>
    </div>

  </div>

  <div class="row row-fluid">

  <div class="col-sm">

  <img src="Img/ContactsUs.png" alt="ContactsUs" class="Cover-ContactsUs w-100 d-block">

  <div>
    <label class="label-ContactsUs">Call:</label>
    <a href="tel:+34678567876" class="btn btn-ContactsUs btn-link link-Tel">+506 7280 2194</a>
  </div>
  
  <div>
    <label class="label-ContactsUs">Email:</label>
    <a href="mailto:octopusgraphic05@gmail.com" class="btn btn-ContactsUs btn-link link-Tel">octopusgraphic05@gmail.com</a>  
  </div>

  <div>
    <label class="label-ContactsUs">Follow us at</label>

  <div class="col Col-Social-Media">
      <a href="https://www.facebook.com/OctopusGraphicStudio" target="_blank"><i class="fab fa-facebook-f"></i></a>
      <a href="https://www.instagram.com/octopus_graphic_studio/?hl=es" target="_blank"><i class="fab fa-instagram"></i></a>
      <a href="https://www.linkedin.com/in/emmanuel-jarquin-m%C3%A9ndez-522669145/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
  </div>

  </div>

  </div>

  <div class="col-sm">

    <form   action="https://formspree.io/f/xgerjrze" method="POST" id="Form-ContactsUS">

    <label for="exampleFormControlInput1" class="form-label form-label-ContactsUs">Your Name</label>
    <input type="text" class="form-control" name="message" id="FormControlName" placeholder="Your Name" required>

    <label for="exampleFormControlInput1" class="form-label form-label-ContactsUs">Your Email</label>
    <input type="email" class="form-control" name="_replyto" id="FormControlEmail" placeholder="Your Email" required>

    <label for="exampleFormControlInput1" class="form-label form-label-ContactsUs">Your Phone</label>
    <input type="tel" class="form-control" name="message" id="FormControlPhone" placeholder="Your Phone" required>

    <label for="exampleFormControlInput1" class="form-label form-label-ContactsUs">Service to consult</label>
    <select class="form-select" aria-label="Default select example" name="message" required>
      <option disabled selected>- please choose -</option>
      <option value="Graphic Design">Graphic Design</option>
      <option value="Illustration">Illustration</option>
      <option value="WebDesign">WebDesign</option>
    </select>

    <label for="exampleFormControlTextarea1" class="form-label form-label-ContactsUs">Query text area</label>
    <textarea class="form-control" name="message" id="exampleFormControlTextarea1" rows="6" required></textarea>
    <p class="form-label Paragraph-required">All fields with this symbol are mandatory.</p>

    <button type="reset" class="btn btn-Form-ContactsUS btn-primary" value="Submit">Reset information</button>

    <button type="submit" class="btn btn-Form-ContactsUS btn-primary" value="Submit">Send information</button>

    </form>

  </div>

  </div>

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