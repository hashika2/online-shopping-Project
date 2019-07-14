<?php
$dbserver="localhost";
$user="root";
$pass="";
$db="test";

$connect=mysqli_connect($dbserver,$user,$pass,$db);

  $error=array( );
   if(isset($_POST['username'])){
        if(empty(trim($_POST['username']))){
        $error[]='username is requered ';
      }
    $username=$_POST['username'];
    $password=$_POST['password'];


    $username=mysqli_real_escape_string($connect,$username);
    $password=mysqli_real_escape_string($connect,$password);

    //$sql="select * from useregister where username='" .$username."AND password=' ".$password."' limit 1";
    $result=mysqli_query($connect,"select * from user where username='$username' and password='$password'") or die("failed to query database ".mysqli_eror());
    //$result=mysqli_query($connect,$sql);
    $row=mysqli_fetch_array($result);
    if(mysqli_num_rows>0)
    echo 'username already exit';
    if($row['username']==$username && $row['password'==$password]){
       $message="you have successfully logged ".$row['username'];
         echo "<script type='text/javascript'>alert('$message');</script>";

       header('location:shoppingBag.php');
         echo'<script>alert("Item Already Added")</script>';
    }
    else{
        echo "you are not login";
    }
  }
   


?>

 <!DOCTYPE html>
<html>
<head>


    <title>Sign in</title>

    <link rel="stylesheet" type="text/css" media="screen" href="webcss.css">

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
	height: 400px;
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
    </style>

</head>
<body>


<div class ="header">
        <h1><b> Sign to <a href="shoppingnew.php">HASHLANKA</a> </b></h1>

</div>
<?php
  if(!empty($error)){
    echo 'there was an error on your form';
  }
 ?>
<div class="loginbox">
		
		<h2>Sign In Here</h2>
		<form action="shoppingbaglogin.php" method="post">
			<p>username</p>
			<input type="text" name="username" placeholder="username">
            <p>password</p>
			<input type="password" name="password" placeholder="password">
			<input type="submit" name="" value="Login">
			<a href="">Lost your password?</a><br>
			<a href=""> Don't have an account?</a>
		</form>
	</div>

</body>
</html>
