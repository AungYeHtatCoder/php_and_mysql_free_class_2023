<?php
include('db_conn.php');

// user create fucntion

function UserCreate($user_name, $email, $password, $phone)
{
 global $conn;
 $sql = "insert into users(user_name, email, password, phone) VALUES('$user_name', '$email', '$password', '$phone')";
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
 $sql = "select * from users where email = '$email' and password = '$password' ";
 $result = mysqli_query($conn, $sql);
 if(mysqli_num_rows($result) > 0 ){
  $row = mysqli_fetch_assoc($result);
  return $row;
 }else{
  return false;
 }
}