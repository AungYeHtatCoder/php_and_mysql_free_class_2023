<?php
session_start();

include('../db/functions.php');
$email = $_POST['email'];
$password = md5($_POST['password']);

$user_login = UserLogin($email, $password);

if($user_login){
 
 $_SESSION['user'] = $user_login;
if($user_login['user_type'] === 'admin'){
     header('Location: ../admin/admin_dashboard.php');

}elseif($user_login['user_type'] === 'user'){
     header('Location: ../admin/user_profile.php');

}else{
     header('Location: ../login_form.php');
}
}else{
 header('Location: ../login_form.php');
}