<?php

include_once '../Controller.php';
$product = new Controller();
$image="";
$name="";
$price="";

if(isset($_GET['id'])){
    $id=$_GET['id'];
    $select=mysqli_query($connection,"select * from products");
    $data= mysqli_fetch_assoc($select);
    $image=$data['image'];
    $name=$data['name'];
    $price=$data['price'];

    
}

if (isset($_POST['add'])) {
    $image = $_POST['image'];
    $name = $_POST['name'];
    $price = $_POST['price'];

    if(isset($_GET['id'])){
        $update=mysqli_query($connection,"UPDATE `products` SET `image`='$image',`name`='$name',`price`='$price' WHERE id='$id' ");
        if($update){
            echo "<script>alert('Updated successfully')</script>";
            header("Location:products.php");
        }
    }else{
    $addProducts = $product-> addProducts($image, $name, $price);
   
    if ($product) {
        echo "<script>alert('Added successfully')</script>";
        header("Location:products.php");
    } else {
        echo "<script>alert('Added failed')</script>";
        header("Location:products.php");
    }
 
}
}   

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <?php include 'admindashboard.php' ?>
    <title>Add Products</title>
</head>
<body>

    

    <h1>Add Products</h1>

    <div class="register-form">
        <form action="#" method="POST">
            <input type="file" placeholder="image" name="image" value="<?php echo $image;?>">
            <input type="text" placeholder="name" name="name" value="<?php echo $name;?>">
            <input type="text" placeholder="price" name="price" value="<?php echo $price;?>">
            <br>

            <input type="submit" name="add" value="SUBMIT">
        </form>
    </div>
    
</body>
</html>