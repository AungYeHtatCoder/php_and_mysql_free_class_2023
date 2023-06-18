<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
 <div class="container">
  <div class="row">

   <div class="col-md-8">
    <div class="card">
     <div class="card-header">
      <h1>City list</h1>
     </div>
     <div class="card-body">
      <h1>city list</h1>
      <?php 
 include('functions.php');
 $cities = GetAllCity();
 ?>
      <table class="table">
       <thead>
        <tr>
         <th>ID</th>
         <th>Name</th>
         <th>Country Code</th>
         <th>Population</th>
        </tr>
       </thead>
       <tbody>
        <?php foreach($cities as $city): ?>
        <tr>
         <td><?= $city['id']; ?></td>
         <td><?= $city['name']; ?></td>
         <td><?= $city['country_code']; ?></td>
         <td><?= $city['population']; ?></td>
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
      <h1>City Name Only</h1>

     </div>
     <div class="card-body">
      <table class="table">
       <thead>
        <tr>
         <th>ID</th>
         <th>Name</th>
        </tr>
       </thead>
       <tbody>
        <?php 
        $city_names = CityNameOnly();
        foreach($city_names as $name):
        ?>
        <tr>
         <td><?= $name['id']?></td>
         <td><?= $name['name']?></td>
        </tr>
        <?php endforeach ?>
       </tbody>
      </table>
     </div>
    </div>
   </div>
  </div>
 </div>

</body>

</html>