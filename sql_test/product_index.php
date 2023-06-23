<!doctype html>
<html lang="en">

<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>Bootstrap demo</title>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
 <div class="container">
  <div class="row">
   <div class="col-md-8">
    <div class="card">

     <div class="card-header">
      <h1>Emp List</h1>
     </div>
     <div class="card-body">
      <table class="table">
       <thead>
        <tr>

         <th>Item_Name</th>
         <th>price</th>
         <th>qty</th>
         <th>created_at</th>
         <th>updated_at</th>
         <th>Action</th>
        </tr>
       </thead>
       <tbody>
        <?php 
        include('functions.php');
        $products = getAllProducts();
        foreach($products as $p) :
        ?>
        <tr>
         <td><?= $p['item_name']; ?> </td>
         <td><?= $p['price']; ?> </td>
         <td><?= $p['qty']; ?></td>
         <td><?= $p['created_at']; ?> </td>
         <td><?= $p['updated_at']; ?> </td>
         <td>
          <a href="pro_details.php?id=<?= $p['id'];?>" class="btn btn-primary btn-sm">Detail</a>
          <a href="pro_edit.php?id=<?= $p['id'];?>" class="btn btn-info btn-sm">Edit</a>
          <a href="pro_del.php?id=<?= $p['id']?>" class="btn btn-danger btn-sm">Del</a>
         </td>
        </tr>
        <?php endforeach; ?>
       </tbody>
      </table>
     </div>
    </div>
   </div>
   <div class="col-md-4">
    <div class="card">
     <div class="card-header">
      <h1>get total salary group by sex</h1>
     </div>
     <div class="card-body">
      <table class="table">
       <thead>
        <tr>
         <th>sex</th>
         <th>salaray</th>
        </tr>
       </thead>
       <tbody>
        <tr>
         <?php
          $salaries = GetSalaryBySex();
          foreach($salaries as $s) :
          ?>
         <td><?= $s['sex']?></td>
         <td><?= $s['total_salary']?></td>
        </tr>
        <?php endforeach; ?>
       </tbody>
      </table>
     </div>
    </div>
   </div>
  </div>
 </div>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>