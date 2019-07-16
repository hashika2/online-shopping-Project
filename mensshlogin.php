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

 
    $result=mysqli_query($connect,"select * from user where username='$username' and password='$password'") or die("failed to query database ".mysqli_eror());
  
    $row=mysqli_fetch_array($result);
     if(mysqli_num_rows($result)>0)
         echo 'username already exit';
    if($row['username']==$username && $row['password']==$password){
       $message="you have successfully logged ".$row['username'];
         echo "<script type='text/javascript'>alert('$message');</script>";

       header('location:mensshoes.php');
         echo'<script>alert("Item Already Added")</script>';
    }
    else{
        echo'<script>alert("Enter Correct Username or Password")</script>';
    }
  }
   


?>

 <!DOCTYPE html>
<html>
<head>


    <title>Page Title</title>

    <link rel="stylesheet" type="text/css" media="screen" href="webcss.css">
    <link rel="stylesheet" type="text/css" media="screen" href="login.css">

    <style>
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
		<form action="mensshlogin.php" method="post">
			<p>username</p>
			<input type="text" name="username" placeholder="username"required>
            <p>password</p>
			<input type="password" name="password" placeholder="password"required>
			<input type="submit" name="" value="Login">
			<a href="">Lost your password?</a><br>
			<a href=""> Don't have an account?</a>
		</form>
	</div>

</body>
</html>
