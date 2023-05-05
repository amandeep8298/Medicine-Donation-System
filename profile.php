<?php
include 'partials/_dbconnect.php';
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .wrapper
        {
            height: 400px;
            width:400px;
            margin:0 auto;
            background-color: blue;
        }
    </style>
</head>
<body style ="background-color:#004528;">
    <div class="container">
        <form action="" method="post">
            <button class="btn btn-default" style="float: right;width :70px;" name="submit1">Edit</button>
        </form>
        <div class="wrapper">
            <?php
                $sql=mysqli_query($database,"SELECT * FROM sing where name='_SESSION[login_user]'; ");
            ?> 
        </div>
            <h2> Profile</h2>

    </div>
</body>
</html>