

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <?php include 'links.php'; ?>

    <style>
        *{ margin:0 ; padding :0; box-sizing: border-box;font font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;}
        .main-div{
            width: 100%; height:100vh;
            display: flex;
            flex-direction:column;
            justify-content:center;
            align-items: center;
        }
        .center-div{
            width: 90%;
            height : 80vh;
            background : -webkit-linear-gradient(left,#5DADE2,#00c6ff);
            padding: 20px 0 0 0;
            box-shadow: 0 10px 20px 0 rgba(0,0,0,03);
            border-radius:10px;

        }
        h1{
            font-size: 18px;
            color: #000;
            text-align: center;
            margin-top: -20px;
            margin-bottom:20px;
        }
        table{
            border-collapse:collapse;
            background-color: #fff;
            box-shadow: 0 10px 20px 0 rgba(0,0,0,03);
            border-radius: 10px;
            margin:auto;


        }
        th,td{
            border:1px solid #f2f2f2;
            padding: 8px 30px;
            text-align:center;
            color:grey;
        }
        th{
            text-transform: uppercase;
            font-weight:500;

        }
        td{
            font-size:13px; }

        .email-style{
            font-size: 14px;
            color: grey;
            display: inline-block;
            background: #f2f2f2;
            -webkit-border-radius:2px;
            -moz-border-radius:2px;
            border-radius: 2px;
            line-height:30px;
            padding: 0 14px;
        }
        .post-class{
            text-transform: uppercase;
        }
        .fa-edit{ color: #63c76a;}
        .fa-trash{ color: #ff0000;}
        a{
            text-decoration:none;
            display: flex;
            justify-content: center;
        }
            
        }
    </style>
   
</head>
<body>
    <div class="main-div" >
        <h1>List of Criminals</h1>
        <div class="center-div" >
            <div class="table-responsive" > 
                <table>
                    <thead>
                        <tr>
                            <th>police station name </th>
                            <th>name </th>
                            <th>complaint type </th>
                            <th>Address</th>
                            <th>City</th>
                            <th>Postal code</th>
                            <th>Date</th>
                            <th>Phone number</th>
                            <th>Email Id</th>
                            <th>Complaint</th>
                            <th>FIR Id</th>
							
                           <!-- <th colspan="2" >Operation</th> -->
                        </tr>
                    </thead>
                    <tbody>
                    <?php

$servername="127.0.0.1:3307";
$username="root";
$password="";
$dbname="pbl1";

$conn = mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
die("connection failed  ".mysqli_error($conn));

}

$selectquery ="select * from criminal";
$query = mysqli_query($conn,$selectquery);
$nums= mysqli_num_rows($query);

while($res = mysqli_fetch_array($query)){ 
  ?>

    <tr>
                            <td><?php echo $res['station']; ?> </td>
                            <td><?php echo $res['name']; ?></td>
                            <td><?php echo $res['complainttype']; ?></td>
                            <td><?php echo $res['address']; ?></td>
                            <td><?php echo $res['city']; ?></td>
                            <td><?php echo $res['postalcode']; ?></td>
                            <td><?php echo $res['date']; ?></td>
                            <td><?php echo $res['phoneno']; ?></td>
                            <td><?php echo $res['email']; ?></td>
                            <td><?php echo $res['complaint']; ?></td>
                            <td><?php echo $res['firid']; ?></td>
							
                           <!-- <td><i><i class="fa fa-edit" aria-hidden="true"></i></i></td>
                            <td><i><i class="fa fa-trash" aria-hidden="true"></i></i></td> -->
                        </tr>
    
<?php
}             // array to store row data
?>






                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
</body>
</html>