<?php 
 session_start();

?>  
 <!DOCTYPE html>
<html>
<head>
    
    <title>Page Title</title>
   <style>
    .header{
        background-color:brown;

    }
    table{
        
    }

       </style>
</head>
<body>
    <div class="header">
        <h1>login and logout<a href="sign_in.php">logout</a></h1>
</div>
<h1>home</h1>
<div><h4>Welcome<?php echo $_SESSION['username']; ?></h4></div>
</body>
</html> 