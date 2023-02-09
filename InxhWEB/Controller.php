<?php

define('DB_SERVER', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'projektiweb');
$connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
class Controller {
    function __construct()
    {
        $connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
        $this -> db = $connection;
    }

    // Ktu e bojna regjistrimin e userave
    function register($username, $email, $pass, $usertype)
    {
        $query = mysqli_query($this -> db, "INSERT INTO user(username, useremail, userpass, usertype)
            VALUES ('$username', '$email', '$pass', '$usertype')");
        return $query;
    }

    // Ktu e bojna validimin per log in - hyrje
    function login($username, $userpass)
    {
        $query = mysqli_query($this -> db, "SELECT userID, usertype, username FROM user WHERE username = '$username' AND userpass = '$userpass'");
        return $query;
    }


    // Thirrja e te gjithe perdoruesve ne dashboard
    function readUsers()
    {
        $query = mysqli_query($this -> db, "SELECT * FROM user");
        return $query;
    }

    //ME LEXU VETEM NJE USER
    function readUser()
    {
        $query = mysqli_query($this -> db, "SELECT username,useremail,usertype FROM user WHERE userID=userID");
        return $query;
    } 
  
    //function add users
    function addUsers($username, $email, $pass, $usertype)
    {
        $query = mysqli_query($this -> db, "INSERT INTO user(username, useremail, userpass, usertype)
            VALUES ('$username', '$email', '$pass', '$usertype')");
        return $query;
    }
    //Regjistrimi per Contact us
    function contact($fname,$lname,$phone,$email,$city,$subjectt)
    {
      $query =mysqli_query($this -> db,"INSERT INTO contact(fname,lname,phone,email,city,subjectt)
      VALUES ('$fname','$lname','$phone','$email','$city','$subjectt')");

      return $query;
    }
   //Me shtu produkte
    function addProducts($image, $name, $price)
    {
        $query = mysqli_query($this -> db, "INSERT INTO products(image, name, price)
            VALUES ('$image', '$name', '$price')");
        return $query;
    }
    //MI lexu produkteet
    function readProducts()
    {
        $query = mysqli_query($this -> db, "SELECT * FROM products");
        return $query;
    }
    
    

}


?>