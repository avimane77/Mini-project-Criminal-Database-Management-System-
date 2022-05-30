<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <style type="text/css">
        *{
            margin:0;
            padding:0;
        }
        body{
            background-image: url('./cyber-security-concept-internet-crime-hacker-working-code-network-lock-icon-digital-interface-virtual-screen-dark-148214040.jpg');
            background-position: center;
            background-size: cover;
            font-family: sans-serif;
            margin-top: 40px;
        }
        .regform{
            width: 800px;
            background-color: rgb(0,0,0,o.6);
            margin: auto;
            color: #ffffff;
            padding: 10px 0px 10px 0px;
            text-align: center;
            border-radius: 15px 15px 0px 0px;

        }
        .main{
            background-color: rgb(0,0,0,0.5);
            width: 800px;
            margin:auto;
        }

form{
    padding:10px;

}
#name{
    width: 100%;
    height: 100px;

}
.name{
    margin-left:25px;
    margin-top: 30px;
    width: 125px;
    color:white;
    font-size:18px;
    font-weight:700;

}
.firstname{
    position: relative;
    left: 200px;
    top: -37px;
    line-height: 40px;
    border-radius: 6px;
    padding: 0 22px;
    font-size: 16px;


}
.lastname{
    position: relative;
    left: 417px;
    top: -80px;
    line-height: 40px;
    border-radius: 6px;
    padding: 0 22px;
    font-size: 16px;
    color: #555;
}
.firstlabel{
    position: relative;
    color: #E5E5E5;
    text-transform: capitalize;
    font-size: 14px;
    left: 203px;
    top: -45px;
}
.lastlabel{
    position: relative;
    color: #E5E5E5;
    text-transform: capitalize;
    font-size: 14px;
    left: 175px;
    top: -45px;
}
.company{
    position: relative;
    left: 200px;
    top: -37px;
    line-height: 40px;
    width: 480px;
    border-radius: 6px;
    padding: 0 22px;
    font-size: 16px;
    color: #555;
}
.email{
    position: relative;
    left: 200px;
    top: -37px;
    line-height: 40px;
    width: 480px;
    border-radius: 6px;
    padding: 0 22px;
    font-size: 16px;
    color: #555;
}
.code{
    position: relative;
    left: 200px;
    top: -37px;
    line-height: 40px;
    width: 95px;
    border-radius: 6px;
    padding: 0 22px;
    font-size: 16px;
    color: #555;
}
.number{
    position: relative;
    left: 200px;
    top: -37px;
    line-height: 40px;
    width: 255px;
    border-radius: 6px;
    padding: 0 22px;
    font-size: 16px;
    color: #555;
}
.Area-code{
    position: relative;
    color:#E5E5E5;
    text-transform: capitalize;
    font-size: 16px;
    left: 54px;
    top: -4px;

}
.phone-number{
    position: relative;
    color:#E5E5E5;
    text-transform: capitalize;
    font-size: 16px;
    left: -100px;
    top: -2px;

}
.option{
    position: relative;
    left: 200px;
    top: -37px;
   line-height: 40px;
    width: 532px;
    height: 40px;
    border-radius: 6px;
    padding: 0 22px;
    font-size: 16px;
    color: #555;
    outline: none;
    overflow: hidden;
}
.option option{
    font-size: 20px;
}
#customer{
  margin-left: 25px;
  color: white;
  font-size: 18px;
}
.radio{
    display: inline-block;
    padding-right: 70px;
    font-size: 25px;
    margin-left: 25px;
    margin-top: 15px;
    color:white;
}
.radio input{
    width:20px;
    height: 20px;
    border-radius:50%;
    cursor:pointer;
    outline:none;
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
}
button:hover{
    background-color: #5390f5;
}
a{
    background-color: #3BAF9F;
    display: block;
    margin: 20px 0px 0px 20px;
   
    border-radius: 12px;
    border:2px solid #366473;
    padding: 14px 110px;
    outline:none;
    color:greenyellow;
    cursor:pointer;
    transition:0.25px;
    width: 50px;
    text-align: center;
   text-decoration: none;
}
    </style>
</head>
<body>
    <div class="regform">
        <h1>Registration</h1>
    </div>
    <div class="main">
        <form action="register.php" method="post" autocomplete="off">
            <div id="name">
                <h2 class="name">Name</h2>
                <input class="firstname" type="text" name="fname" id="fname" required ><br>
                <label class="firstlabel">First Name</label>
                <input class="lastname" type="text" name="lname" id="lname" required>
                <label class="lastlabel">last name</label>
            </div>
         <h2 class="name">Police Station name</h2>
         <input class="company" type="text" name="station" id="station" required>
         <h2 class="name">Email</h2>
         <input class="email" type="text" name="email" id="email" required>
         <h2 class="name">Phone</h2>
         <input class="code" type="text" name="areacode" required>
         <label class="Area-code" >Area code</label>
         <input  class="number" type="text" name="phone" id="" required>
         <label class="phone-number">Phone Number</label>

         <h2 class="name">Post</h2>
         <select class="option" name="subject" id="">
         <option  disable="disable" selected="selected"  value="" required>--Choose option</option>
         <option  name="postp" value="Inspector">Inspector</option>
         <option  value="IPS">IPS</option>
         <option value="DGP">DGP</option>
         </select>
         
        <!-- <h2 id="student">A</h2>
         <label class="radio">
             <input class="radio-one" type="radio" checked="checked" name="fg">
             <span class="checkmark"></span>
             yes
             <label class="radio">
                <input class="radio-one" type="radio" checked="checked" name="fg">
                <span class="checkmark"></span>
                no
         </label>
    -->
    <h2 class="name" >Create password</h2>
    <input  class="company" type="password" name="password" id="password" >
    <h2 class="name" >Re_enter password</h2>
    <input  class="company" type="password" >
         <button type="sumbit">Register</button> 
       
        <!-- <a href="ran.html" target="_blank">Sumbit</a> -->
         <!-- <input type="sumbit"> -->

        </form>
    </div>
</body>
</html>

<?php 
        $servername="127.0.0.1:3307";
        $username="root";
        $password="";
        $dbname="pbl1";

        $conn = new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
    die("connection failed : ");

}
error_reporting(E_ERROR | E_PARSE);
$fname =$_POST['fname'];
$lname =$_POST['lname'];
$station =$_POST['station'];
$email =$_POST['email'];
$password =$_POST['password'];


$sql="INSERT INTO `register` (`fname`, `lname`, `station`, `email`, `password`) VALUES ('$fname', '$lname', '$station', '$email', '$password') ";

if($conn->query($sql)==true){
    echo "<script>alert('Registration Success ')</script>";
}
else{
    echo "<script>alert('Registration fails ')</script>";
}

    $conn->close();

?>