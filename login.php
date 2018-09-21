<!DOCTYPE html>
<html>
<head>
	<?php session_start() ?>
	<title>Login</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Baloo+Tammudu|Karla|Libre+Barcode+128+Text" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="login3.css">
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
	<h3>Login</h3>
<div class="form">
<form method="post" action="" style="position: absolute; top:130px; left:150px;"><!--Login form -->
	<label for="em">Enter your email address </label><br>
	<input type="email" name="em" class="form-control" style="width: 870px;"> <br>
	<label for="ps">Enter your password </label><br>
	<input type="password" name="ps" class="form-control" > <br>
	<input type="submit" name="login" class="btn btn-success" value="Login">
</form>
</div>
<?php
if(isset($_POST["login"])){ //Checking if login button is pressed
	if(isset($_SESSION["en"])){//Checking if session is set 
	echo "<script> alert('Please Login to Continue');</script>";
}
else{
	$em=$_POST["em"];
	$pass=$_POST["ps"];
	$ps=md5($pass);
	$conn=new mysqli("localhost","root","","leader");
	$sql="select * from reg where email='$em' and phone='$ps'";//checking if user is registered
	$res=$conn->query($sql);
	$row=$res->fetch_assoc();
	echo $res->num_rows;
	if($res->num_rows>0){
		$_SESSION["em"]=$em;
		header("Location:leaderboard.php");
	}
	else{
		echo"<script> alert('Unauthorised User'); </script>";//if not registered unauthorised user
	}
}
}
?>
</div>
</body>
</html>