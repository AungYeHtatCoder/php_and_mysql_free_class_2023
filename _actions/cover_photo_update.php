<?php
session_start();
include('../db/functions.php');
$auth = check();
// print_r($auth);
// die();
$file_name = $_FILES['cover_photo']['name'];
$file_tmp = $_FILES['cover_photo']['tmp_name'];
$errors = $_FILES['cover_photo']['error'];
$type = $_FILES['cover_photo']['type'];

// Check for file upload errors or other validations

if (isset($_POST['cover_photo_update'])) {
    $id = $_POST['id'];
    $profile = $file_name;
    $results = CoverPhotoUpdate($id, $profile);
    if ($results) {
        move_uploaded_file($file_tmp, 'covers/' . $file_name);
        
        $user_type = $auth['user_type']; 
        redirectUser($user_type);
        //header('Location: ../admin/profile.php');
    } else {
        echo "CoverPhoto update failed.";
    }
}