<?php
//include('../db/functions.php');
//$auth = check();
// session_start();
// $user_name = $_SESSION['user_name'];
// $email = $_SESSION['email'];
// $password = $_SESSION['password'];
// $phone = $_SESSION['phone'];
// $profile = $_SESSION['profile'];

// echo "<pre>";
// print_r($auth);
// echo "</pre>";
// die();
include('auth.php');
$auth = check();
?>
<?php 
include('layouts/head.php');
//include('css/profile.css');

?>

<style>
/* Adjust the card width and add some margin and padding */
.card {
 width: 100%;
 margin: 10px;
 padding: 10px;
 border: 1px solid #ccc;
 border-radius: 5px;
}

/* Style the card header */
.card-header {
 background-color: #f0f0f0;
 padding: 10px;
}

/* Style the post title inside the header */
.post-title {
 margin: 0;
}

/* Style the post body */
.post-body {
 padding: 10px;
}

/* Style the post upload time */
.post-upload-time {
 margin-bottom: 10px;
}

/* Style the display date */
.display-date {
 margin: 0;
 font-size: 16px;
 color: #777;
}

/* Style the post image */
.post-image {
 text-align: center;
 margin-bottom: 10px;
}

/* Style the post display image */
.post-display-image {
 max-width: 100%;
 height: auto;
 border-radius: 5px;
}

/* Style the post description */
.post-description {
 margin-bottom: 10px;
}

/* Style the description text */
.description {
 font-size: 14px;
 color: #333;
}

/* Style the post footer */
.post-footer {
 display: flex;
 justify-content: space-between;
}

/* Style the post like, comment, and share buttons */
.like-btn,
.comment-btn,
.share-btn {
 padding: 5px 10px;
 font-size: 14px;
 cursor: pointer;
 background-color: #007bff;
 color: #fff;
 border: none;
 border-radius: 5px;
}

/* Add some margin between the buttons */
.post-like,
.post-comment,
.post-share {
 margin-right: 5px;
}

/* Style for the comment box */
.comment-box {
 margin-top: 10px;
}

/* Style for the comment textarea */
.comment-box textarea {
 width: 100%;
 resize: vertical;
 padding: 10px;
 border: 1px solid #ccc;
 border-radius: 5px;
 font-size: 14px;
 line-height: 1.5;
}

/* Style for the comment submit button */
.comment-box button[type="submit"] {
 margin-top: 10px;
 padding: 8px 16px;
 background-color: #007bff;
 color: #fff;
 border: none;
 border-radius: 5px;
 cursor: pointer;
}

.comment-box button[type="submit"]:hover {
 background-color: #0056b3;
}

/* friend request start */

/* CSS for the row container */
.friend-row {
 display: flex;
 flex-wrap: nowrap;
 /* Prevent items from wrapping to the next line */
 overflow-x: auto;
 /* Enable horizontal scrollbar when necessary */
}

/* CSS for the friend container */
.friend-container {
 display: flex;
 flex-direction: row;
 /* Display items horizontally */
 overflow-x: auto;
 /* Enable horizontal scrollbar when necessary */
}

/* CSS for each friend box */
.friend-box {
 display: flex;
 flex-direction: column;
 justify-content: space-between;
 align-items: center;
 margin-right: 5px;
 border: 1px solid #ccc;
 padding: 10px;
 min-width: 200px;
 /* Adjust the minimum width of each friend box */
}

/* CSS for the friend box title */
.friend-box-title {
 margin-bottom: 10px;
}

/* CSS for the friend profile image */
/* .friend-profile img {
 width: 100%;
 height: auto;
} */
.friend-profile img {
 max-width: 100%;
 /* Set maximum width to 100% of its container */
 max-height: 150px;
 /* Set maximum height to your desired value */
 object-fit: cover;
 /* Maintain aspect ratio and cover the container */
}

/* CSS for the friend request button */
.f-req-btn {
 background-color: #007bff;
 color: #fff;
 border: none;
 padding: 5px 10px;
 cursor: pointer;
 border-radius: 5px;
 margin-top: 10px;
}


/* friend request end */
/* list */
.card {
 margin: 20px;
 padding: 10px;
}

