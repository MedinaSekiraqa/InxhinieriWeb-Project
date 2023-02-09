<?php
 include_once '../InxhWeb/Controller.php';
 $contact = new Controller();

 if(isset($_POST['submit'])){
     $fname = $_POST['fname'];
     $lname = $_POST['lname'];
     $phone = $_POST['phone'];
     $email = $_POST['email'];
     $city = $_POST['city'];
     $subjectt = $_POST['subjectt'];

     $sendcontact= $contact -> contact($fname,$lname,$phone,$email,$city,$subjectt);
     
     if($contact){
         echo "<script>alert('Successfully Sent')</script>";
     }else{
         echo "<script>alert('Sent Failed')</script>";
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
<div class="contact">

        <form action="#" method="POST">
          <label for="fname">First Name</label><br>
          <input type="text"  name="fname" id="fname" placeholder="Your name.." ><br>
          <label for="lname">Last Name</label><br>
          <input type="text" name="lname"id="lname" placeholder="Your last name.."><br>
          <label for="number">Phone Number</label><br>
          <input type="number"  name="phone" id="phone" placeholder="Your Phone Number.."><br>
          <label for="email">Email</label><br>
          <input type="email"  name="email" id="email" placeholder="Email"><br> 
          <label for="city" id="city" >City</label><br>
          <select  name="city" ><br>
            <option value="null"></option>
            <option value="Prishtine">Prishtine</option>
            <option value="Ferizaj">Ferizaj</option>
            <option value="Pej">Pej</option>
            <option value="Gjakov">Gjakov</option>
            <option value="Gjilan">Gjilan</option>
            <option value="Prizren">Prizren</option>
          </select><br>
      
          <label for="subject" >Subject</label><br>
          <textarea  name="subjectt" id="subject" placeholder="Write something.."  style="height:200px"></textarea><br>
      
          <input type="submit" value="submit" name="submit" id="registerButton" onclick="validateRegister()">
          <label id="errorRegister" style="height:30px;"></label>
          
        </form>
        </div>
   
        <?php include '../inxhweb/include/footer.php'?>
          <script src="validimi.js"></script>
</body>

      </html>