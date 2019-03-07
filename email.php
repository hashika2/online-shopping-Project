<?php 

$email=filter_input(INPUT_POST,'email');

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
    $sql="INSERT INTO emai(email) VALUES('$email')";
   
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
    
    <title>Registration login and logout</title>
   
    
</head>
<body>
    <div class ="header">
        <h1><img src="Ca.PNG " height="60px" width="150px">Register login and logout user php mysql</h1>

</div>
<form method="post" action="email.php">
   <div class="frm">
       
        <tr>
            <td>Email</td>
            <td> <input type="email" name="email" class="textinput"></td>
        </tr>
        <tr>
            <td>Submit</td>
            <td> <input type="submit" name="register_btn" value="register"></td>
        </tr>
</div>
</form>
    
</body>
</html>