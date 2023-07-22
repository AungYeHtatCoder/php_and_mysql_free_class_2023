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
     <h1 class="mt-4">Category Detail Dashboard</h1>
     <ol class="breadcrumb mb-4">
      <li class="breadcrumb-item active">Category Detail Dashboard</li>
     </ol>
     <div class="card mb-4">
      <div class="card-header">
       <i class="fas fa-table me-1"></i>
       Category List <span>
        <a href="category_index.php" class="btn btn-primary">Back To Category </a>
       </span>
      </div>
      <div class="card-body">
       <table id="datatablesSimple">
        <?php
        $id = $_GET['id'];
        $category_detail = GetCategoryById($id);
       ?>
        <tr>
         <th>ID</th>
         <td><?= $category_detail['id']; ?></td>
        </tr>
        <tr>
         <th>Category Name</th>
         <td><?= $category_detail['category_name']; ?></td>
        </tr>

        <tr>
         <th>Created_at</th>
         <td><?= $category_detail['created_at']; ?></td>
        </tr>

        <tr>
         <th>Updated_at</th>
         <td><?= $category_detail['updated_at']; ?></td>
        </tr>
       </table>
      </div>
     </div>

    </div>
   </main>
   <?php 
   include('layouts/footer.php'); // copy  // require_once
   ?>