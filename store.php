<?php  

session_start();
include './php/conexion.php';
if (isset($_SESSION['cart'])) {
// If it exists, we will search if this product has already been added.

if(isset($_POST['AddToCart'])) {

  $arrangement = $_SESSION['cart'];
  $found = false;
  $number = 0;
  for($i=0;$i<count($arrangement);$i++){
    if($arrangement[$i]['id'] == $_POST['id']){
      $found = true;
      $number = $i;
    }
  }
  if($found == true){
    $arrangement[$number]['quantity']=$arrangement[$number]['quantity']+1;
    $_SESSION['cart']=$arrangement;
    {
      $AlertAddCart = "$('#alert-add-cart').show();";
    }
  }
  else{
    $arrangementNew = array('id'=>$_POST['id'],'id_productos'=>$_POST['id_productos'],'nombre'=>$_POST['nombre'],'descripcion'=>$_POST['descripcion'],"imagen"=>$_POST['imagen'],'precio'=>$_POST['precio'],'quantity'=>1);
    array_push($arrangement, $arrangementNew);
    $_SESSION['cart']=$arrangement;
    $AlertAddCart = "$('#alert-add-cart').show();";
  }

}

}else{
   // We create the session variable
  if (isset($_POST['id'])) {

    $_SESSION['cart'][0]=array('id'=>$_POST['id'],'id_productos'=>$_POST['id_productos'],'nombre'=>$_POST['nombre'],'descripcion'=>$_POST['descripcion'],"imagen"=>$_POST['imagen'],'precio'=>$_POST['precio'],'quantity'=>1);
    $AlertAddCart = "$('#alert-add-cart').show();";
  }
}

?>

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

  <link rel="stylesheet" href="CSS/main.css">

<!-- Icons CSS -->

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/v4-shims.css">
  <link rel="stylesheet" href="fonts/icomoon/style.css">

<!-- jquery -->

  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

  <title>Octopus Graphic</title>
  <link rel="shortcut icon" href="Img/Icon_web.ico">

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

<!-- Start header -->

<?php include("./widget/header.php"); ?> 

<!-- End header -->

<span class="ir-arriba icon-arrow-up2"><i class="fas fa-chevron-up"></i></span>

<!-- Start Body -->

<div class="container-body">

<!-- Start alert -->

<?php include("./widget/AlertToasts.html"); ?> 

<!-- end alert -->

<!-- Start Products title -->

<div class="container container-About-Us-title container-title-primary">

  <div class="row row-title row-fluid">
    <div class="col col-title">
      Store
    </div>
  </div>

  <div class="row row-underline-title row-fluid">
    <div class="col-underline-title">
    </div>
  </div>

</div>

<!-- End Products title -->

<div class="row row-fluid row-products">

<!-- Start col Products -->

<div class="col-md-9 order-2">

<!-- Start header Products -->

<div class="row">

<div class="col-sm">
<h2 class="Products-title">Shop All</h2>
</div>

<div class="col-sm">

<div class="d-grid gap-2 d-md-flex justify-content-md-end">

<div class="dropdown">
  <button class="btn btn-link dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">Latest</button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
    <li><a class="dropdown-item" href="#">Men</a></li>
    <li><a class="dropdown-item" href="#">Women</a></li>
    <li><a class="dropdown-item" href="#">Children</a></li>
  </ul>
</div>

<div class="dropdown">
  <button class="btn btn-link dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">Reference</button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
    <li><a class="dropdown-item" href="#">Relevance</a></li>
    <li><a class="dropdown-item" href="#">Name, A to Z</a></li>
    <li><a class="dropdown-item" href="#">Name, Z to A</a></li>
    <div class="dropdown-divider"></div>
    <li><a class="dropdown-item" href="#">Price, low to high</a></li>
    <li><a class="dropdown-item" href="#">Price, high to low</a></li>
  </ul>
</div>

</div>


</div>

</div>

<!-- End header Products -->

<!-- Start Products -->

<div class="row mb-5">

