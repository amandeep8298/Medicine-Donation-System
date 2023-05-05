<?php
$showAlert = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $servername="localhost";
    $username="root";
    $password="";
    $db="postmed";
    $medname=$_POST["medname"];
    $medcomp=$_POST["medcomp"];
    $meduse=$_POST["meduse"];
    $city=$_POST["city"];
    $pin=$_POST["pin"];
    

    $conn=mysqli_connect($servername,$username,$password,$db);
    if($conn){
        echo"successfully connect";
    }
    $sql="INSERT INTO `postmed` ( `medname`, `medcomp`, `meduse`, `city`, `pin`, `dt`) 
    VALUES ('$medname', '$medcomp', '$meduse', '$city', '$pin', current_timestamp())";
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
    <meta http-equiv="refresh" content="30;url=http://localhost/MajorProject2/Post.php"/>
    <title>Post your medicine</title>

    


    <style>
      body {
            background: #44A08D;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #093637, #44A08D);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #093637, #44A08D); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

            font-family: "Gill Sans", sans-serif;
            margin: 10px 30px;
            font-size: 17px;
            padding: 8px;
            width: 95%;
        }

        .topnav 
        {
          overflow: hidden;
          background-color: #333;
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
        .container{
          background: #4CA1AF;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #C4E0E5, #4CA1AF);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #C4E0E5, #4CA1AF); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

            background-color: rgb(247, 253, 255);
            padding: 5px 40px 15px 90px;
            border: 3px solid rgb(77, 74, 68);
            border-radius: 4px;
            border-style: inset;
            overflow:hidden;
            margin: 2% 0% 30% 0%;
        }
        .citypin{
          
          padding-left: 200px;
          word-wrap: initial;
      word-spacing: 20px;
        }
        .area2{
          margin-left:-65px;
         
      margin-top: 10px;
        }
        #pincode
        {border: 3px solid rgb(65, 102, 114);
        border-style: solid;
        border-radius: 5px;
        width: 15%;
        margin: 10px 0px 2px 2px;
        }
        .note{
        color:red;
        padding-left:500px;
    }
    .text{
      text-align: center;
    }
    .nm{
      word-wrap: initial;
      word-spacing: 20px;

    }
    .submit{
      margin-left: 40%;
    }
    input[type="submit"]:hover{
        background-color: rgba(73, 158, 154, 0.767);
        border-radius: 20px;
    }
    textarea{
        width: 15%;
        padding: 2px;
        border: 3px solid rgb(65, 102, 114);
        border-style: solid;
        border-radius: 5px;
        margin: 12px 8px -7px 0px;
    }
    p{
      color: black;
      font-size: 20px;
    }
    .area{
      padding: 5px;
      margin-top: 10px;
     
     
    }
   .mansi{
     margin-top:-350px;
     padding-top:10px;
     width:100%;
   }
   table,tr{
     width:100%;
     border:solid;
     border-color:black;
   }
   tr:nth-child(even) {
  background-color: #D6EEEE;
}
  tr:hover{
    background-color:pink;
  }
    </style>
</head>


<body>
<?php
    if($showAlert){
    echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> Your Post have been  posted 
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div> ';
    }
    if($showError){
    echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> '. $showError.'
        <b
        utton type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div> ';
    }

    ?>




<div class="topnav">
        <a class="active" href="#home">Home</a>
        <a href="#news">News</a>
        <a href="#contact">Contact</a>
        <a href="#about">About</a>
      </div>



      <marquee style="color: red; font-size: 20px;">Chill! everything will be good .hope you & your family is okay . </marquee>
 <div class="container">
    <form action="/project/post.php" method ="POST">
            <label for="">
                <div class="text">
                    <h2>POST MEDICINE</h2>
                </div>
            </label>
            <h6 class="required"></h6>
            <p class="nm">Medicine-Name :<textarea  class="area"placeholder="Medicine name" id="name" name="medname" width="50%"
                    rows="1" required></textarea>
            Medicine-composition :<textarea class="area"placeholder="Eg: Montelukast 10mg etc" name="medcomp" id="composition"width="50%" cols="30"
                    rows="1" required></textarea>
          Medicine-Uses : <textarea class="area2"placeholder="Eg: Allergy etc" name="meduse" id="meduse"width="50%" cols="30"
                    rows="1" required></textarea></p>
            <p class="citypin"> City :<textarea class="area" placeholder="City" id="city" name="city" width="50%" 
                    rows="1" required></textarea>
            Pincode : <input type="number" name="pin" id="pincode">
          image:<input type="file" name="file" >
          
          </p>
            <p class="note"> Note:You can edit only Bhopal here</p>
            <input class="submit" type="submit" value="Post" >
            
  </div>
  <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "postmed";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}  

$sql = "SELECT * FROM postmed";
$result = mysqli_query($conn, $sql);
$num=mysqli_num_rows($result);

?>
    <div class="mansi">
    
    <table style align="center" border="1px">
      <tr>
        <th>Sno. </th>
        <th>Medicine Name</th>
        <th>Medicine composition</th>
        <th>Medicine use</th>
        <th>City</th>
        <th>Pin-Code</th>
        <th>Date </th>
      </tr>
      
  <?php
  while($row=mysqli_fetch_assoc($result))
  {
    ?>
    <tr>
      <td><?php echo $row['sno.'];?></td>
      <td><?php echo $row['medname'];?></td>
      <td><?php echo $row['medcomp'];?></td>
      <td><?php echo $row['meduse'];?></td>
      <td><?php echo $row['city'];?></td>
      <td><?php echo $row['pin'];?></td>
      <td><?php echo $row['dt'];?></td>
    </tr>
    <?php
  }
  ?>
  
    </table>


</div>
</body>
</html>

