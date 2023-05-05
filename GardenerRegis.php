<?php
$showAlert = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'partials/_dbconnect.php';
    $fname = $_POST["fname"];
    $mail=$_POST["mail"];
    $phone=$_POST["phone"];
    $gender=$_POST["gender"];
    $city=$_POST["city"];
    $Address1=$_POST["Address1"];
    $pin=$_POST["pin"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];
    $who=$_POST["who"];
    $exists=false;
    if(($password== $cpassword) && $exists==false){
        $sql="INSERT INTO `sing` ( `fname`, `mail`, `phone`, `gender`, `city`, `Address1`, `pin`, `password`,`dt`,`who`) VALUES ('$fname', '$mail', '$phone',  '$gender', '$city', '$Address1 ', '$pin', '$password', current_timestamp(),'$who')";
        $result = mysqli_query($conn, $sql);
        if ($result){
            $showAlert = true;
        }

    }
    else{
        $showError = "password wrong ";
    }
}
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gardener-Register</title>
    <div class="topnav">
        <a class="active" href="index.html">Home</a>
        <a href="login2.php">Login</a>
        <a href="contact.html">Contact Us</a>
        <a href="index.html">Logout</a>
      </div>
    
    <style>

*{
        box-sizing: border-box;
}
.topnav {
  background-color: #333;
  overflow: hidden;
}


.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}


.topnav a:hover {
  background-color: #ddd;
  color: black;
}


.topnav a.active {
  background-color: #04AA6D;
  color: white;
}
    .bgimg{
        background-image: url();
        background-size: cover;
        background-attachment: fixed;
        width: 100%;
        height: 950px;
    }
    body{
        background-image: url(https://www.msm.edu/online/makingmedicines/images/makingmedicines784.jpg);
        font-family: "Gill Sans", sans-serif;
        margin: 10px 30px;
        font-size: 17px;
        padding: 8px;
        width: 100%;
    }
    .container{
        background-color:rgb(165, 234, 255);
        padding:20px;
        border: 1px solid rgb(77, 74, 68);
        border-radius: 4px;
        margin-top:3px;
        margin-left:30%;
        margin-right:40%;
    }
    textarea{
        width: 100%;
        padding: 12px;
        border: 1px solid #ccc;
       
        margin: 10px;
    }
    select{
        color: rgb(44, 48, 68);
    }
    fieldset{
        background-color: #fff;
        border: #ccc;
    }
    .heading{
        text-align: center;
    }
    .instruct{
        text-align: center;
    }
    .required{
        color: rgb(160, 45, 45);
    }
    input[type="submit"]{
        background-color: rgb(154, 153, 156);
        color: rgb(0, 0, 0);
        padding: 12px 20px;
        border: none;
        /* border-radius: 4px; */
        border-radius: 10px 100px / 120px;
        cursor: pointer;
        width: 70%;
        margin: 10px 50px 20px;
    }
    input[type="submit"]:hover{
        background-color: rgba(251, 255, 40, 0.767);
    }
    </style>
    <!-- <link rel="stylesheet" href="NgoStyle.css"> -->
</head>

<body>
    <div class="container">
    <form action="/MajorProject2/GardenerRegis.php" onsubmit="return formValidation()" method ="POST">
    <label for="">
        <div class="text">
        <h1> Gardener Registeration</h1>
        </div>
    </label>
    <h4 class="instruct">Please enter all details in the given field*</h4>
    <h6 class="required">* Required</h6>
   <p class="nm">Nursery-Name : <textarea placeholder="Your Name" id="name" name="fname" width="40%" rows="1" required></textarea></p> 
   <p>E-mail: <input type="email" id="email" name="mail" required></p> 
   <p>Phone: <input type="Phone" id="Phone" name="phone" maxlength="10" minlength="10" required></p> 

   <p>City : 
       <select name="city" id="city">
            <option value="----Select your City-----">Select</option>
            <option value="Bhopal">BHOPAL</option>
       </select>
       <p>Address: <textarea placeholder="Enter your address" name="Address1" id="address" cols="80" rows="4" required></textarea></p>
   <p>Pincode : <input type="text" name="pin" id="Pincode" maxlength="6" required></p>
   <p> Register As:
   <select name="who" id="reg">
            <option name=" reg"value="----Select your registration-----">Select</option>
            <option value="gender">gardener</option>
            <option value="gender">None</option>
       </select>
   <p>Set password : *<input type="password" name="password" id="pwd" minlength="6" maxlength="6" required></p>
   <p>Confirm password : *<input type="password" name="cpassword" id="pwd" minlength="6" maxlength="6" required></p>
   <input type="submit" value="Submit Response">
   <div class="alert alert-primary" role="alert">
    Already have an account..? <a href="login2.php" class="alert-link">Signin</a>
  </div>
</form>
</div>
</body>
</html>