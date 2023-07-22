<?php 
include('auth.php');
include('layouts/head.php');
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
     <h1 class="mt-4">Category Dashboard</h1>
     <ol class="breadcrumb mb-4">
      <li class="breadcrumb-item active">Category Dashboard</li>
     </ol>
     <div class="card mb-4">
      <div class="card-header">
       <i class="fas fa-table me-1"></i>
       Category List <span>
        <a href="category_create.php" class="btn btn-primary">Create New Category </a>
       </span>
      </div>
      <div class="card-body">
       <div class="col-md-8">
        <form action="../_actions/create_category.php" method="post">
         <div class="form-group">
          <input type="text" name="category_name" class="form-control">
         </div>
         <div class="form-group mt-3">
          <button class="btn btn-info">Create Category</button>
         </div>
        </form>
       </div>
      </div>
     </div>

    </div>
   </main>
   <?php 
   include('layouts/footer.php'); // copy  // require_once
   ?>