/* CSS for the friend container */
.friend-container {
 display: flex;
 flex-wrap: nowrap;
 /* Prevent items from wrapping to the next line */
 overflow-x: auto;
 /* Enable horizontal scrollbar when necessary */
}

/* CSS for each friend box */
.friend-box {
 display: flex;
 flex-direction: column;
 justify-content: space-between;
 align-items: center;
 margin-right: 20px;
 border: 1px solid #ccc;
 padding: 10px;
 min-width: 200px;
 /* Adjust the minimum width of each friend box */
}

/* CSS for the friend box title */
.friend-box-title {
 display: flex;
 align-items: center;
 justify-content: space-between;
 margin-bottom: 10px;
}

/* CSS for the green active light */
.active-light {
 width: 10px;
 height: 10px;
 border-radius: 50%;
 background-color: #00cc00;
 /* Green color */
}

/* CSS for the friend list profile image */
.friend-list-profile img {
 max-width: 50px;
 /* Adjust the size of the profile image */
 max-height: 50px;
 /* Adjust the size of the profile image */
 border-radius: 50%;
 /* Make the profile image circular */
 object-fit: cover;
 /* Maintain aspect ratio and cover the container */
}

/* CSS for the chat button */
.f-chat-btn {
 background-color: #007bff;
 color: #fff;
 border: none;
 padding: 5px 10px;
 cursor: pointer;
 border-radius: 5px;
 margin-top: 10px;
}

