<?php
session_start();
include("connection.php");
include("functions.php");

$user_data = check_login($con);



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/3fd9c2331c.js" crossorigin="anonymous"></script>
    <script src="script.js"></script>
</head>
<header>
  <nav>
      <label class="logo">Ibrahim Website</label>
          <ul>
              <li><a href="index.php" class="active" id="ul1">Home</a></li>
              <li><a href="contact.php" id="ul2">Contact</li>
              <li><a href="websites.html" id="ul3">Websites</a></li>
              <li><a href="profile.php" id="ul4">Profile</li>
              <li><a href="logout.php" id="ul5">Log Out</a></li>
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
    <span class="fas fa-cog"></span>
  </button>
</div>

<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Settings</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <p>Language</p>
        <div id="buttons-language">
            <button class="btn btn-primary" id="english" data-bs-dismiss="modal">English</button>
            <button class="btn btn-primary" id="arabic" onclick="translateAr();">Arabic</button>
            <button class="btn btn-primary" id="french" data-bs-dismiss="modal">French</button>

        </div>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal" id="Close">Close</button>
        <button type="button" class="btn btn-success" data-bs-dismiss="modal" id="Save">Save</button>
      </div>

    </div>
  </div>
</div>
            
          </ul>
  </nav>
<div class="alert alert-success">
    <strong>Welcome</strong><?php echo $user_data['user_name'];?>
  </div>
</header>
<body>
<main class="main">

</main>
<section class="bg-dark text-light">
<div class="container">
    <div class="header">
      <div class="welcome">
        <h1>Welcome To My Website!</h2>
      </div>
      <div class="News">
        News
        <h2>BIG UPDATE!</h2>
        <p>Added login system/ added settings/ profile system and more coming soon!</p>
      </div>
    </div>
  </div>
</section>
<footer>
  Ibrahim 2021-2022
</footer>
</body>
</html>