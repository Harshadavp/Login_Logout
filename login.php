<?php
	//$error="";
	$con = mysqli_connect("localhost","phpmyadmin","root","product");
    if ($_SERVER["REQUEST_METHOD"]=="POST") {
    	$myusername = mysqli_real_escape_string($con,$_POST['Username']);
    	$mypassword = mysqli_real_escape_string($con,$_POST['Password']);
		$sql="SELECT id FROM login WHERE username = '$myusername' and password = '$mypassword' ";
    	$result=mysqli_query($con,$sql);
    	$row=mysqli_fetch_assoc($result);
    	$count=mysqli_num_rows($result);
    	if ($count == 1) {
    		session_start();
    		$_SESSION["client"]= $myusername;
    		$_SESSION["clientP"]= rand();
    		header("location:index1.php");
    	}
    	else{
    		echo '<script type="text/javascript">';
			echo "alert('Username and Password is Invalid')";
			echo "</script>";
    	}

    }
?>

<html>
<head>
	<title>Login</title>
</head>
<body>
	<center>
	<h3>Sign In</h3>
	<form action="#" method="post">
		
		<input type="text" placeholder="username" name="Username"><br>
		<input type="password" placeholder="password" name="Password"><br>
		<br><input type="submit" name="login" value="Login">
		
	</form>
	</center>
</body>
</html>