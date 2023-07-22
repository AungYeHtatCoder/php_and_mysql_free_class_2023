<?php


include('../db/functions.php');

$category_name = $_POST['category_name'];


$new_category_create = CategoryCreate($category_name);

if($new_category_create){
 header('Location: ../admin/category_index.php');
}else{
 header('Location: ../admin/category_create.php');
}