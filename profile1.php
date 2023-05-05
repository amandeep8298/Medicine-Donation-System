<?php
  include "partials/_dbconnect.php";
  $id = $_GET['id'];
  $sql= "select * from sing where sno = {$id}";
  $result = mysqli_query($conn, $sql) or die(mysqli_error($conn)."profile error");
  $row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">
<!-- Bootstrap CSS -->
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
<!-- Font Awesome CSS -->
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css'>
<style>
body {
    background: #67B26F;  /* fallback for old browsers */
    background: -webkit-linear-gradient(to right, #4ca2cd, #67B26F);  /* Chrome 10-25, Safari 5.1-6 */
    background: linear-gradient(to right, #4ca2cd, #67B26F); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    padding: 0;
    margin: 0;
    font-family: 'Lato', sans-serif;
    color: #000;
}
.student-profile .card {
    border-radius: 10px;
}
.student-profile .card .card-header .profile_img {
    width: 150px;
    height: 150px;
    object-fit: cover;
    margin: 10px auto;
    border: 10px solid #ccc;
    border-radius: 50%;
}
.student-profile .card h3 {
    font-size: 20px;
    font-weight: 700;
}
.student-profile .card p {
    font-size: 16px;
    color: #000;
}
.student-profile .table th,
.student-profile .table td {
    font-size: 14px;
    padding: 5px 10px;
    color: #000;
}
</style>
</head>
<body>
    <div class="student-profile py-4">
        <div class="container">
          <div class="row">
            <div class="col-lg-4">
              <div class="card shadow-sm">
                <div class="card-header bg-transparent text-center">
                  <img class="profile_img" src="download.jpg" alt="student dp">
                  <h3><?php echo $row['fname'];  ?></h3>
                </div>
                <div class="card-body">
                  <p class="mb-0"><strong class="pr-1">Name :</strong><?php echo $row['fname'];  ?></p>
                  <p class="mb-0"><strong class="pr-1">Who:</strong><?php echo $row['who'];  ?></p>
                </div>
              </div>
            </div>
            <div class="col-lg-8">
              <div class="card shadow-sm">
                <div class="card-header bg-transparent border-0">
                  <h3 class="mb-0"><i class="far fa-clone pr-1"></i>General Information</h3>
                </div>
                <div class="card-body pt-0">
                  <table class="table table-bordered">
                    <tr>
                      <th width="30%">Name</th>
                      <td width="2%">:</td>
                      <td><?php echo $row['fname'];  ?></td>
                    </tr>
                    <tr>
                      <th width="30%">Mobile No.	</th>
                      <td width="2%">:</td>
                      <td><?php echo $row['phone'];  ?></td>
                    </tr>
                    <tr>
                      <th width="30%">Email Id</th>
                      <td width="2%">:</td>
                      <td><?php echo $row['mail'];  ?></td>
                    </tr>
                    <tr>
                      <th width="30%">Address</th>
                      <td width="2%">:</td>
                      <td><?php echo $row['Address1'];  ?></td>
                    </tr>
                    <tr>
                      <th width="30%">Social Media </th>
                      <td width="2%">:</td>
                      <td>instagram</td>
                    </tr>
                    <tr>
                        <th width="30%">Who </th>
                      <td width="2%">:</td>
                      <td><?php echo $row['who'];  ?></td>
                    </tr>
                  </table>
                </div>
              </div>
                <div style="height: 26px"></div>
              <div class="card shadow-sm">
                <div class="card-header bg-transparent border-0">
                  <h3 class="mb-0"><i class="far fa-clone pr-1"></i>Other Information</h3>
                </div>
                <div class="card-body pt-0">
                <p> <?php 
                    $sql= "SELECT * FROM postmed WHERE fname = '{$row['fname']}' ";
                    $result = mysqli_query($conn, $sql);
                  ?>
                   <div class="mansi">
    <table style align="center" border="1px">
        <th>Sno. </th>
        <th>Medicine Name</th>
        <th>Medicine composition</th>
        <th>Medicine use</th>
        <th>City</th>
        <th>Pin-Code</th>
        <th>Date </th>
        
        <?php
  while($row1=mysqli_fetch_assoc($result))
  {
    ?>
    <tr>
      <td><?php echo $row1['sno.'];?></td>
      <td><?php echo $row1['medname'];?></td>
      <td><?php echo $row1['medcomp'];?></td>
      <td><?php echo $row1['meduse'];?></td>
      <td><?php echo $row1['city'];?></td>
      <td><?php echo $row1['pin'];?></td>
      <td><?php echo $row1['dt'];?></td>
      

    </tr> 
    <?php
  }
  ?>
    </table>
    
    

</div>
                
                
                </p>
              </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    
</body>
</html>