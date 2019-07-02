<?php
$username=filter_input(INPUT_POST,'username');
$email=filter_input(INPUT_POST,'email');
$password=filter_input(INPUT_POST,'password');
//$hashed_password=hash(' ',$password); doesn't work hass password

$host="localhost";
$dbname1="root";
$dbpassword="";
$dbname="test";

$conn=new mysqli($host,$dbname1,$dbpassword,$dbname);
//$conn=mysqli_connect('localhost','root','','test');
if(mysqli_connect_error()){
    die('connect error('.mysqli_connect_errno().') '.mysqli_connect_error());
}
else{
    $sql="INSERT INTO user(username,email,password) VALUES('$username','$email','$password')";

    if($conn->query($sql)===TRUE){
     /* $message= "new record inserted succsesful";
          echo "<script type='text/javascript'>alert('$message');</script>";*/
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
    <style>
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
        width:650px;
      
        border-radius:10px;
        margin:150px auto;
        background:#1456;
        height:200px;


    }
    .frm tr{
       background-color:black;
       margin:auto;
    }
    .frm tr td label{
      font-size: 10px;
      color:white;
      padding:5px;
    }

    .textinput{
        color:black;
        background:#3345;
        padding:5px;
        margin-left:70%;
        text-align: left;
    }
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

       </style>
</head>
<body>
 
    <div class ="header">
    <h1>Registration <a href="shoppingnew.php"><span>Hash</span>Lanka</a></h1>
</div>
<form method="post" action="register.php">
   <div class="frm">
        <tr>
            <td ><label>Username</label></td>
            <td> <input type="text" name="username" class="textinput"></td>
        </tr>
        <tr>
            <td ><label>Email</label></td>
            <td> <input type="email" name="email" class="textinput"></td>
        </tr>
        <tr>
            <td><label>Password</label></td>
            <td> <input type="password" name="password" class="textinput"></td>
        </tr>
       <!-- <tr>
           <td>Confirm Password</td>
            <td> <input type="password" name="password2" class="textinput"></td>
        </tr>-->
        <tr>
            
            <td> <input type="submit" name="register_btn" value="register"><button><a href="sign_in.php">logout</a></button></td>
        </tr>
</div>
</form>

</body>
</html>
