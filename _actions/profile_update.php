<?php
session_start();
include('../db/functions.php');
$auth = check();
// print_r($auth);
// die();
$file_name = $_FILES['profile']['name'];
$file_tmp = $_FILES['profile']['tmp_name'];
$errors = $_FILES['profile']['error'];
$type = $_FILES['profile']['type'];

// Check for file upload errors or other validations

if (isset($_POST['profile_update'])) {
    $id = $_POST['id'];
    $profile = $file_name;
    $results = profile_update($id, $profile);
    if ($results) {
        move_uploaded_file($file_tmp, 'profile/' . $file_name);
        
        $user_type = $auth['user_type']; 
        redirectUser($user_type);
        //header('Location: ../admin/profile.php');
    } else {
        echo "Profile update failed.";
    }
}