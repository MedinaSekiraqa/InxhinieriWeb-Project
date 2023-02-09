<?php

session_start();

include_once 'Controller.php';

$user = new Controller();

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $userpass = $_POST['password'];

    $redirect = $user -> login($username, $userpass);

    $num = mysqli_fetch_array($redirect);

    if($num['usertype'] == 'admin') {
        $_SESSION['usertype'] = $num['usertype'];
        $_SESSION['username'] = $num['username'];
        header("Location:dashboard/admindashboard.php");
    } else if ($num['usertype'] == 'user') {
        $name = $num["username"];
        $userid = $num["userID"];

        $_SESSION["usertype"] = $num["usertype"];
        $_SESSION["username"] = $name;
        $_SESSION["userID"] = $userid;
        header("Location: index.php");
    } else {
        echo "<script>alert('try again leter')</script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <?php include '../InxhWeb/include/header.php' ?>
    <h1>Log In</h1>

    <div class="login-container">
        <form action="#" method="POST">
            <input type="text" placeholder="username" name="username">
            <input type="password" placeholder="password" name="password">

            <br>

            <input type="submit" name="submit" value="login">
        </form>
    </div>
</body>
</html>