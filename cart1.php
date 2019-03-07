<!DOCTYPE html>
<html>
    <head>
        <title>add to cart</title>
    </head>
    <style>
       body {
  font-family: Arial;
  color: white;
}

.split {
  height: 100%;
  width: 50%;
  position: fixed;
  z-index: 1;
  top: 0;
  overflow-x: hidden;
  padding-top: 20px;
}

.left {
  left: 0;
  background-color: #3455;
}

.right {
  right: 0;
  background-color:#3467 ;
}

.centere {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
}
.centered {
  position: absolute;
  top: 10%;
  left: 10%;
  transform: translate(-50%, -50%);
  text-align: left;
  margin-top:25%;
  margin-left:10%; 
}
.centered p{
    margin-left:20%; 
}
.centered li{
    margin-left:20%; 
}

.centered ul button{
    margin-left:20%; 
    background-size:50px;
    background-color:orange;
    width:200px;
    height:50px;
    float:left;
    
}

.centere img {
  width: 500px;
  border-radius: 10%;
}
h2{
    background-color:red;
    margin:15px;
    margin-right:10px;
   
}
.split-right h2{
    background-size:5;
}
ul{
    text-align:2px;
}
li{
  top:20%;
  left:20%;
  margin:10px;
}
.add_to_cart{
    top:100%;
    left:100%;
    width:200px;
    height:50px;
    float:right;
    
}
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
  <margin:20px;
}
th, td {
  padding: 5px;
}
        </style>
    <body>
       <h2> <img src="Capture.PNG " height="60px" width="250px"> </h2>
       <div class="split left">
  <div class="centere">
    <img src="shirts/bb1.jpg" alt="Avatar woman">
    <h2>Babies fasion</h2>
    <h3>Rs:850</h3>
    
  </div>
</div>

<div class="split right">
    
  
  
    
    <h2><b>Boys T shirt</b></h2>
    <div class="centered">
    <ul>
        
    <p>Manufacturer wholesale 27kids#9217 2019casual Korean style boys T shirt </p>
    
        <li>color :red,black,white</li>
        <li>Age:5-10/<(10)</li>
        <li>Lead time :7 day(s) after payment received</li>
        <li>shopping fee :Rs: to Sri Lanka by hashlanka.com Air Express</li>
        <li>read time
        <table style="width:20%">
  <tr>
    <th>Quantity(Pieces)</th>
    <th>Est. Time(days)</th> 
    
  </tr>
  <tr>
    <td>1-500</td>
    <td>7</td>
    
  </tr>
  <tr>
    <td>500</td>
    <td>nogatiable</td>
    
  </tr>
  
</table>
        </li>
       
    </ul>
    <button class="add_to_cart">add to cart</button>
    <a href="partner.php"><button class="add_to_cart">cantact partner</button></a>
    
  </div>
  
</div>
    </body>

</html>