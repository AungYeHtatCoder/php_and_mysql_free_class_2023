<?php
include('db.php');

// get all cities

function GetAllCity()
{
  global $conn;
  $sql = 'SELECT * FROM city';
  $results = mysqli_query($conn, $sql);
  
  if ($results) {
    $cities = mysqli_fetch_all($results, MYSQLI_ASSOC);
    return $cities;
  } else {
    return false;
  }
}

// city name only 
function CityNameOnly()
{
  global $conn;
  $sql = "SELECT * FROM city WHERE name = 'Yangon 1' OR name = 'Mandalay 3'";
  $results = mysqli_query($conn, $sql);
  
  if ($results) {
    $cities = mysqli_fetch_all($results, MYSQLI_ASSOC);
    return $cities;
  } else {
    return false;
  }
}

// get all emp
function GetAllEmp()
{
  global $conn;
  $sql = 'SELECT * FROM emp_details';
  $results = mysqli_query($conn, $sql);
  
  if ($results) {
    $cities = mysqli_fetch_all($results, MYSQLI_ASSOC);
    return $cities;
  } else {
    return false;
  }
}