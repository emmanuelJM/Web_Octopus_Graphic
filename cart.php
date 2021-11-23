<?php  
session_start();
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

  <!-- Start header -->

  <?php include("./widget/header.php"); ?> 

  <!-- End header -->

  <span class="ir-arriba icon-arrow-up2"><i class="fas fa-chevron-up"></i></span>

  <!-- Start Body -->

  <div class="container-body">

  <!-- Start Breadcrumb -->

  <div class="container container-breadcrumb-store">
  
    <div class="row row-title row-fluid row-breadcrumb">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="store.php">Store</a></li>
          <li class="breadcrumb-item active" aria-current="page">Cart</li>
        </ol>
      </nav>
    </div>

  </div>

  <!-- End Breadcrumb -->

      <div class="row row-fluid row-shopping-cart">

        <div class="col-sm col-product-cart">

          <label class="title-shopping-cart" for="coupon">Shopping Cart</label>

          <!-- Start Product cart -->

  <table id="cart" class="table table-hover table-condensed">
    <thead>

      <tr class="product-table-title">
        
        <th scope="width:5%">#ID</th>
        <th style="width:40%">Product</th>
        <th style="width:10%">Price</th>
        <th style="width:20%">Quantity</th>
        <th style="width:10%" class="text-center">Subtotal</th>
        <th style="width:15%"></th>

      </tr>
    </thead>

    <tbody>

    <?php
      $total=0;
      $subtotal=0;
      if(isset($_SESSION['cart'])){
        $value = $_SESSION['cart'];
        for($i=0;$i<count($value);$i++){
    ?>

      <tr class="product-detail">

        <th data-th="id" class="product-id"><?php echo $value[$i]['id_productos']; ?> </th>

        <td data-th="Product">
          <div class="row">
            <div class="col-sm-4 hidden-xs col-product-img">
              <img src="Img/<?php echo $value[$i]['imagen']; ?>" alt="" class="img-responsive" />
            </div>
            <div class="col-sm-8 col-product-info">
              <h4 class="nomargin title-description"><?php echo $value[$i]['nombre']; ?></h4>
              <p class="product-description"><?php echo $value[$i]['descripcion']; ?></p>
            </div>
          </div>
        </td>

        <td data-th="Price" class="product-price">₡<?php echo $value[$i]['precio']; ?></td>

        <td data-th="Quantity">

          <div class="input-group" style="max-width: 120px;">
            <div class="input-group-prepend">
              <button class="btn btn-outline-primary js-btn-minus btn-increases" type="button">&minus;</button>
            </div>
              <input type="text" class="form-control text-center text-quantity"
                data-price="<?php echo $value[$i]['precio']; ?>"
                data-id="<?php echo $value[$i]['id']; ?>"
                value="<?php echo $value[$i]['quantity']; ?>" 
                placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
            <div class="input-group-append">
                <button class="btn btn-outline-primary js-btn-plus btn-increases" type="button">&plus;</button>
            </div>
          </div>

        </td>

        <td data-th="Subtotal" class="cant<?php echo $value[$i]['id']; ?> product-price-total">
          ₡<?php echo $value[$i]['precio'] * $value[$i]['quantity']; ?>
        </td>

        <td class="actions" data-th="">
          <button class="btn btn-info btn-sm"><i class="fa fa-pencil-alt"></i></button>
          <button class="btn btn-danger btn-sm btn-delete" data-id=""><i class="fa fa-trash-o"></i></button>
        </td>
        
      </tr>

      <?php } } ?>

    </tbody>

  </table>
 
          <!-- End Product cart -->

          <!-- Start button cart -->

        <div class="container-btn-cart">
          <button class="btn btn-primary">Update Cart</button>
          <a class="btn btn-outline-primary" href="store.php">Continue shopping</a>
        </div>

          <!-- End button cart -->

        </div>

        <div class="col-sm-4">

          <!-- Start coupon cart -->

          
          <div class="col-sm title-coupon">
            <h3>Coupon</h3>
          </div>
          <p>Enter your coupon code if you have one.</p>

          <form class="d-flex">
            <input class="form-control me-2 form-code" type="search" placeholder="Coupon Code" aria-label="Search">
            <button class="btn btn-primary btn-code" type="submit">Apply Coupon</button>
          </form>

          <!-- End coupon cart -->

          <!-- Start Cart Totals -->

            <div class="col col-cart-totals">

                <div class="col-sm col-titel-cart-totals">
                  <h3>Cart Totals</h3>
                </div>

              <div class="row">
                <div class="col-sm col-cart-title">
                  <span class="total-title">Subtotal</span>
                </div>
                <div class="col-sm col-cart-total">
                  <strong class="total-value"><p>₡<?php echo $total ?></p></strong>
                </div>
              </div>
              <div class="row">
                <div class="col-sm col-cart-title">
                  <span class="total-title">Total</span>
                </div>
                <div class="col-sm col-cart-total">
                  <strong class="total-value"><p>₡<?php echo $subtotal ?></p></strong>
                </div>
              </div>

                  <button class="btn btn-primary btn-Checkout" onclick="window.location='checkout.php'">Proceed To Checkout</button>

            </div>

            <!-- End Cart Totals -->

        </div>

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

  <script>
    
    $(document).ready(function(){
      $(".btn-delete").click(function(event){
        event.preventDefault();
        var id = $(this).data('id');
        var button = $(this);

        $.ajax({
          method:'POST',
          url:'./php/deleteCart.php',
          data:{
            id:id
          }
        }).done(function(replyDeleted){
          button.parent('td').parent('tr').remove();
          $.post('/php/deleteCart.php',)
        });
      });

      $(".text-quantity").keyup(function(){
        var quantity = $(this).val();
        var price = $(this).data('price');
        var id = $(this).data('id');
        increases(quantity, price, id);
      });

      $(".btn-increases").click(function(){
        var quantity = $(this).parent('div').parent('div').find('input').val();
        var price = $(this).parent('div').parent('div').find('input').data('price');
        var id = $(this).parent('div').parent('div').find('input').data('id');
        increases(quantity, price, id);
      });

      function increases(quantity, price, id){
        var mult = parseFloat(quantity)* parseFloat(price);
        $(".cant"+id).text("₡"+mult);
        $.ajax({
          method:'POST',
          url:'./php/UpdateCart.php',
          data:{
            id:id,
            quantity:quantity
          }
        }).done(function(replyUpdate){
          
        });
        
      }

    });

  </script>

</body>
</html>