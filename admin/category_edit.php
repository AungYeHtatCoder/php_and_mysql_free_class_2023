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
     <h1 class="mt-4">Category_Update Dashboard</h1>
     <ol class="breadcrumb mb-4">
      <li class="breadcrumb-item active">Category_Update Dashboard</li>
     </ol>
     <div class="card mb-4">
      <div class="card-header">
       <i class="fas fa-table me-1"></i>
       Category List <span>
        <a href="category_index.php" class="btn btn-primary">Back To Category </a>
       </span>
      </div>
      <div class="card-body">
       <div class="col-md-8">
        <?php 
        $id = $_GET['id'];
        $edit_data = GetCategoryById($id);
        ?>
        <form action="../_actions/update_category.php" method="post">
         <input type="hidden" name="id" value="<?= $edit_data['id']; ?>">
         <div class="form-group">
          <input type="text" name="category_name" class="form-control" value="<?= $edit_data['category_name']; ?>">
         </div>
         <div class="form-group mt-3">
          <button class="btn btn-info">Update Category</button>
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