/* list end */
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

            <!-- <img src="https://i.imgur.com/Qtrsrk5.jpg" class="img-fluid"> -->
            <img src="../_actions/covers/<?= $auth['cover_photo']; ?>" class="img-fluid">

            <div class="card">
             <div class="card-body">
              <div class="mb-3">
               <form action="../_actions/cover_photo_update.php" enctype="multipart/form-data" method="post">
                <input type="hidden" name="id" value="<?= $auth['id']?>">
                <input type="file" name="cover_photo" class="form-control">
                <button class="btn btn-primary mt-3" name="cover_photo_update">Upload</button>
               </form>
              </div>
             </div>
            </div>
           </div>

           <div class="user text-center">

            <div class="profile">

             <!-- <img src="https://i.imgur.com/JgYD2nQ.jpg" class="rounded-circle" width="80"> -->
             <img src="<?= '../_actions/profile/'.$auth['profile']?>" class="rounded-circle" width="80">

            </div>

           </div>


           <div class="mt-5 text-center">

            <h4 class="mb-0"><?= $auth['user_name']; ?></h4>
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
       <div class="row">
        <!-- friend request ui start -->

        <div class="friend-row">

         <div class="col-md-3 mr-3">
          <div class="friend-container">
           <div class="friend-box">
            <div class="friend-box-title">
             <h4>
              username
             </h4>
            </div>
            <div class="friend-profile">
             <img src="../_actions/profile/1.jpg" alt="">
            </div>
            <form action="../_actions/friend_create.php" method="post">
             <input type="hidden" name="user_id" value="">
             <input type="hidden" name="friend_id" value="">


             <!-- Show message when friend request is already sent -->
             <span>You requested this user</span>

             <!-- Show friend request button when not requested -->
             <button class="f-req-btn">Request Friend</button>

            </form>
           </div>
          </div>
         </div>



        </div>
        <!-- friend request ui end -->

       </div>


       <!-- display post start -->
       <div class="row">
        <div class="col-md-2 mt-3">
         <div class="post-left card">
          <div class="card-header">
           <h2 class="left-title">Left</h2>
          </div>
          <div class="card-body">

          </div>
         </div>
        </div>


        <div class="col-md-6 mt-3">
         <!-- foreach loop start -->
         <?php
         $user_id = $auth['id'];
         $posts = GetPostByID($user_id);
         if(empty($posts)) :
         ?>
         <p>no posts found for this user. </p>
         <?php 
         else:
         ?>
         <?php 
         foreach($posts as $post) :
         
         ?>
         <div class="post-container card">
          <div class="card-header">
           <h2 class="post-title"><?= $post['post_title']?></h2>
          </div>
          <div class="post-body card-body">
           <div class="post-upload-time">

            <h2 class="display-date">
             <?= $post['created_at']; ?>
            </h2>
           </div>
           <div class="post-image">
            <img src="../_actions/posts_image/<?= $post['post_image']; ?>" alt="" class="post-display-image">
           </div>
           <div class="post-description">
            <p class="description">
             <?= $post['description']; ?>
            </p>
           </div>

          </div>
          <div class="post-footer">
           <div class="post-like">
            <form action="../_actions/like_create.php" method="post">
             <input type="hidden" name="post_id" value="" id="post_id">
             <input type="hidden" name="user_id" value="" id="user_id">
             <input type="hidden" name="like_status" value="1" id="like_status">
             <button name="like-create" class="like-btn">like</button>
            </form>
            <span>
             1
            </span>
           </div>
           <!-- <div class="post-comment">
            <button class="comment-btn">comment</button>
           </div> -->
           <div class="post-comment">
            <button class="comment-btn" onclick="toggleCommentBox(this)">comment</button>
            <!-- Comment Box -->
            <div class="comment-box" style="display: none;">

             <div class="comment">
              <strong>:</strong>
              <p></p>
             </div>

             <!-- display comment end -->
             <!-- Add your comment form or any other elements for the comment box here -->
             <form action="../_actions/post_comment.php" method="post">
              <input type="hidden" name="post_id" value="">
              <input type="hidden" name="user_id" value="">
              <textarea name="comment" placeholder="Type your comment here"></textarea>
              <button type="submit" name="submit_comment">Submit</button>
             </form>

            </div>
           </div>
           <div class="post-share">
            <button class="share-btn">share</button>
           </div>
          </div>
         </div>
         <?php endforeach; ?>
        </div>
        <?php endif; ?>

       </div>
       <!-- display post end -->
      </div>
      <div class="col-md-4">

       <div class="card">
        <div class="card-header">
         <h1>User Update</h1>
        </div>
        <div class="card-body">
         <form action="../_actions/pw_update.php" method="post">
          <input type="hidden" name="id" value="<?= $auth['id']; ?>">
          <div class="mb-3">
           <label for="exampleInputEmail1" class="form-label">Email address</label>
           <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
            value="<?= $auth['email']; ?>" disabled>
           <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
          </div>
          <div class="mb-3">
           <label for="exampleInputPassword1" class="form-label">Password</label>
           <input type="password" name="password" class="form-control">
          </div>

          <button type="submit" class="btn btn-primary">Change Password</button>
         </form>
        </div>
       </div>
       <div class="card">
        <div class="card-header">
         <h2>User Profile Update</h2>
        </div>
        <div class="card-body">
         <form action="../_actions/profile_update.php" method="post" enctype="multipart/form-data">
          <input type="hidden" name="id" value="<?= $auth['id']; ?>">
          <div class="input-group mb-3">
           <label class="input-group-text" for="inputGroupFile01">Upload</label>
           <input type="file" name="profile" class="form-control" id="inputGroupFile01">
          </div>
          <div class="mb-3">
           <button class="btn btn-primary" name="profile_update">Profile Change</button>
          </div>
         </form>
        </div>
       </div>
       <!-- post  -->
       <div class="card">
        <div class="card-header">
         <h2>Create New Post</h2>
        </div>
        <div class="card-body">
         <form action="../_actions/post_create.php" method="post" enctype="multipart/form-data">
          <div class="form-group mb-3">
           <label for="post_title">Post Title</label>
           <input type="text" name="post_title" class="form-control">
          </div>
          <div class="form-group mb 3">
           <textarea name="description" class="form-control" id="" cols="30" rows="10"></textarea>
           <label for="description">Post Description</label>
          </div>
          <div class="form-group mb-3">
           <label class="input-group-text" for="inputGroupFile01">Upload</label>
           <input type="file" name="post_image" class="form-control" id="inputGroupFile01">
          </div>
          <input type="hidden" name="user_id" value="<?= $auth['id']; ?>">

          <div class="mb-3">
           <button class="btn btn-primary" name="post-create">Post Upload</button>
          </div>
         </form>
        </div>
       </div>

       <!-- post end -->
      </div>
     </div>
    </div>
   </main>
   <?php 
   include('layouts/footer.php'); // copy  // require_once
   ?>

   <script>
   function toggleCommentBox(button) {
    const commentBox = button.nextElementSibling;
    commentBox.style.display = commentBox.style.display === "none" ? "block" : "none";
   }
   </script>