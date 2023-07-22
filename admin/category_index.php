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
       <table id="datatablesSimple">
        <thead>
         <tr>
          <th>ID</th>
          <th>Category Name</th>
          <th>Created At</th>
          <th>Updated_at</th>
          <th>Action</th>
         </tr>
        </thead>
        <tfoot>
         <tr>
          <th>ID</th>
          <th>Category Name</th>
          <th>Created At</th>
          <th>Updated_At</th>
          <th>Action</th>
         </tr>
        </tfoot>
        <tbody>
         <?php
         $categories = GetAllCategories();
         if($categories) :
         foreach($categories as $category) :
         ?>
         <tr>
          <td><?= $category['id']; ?></td>
          <td><?= $category['category_name']; ?></td>
          <td><?= $category['created_at']; ?></td>
          <td><?= $category['updated_at']; ?></td>
          <td>
           <a href="category_detail.php?id=<?= $category['id']; ?>" class="btn btn-warning btn-sm">View</a>
           <a href="category_edit.php?id=<?= $category['id']; ?>" class="btn btn-info btn-sm">Edit</a>
           <a href="../_actions/category_del.php?id= <?= $category['id']; ?>" class="btn btn-danger btn-sm">Del</a>
          </td>
         </tr>
         <?php endforeach ?>
         <?php
         else:
         ?>
         <h4>no data found</h4>
         <?php endif ?>
        </tbody>

       </table>
      </div>
     </div>

    </div>
   </main>
   <?php 
   include('layouts/footer.php'); // copy  // require_once
   ?>