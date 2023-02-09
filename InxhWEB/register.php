<?php

include_once '../InxhWeb/Controller.php';
$register = new Controller();

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $useremail = $_POST['email'];
    $userpass = $_POST['pass'];
    $usertype = $_POST['usertype'];

    $registerData = $register -> register($username, $useremail, $userpass, $usertype);

    if ($register) {
        echo "<script>alert('Register successfully')</script>";
    } else {
        echo "<script>alert('Register failed')</script>";
    }

    
}   

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>

    <?php include '../InxhWeb/include/header.php' ?>

    <h1>Register</h1>

    <div class="register-form">
        <form action="#" method="POST">
            <input type="text" placeholder="Username" name="username" id="username">
            <input type="email" placeholder="Email" name="email" id="email">
            <input type="password" placeholder="Password" name="pass" id="pass">
            <select type="select" name="usertype">
                 <option >Chose your role</option>
                <option value="user">user</option>
                <option value="admin">admin</option>
            </select>
            <br>
           <input type="submit" name="submit" value="Register" id="registerButton" onclick="validateRegister()">
            <label id="errorRegister" style="height:30px;"></label>
        </form>
    </div>
    <script src="validate.js"></script>
</body>
</html>