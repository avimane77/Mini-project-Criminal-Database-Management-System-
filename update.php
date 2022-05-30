<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Add FIR</title>
    <style type="text/css">
        *{
            margin:0;
            padding:0;
        }
        body{
            background-image:url("update.jpg");
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
            background-color: rgb(25, 182, 161);
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
    color:rgb(12, 12, 12);
    font-size:18px;
    font-weight:700;

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
  color: rgb(202, 23, 23);
  font-size: 18px;
}
.radio{
    display: inline-block;
    padding-right: 70px;
    font-size: 25px;
    margin-left: 25px;
    margin-top: 15px;
    color:rgb(226, 21, 21);
}
.radio input{
    width:20px;
    height: 20px;
    border-radius:50%;
    cursor:pointer;
    outline:none;
}
button{
    background-color: #543baf;
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
    background-color: #2513e9;
    display: block;
    margin: 20px 0px 0px 20px;
   
    border-radius: 12px;
    border:2px solid #366473;
    padding: 14px 110px;
    outline:none;
    color:rgb(225, 221, 211);
    cursor:pointer;
    transition:0.25px;
    width: 50px;
    text-align: center;
   text-decoration: none;
}
h1{
    text-align: center;
    
}

    </style>
</head>
<body>
    <div class="regform">
        
    </div>
    
    <div class="main">
        <form action="update.php" method="post" autocomplete="off">
        <h2 class="name">FIR id</h2>
         <input class="company" type="text" name="firid" required>
         <h2 class="name">Police Station name</h2>
         <input class="company" type="text" name="station" required>
         <h2 class="name">Name</h2>
         <input class="email" type="text" name="name" required>
         

          <h2 class="name">Complaint Type</h2>
         <!--<select class="option" name="subject" id="">
         <option  disable="disable" selected="selected" value="" required>--Choose option</option>
         <option value="subject 1" name="type">MURDER</option>
         <option value="subject 2"  name="type">ROBBERY</option>
         <option value="subject 3" name="type">MISSING PERSON</option>
         <option value="subject 4" name="type">OTHER</option> -->
         <input class="company" type="text" name="type">
         

         </select>

         <h2 class="name">Address</h2>
         <input class="company" type="text" name="address" required>
         <h2 class="name">City</h2>
         <input class="company" type="text" name="city" required>
         <h2 class="name">Postal Code</h2>
         <input class="company" type="text" name="postalcode" required>
         <h2 class="name">Date</h2>
         <input class="company" type="date" name="date" required>
         <h2 class="name">Phone number</h2>
         <input class="company" type="text" name="phone" required>
         <h2 class="name">Email-id</h2>
         <input class="company" type="text" name="email" required>
         <h2 class="name">Your Complaint</h2>
         <input class="company" type="text" name="complaint" required>
         
         

         
         
         
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
            <!-- <button type="sumbit">Register</button> -->
       
            <button type="sumbit" name="update">Update</button> 

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
if(isset($_POST['update'])){
$firid=$_POST['firid'];

$sql=" UPDATE `criminal` SET firid='$_POST[firid]',station='$_POST[station]',name ='$_POST[name]',complainttype='$_POST[type]',address='$_POST[address]',city='$_POST[city]',postalcode='$_POST[$postalcode]',date='$_POST[date]',phoneno='$_POST[phone]',email='$_POST[email]',complaint='$_POST[complaint]' where firid='$_POST[firid]' ";
$query_run=mysqli_query($conn,$sql);
if($query_run){
    echo "<script>alert('FIR updated successfully ')</script>";

}
else{
    echo "<script>alert('System fails ')</script>";
}

    $conn->close();
}
?>

$stationname =$_POST['station'];
$name =$_POST['name'];
$type =$_POST['type'];
$address=$_POST['address'];
$city=$_POST['city'];
$postalcode=$_POST['postalcode'];
$date=$_POST['date'];
$phone =$_POST['phone'];
$email =$_POST['email'];
$complaint =$_POST['complaint'];