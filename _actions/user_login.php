<?php
session_start();

//  $data = [
// //  'user_name' => $_POST['user_name'],
//   'email' => $_POST['email'],
//  'password' => md5($_POST['password']),
// //  'phone' => $_POST['phone']
//  ];

// echo "<pre>";
// print_r($data);
// echo "</pre>";
include('../db/functions.php');
$email = $_POST['email'];
$password = md5($_POST['password']);

$user_login = UserLogin($email, $password);

if($user_login){
 // store session
 $_SESSION['user_name'] = $user_login['user_name'];
  $_SESSION['email'] = $user_login['email'];
   $_SESSION['password'] = $user_login['password'];
    $_SESSION['phone'] = $user_login['phone'];
     $_SESSION['profile'] = $user_login['profile'];
     header('Location: ../admin/profile.php');
}else{
 header('Location: ../login_form.php');
}