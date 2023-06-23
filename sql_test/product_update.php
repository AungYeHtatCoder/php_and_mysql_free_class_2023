<?php
include('functions.php');

$id = $_POST['id'];
$item_name = $_POST['item_name'];
$price = $_POST['price'];
$qty = $_POST['qty'];

$results = updateProduct($id, $item_name, $price, $qty);

if($results)
{
 header('Location: product_index.php');
}else{
 echo "error";
}