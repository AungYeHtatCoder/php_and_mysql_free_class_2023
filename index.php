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

    <!-- Nested row for non-featured blog posts-->

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