<?php 
include('includes/head.php');
?>

<body>
 <!-- Responsive navbar-->
 <?php 
 include('includes/navbar.php');
 ?>
 <!-- Page header with logo and tagline-->
 <?php 
include('includes/header.php');
?>
 <!-- Page content-->
 <div class="container">
  <div class="row">
   <!-- Blog entries-->
   <div class="col-lg-8">
    <!-- Featured blog post-->
    <h1>User Register</h1>
    <!-- Nested row for non-featured blog posts-->
    <form>
     <div class="mb-3">
      <label for="user_name">User Name</label>
      <input type="text" class="form-control" placeholder="User Name">
     </div>
     <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Email address</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
     </div>
     <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Password</label>
      <input type="password" class="form-control" id="exampleInputPassword1">
     </div>
     <div class="mb-3">
      <label for="phone">Phone</label>
      <input type="text" class="form-control" placeholder="Phone">
     </div>
     <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <!-- Pagination-->

   </div>
   <!-- Side widgets-->
   <div class="col-lg-4">
    <!-- Search widget-->
    <?php
    include('includes/search.php');
    ?>
    <!-- Categories widget-->
    <?php 
   include('includes/categories.php');
   ?>
    <!-- Side widget-->
    <?php 
include('includes/side_widget.php');
?>
   </div>
  </div>
 </div>
 <!-- Footer-->
 <?php 
 include('includes/footer.php');
 ?>