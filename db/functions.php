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


// profile update
function CoverPhotoUpdate($id, $cover_photo)
{
    global $conn;
    $sql = "UPDATE users SET cover_photo = '$cover_photo' WHERE id = '$id'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        return true;
    } else {
        // Add error handling and display the specific error message
        echo "CoverPhoto update failed. Error: " . mysqli_error($conn);
        return false;
    }
}

function CategoryCreate($category_name)
{
 global $conn;
 $sql = "insert into categories(category_name) VALUES('$category_name')";
 $result = mysqli_query($conn, $sql);
 if($result)
 {
  return true;
 }else{
  return false;
 }
}

// get all categories
function GetAllCategories()
{
    global $conn;
    // Prepare and execute the SQL query
$sql = "SELECT * FROM categories";
$result = $conn->query($sql);

// Check if any rows were returned
if ($result->num_rows > 0) {
    // Fetch the rows as an associative array
    $categories = $result->fetch_all(MYSQLI_ASSOC);
    return $categories;
} else {
    echo "No categories found.";
}

// Close the database connection
$conn->close();

}

// category by id
function GetCategoryById($id)
{
    global $conn;
    $sql = "SELECT * FROM categories WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    
    if ($result && mysqli_num_rows($result) > 0) {
        $category = mysqli_fetch_assoc($result);
        return $category;
    } else {
        return null;
    }
}

// category update function 
function UpdateCategory($id, $categoryName)
{
    global $conn;
    
    $categoryName = mysqli_real_escape_string($conn, $categoryName);
    
    $sql = "UPDATE categories SET category_name = '$categoryName' WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    
    if ($result) {
        return true;
    } else {
        return false;
    }
}

// Category delete
function DeleteCategory($id)
{
    global $conn;

    $sql = "DELETE FROM categories WHERE id = $id";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        return true;
    } else {
        return false;
    }
}

// post create function
function postCreate($post_title, $description, $post_image, $user_id)
{
    global $conn;
    $post_title = mysqli_real_escape_string($conn, $post_title);
    $description = mysqli_real_escape_string($conn, $description);
    $sql = "INSERT INTO posts (post_title, description, post_image, user_id) VALUES('$post_title', '$description', '$post_image', '$user_id')";
    $result = mysqli_query($conn, $sql);

    if($result)
    {
        return true;
    }else{
        return false;
    }

}

// get post by id
function GetPostByID($user_id)
{
    global $conn;
    $sql = "SELECT * FROM posts WHERE user_id = $user_id";
    $result = mysqli_query($conn, $sql);
    if($result && mysqli_num_rows($result) > 0){
        $posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
        return $posts;
    }else{
        return array();
    }
}