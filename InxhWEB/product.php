<?php

include_once('Controller.php');
$products = new Controller();
$allproducts = $products -> readProducts();
$select= "select * from user";
$query=mysqli_query($connection,$select);
$num=mysqli_num_rows($query);
$result=mysqli_fetch_assoc($query)

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
</head>
<body>
<?php include '../inxhweb/include/header.php' ?>

<style>
    <?php include "css/product.css" ?>
</style>

    <div id="newRelease">
        <div id="newReleaseItem1">
            <h2>CLOTHES THAT FIT EVERYBODY</h2>
        </div>
        <div id="newReleaseItem2">
            <img src="img/girl.jpg">
        </div>
    </div> 


    <div id="article">
        <div id="trending">
            <h3 style="font-size: 30px;">TRENDING ITEMS</h3>
          </div>
    </div>


    <div class="permbajtja">
            <?php foreach ($allproducts as $products): ?>
                    
                     <div class='item'>
                          <img src= "img/<?php echo $products['image']; ?>" >
                        <h1><?php echo $products['name']; ?></h1>
                        <p><?php echo $products['price']; ?>$</p>
                        <p style='font-size:12px;'>Posted by:<?php echo $result['username']; ?></p>
                    
                  </div>
                          <?php endforeach; ?>
             
 </div>

   
<?php include '../inxhweb/include/footer.php' ?>

</body>
</html>