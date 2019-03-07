<?php 
$username=filter_input(INPUT_POST,'username');

$password=filter_input(INPUT_POST,'password');
$hashed_password=sha1($password); 

$host="localhost";
$dbname="hashika";
$dbpassword="";
$dbname="test";

$conn=new mysqli($host,$dbname,$dbpassword,$dbname);
//$conn=mysqli_connect('localhost','root','','test');
if(mysqli_connect_error()){
    die('connect error('.mysqli_connect_errno().') '.mysqli_connect_error());
}
else{
    $sql="INSERT INTO user(username,password) VALUES('$username','$hashed_password')";
   
    if($conn->query($sql)===TRUE){
        echo "new record inserted succsesful";
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
    
    <title><img src="Ca.PNG " height="60px" width="150px">Registration login</title>
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
        border:solid gray 10px;
        width:600px;
        border-radius:10px;
        margin:100px auto;
        background:#3456;
        height:200px;

        
    }
    .textinput{
        color:white;
        background:#2345;
        padding:5px;
        margin-left:70%;
    }

       </style>
</head>
<body>
    <div class ="header">
        <h1>Register login </h1>

</div>
<form method="post" action="login.php">
   <div class="frm">
        <tr>
            <td>Username</td>
            <td> <input type="text" name="username" class="textinput"></td>
        </tr>
       
        <tr>
            <td>Password</td>
            <td> <input type="password" name="password" class="textinput"></td>
        </tr>
       <!-- <tr>
           <td>Confirm Password</td>
            <td> <input type="password" name="password2" class="textinput"></td>
        </tr>-->
        <tr>
            <td>Submit</td>
            <td> <input type="submit" name="register_btn" value="login"></td>
        </tr>
</div>
</form>
    
</body>
</html>