<?php
include('../db/functions.php');

$id = $_POST['id'];
$category_name = $_POST['category_name'];

$update_category = UpdateCategory($id, $category_name);
if($update_category)
{
 header('location: ../admin/category_index.php');
}else{
 echo "Error";
}