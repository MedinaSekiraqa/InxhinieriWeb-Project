<?php

include_once '../Controller.php';
$register = new Controller();
$msg="";
$username="";
$useremail="";
$userpass="";
$usertype="";

if(isset($_GET['userID'])){
    $userID=$_GET['userID'];
    $select=mysqli_query($connection,"select * from user");
    $data= mysqli_fetch_assoc($select);
    $username=$data['username'];
    $useremail=$data['useremail'];
    $userpass=$data['userpass'];
    $usertype=$data['usertype'];

    
}

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $useremail = $_POST['useremail'];
    $userpass = $_POST['userpass'];
    $usertype = $_POST['usertype'];

    if(isset($_GET['userID'])){
        $update=mysqli_query($connection,"UPDATE `user` SET `username`='$username',`useremail`='$useremail',`userpass`='$userpass',`usertype`='$usertype' WHERE userID='$userID' ");
        if($update){
            $msg="Updated Succesfully";
            header("Location:users.php");
        }
    }else{

    $registerData = $register -> register($username, $useremail, $userpass, $usertype);
    
    if ($register) {
        echo "<script>alert('Added successfully')</script>";
        header("Location:users.php");
    } else {
        echo "<script>alert('Added failed')</script>";
        header("Location:users.php");
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
    <title>Add Users</title>
</head>
<body>

   

    <h1>ADD USER</h1>

    <div class="register-form">
        <form action="#" method="POST">
            <input type="text" placeholder="Username" name="username" value="<?php echo $username;?>">
            <input type="email" placeholder="Email" name="useremail" value="<?php echo $useremail;?>">
            <input type="password" placeholder="Password" name="userpass" value="<?php echo $userpass;?>">
            
            <select type="select" name="usertype" value="<?php echo $usertype;?>">
                <option value="user">user</option>
                <option value="admin">admin</option>
            </select>

            <br>

<input type="submit" name="submit" value="SUBMIT">
</form>
</div>

</body>
</html>