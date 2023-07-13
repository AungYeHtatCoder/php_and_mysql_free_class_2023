<?php
//include('../db/functions.php');
//$auth = check();
// session_start();
// $user_name = $_SESSION['user_name'];
// $email = $_SESSION['email'];
// $password = $_SESSION['password'];
// $phone = $_SESSION['phone'];
// $profile = $_SESSION['profile'];

// echo "<pre>";
// print_r($auth);
// echo "</pre>";
// die();
?>
<?php 
include('layouts/head.php');
//include('css/profile.css');

?>

<body class="sb-nav-fixed">
 <?php 
 include('layouts/navbar.php');
 ?>
 <div id="layoutSidenav">
  <?php 
  include('layouts/sidebar.php');
  ?>
  <div id="layoutSidenav_content">
   <main>
    <div class="container-fluid px-4">
     <!-- <h1 class="mt-4">Dashboard</h1> -->
     <ol class="breadcrumb mb-4">
      <!-- <li class="breadcrumb-item active">Dashboard</li> -->
     </ol>

     <div class="row">
      <div class="col-md-8">
       <div class="card mb-4">
        <div class="card-header">
         <i class="fas fa-table me-1"></i>
         User Information
        </div>
        <div class="card-body">
         <div class="container">
          <!-- d-flex justify-content-center align-items-center -->

          <div class="card">

           <div class="upper">

            <img src="https://i.imgur.com/Qtrsrk5.jpg" class="img-fluid">

           </div>

           <div class="user text-center">

            <div class="profile">

             <!-- <img src="https://i.imgur.com/JgYD2nQ.jpg" class="rounded-circle" width="80"> -->
             <img src="<?= '../_actions/profile/'.$auth['profile']?>" class="rounded-circle" width="80">

            </div>

           </div>


           <div class="mt-5 text-center">

            <h4 class="mb-0"><?= $auth['user_name']; ?></h4>
            <span class="text-muted d-block mb-2">Los Angles</span>

            <button class="btn btn-primary btn-sm follow">Follow</button>


            <div class="d-flex justify-content-between align-items-center mt-4 px-4">

             <div class="stats">
              <h6 class="mb-0">Followers</h6>
              <span>8,797</span>

             </div>


             <div class="stats">
              <h6 class="mb-0">Projects</h6>
              <span>142</span>

             </div>


             <div class="stats">
              <h6 class="mb-0">Ranks</h6>
              <span>129</span>

             </div>

            </div>

           </div>

          </div>

         </div>
        </div>
       </div>
      </div>
      <div class="col-md-4">

       <div class="card">
        <div class="card-header">
         <h1>User Update</h1>
        </div>
        <div class="card-body">
         <form action="../_actions/pw_update.php" method="post">
          <input type="hidden" name="id" value="<?= $auth['id']; ?>">
          <div class="mb-3">
           <label for="exampleInputEmail1" class="form-label">Email address</label>
           <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
            value="<?= $auth['email']; ?>" disabled>
           <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
          </div>
          <div class="mb-3">
           <label for="exampleInputPassword1" class="form-label">Password</label>
           <input type="password" name="password" class="form-control">
          </div>

          <button type="submit" class="btn btn-primary">Change Password</button>
         </form>
        </div>
       </div>
       <div class="card">
        <div class="card-header">
         <h2>User Profile Update</h2>
        </div>
        <div class="card-body">
         <form action="../_actions/profile_update.php" method="post" enctype="multipart/form-data">
          <input type="hidden" name="id" value="<?= $auth['id']; ?>">
          <div class="input-group mb-3">
           <label class="input-group-text" for="inputGroupFile01">Upload</label>
           <input type="file" name="profile" class="form-control" id="inputGroupFile01">
          </div>
          <div class="mb-3">
           <button class="btn btn-primary" name="profile_update">Profile Change</button>
          </div>
         </form>
        </div>
       </div>
      </div>
     </div>
    </div>
   </main>
   <?php 
   include('layouts/footer.php'); // copy  // require_once
   ?>