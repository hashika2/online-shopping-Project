<?php
$dbserver="localhost";
$user="root";
$pass="";
$db="test";
//$connect=mysqli_connect("localhost","root","","login");
$connect=mysqli_connect($dbserver,$user,$pass,$db);
//mysqli_select_db($connect,$db);
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

       header('location:shoppingnew.php');
         echo'<script>alert("Item Already Added")</script>';
    }
    else{
        echo "you are not login";
    }
  }
    /* $num=mysqli_num_rows($result);
    if($num==n 1){
        echo "you have successfully logged";
        exit();
    }
    else{
        echo "your are not loggedin";
        exit();
    }*/


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
        margin:120px auto;
        background:#1456;
        height:200px;


    }
    .frm tr td {
      margin-left: 20px;
    }

    .textinput{
        color:white;
        background:#1456 ;
        font:white;
        padding:5px;
        margin-left:65%;
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
        <h1><b> login to <a href="shoppingnew.php">HASHLANKA</a> </b></h1>

</div>
<?php
  if(!empty($error)){
    echo 'there was an error on your form';
  }
 ?>
<form method="post" action="sign_in.php">
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
