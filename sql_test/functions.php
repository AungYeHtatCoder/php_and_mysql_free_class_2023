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


// group by sex
function GetSalaryBySex()
{
  global $conn;
  $sql = 'SELECT sex, SUM(salary) AS total_salary FROM emp_details GROUP BY sex';
  $results = mysqli_query($conn, $sql);
  
  if ($results) {
    $data = mysqli_fetch_all($results, MYSQLI_ASSOC);
    return $data;
  } else {
    return false;
  }
}

function getAllProducts() {
  global $conn;
  
  $sql = "SELECT * FROM ProductTable";
  $result = mysqli_query($conn, $sql);
  
  if (mysqli_num_rows($result) > 0) {
    $products = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $products;
  } else {
    return false;
  }
}

## get product by id
function getProductById($id) {
  global $conn;
  
  $sql = "SELECT * FROM ProductTable WHERE id = $id";
  $result = mysqli_query($conn, $sql);
  
  if (mysqli_num_rows($result) > 0) {
    $product = mysqli_fetch_assoc($result);
    return $product;
  } else {
    return false;
  }
}

function deleteProduct($id) {
  global $conn;
  
  $sql = "DELETE FROM ProductTable WHERE id = $id";
  
  if (mysqli_query($conn, $sql)) {
    return true;
  } else {
    return false;
  }
}

function updateProduct($id, $item_name, $price, $qty) {
  global $conn;
  
  $sql = "UPDATE ProductTable SET item_name = '$item_name', price = $price, qty = $qty WHERE id = $id";
  
  if (mysqli_query($conn, $sql)) {
    return true;
  } else {
    return false;
  }
}