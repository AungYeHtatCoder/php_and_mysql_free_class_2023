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

         <th>Name</th>
         <th>Age</th>
         <th>Sex</th>
         <th>doj</th>
         <th>City</th>
         <th>Salary</th>
        </tr>
       </thead>
       <tbody>
        <?php 
        include('functions.php');
        $emp_lists = GetAllEmp();
        foreach($emp_lists as $list) :
        ?>
        <tr>
         <td><?= $list['name']; ?>
         <td>
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