<?php
include('./php/conexion.php');
$result = $connect ->query("select * from productos order by id ASC")or die($conectar -> error);
while($fila = mysqli_fetch_array($result)){
?>

<form class="col-sm-4" method="POST" >

<div class="block-4 Product">
<figure class="block-4-image">
  <a href="shop-single.php?id=<?php echo $fila['id'];?>">
    <img src="img/<?php echo $fila['imagen'];?>" alt="<?php echo $fila['nombre'];?>" class="img-fluid">
  </a>
</figure>

<div class="Content-Product">
  <h3 class="title-products"><?php echo $fila['nombre'];?></h3>

<div class="hb-ratingbar" data-rated="0">
  <i class="unfilled"></i>
  <i class="filled"></i>
  <svg class="cover" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 250 50" preserveAspectRatio="none" fill="#12141D"><path d="M0 0v50h250V19l-12 13 3 18-16-9-15 9 3-18-13-13-12 13 3 18-16-9-15 9 3-18-13-13-12 13 3 18-16-9-15 9 3-18-13-13-12 13 3 18-16-9-15 9 3-18-13-13-12 13 3 18-16-9-15 9 3-18L0 19l17-3 8-16Zm50 19 17-3 8-16H25l8 16zm50 0 17-3 8-16H75l8 16zm50 0 17-3 8-16h-50l8 16zm50 0 17-3 8-16h-50l8 16zm25-19 8 16 17 3V0Z"/></svg>
</div>

  <p class="description-products"><?php echo $fila['descripcion'];?></p>
  <p class="price-products">	₡<?php echo $fila['precio'];?></p>

  <input type="hidden" name="id" value="<?php echo $fila['id'];?>">
  <input type="hidden" name="nombre" value="<?php echo $fila['nombre'];?>">
  <input type="hidden" name="descripcion" value="<?php echo $fila['descripcion'];?>">
  <input type="hidden" name="precio" value="<?php echo $fila['precio'];?>">
  <input type="hidden" name="imagen" value="<?php echo $fila['imagen'];?>">
  <input type="hidden" name="id_productos" value="<?php echo $fila['id_productos'];?>">


  <button type="button submit" class="btn btn-outline-primary btn-Add-to-cart" name="AddToCart">Add To Cart</button>


</div>
</div>

</form> 

<?php } ?>

</div>

<!-- End Products -->

<!-- Start Pagination -->

<div class="row row-fluid">

<nav aria-label="...">
<ul class="pagination pagination-lg">
<li class="page-item page-item-1 active" aria-current="page"><a class="page-link" href="#">1</a></li>
<li class="page-item page-item-2"><a class="page-link" href="#">2</a></li>
<!-- <li class="page-item page-item-3"><a class="page-link" href="#">3</a></li> -->
</ul>
</nav>

</div>

<!-- End Pagination -->

</div>

<!-- End col Products -->

<div class="col-md-3 order-1 mb-5 mb-md-0">

  <div class="Filter-Categories">
    <h3 class="mb-3 h6 text-uppercase d-block">Categories</h3>
    <ul class="list-unstyled mb-0">
      <li class="mb-1"><a href="#" class="d-flex"><span>Men</span> <span class="ml-auto">(2,220)</span></a></li>
      <li class="mb-1"><a href="#" class="d-flex"><span>Women</span> <span class="ml-auto">(2,550)</span></a></li>
      <li class="mb-1"><a href="#" class="d-flex"><span>Children</span> <span class="ml-auto">(2,124)</span></a></li>
    </ul>
  </div>

  <div class="Filter">
    <div class="mb-4">
      <h3 class="mb-3 h6 text-uppercase  d-block">Filter by Price</h3>
      <div id="slider-range" class="border-primary"></div>
      <input type="text" name="text" id="amount" class="form-control border-0 pl-0 bg-white" disabled="" />
    </div>

    <div class="mb-4">
      <h3 class="mb-3 h6 text-uppercase  d-block">Size</h3>
      <label for="s_sm" class="d-flex">
        <input type="checkbox" id="s_sm" class="mr-2 mt-1"> <span class="">Small (2,319)</span>
      </label>
      <label for="s_md" class="d-flex">
        <input type="checkbox" id="s_md" class="mr-2 mt-1"> <span class="">Medium (1,282)</span>
      </label>
      <label for="s_lg" class="d-flex">
        <input type="checkbox" id="s_lg" class="mr-2 mt-1"> <span class="">Large (1,392)</span>
      </label>
    </div>

    <div class="mb-4">
      <h3 class="mb-3 h6 text-uppercase  d-block">Color</h3>
      <a href="#" class="d-flex color-item align-items-center" >
        <span class="bg-danger color d-inline-block rounded-circle mr-2"></span> <span class="">Red (2,429)</span>
      </a>
      <a href="#" class="d-flex color-item align-items-center" >
        <span class="bg-success color d-inline-block rounded-circle mr-2"></span> <span class="">Green (2,298)</span>
      </a>
      <a href="#" class="d-flex color-item align-items-center" >
        <span class="bg-info color d-inline-block rounded-circle mr-2"></span> <span class="">Blue (1,075)</span>
      </a>
      <a href="#" class="d-flex color-item align-items-center" >
        <span class="bg-primary color d-inline-block rounded-circle mr-2"></span> <span class="">Purple (1,075)</span>
      </a>
    </div>

  </div>
</div>

</div>

<!-- End col Products -->

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
  <script defer src="JS/shopping_cart.js"></script>
  <script defer src="JS/owl.carousel.min.js"></script>

  <!-- Start of HubSpot Embed Code -->

  <script type="text/javascript" id="hs-script-loader" async defer src="//js-na1.hs-scripts.com/20977624.js"></script>

  <script>
    <?php
      if(!empty($AlertAddCart)) {
        echo $AlertAddCart;
      }
    ?>

  
  function myFunction () {
    $('#alert-add-cart').toggleClass('alert-add-cart-hide');
    window.history.back();  
  };

  </script>

</body>
</html>