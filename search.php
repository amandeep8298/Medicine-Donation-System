<?php
$server = "localhost";
$name = "root";
$password = "";
$database = "postmed";

$conn = mysqli_connect($server, $name, $password, $database);
if ($conn){
    echo " success";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
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

      .mansi{
     
     
     width:100%;
   }
    table,tr{
     width:100%;
     border:solid;
     border-color:black;
     margin:10px;
     border:1;
   }
  
  tr:hover{
    background-color:pink;
  }
  
  
    </style>
      
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
  <div class="searchbar">
<nav class="navbar navbar-light bg-light">
    <div class="container-fluid">
      <form class="d-flex" action="search.php" method="Post">
        <input class="form-control me-2" type="search" placeholder="Search"  name="search" aria-label="Search" >
        <button class="btn btn-outline-success"name="submit" type="submit">Search</button>
      </form>
    </div>
</div>
  
    <div class="mansi">
    
    <table style align="center" border="1px">
      
        <th>Sno. </th>
        <th>Medicine Name</th>
        <th>Medicine composition</th>
        <th>Medicine use</th>
        <th>City</th>
        <th>Pin-Code</th>
        <th>Date </th>
        <th align="center"> Contact </th>
      
      <?php
      if(isset($_POST['submit']))
      {
        
        $search=mysqli_real_escape_string($conn,$_POST['search']);
        $sql="select * from postmed where medname
        like '%$search%'" ;
        $res=mysqli_query($conn,$sql);
        if(mysqli_num_rows($res)>0){
          while($row=mysqli_fetch_assoc($res))
          {
            ?>
            <tr>
      <td><?php echo $row['Sno.'];?></td>
      <td><?php echo $row['medname'];?></td>
      <td><?php echo $row['medcomp'];?></td>
      <td><?php echo $row['meduse'];?></td>
      <td><?php echo $row['city'];?></td>
      <td><?php echo $row['pin'];?></td>
      <td><?php echo $row['dt'];?></td>
      <td> <input type="button" value="Contact"></td>

    </tr>
    <?php
    
          }
        }else{
          echo "No data found";
        }
      }
      ?>
   </div>
  </nav>
</body>
</html>


