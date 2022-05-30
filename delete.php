<!DOCTYPE html>
<html>
<head>
	<title></title>
<style type="text/css">
	 *{
		margin:0px;
		padding:0px;
		box-sizing: border-box;
	}
	body{
		font-family: sans-serif;
		padding-top: 150px;
		background: lightblue;
        background-image: url('istockphoto-1194077069-612x612.jpg');
            background-position: center;
            background-size: cover;
            font-family: sans-serif;
            margin-top: 40px;
	}
	.main{
		margin: auto;
		width: 50%;
	}
	.main input,button{
		width:75%;
		border:2px solid white;
		border-right:0px;
		font-size: 18px;
		padding:12px;
		background-color: transparent;
		color:black;
	}
	.main input:hover{
		opacity: .8;
	}
	.main button{
		width:25%;
		background-color: green;
		color:blue;
		transition: all 0.3s;
		float: right;
		border-left:0px;
	}
	.main button:hover{
        color:red;
		opacity: .8;
	}  
</style>
</head>
<body>
	<div class="main">
        <form action="delete.php" method="post" autocomplete="off">
		<input type="text" name="t1" placeholder="Enter the FIRID...">
		<button name="s1" >DELETE</button>
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
error_reporting(E_ERROR | E_PARSE);
if(isset($_POST['s1'])){
$id=$_POST['t1'];

$query= "DELETE FROM `criminal` WHERE firid='$id' ";
$query_run=mysqli_query($conn,$query);
if($query_run) {
echo "<script>alert('Record Deleted Successfully')</script>";
}
else{
echo "<script>alert('Record Not Found')</script>";
}
}

?>