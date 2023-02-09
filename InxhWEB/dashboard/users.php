<?php

include_once('../Controller.php');

if(isset($_GET['userID'])){
    $id=$_GET['userID'];
    $delete=mysqli_query($connection,"DELETE FROM `user` WHERE `userID`='$id'");
}
 $select= "select * from user";
 $query=mysqli_query($connection,$select);





?>
<style>
    <?php include "css/users.css"; ?>
</style>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'admindashboard.php' ?>
    <title>USERS</title>
</head>
<body>

<table class="styled-table">
    <thead>
   
        <tr>
        <th>Id</th>
            <th>Username</th>
            <th>User Email</th>
            <th>User Password</th>
            <th>User Type</th>
            <th>Edit</th>
            <th>Delete</th>
            
        </tr>
    </thead>
    <tbody>
    <?php 
            $num=mysqli_num_rows($query);
            if($num>0){
                while($result=mysqli_fetch_assoc($query)){
                  echo "
                  <tr>
                  <td>".$result['userID']."</td>
                      <td>".$result['username']."</td>
                      <td>".$result['useremail']."</td>
                      <td>".$result['userpass']."</td>
                      <td>".$result['usertype']."</td>
                      <td>
                      <a href='addusers.php?userID=".$result['userID']."' class='btn'>Edit</a>
                      </td>
                      <td>   
                        <a href='users.php?userID=".$result['userID']."' class='btn'>Delete</a>
                      </td>
                  </tr>
                  ";
                }
                }
            
            ?>
    </tbody>
 </table>
</form>
</body>
</html>
