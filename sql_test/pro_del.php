<?php

include('functions.php');

$id = $_GET['id'];

$del = deleteProduct($id);

if($del){
header('Location: product_index.php');

}else{
 echo "error";
}