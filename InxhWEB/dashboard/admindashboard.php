<?php 
  session_start(); ?>
   
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="css/dashboard.css">
  
  </head>
  <body>


    <!--header area start-->
    <header>
      <div class="left_area">
        <h3>HERLINE</h3>
      </div>
      <div class="right_area">
        <form method="post">
          <input type="submit" class="logout_btn" name="logout" value="Logout">
        </form>
        <?php
          if(isset($_POST['logout'])){
            header("Location:../login.php");
          }
        ?>
      </div>
    </header>
  
    <div class="sidebar">
      <div class="profile_info">
        <img src="../img/HerLineLogo.jpg" class="logo_image">
      </div>
      <a href="admindashboard.php"><span>Dashboard</span></a>
      <a href="users.php"><span>Users</span></a>
      <a href="addusers.php"><span>Add Users</span></a>
      <a href="products.php"><span>Products</span></a>
      <a href="addproduct.php"><span>Add Products</span></a>
      <a href="../index.php"><span>Page</span></a>

    </div>
    <!--sidebar end-->

    <div class="content">