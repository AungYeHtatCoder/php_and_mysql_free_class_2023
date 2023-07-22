<?php
include('../db/functions.php');
$id = $_GET['id'];
$category_del = DeleteCategory($id);


if($category_del)
{
 header('location: ../admin/category_index.php');
}else{
 echo "error";
}