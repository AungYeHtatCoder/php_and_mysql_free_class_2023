<?php
include('../db/functions.php');
$auth = check();

$id = $_POST['id'];
$password = md5($_POST['password']);

$results = password_update($id, $password);

if($results)
{
  $user_type = $auth['user_type']; 
  redirectUser($user_type);
 //header('Location: ../admin/user_profile.php');
}else{
 echo "Password Update Error";
}