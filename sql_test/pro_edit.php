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
      <h1>Product Update</h1>
     </div>
     <div class="card-body">
      <?php 
      include('functions.php');
      $id = $_GET['id'];
      $edit_data = getProductById($id);
      ?>
      <form action="product_update.php" method="post">
       <input type="hidden" name="id" value="<?= $id; ?>">
       <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Item Name</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="item_name"
         value="<?= $edit_data['item_name']?>">
       </div>
       <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">price</label>
        <input type="number" name="price" class="form-control" id="exampleInputPassword1"
         value="<?= $edit_data['price']?>">
       </div>
       <div class="mb-3 form-check">
        <input type="number" name="qty" class="form-control" id="exampleCheck1" value="<?= $edit_data['qty']?>">
       </div>
       <button type="submit" class="btn btn-primary">Update</button>
      </form>
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