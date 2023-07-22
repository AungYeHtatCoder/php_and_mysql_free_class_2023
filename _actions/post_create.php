<?php
include('../db/functions.php');

$auth = check();

if(isset($_POST['post-create']))
{
 $post_title = $_POST['post_title'];
 $description = $_POST['description'];
 $user_id = $_POST['user_id'];

 // file handle
 $file_name = $_FILES['post_image']['name'];
 $file_tmp = $_FILES['post_image']['tmp_name'];
 $file_type = $_FILES['post_image']['type'];
$file_errors = $_FILES['post_image']['error'];

if($file_errors === 0)
{
 $destionation = 'posts_image/'. $file_name;
 move_uploaded_file($file_tmp, $destionation);
 $result = postCreate($post_title, $description, $file_name, $user_id);
 if($result){
$user_type = $auth['user_type'];
  redirectUser($user_type);
 }else{
  echo "Error upload post";
 }
}
}