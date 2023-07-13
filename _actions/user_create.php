<?php

// $data = [
//  'user_name' => $_POST['user_name'],
//  'email' => $_POST['email'],
//  'password' => md5($_POST['password']),
//  'phone' => $_POST['phone']
// ];

// echo "<pre>";
// print_r($data);
// echo "</pre>";
include('../db/functions.php');

$user_name = $_POST['user_name'];
$email = $_POST['email'];
$password = md5($_POST['password']);
$phone = $_POST['phone'];
$user_type = 'user';

$new_user_create = UserCreate($user_name, $email, $password, $phone, $user_type);

if($new_user_create){
 header('Location: ../login_form.php');
}else{
 header('Location: reg_form.php');
}