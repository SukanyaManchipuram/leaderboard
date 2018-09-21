<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0,shrink">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Baloo+Tammudu|Karla|Libre+Barcode+128+Text" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="/login3.css">
</head>
<body>
	<div class="col-sm-12">
<div class="top">
	 <nav class="navbar navbar-inverse navbar-fixed-top " >
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mybar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href=""><img height="20" id="i1" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcStKF9hZZvT9YjQBrum5fLrv7EKcp3o8ia4Ko-TlhvrPsC0TWVI" class="navbar-brand">
               </a> </div>
            
            <div class="collapse navbar-collapse" id="mybar">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="taskss.html" >
                            <span class="glyphicon glyphicon-user"></span>Tasks
                        </a>
                    </li>
                    <li>
                        <a href="login.php">
                            <span class="glyphicon glyphicon-log-in"></span> Login
                        </a>
                    </li>
                    <li>
                        <a href="reg.php">
                             Register
                        </a>
                    </li>
                </ul>
            </div>
            </div>
        </nav>
	</div>
	<img src="https://www.barcodesinc.com/generator/image.php?code=REGISTER&style=197&type=C128B&width=154&height=50&xres=1&font=3" alt="REGISTER" top="30">
	<div class="form">
<form method="post" action="#" style="position: absolute; top:130px; left:150px;"><!-- Registration form -->
	<label for="fname">First Name </label> <br>
	<input type="text" name="fname" class="form-control" style="width: 870px;"> <br>
	<label for="lname">Last Name </label> <br>
	<input type="text" name="lname" class="form-control"> <br>
	<label for="em">Email </label> <br>
	<input type="email" name="em" class="form-control" style="width: 870px;"> <br>
	<label for="phone">Phone </label> <br>
	<input type="text" name="phone" class="form-control" style="width: 870px;"> <br>
	<input type="submit" name="regbtn" class="btn btn-success" value="Register">
</form>
<?php 
if(isset($_POST["regbtn"])){//Checking if register button is pressed
	$name=$_POST["fname"];
	$lname=$_POST["lname"];
	$email=$_POST["em"];
	$pn=$_POST["phone"];
	$ps=md5($pn);//encrypting and storing password for security
	$conn=new mysqli("localhost","root","","leaderboard");//connecting to mysql database
	$sql="insert into reg(fname,lname,email,phone) values('$name','$lname','$email','$ps');";//inserting values into reg table
	$conn->query($sql);
}
?>
</div>
</div>
</body>
</html>