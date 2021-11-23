<?php

session_start();
$arrangement = $_SESSION['cart'];
for($i=0;$i<count($arrangement);$i++){
    if($arrangement[$i]['Id'] != $_POST['id']){
        $arrangementNew[]= array(
            'Id' => $arrangement[$i]['Id'],
            'product_id' => $arrangement[$i]['product_id'],
            'product_image' => $arrangement[$i]['product_image'],
            'product_name' => $arrangement[$i]['product_name'],
            'product_description' => $arrangement[$i]['product_description'],
            'product_price' => $arrangement[$i]['product_price'],
            'Quantity' => $arrangement[$i]['Quantity']
        );
    }
}
if(isset($arrangementNew)){
    $_SESSION['cart']=$arrangementNew;
}else{
    //means that the record to be deleted is the only one that had
    unset($_SESSION['cart']);
}
echo "ready";

?>
