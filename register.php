<?php
$username=filter_input(INPUT_POST,'username');
$email=filter_input(INPUT_POST,'email');
$password=filter_input(INPUT_POST,'password');
$hashed_password=$password;

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
    $sql="INSERT INTO user(username,email,password) VALUES('$username','$email','$hashed_password')";

    if($conn->query($sql)===TRUE){
      $message= "new record inserted succsesful";
          echo "<script type='text/javascript'>alert('$message');</script>";
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
    .td{
      font-size: 10px;
      color:white;
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
        <h1>Registration <span>Hash</span>Lanka</h1>

</div>
<form method="post" action="register.php">
   <div class="frm">
        <tr>
            <td ><b>Username</b></td>
            <td> <input type="text" name="username" class="textinput"></td>
        </tr>
        <tr>
            <td ><b>Email</b></td>
            <td> <input type="email" name="email" class="textinput"></td>
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
            <td><b>Submit</b></td>
            <td> <input type="submit" name="register_btn" value="register"><a href="sign_in.php">logout</a></td>
        </tr>
</div>
</form>

</body>
</html>
