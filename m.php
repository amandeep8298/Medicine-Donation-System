<?php
$server = "localhost";
$name = "root";
$password = "";
$database = "postmed";

$conn = mysqli_connect($server, $name, $password, $database);
if ($conn){
    echo " success";
}
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
			echo $row['sno.'];
			echo "<br/>";
		}
	}else{
		echo "No data found";
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
  


  <nav class="navbar navbar-light bg-light">
    <div class="container-fluid">
      <form class="d-flex" action="search.php" method="Post">
        <input class="form-control me-2" type="search" placeholder="Search"  name="search" aria-label="Search" >
        <button class="btn btn-outline-success"name="submit" type="submit">Search</button>
      </form>
    </div>
    
   
  </nav>
</body>
</html>


