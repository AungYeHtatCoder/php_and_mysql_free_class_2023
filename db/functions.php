<?php
include('db_conn.php');

// user create fucntion

function UserCreate($user_name, $email, $password, $phone, $user_type)
{
 global $conn;
 $sql = "insert into users(user_name, email, password, phone, user_type) VALUES('$user_name', '$email', '$password', '$phone', '$user_type')";
 $result = mysqli_query($conn, $sql);
 if($result)
 {
  return true;
 }else{
  return false;
 }
}

// user login 
function UserLogin($email, $password)
{
 global $conn;
 $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password' AND user_type IN ('admin', 'user')";
 $result = mysqli_query($conn, $sql);
 if(mysqli_num_rows($result) > 0 ){
  $row = mysqli_fetch_assoc($result);
  return $row;
 }else{
  return false;
 }
}

// logout function
function logout()
{
 session_start();
 session_destroy();
 header('Location: ../login_form.php');
}

// auth check
function check()
{
 session_start();
 if(isset($_SESSION['user'])) {
  return $_SESSION['user'];
 }else{
  header('Location: ../login_form.php');
 }
}

// profile update
function profile_update($id, $profile)
{
    global $conn;
    $sql = "UPDATE users SET profile = '$profile' WHERE id = '$id'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        return true;
    } else {
        // Add error handling and display the specific error message
        echo "Profile update failed. Error: " . mysqli_error($conn);
        return false;
    }
}

// password update
function password_update($id, $password)
{
    global $conn;
    $sql = "UPDATE users SET password = '$password' WHERE id = '$id'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        return true;
    } else {
        // Add error handling and display the specific error message
        echo "Profile update failed. Error: " . mysqli_error($conn);
        return false;
    }
}


// Add the code snippet below after the profile_update function

function redirectUser($user_type)
{
    if ($user_type === 'admin') {
        header('Location: ../admin/admin_profile.php');
    } elseif ($user_type === 'user') {
        header('Location: ../admin/user_profile.php');
    } else {
        // Handle other user types or show an error message
        echo "Unknown user type";
    }
}