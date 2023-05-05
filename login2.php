<?php
$login=false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'partials/_dbconnect.php';
    $fname = $_POST["fname"];
    $password = $_POST["password"]; 
    $sql = "Select * from sing where fname='$fname' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if ($num == 1){
        $login = true;
        session_start();
        $_SESSION['fname'] = $fname;
        header("location: http:/MajorProject2/post.php");
    } 
    else{
        $showError = "Invalid Credentials";
    }
}  
?>


<!DOCTYPE html>    
<html>    
<head>    
    <title>Login Form</title>    
    <div class="topnav">
        <a class="active" href="index.html">Home</a>
       
        <a href="contact.html">Contact Us</a>
        <a href="index.html">Logout</a>
      </div>
    <style>
        body  
        {  
            background-image: url(https://www.msm.edu/online/makingmedicines/images/makingmedicines784.jpg);
            margin: 0;  
            padding: 0;  
            background-color:#6abadeba;  
            font-family: 'Arial';  
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
input[type="password"]{
    width: 300px;
    height: 30px;
}
input[type="submit"]{
        background-color: rgb(53, 195, 120);
        color: rgb(77, 202, 104);
        padding: 1px 1px;
        border: none;
        /* border-radius: 4px; */
        /* border-radius: 10px 10px 10px; */
        border-radius: 10px 100px / 120px;
        cursor: pointer;
        width: 0%;
        margin: 10px 0px 1px;
    }
    input[type="submit"]:hover{
        background-color: rgba(131, 212, 106, 0.767);
    }
        .login{  
                width: 300px;  
                overflow: hidden;  
                margin: auto;  
                margin: 50 20 0 450px;  
                padding: 80px; 
                margin-top:80px;
                background: #385c72;  
                border-radius: 15px ;  
                  
        }  
        h2{  
            text-align: center;  
            color: white;  
            
        }  
        label{  
            color: #08ffd1;  
            font-size: 17px;  
        }  
        #name{  
            width: 300px;  
            height: 30px;  
            border: none;  
            border-radius: 3px;  
            padding-left: 8px;  
        }  
        #password{  
            width: 300px;  
            height: 30px;  
            border: none;  
            border-radius: 3px;  
            padding-left: 8px;  
              
        }  
        #log{  
            width: 300px;  
            height: 30px;  
            border: none;  
            border-radius: 17px;  
            padding-left: 7px;  
            color: rgb(14, 14, 22);  
          
        }  
        span{  
            color: white;  
            font-size: 17px;  
        }  
        a{  
            float: right;  
            color: rgb(14, 12, 12);
        }  </style>  
</head>    
<body>  
    <div class="login">   
    <h2> LOGIN </h2><br>  
        <form id="login" method="post" action="<?php $_SERVER['PHP_SELF'];?>">      
        <input type="text" name="fname" id="name" placeholder="Username" required>    
        <br><br>
        <div>   
        <input type="Password" name="password" id="password" placeholder="Password" minlength="6" maxlength="6" required>    
        </div>
        <br><br>   
        <i class="fas-fas-lock" onclick= <a  href="login2.php"></a></i> 
        <input type="submit" name="log" id="log" value="Log In" >       
        <br><br>    
        <input type="checkbox" id="check">    
        <span>Remember me</span>    
        <div>
            <a href="forgot.html">Forgot Password?</a>
        </div>  
            
    </form>     
</div>  
     <script>
         function show()
         {
             var paswrd=document.getElementById('password')
             var icon=document.querySelector('.fas')
             if(password.type === "password")
             {
                 password.type="text";
                 password.style.marginTop="20px";
                 icon.style.color="#7f2092";
             }else
             {
                 password.type="password";
                 icon.style.color="grey";
             }
         }
         show();
     </script>   
</body>    
</html>     