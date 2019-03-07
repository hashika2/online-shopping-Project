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
        <title>my online shopping website</title>
        <style>
        .write{
    height: 200px;
    width: 100%;
}
        .email{
    height: 50px;
    width: 20%;
}
h2 a{
    text-align:center;
    font-size:60px;
}
        
        </style>
    </head>
    <link href="webcss.css" type="text/css" rel="stylesheet">
   
    <body>

        <ul class="list">
            <div>
            
       
        
            
            
            <li class><a href="register.php">login</a></li>
            <h2> <img src="Ca.PNG " height="60px" width="150px">
        <img src="Capture.PNG " height="60px" width="250px"><a>Contact Partner</a></h2>
            </div>
            
</ul>
<p>Enter product details such as color, size, materials etc. and other specification requirements to receive an accurate quote.</p>
<input type="text"name="text"placeholder="comments" class="write">
<p>Please enter your email addfress</p>
<form method="post" action="login.php">
   <div class="frm">
       
        <tr>
            
            <td> <input type="email" name="email" class="textinput"></td>
        </tr>
        <tr>
            
            <td> <input type="submit" name="register_btn" value="submit "></td>
        </tr>
</div>
</form>
</ul>

          
</body>
</html>