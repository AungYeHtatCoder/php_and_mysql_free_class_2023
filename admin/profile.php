<?php 
include('layouts/head.php');
?>
<style>
.upper img {

 width: 100%;
 border-top-left-radius: 10px;
 border-top-right-radius: 10px;

}

.user {
 position: relative;
}

.profile img {


 height: 80px;
 width: 80px;
 margin-top: 2px;


}

.profile {

 position: absolute;
 top: -50px;
 left: 38%;
 height: 90px;
 width: 90px;
 border: 3px solid #fff;

 border-radius: 50%;

}

.follow {

 border-radius: 15px;
 padding-left: 20px;
 padding-right: 20px;
 height: 35px;
}

.stats span {

 font-size: 29px;
}
</style>

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
     <!-- <h1 class="mt-4">Dashboard</h1> -->
     <ol class="breadcrumb mb-4">
      <!-- <li class="breadcrumb-item active">Dashboard</li> -->
     </ol>

     <div class="row">
      <div class="col-md-8">
       <div class="card mb-4">
        <div class="card-header">
         <i class="fas fa-table me-1"></i>
         User Information
        </div>
        <div class="card-body">
         <div class="container">
          <!-- d-flex justify-content-center align-items-center -->

          <div class="card">

           <div class="upper">

            <img src="https://i.imgur.com/Qtrsrk5.jpg" class="img-fluid">

           </div>

           <div class="user text-center">

            <div class="profile">

             <img src="https://i.imgur.com/JgYD2nQ.jpg" class="rounded-circle" width="80">

            </div>

           </div>


           <div class="mt-5 text-center">

            <h4 class="mb-0">Benjamin Tims</h4>
            <span class="text-muted d-block mb-2">Los Angles</span>

            <button class="btn btn-primary btn-sm follow">Follow</button>


            <div class="d-flex justify-content-between align-items-center mt-4 px-4">

             <div class="stats">
              <h6 class="mb-0">Followers</h6>
              <span>8,797</span>

             </div>


             <div class="stats">
              <h6 class="mb-0">Projects</h6>
              <span>142</span>

             </div>


             <div class="stats">
              <h6 class="mb-0">Ranks</h6>
              <span>129</span>

             </div>

            </div>

           </div>

          </div>

         </div>
        </div>
       </div>
      </div>
      <div class="col-md-4">

       <div class="card">
        <div class="card-header">
         <h1>User Update</h1>
        </div>
        <div class="card-body">
         <form>
          <div class="mb-3">
           <label for="exampleInputEmail1" class="form-label">Email address</label>
           <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
           <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
          </div>
          <div class="mb-3">
           <label for="exampleInputPassword1" class="form-label">Password</label>
           <input type="password" class="form-control" id="exampleInputPassword1">
          </div>

          <button type="submit" class="btn btn-primary">Submit</button>
         </form>
        </div>
       </div>
      </div>
     </div>
    </div>
   </main>
   <?php 
   include('layouts/footer.php'); // copy  // require_once
   ?>