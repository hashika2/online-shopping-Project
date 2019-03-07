<?php
$dbserver="localhost";
$user="root";
$pass="";
$db="test";
//$connect=mysqli_connect("localhost","root","","login");
$connect=mysqli_connect($dbserver,$user,$pass,$db);
//mysqli_select_db($connect,$db);

   if(isset($_POST['username'])&& isset($_POST['password'])){

    $username=$_POST['username'];
    $password=$_POST['password'];


    $username=mysqli_real_escape_string($connect,$username);
    $password=mysqli_real_escape_string($connect,$password);

    //$sql="select * from useregister where username='" .$username."AND password=' ".$password."' limit 1";
    $result=mysqli_query($connect,"select * from user where username='$username' and password='$password'") or die("failed to query database ".mysqli_eror());
    //$result=mysqli_query($connect,$sql);
    $row=mysqli_fetch_array($result);
    if($row['username']==$username && $row['password'==$password]){
       echo "you have successfully logged ".$row['username'];
       header('location:Cart2.php');
       exit();
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


    <title>Page Title</title>

    <link rel="stylesheet" type="text/css" media="screen" href="webcss.css">

    <style>
    body{
        background-image:url("img2.jpg");
        width:100%;
        height:100%;
        position:fixed;
        content:'';
        background-position:center center;
        background-repeat:no-repeat;
        background-attachment:fixed;
        background-size:cover;
    }
    .header{
        background-color:brown;
        height:80px;
        margin:20px;
        line-height: 35px;
        text-align: center;
        line-height:60px;

    }
    .frm{
        border:solid black 5px;
        width:600px;
        border-radius:10px;
        margin:100px auto;
        background:#1456;
        height:200px;


    }

    .textinput{
        color:white;
        background:#1456 ;
        font:white;
        padding:5px;
        margin-left:70%;
    }
    body{
        background-color:#1234;
    }
    </style>

</head>
<body>

<!--<div class="well">
<h4>Login</h4>
<form action="include/sign_in.php"method="post">
<div class ="input-group">
<input name="username" type="text" class="form-control" placeholder="Enter username">
<span class ="input-group-btn">
<button name="submit" class="btn btn-default" type="submit">
<span class="glyp"></span>
</button>
</span>
</div>
</form>
</div>-->
<div class ="header">
        <h1><b> login to HASHLANKA </b></h1>

</div>
<form method="post" action="cart_to_huw.php">
   <div class="frm">
        <tr>

            <td><b>Username</b></td>
            <td> <input type="text" name="username" class="textinput"></td>
        </tr>

        <tr>
            <td><b>Password</b></td>
            <td> <input type="password" name="password" class="textinput"></td>
        </tr>
       <!-- <tr>
           <td>Confirm Password</td>
            <td> <input type="password" name="password2" class="textinput"></td>
        </tr>-->
        <tr>
            <td></td>
            <td> <input type="submit" name="login" value="login"> </td>
        </tr>
</div>
</form>

</body>
</html>
