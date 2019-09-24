<!DOCTYPE html>
<html>
    <head>
            <title>shirts design</title>
             <link rel="stylesheet"  href="Cart.css">
            <link href="webcss.css" type="text/css" rel="stylesheet">
            <link href="webinfo.css" type="text/css" rel="stylesheet">
            <style>
              .prod-box{
                margin-left: 80px;
              }
              
            </style>
    </head>
    
    <body>
    <ul style="background-color: rgb(82, 4, 4);">
                    <a href="shoppingnew.php"><img src="images/Ca.PNG " height="60px" width="150px"></a>
                    <img src="images/Capture.PNG " height="60px" width="250px">
                    
                        <li class="active"><a href="#home">logout</a></li>
                        <li class><a href="service.html">service</a></li>
                        <li class><a href="#">partner</a></li>
                       
                      
                      <input class="input" type="text"placeholder ="search.." style="  border-radius:10px;width:800px" ><button type="submit"style="  border-radius:10px;">search</button>
                    </ul>
                    <?php 
               $connection = mysqli_connect('localhost','root','','testin');
               
                if($connection){
                    $query = "SELECT * FROM cart WHERE id=1 ";
                    $result=mysqli_query($connection,$query);
                    if(mysqli_num_rows($result)>0){
                        while($row=mysqli_fetch_array($result)){
                            ?>
                            <div class="itemimage">
                            <form method="post" action="cartinfo7.php?action=add&id=<?php echo $row["id"]; ?>">
                                     <h5 style="font-size:40px;"><?php echo $row["name"]; ?></h5>
                                    <img src="phones/<?php echo $row['image']; ?>" height="400px" width="440px"> 
                                    <p style="color:white ;font-weight:bold;text-align:center;font-size:30px">PRICE   :$<?php echo $row["price"] ; ?></p>  
                                    <input type="text" name="quantity"  value="1" style="margin-left:50px;height:40px">
                                    <input type="hidden" name="hidden_name" value="<?php echo $row["name"];?> ">
                                    <input type="hidden"  name="hidden_price" value="<?php echo $row["price"]; ?>">          
                                    <button type="submit" name="add_to_cart" style="margin-right:100px">Add to cart </button>

                                </form>
            
                            </div>
                            <?php
                        }

                    }
                }
            
            ?>
        
        <div class="itemdetails">

        </div>

    </body>
</html>