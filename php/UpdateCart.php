<?php
session_start();
$arrangement = $_SESSION['cart'];
for($i=0; $i< count($arrangement); $i++){
    if($arrangement[$i]['Id'] == $_POST['id']){
            $arrangement[$i]['Quantity'] => $_POST['quantity'];
            $_SESSION['cart'] = $arrangement;
            break;
    }
}
?>