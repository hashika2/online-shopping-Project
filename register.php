<?php
	$username=filter_input(INPUT_POST,'username');
	$email=filter_input(INPUT_POST,'email');
	$password=filter_input(INPUT_POST,'password');
	//$hashed_password=hash(' ',$password); doesn't work hass password

	$host="localhost";
	$dbname1="root";
	$dbpassword="";
	$dbname="testin";

	$conn=new mysqli($host,$dbname1,$dbpassword,$dbname);

	if(mysqli_connect_error()){
		die('connect error('.mysqli_connect_errno().') '.mysqli_connect_error());
	}
	else{
		$sql="INSERT INTO user1(username,email,password) VALUES('$username','$email','$password')";

		if($conn->query($sql)===TRUE){
			$message= "new record inserted succsesful";
			echo "<script type='text/javascript'>alert('$message');</script>";
			header('Location:shoppingnew.php');
		}
		else{
			echo "error: ".$sql."<br>".$conn->error;
		}
		$conn->close();
	}
?>

<!DOCTYPE html>
<html>
<head>

    <title><img src="Ca.PNG " height="60px" width="150px">Registration login and logout</title>
    <link href="style.css">
    <style>
    body{
	margin:0;
	padding:0;
	background-image:url(bg2.jpg);
	width: 100%;

	background-size: cover;
	
	font-family: sans-serif;
}
.header h1{
    font-size:50px;
    margin-top:50px;
    background-color:brown;
}
.loginbox{
	width: 320px;
	height: 500px;
	background:#000;
	color:#fff;
	top: 0%;
	left: 50%;
	position: absolute;
	transform: translate(-50%,50%);
	box-sizing: border-box;
	padding: 70px 30px
}
.avatar{
	width: 100px;
	height: 100px;
	border-radius: 50%;
	position: absolute;
	top: -50px;
	left: calc(50%-50px); 

}
h1{
	margin:0;
	padding:0 0 20px;
	text-align:center;
	font-size: 22px;
}
.loginbox p{
	margin:0;
	padding: 0;
	font-weight: bold;
}

.loginbox input{
	width: 100%;
	margin-bottom: 20px;

}
.loginbox input[ type="text"],input[type="password"]{
	border: none;
	border-bottom: 1px solid #fff;
	background: transparent;
	outline: none;
	height: 40px;
	color: #fff;
	font-size: 16px

}
.loginbox input[type="submit"]{

	border:none;
	outline: none;
	height: 40px;
	background:#fb2525;
	color:#fff;
	font-size: 18px;
	border-radius: 20px;
}
.loginbox input[type="submit"]:hover{
	cursor: pointer;
	background:#ffc107;
	color: #000;
}
.loginbox a{
	text-decoration: none;
	font-size:12px;
	line-height: 20px;
	color:darkgrey;
}
.loginbox a:hover{
	color:#ffc107;
}
.header h1{
    margin-top:0px;
    }
       </style>
</head>
<body>
 
    <div class ="header">
    <h1>Registration <a href="shoppingnew.php"><span>Hash</span>Lanka</a></h1>
</div>
<div class="loginbox">
		
		<h1>Login Here</h1>
		<form action ="register.php" method="post">
			<p>username</p>
			<input type="text" name="username" placeholder="username" required>
      <p>email</p>
      <input type="text" name="email" placeholder="email" required>
     
			<p>password</p>
			<input type="password" name="password" placeholder="password" required>
			<input type="submit" name="" value="Login">
			<a href="">Lost your password?</a><br>
			<a href=""> Don't have an account?</a>
		</form>
</div>

</body>
</html>
