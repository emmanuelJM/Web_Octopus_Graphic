 <!-- Start header-1 -->

    <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-header-1 nav-link-primary">
        <div class="container-fluid row-fluid">

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle nav-link-primary" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Octopus Graphic
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <li><a class="dropdown-item" href="index.php">Octopus Graphic</a></li>
                    <li><a class="dropdown-item" href="#">Monkey Indie Studio</a></li>
                </ul>
            </li>

            <div class="collapse navbar-collapse navbar-Languages" id="navbarText">

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle nav-link-primary" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        EN
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" id="dropdown-item-En" href="#">EN</a></li>
                        <li><a class="dropdown-item" id="dropdown-item-Es" href="#">ES</a></li>
                    </ul>
                </li>

            </div>
        </div>
    </nav>

<!-- End header-1 -->

<!-- Start header-2 -->

    <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-header-2 nav-link-secondary">
        <div class="container-fluid row-fluid row">

        <div class="col-sm col-header-2 col-header-2-Img">
            <a href="index.php">
                <img src="Img/Logo-Octopus-Graphic.png" alt="Logo-Octopus-Graphic" class="Logo">
            </a>
        </div>

        <div class="col-sm-6 col-header-2 col-header-2-search">

                <form action="" class="site-block-top-search">
                  <span class="icon icon-search2"></span>
                  <input type="text" class="form-control border-0" placeholder="Search">
                </form>

        </div>

        <div class="col-sm col-header-2 col-header-2-cart">
            <div class="site-top-icons">
                <ul>
                  <li><a href="#"><span class="icon icon-person"></span></a></li>
                  <li><a href="#"><span class="icon icon-heart-o"></span></a></li>
                  <li>
                    <a href="cart.php" class="site-cart">
                      <span class="icon icon-shopping_cart"></span>
                      <span class="count" id="cart-count">
                          <?php
                            if(isset($_SESSION['cart'])){
                                echo count($_SESSION['cart']);
                            }else{
                                echo 0;
                            }
                          ?>
                      </span>
                    </a>
                  </li> 
                </ul>
              </div> 
        </div>
            
        </div>
    </nav>

<!-- End header-2 -->

<!-- Start header-3 -->

    <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-header-3 nav-link-secondary">
        <div class="container-fluid row-fluid">

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>

            <div class="collapse navbar-collapse navbar-menu" id="navbarSupportedContent" >

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    </i><i class="fa fa-times" aria-hidden="true"></i>
                  </button>

                <li class="nav-item">
                    <a class="nav-link active nav-link-secondary" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-secondary" href="AboutUs.php">About Us</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle nav-link-secondary" href="Services.php" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Services
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="Services.php">Services</a></li>
                        <li><a class="dropdown-item" href="ServicesGraphicDesign.php">Graphic Design</a></li>
                        <li><a class="dropdown-item" href="ServicesWebDesign.php">Web Design</a></li>
                        <li><a class="dropdown-item" href="ServicesIllustration.php">Illustration</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-secondary" href="Portfolio.php">Portfolio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-secondary" href="Store.php">Store</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-secondary" href="ContactsUs.php">Contacts Us</a>
                </li>

            </div>
            
        </div>
    </nav>

<!-- End header-3 -->


<!-- Js  -->

<script>

 //Page En Languages

$(".menuContainerHome > .navbar-header-1 > .row-fluid > .navbar-Languages > .nav-item > .dropdown-menu > li > #dropdown-item-En").prop("href", "../index.php");
$(".menuContainerAboutUs > .navbar-header-1 > .row-fluid > .navbar-Languages > .nav-item > .dropdown-menu > li > #dropdown-item-En").prop("href", "../En/AboutUs.php");
$(".menuContainerContactsUS > .navbar-header-1 > .row-fluid > .navbar-Languages > .nav-item > .dropdown-menu > li > #dropdown-item-En").prop("href", "../En/ContactsUs.php");
$(".menuContainerPortfolio > .navbar-header-1 > .row-fluid > .navbar-Languages > .nav-item > .dropdown-menu > li > #dropdown-item-En").prop("href", "../En/Portfolio.php");
$(".menuContainerServices > .navbar-header-1 > .row-fluid > .navbar-Languages > .nav-item > .dropdown-menu > li > #dropdown-item-En").prop("href", "../En/Services.php");
$(".menuContainerServicesGraphicDesign > .navbar-header-1 > .row-fluid > .navbar-Languages > .nav-item > .dropdown-menu > li > #dropdown-item-En").prop("href", "../En/ServicesGraphicDesign.php");
$(".menuContainerServicesIllustration > .navbar-header-1 > .row-fluid > .navbar-Languages > .nav-item > .dropdown-menu > li > #dropdown-item-En").prop("href", "../En/ServicesIllustration.php");
$(".menuContainerServicesWebDesign > .navbar-header-1 > .row-fluid > .navbar-Languages > .nav-item > .dropdown-menu > li > #dropdown-item-En").prop("href", "../En/ServicesWebDesign.php");
$(".menuContainerStore > .navbar-header-1 > .row-fluid > .navbar-Languages > .nav-item > .dropdown-menu > li > #dropdown-item-En").prop("href", "../En/Store.php");

//Page Es Languages

$(".menuContainerHome > .navbar-header-1 > .row-fluid > .navbar-Languages > .nav-item > .dropdown-menu > li > #dropdown-item-Es").prop("href", "../Es/Inicio.php");
$(".menuContainerAboutUs > .navbar-header-1 > .row-fluid > .navbar-Languages > .nav-item > .dropdown-menu > li > #dropdown-item-Es").prop("href", "../Es/AcercaDeNosotros.php");
$(".menuContainerContactsUS > .navbar-header-1 > .row-fluid > .navbar-Languages > .nav-item > .dropdown-menu > li > #dropdown-item-Es").prop("href", "../Es/ContactaConNosotros.php");
$(".menuContainerPortfolio > .navbar-header-1 > .row-fluid > .navbar-Languages > .nav-item > .dropdown-menu > li > #dropdown-item-Es").prop("href", "../Es/Portfolio.php");
$(".menuContainerServices > .navbar-header-1 > .row-fluid > .navbar-Languages > .nav-item > .dropdown-menu > li > #dropdown-item-Es").prop("href", "../Es/Servicios.php");
$(".menuContainerServicesGraphicDesign > .navbar-header-1 > .row-fluid > .navbar-Languages > .nav-item > .dropdown-menu > li > #dropdown-item-Es").prop("href", "../Es/ServiciosDiseñoGráfico.php");
$(".menuContainerServicesIllustration > .navbar-header-1 > .row-fluid > .navbar-Languages > .nav-item > .dropdown-menu > li > #dropdown-item-Es").prop("href", "../Es/ServiciosIlustración.php");
$(".menuContainerServicesWebDesign > .navbar-header-1 > .row-fluid > .navbar-Languages > .nav-item > .dropdown-menu > li > #dropdown-item-Es").prop("href", "../Es/ServiciosDiseñoWeb.php");
$(".menuContainerStore > .navbar-header-1 > .row-fluid > .navbar-Languages > .nav-item > .dropdown-menu > li > #dropdown-item-Es").prop("href", "../Es/Tienda.php");
 
</script>


