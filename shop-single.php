<?php
session_start();

include("./php/conexion.php");
if( isset($_GET['id'])){
  $result = $connect ->query("select * from productos where id=".$_GET['id'])or die($conexion->error);
  if(mysqli_num_rows($result) > 0){
    $fila = mysqli_fetch_row($result);
  }else{
    //Redirect
    header("Location: ./store.php");
  }
}else{
  //Redirect
  header("Location: ./store.php");
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

  <link rel="stylesheet" href="./CSS/main.css">

<!-- Icons CSS -->

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/v4-shims.css">
  <link rel="stylesheet" href="./fonts/icomoon/style.css">

<!-- jquery -->

  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

  <title>Octopus Graphic - <?php echo $fila[1]; ?></title>
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

  <!-- Start header -->

  <?php include("./widget/header.php"); ?> 

  <!-- End header -->

  <span class="ir-arriba icon-arrow-up2"><i class="fas fa-chevron-up"></i></span>

  <!-- Start Body -->

<div class="container-body">

<!-- Start alert -->

<?php include("./widget/AlertToasts.html"); ?> 

<!-- end alert -->

  <!-- Start Breadcrumb -->

  <div class="container container-breadcrumb-store">
  
    <div class="row row-title row-fluid row-breadcrumb">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="store.php">Store</a></li>
          <li class="breadcrumb-item active" aria-current="page"><?php echo $fila[2]; ?></li>
        </ol>
      </nav>
    </div>

  </div>

  <!-- End Breadcrumb -->

  <div class="row row-fluid">

    <div class="col-sm-6">

      <div class="product-gallery-featured img-container">

        <img src="Img/<?php echo $fila[5]; ?>" class="img-responsive" alt="<?php echo $fila[1]; ?>">

      </div>

      <div class="nonloop-block-3 owl-carousel thumbnails-list list-unstyled" id="owl-carousel">

<?php
$id=$_GET["id"]; 
include('./php/conexion.php');
$result = $connect ->query("select * from img_productos where id_imagen='$id' order by id ASC")or die($conectar -> error);
while($fila = mysqli_fetch_array($result)){
?>

        <div class="item">
          <li>
            <img src="img/<?php echo $fila['imagen'];?>" alt="<?php echo $fila['descripción'];?>" class="img-fluid img-product">
          </li>
        </div>

<?php } ?>

      </div>

    </div>

<?php
if( isset($_GET['id'])){
  $result = $connect ->query("select * from productos where id=".$_GET['id'])or die($conexion->error);
  if(mysqli_num_rows($result) > 0){
    $fila = mysqli_fetch_row($result);
  }else{
    //Redirect
    header("Location: ./store.php");
  }
}else{
  //Redirect
  header("Location: ./store.php");
}

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

    <div class="col-sm col-product-details">

      <h2 class="title-product"><?php echo $fila[2]; ?></h2>

      <p class="description-product"><?php echo $fila[1]; ?></p>

      <div class="hb-ratingbar" data-rated="0">
        <i class="unfilled"></i>
        <i class="filled"></i>
        <svg class="cover" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 250 50" preserveAspectRatio="none" fill="#12141D"><path d="M0 0v50h250V19l-12 13 3 18-16-9-15 9 3-18-13-13-12 13 3 18-16-9-15 9 3-18-13-13-12 13 3 18-16-9-15 9 3-18-13-13-12 13 3 18-16-9-15 9 3-18-13-13-12 13 3 18-16-9-15 9 3-18L0 19l17-3 8-16Zm50 19 17-3 8-16H25l8 16zm50 0 17-3 8-16H75l8 16zm50 0 17-3 8-16h-50l8 16zm50 0 17-3 8-16h-50l8 16zm25-19 8 16 17 3V0Z"/></svg>
      </div>

      <p class="description-product"><?php echo $fila[3]; ?></p>

      <p><strong class="price-product">₡<?php echo $fila[4]; ?></strong></p>

      <div class="mb-1 d-flex">
        <label for="option-sm" class="d-flex mr-3 mb-3">
          <span class="d-inline-block mr-2" style="top:-2px; position: relative;"><input type="radio" id="option-sm" name="shop-sizes"></span> <span class="">Small</span>
        </label>
        <label for="option-md" class="d-flex mr-3 mb-3">
          <span class="d-inline-block mr-2" style="top:-2px; position: relative;"><input type="radio" id="option-md" name="shop-sizes"></span> <span class="">Medium</span>
        </label>
        <label for="option-lg" class="d-flex mr-3 mb-3">
          <span class="d-inline-block mr-2" style="top:-2px; position: relative;"><input type="radio" id="option-lg" name="shop-sizes"></span> <span class="">Large</span>
        </label>
        <label for="option-xl" class="d-flex mr-3 mb-3">
          <span class="d-inline-block mr-2" style="top:-2px; position: relative;"><input type="radio" id="option-xl" name="shop-sizes"></span> <span class=""> Extra Large</span>
        </label>
      </div>

        <div class="mb-5">
          <div class="input-group mb-3" style="max-width: 120px;">
          <div class="input-group-prepend">
            <button class="btn btn-outline-primary js-btn-minus" type="button">&minus;</button>
          </div>
          <input type="text" class="form-control text-center" value="1" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
          <div class="input-group-append">
            <button class="btn btn-outline-primary js-btn-plus" type="button">&plus;</button>
          </div>
          </div>
        </div>  

  <form  method="POST" >

    <input type="hidden" name="id" value="<?php echo $fila[0];?>">
    <input type="hidden" name="nombre" value="<?php echo $fila[2];?>">
    <input type="hidden" name="descripcion" value="<?php echo $fila[3];?>">
    <input type="hidden" name="precio" value="<?php echo $fila[4];?>">
    <input type="hidden" name="imagen" value="<?php echo $fila[5];?>">
    <input type="hidden" name="id_productos" value="<?php echo $fila[1];?>">

    <button type="button submit" class="buy-now btn btn-sm btn-primary" name="AddToCart">Add To Cart</button>

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

  <!-- Start ShoppingCart code -->

  <script src="JS/owl.carousel.min.js"></script>
  <script src="JS/shopping_cart.js"></script>

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