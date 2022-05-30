<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <style>
        body{
            margin: 0;
            padding: 0;
            background: url('./istockphoto-638149354-170667a.jpg') ;
            background-size: cover;
            background-position: center;
            font-family: sans-serif;
        }
        .loginbox{
            width: 420px;
            height: 420px;
            background: #000;
            color: #fff;
            top: 50%;
            left: 50%;
            position: absolute;
            transform: translate(-50%,-50%);
            box-sizing: border-box;
            padding: 70px 30px;
        }
        .avtar{
            width: 100px;
            height: 100px;
            border-radius: 50%;
            position: absolute;
            top: -50px;
            left: calc(50% - 50px);

        }
        h1{
            margin: 0;
            padding: 0 0 20px;
            text-align: center;
            font-size: 22px;
        }
        .loginbox p{
            margin: 0;
            padding : 0;
            font-weight: bold;

        }
        .loginbox input{
            width: 100%;
            margin-bottom: 20px;
        }
        .loginbox input[type="text"], input[type="password"]{
            border: none;
            border-bottom: 1px solid #fff;
            background: transparent;
            outline: none;
            height: 40px;
            color: #fff;
            font-size: 16px;

        }
        .loginbox input[type="submit"]
{
    border: none;
    outline: none;
    height: 40px;
    background: #fb2525;
    color: #fff;
    font-size: 18px;
    border-radius: 20px;
    text-align: center;
}  
 .loginbox input[type="sub"]
{
    border: none;
    outline: none;
    height: 30px;
    background: #fb2525;
    color: #fff;
    font-size: 10px;
    border-radius: 10px;
    text-align: left;
}  
.loginbox input[type="submit"]:hover{
    cursor: pointer;
    background: #ffc107;
    color: #000;
   
}
.loginbox a{
    text-decoration: none;
    font-size: 12px;
    line-height: 20px;
    color: darkgrey;
}
.loginbox a:hover{
   color: #ffc107;
}
button{
    background-color: #3BAF9F;
    display: block;
    margin: 20px 0px 0px 20px;
    text-align: center;
    border-radius: 12px;
    border:2px solid #366473;
    padding: 14px 110px;
    outline:none;
    color:white;
    cursor:pointer;
    transition:0.25px;
   font-size:15px;
}
button:hover{
    background-color: #5390f5;
}
.login-con{
   
    width: 700px;
    display: flex;
    margin: auto;
    align-items: center;
    justify-content: center;

}
.login-con, a,.btn{
    width: 900px;
    text-align: center;
    height: 20px;
    box-sizing: border-box;
    padding: 34px;
    
    }

.login-title{
    text-align: center; 
    
}
.loginbox{
    margin-top: 70px;
}
.link1{
    text-decoration: none;
}
</style>
</head>
<body>
    <h2 class="login-title"></h2>
    <div class="login-con">
        <!-- <a href="login.php">
            <button class="btn" type="sumbit">Police Officer</button> 
            </a> 
             <a href="login1.php">
            <button class="btn" type="sumbit">Student</button> 
            </a> -->
           </a><button class="btn" type="sumbit"> <a class="link1" href="login.php" >POLICE OFFICER</a></button></a>
            <button class="btn" type="sumbit"> <a class="link1" href="login1.php">STUDENT</a></button>
    </div>   

    <div class="loginbox">
        <img src="./avtar.png"  class="avtar" alt="" autocomplete="off">
        <h1>Login Here</h1>
         
        <form action="login.php" method="post" autocomplete="off">
            <p>User Id</p>
            <input type="text" name="uname" id="email" placeholder="Enter User Id" required>
            <p>Password</p>
            
            <input type="password" name="password" id="password" class="fa fa-eye" placeholder="Enter Password" required>
            
           
            <!-- <a href="login1.html" target="_blank"> 
                <input type="sumbit"  name="submit" value="Login"> 
                <button type="sumbit">login</button> -->
              
             <input type="submit" a  name="submit" value="login" class="login" > 
          
            <a href="register.php">Don't have account</a> 
        </form>
    </div>
</body>
</html>

<?php 
        $servername="127.0.0.1:3307";
        $username="root";
        $password="";
        $dbname="pbl1";

        $conn = mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
    die("connection failed  ".mysqli_error($conn));

}
if(isset($_POST['submit'])){
    $uname=$_POST['uname'];
    $password=$_POST['password'];

    $sql="select * from register where email='$uname' and password='$password' ";
    $que=mysqli_query($conn,$sql);
    if(mysqli_num_rows($que)>0){
        echo "<script>alert('Login Success ')</script>";
        echo "<script>window.open('page.php','_self')</script>";
    }    
    else{
        echo "<script>alert('Wrong Username or password')</script>";
    }
}



?>

