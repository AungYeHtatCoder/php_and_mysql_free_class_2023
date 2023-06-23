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

       <?php 

        $id = $_GET['id'];
        include('functions.php');
        $get_pro_by_id = getProductById($id);
        ?>
       <tr>
        <th>ID</th>
        <td><?= $get_pro_by_id['id']?></td>
       </tr>
       <tr>
        <th>Item_name</th>
        <td><?= $get_pro_by_id['item_name']?></td>
       </tr>

       <tr>
        <th>Price</th>
        <td><?= $get_pro_by_id['price']?></td>
       </tr>
       <tr>
        <th>Qty</th>
        <td><?= $get_pro_by_id['qty']?></td>
       </tr>
       <tr>
        <th>created at</th>
        <td><?= $get_pro_by_id['created_at']?></td>
       </tr>
       <tr>
        <th>updated_at</th>
        <td><?= $get_pro_by_id['updated_at']?></td>
       </tr>

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

     </div>
    </div>
   </div>
  </div>
 </div>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>