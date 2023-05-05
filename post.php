<?php
// include "partials/_dbconnect.php";

$server = "localhost";
$name = "root";
$password = "";
$database = "postmed";

$conn = mysqli_connect($server, $name, $password, $database) or die(mysqli_connect_error()."database connection");

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
$showAlert = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $fname=$_POST["fname"];
    $medname=$_POST["medname"];
    $medcomp=$_POST["medcomp"];
    $meduse=$_POST["meduse"];
    $city=$_POST["city"];
    $pin=$_POST["pin"];
    $sql="INSERT INTO `postmed` ( `fname`,`medname`, `medcomp`, `meduse`, `city`, `pin`, `dt`) 
    VALUES ('$fname','$medname', '$medcomp', '$meduse', '$city', '$pin', current_timestamp())";
     $result = mysqli_query($conn, $sql);
     if ($result){
         $showAlert = true;
     }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="30;url= http:/MajorProject2/post.php"/>
    <title>Post your medicine</title>

    


    <style>
      *{
        margin:0;
        padding:0;
      }
      body {
            background: #44A08D; 
            background: -webkit-linear-gradient(to right, #093637, #44A08D);  
            background: linear-gradient(to right, #093637, #44A08D);
            font-family: "Gill Sans", sans-serif;
            font-size: 17px;
        }
        nav{
          display:flex;
          justify-content:space-between;
          position: fixed;
          width:100%;
          align-items:center;
          overflow: hidden;
          background-color: #333;
          z-index: 999;
        }
        nav div a{
          float: left;
          color: #f2f2f2;
          text-align: center;
          padding: 14px 16px;
          text-decoration: none;
          font-size: 17px;
        }
        nav a:hover {
          background-color: #ddd;
          color: black;
        }
        nav a.active {
          background-color: #04AA6D;
          color: white;
        }
        nav div form input{
          background:none;
          border:none;
          border-bottom:2px solid #fff;
          outline:none;
          font-size:16px;
          color:#fff;
        }
        nav div form button{
          padding:5px;
          background:#333;
          border:2px solid #fff;
          color:#fff;
          border-radius:5px;
          margin-right:5px;
        }
        nav div form button:hover{
          border:2px solid #333; 
        }
        marquee{
          color:#fff;
        }
        .container{
          background: #4CA1AF;
          background: -webkit-linear-gradient(to right, #C4E0E5, #4CA1AF);  
          background: linear-gradient(to right, #C4E0E5, #4CA1AF); 
          position:relative;
          top:40px;
          background-color: rgb(247, 253, 255);
          border: 3px solid rgb(77, 74, 68);
          border-style: inset;
          padding:10px;
        }
        .container form h2{
          text-align:center;
          margin:10px 0px;
          color:#333;
          border-bottom:2px solid #000;
          text-shadow:-4px 4px 8px #fff;
        }
        .container form .form-inner{
          display:flex;
          justify-content:space-around;
          align-items:center;
        }
        .container form .form-inner div{
          margin-left:5px;
        }
        .container form .form-inner div table{
          border:none;
        }
        .container form .form-inner div table tbody tr td:first-child{
          text-align:end;
          color:#000;
          opacity:1;
          font-weight:bold;
        }
        .container form .form-inner div table tbody tr td:last-child input{
          margin-left:5px;
          background:none;
          border:none;
          border-bottom:2px solid #333;
          width:100%;
          outline:none;
        }
        .container form #btn{
          margin:0 50%;
          background:#333;
          padding:5px;
          color:#fff;
          border-radius:8px;
          cursor:pointer;
        }
        .container form #btn:hover{
          background:none;
          border:2px solid #333;
          border-radius:1px;
          color: red;
        }
        .mansi{
          position:relative;
          top:50px;
        }
        .mansi table{
          width:100%;
          border: 2px solid #000;
          border-collapse: collapse;
          background-color:#fff;
          opacity:0.8;
        }
        .mansi table tr{
          border: 2px solid #000;
          color:#000;
          font-weight:bold;
        }
        .mansi table tr:hover{
          background-color:pink;
        }
        .mansi table tr th{
          background-color:#333;
          color:#fff;
        }
        .mansi table tr td,th{
          padding:10px;
          text-align:center;
        }
        .mansi table tr td a{
          text-decoration:none;
          color:#fff;
          background-color:#000;
          opacity:1;
          padding:5px;
          border-radius:5px;
        }
        .yname{  
          padding-left: 360px;
          word-wrap: initial;
          word-spacing: 20px;
        }
    </style>
</head>


<body>
<div>
  <marquee behavior=alternate>Chill! everything will be good .hope you & your family is okay . </marquee>
</div>     
<nav>
    <div>
      <a class="active" href="index.html">Home</a>
      <a href="contact.html">Contact Us</a>
      <a href="index.html">Logout</a>
    </div>
    <div>
      <form class="d-flex" action="search.php" method="Post">
        <input class="form-control me-2" type="search" name="search" aria-label="Search" >
        <button  class="btn btn-outline-success"name="submit" type="submit">Search</button>
      </form>
    </div>
</nav>
 <div class="container">
    <!-- <form action="<?php $_SERVER['PHP_SELF'];?>" method ="POST"> -->
    <form action="/MajorProject2/post.php" method ="POST">
        <h2>POST MEDICINE</h2>
        <div class="form-inner">
          <div>
            <table>
              <tbody>
                <tr>
                  <td><label for="#">Medicine-Name : </label></td>
                  <td><input type="text" name="medname" placeholder="Medicine name" required></td>
                </tr>
                <tr>
                  <td><label for="#">Medicine-composition : </label></td>
                  <td><input type="text" name="medcomp" placeholder="Eg: Montelukast 10mg etc" required></td>
                </tr>
                <tr>
                  <td><label for="#">Medicine-Uses : </label></td>
                  <td><input type="text" name="meduse" placeholder="Eg: Allergy etc" required></td>
                </tr>
                <tr>
                  <td><label for="#">Date : </label></td>
                  <td><input type="text" name="meduse" placeholder="Eg: Allergy etc" required></td>
                </tr>
              </tbody>
            </table>
          </div>
          <div>
            <table>
              <tbody>
                <tr>
                  <td><label for="#">Name : </label></td>
                  <td><input type="text" name="fname" placeholder=" name" required></td>
                </tr>
                <tr>
                  <td><label for="#">City : </label></td>
                  <td><input type="text" name="city" placeholder="City" required></td>
                </tr>
                <tr>
                  <td><label for="#">Pincode : </label></td>
                  <td><input type="number" name="pin" required></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <input type="submit" values="Submit" id="btn">
      </form>  
  </div>
<?php

    $sql = "SELECT * FROM postmed";
    $result = mysqli_query($conn, $sql);
?>
    <div class="mansi">
    <table style align="center" border="1px">
        <th>Sno. </th>
        <th>Name</th>
        <th>Medicine Name</th>
        <th>Medicine composition</th>
        <th>Medicine use</th>
        <th>City</th>
        <th>Pin-Code</th>
        <th>Date </th>
     
      
  <?php
    $count = 1;
    while($row=mysqli_fetch_assoc($result))
    {
  ?>
      <tr>
        <td><?php echo $count?></td>
        <td><?php echo $row['fname'];?></td>
        <td><?php echo $row['medname'];?></td>
        <td><?php echo $row['medcomp'];?></td>
        <td><?php echo $row['meduse'];?></td>
        <td><?php echo $row['city'];?></td>
        <td><?php echo $row['pin'];?></td>
        <td><?php echo $row['dt'];?></td>
      </tr> 
    <?php
          $count++;
        }
    ?>
    </table>
    
    

</div>
</body>
</html>