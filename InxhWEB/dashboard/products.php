<?php

include_once('../Controller.php');

if(isset($_GET['id'])){
    $id=$_GET['id'];
    $delete=mysqli_query($connection,"DELETE FROM `products` WHERE `id`='$id'");
}

 $select= "select * from products";
 $query=mysqli_query($connection,$select);





?>
<style>
    <?php include "css/product.css"; ?>
</style>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'admindashboard.php' ?>
    <title>Product</title>
</head>
<body>

<table class="styled-table">
    <thead>
        <tr>
        <th>Id</th>
        <th>Image</th>
            <th>Name</th>
            <th>Price</th>
            <th>Edit</th>
            <th>Delete</th>
           
        </tr>

        <?php 
            $num=mysqli_num_rows($query);
            if($num>0){
                while($result=mysqli_fetch_assoc($query)){
                  echo "
                  <tr>
                  <td>".$result['id']."</td>
                      <td>".$result['image']."</td>
                      <td>".$result['name']."</td>
                      <td>".$result['price']."</td>
                      <td>
                      <a href='addproduct.php?id=".$result['id']."' class='btn'>Edit</a>
                      </td>
                      <td>   
                        <a href='products.php?id=".$result['id']."' class='btn'>Delete</a>
                      </td>
                  </tr>
                  ";
                }
                }
            
            ?>
    </thead>
    <tbody>
       
          
    
</div>
    </tbody>
</body>
</html>

