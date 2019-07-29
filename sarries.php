
<?php
session_start();
$connection = mysqli_connect('localhost','root','','testing');
if(isset($_POST["add_to_cart"])){
    if(isset($_SESSION["shopping_cart"])){
        $item_array_id = array_column($_SESSION["shopping_cart"],"item_id");
        if(!in_array($_GET["id"],$item_array_id)){
            $count = count($_SESSION["shopping_cart"]);
           $item_array = array(
            'item_id'        => $_GET["id"],
            'item_name'      => $_POST["hidden_name"],
            'item_price'     => $_POST["hidden_price"],
            'item_quantity'  => $_POST["quantity"]
            );
            $_SESSION["shopping_cart"][$count] = $item_array;
        }
        else
        {
            echo'<script>alert("Item Already Added")</script>';
            echo '<script>window.location="sarries.php"</script>';


        }

    }
    else{
        $item_array = array(
            'item_id'        => $_GET["id"],
            'item_name'      => $_POST["hidden_name"],
            'item_price'     => $_POST["hidden_price"],
            'item_quantity'  => $_POST["quantity"]
            );
        $_SESSION["shopping_cart"][0] = $item_array;
    }
}
if(isset($_GET["action"])){
    if($_GET["action"] == "delete")
    {
        foreach($_SESSION["shopping_cart"] as $keys => $values)
        {
            if($values["item_id"] == $_GET["id"])
            {
                unset($_SESSION["shopping_cart"][$keys]);
                echo '<script>alert("Item Removed")</script>';
                echo '<script>window.location="sarries.php"</script>';
            }
        }
    }
}
?>

<!DOCTYPE html>
<html>
    <head>
            <title>shirts design</title>
             <link rel="stylesheet"  href="Cart.css">
            <link href="webcss.css" type="text/css" rel="stylesheet">
            <style>
              .prod-box{
                margin-left: 80px;
              }
              
            </style>
    </head>
    
    <body>
            <ul style="background-color: rgb(82, 4, 4);">
                    <a href="shoppingnew.php"><img src="Ca.PNG " height="60px" width="150px"></a>
                    <img src="Capture.PNG " height="60px" width="250px">
                    
                        <li class="active"><a href="#home">logout</a></li>
                        <li class><a href="service.html">service</a></li>
                        <li class><a href="#">partner</a></li>
                       
                      
                      <input class="input" type="text"placeholder ="search.." style="  border-radius:10px;width:800px" ><button type="submit"style="  border-radius:10px;">search</button>
                    </ul>
                <!--products-->
                <?php
             $query = "SELECT * FROM cart WHERE id >=59 and id <65";
            $result =  mysqli_query($connection,$query);
            if(mysqli_num_rows($result)>0){
                while($row = mysqli_fetch_array($result))
                {
                    ?>
                    <div class="ca2">
                    <form method="post" action="sarries.php?action=add&id=<?php echo $row["id"]; ?>">
                    <div class="prod-container">
                                <!--first product-->
                            <div class="prod-box" >
                                    <img src="sari/<?php echo $row["image"]; ?>" height="300px" alt="man suit">
                                    <h5 style="color:black;font-size:20px;"><?php echo $row["name"]; ?></h5>
                                    <div class="prod-trans">
                                    <div class="prod-feature">
                                        <p>girls special</p>
                                        <p style="color:white ;font-weight:bold">$<?php echo $row["price"] ; ?></p>  
                                        <input type="text" name="quantity"  value="1">
                                        <input type="hidden" name="hidden_name" value="<?php echo $row["name"];?> ">
                                        <input type="hidden"  name="hidden_price" value="<?php echo $row["price"]; ?>">
                                         <br>   
                                       <button type="submit" name="add_to_cart" >Add to cart </button>

                                </div>                   
                                    </div>
                            </div>
                </div>  
                </form>
                </div>
                <?php
                }
            }
            ?>

        <h2>Order List</h2>
            <div class="table">
                <table class="ta1">
                    <tr>
                    <th width="40%">Item Name</th>
                    <th width="10%">Quantity</th>
                    <th width="20%">Price</th>
                    <th width="15%">Total</th>
                    <th width="5%">Action</th>

                </tr>
                <?php
                    if(!empty($_SESSION["shopping_cart"])){
                        $total = 0;
                    foreach($_SESSION["shopping_cart"] as $key => $values)
                    {
                     ?>
                    <tr>
                        <td><?php echo $values["item_name"]; ?></td>
                        <td><?php echo $values["item_quantity"]; ?></td>
                        <td>$.<?php echo $values["item_price"]; ?></td>
                        <td><?php  echo number_format ($values["item_quantity"]*$values["item_price"],2); ?></td>
                        <td><a href="sarries.php?action=delete&id=<?php echo $values["item_id"];?>"><span class="re">Remove</span></a></td>

                    </tr>
                    <?php
                         $total=$total + ($values["item_quantity"] * $values["item_price"]);
                    }
                        ?>

                    <tr>
                        <td colspan="3" aling="right"><b>Total</b></td>
                        <td aling="right"><b>$.<?php echo number_format($total,2);?></b></td>
                    </tr>
                    <?php
                    }

                    ?>
             </table>


                </div>

            </div>
                             </div>    <div id="footer">
                <div class="container">
                  <div class="footer_sub_1">
                    
                    <h2>Mail Us:</h2>
               
                    <p class="p"Style="background-color:black">Mail Us:
                            Hashlanka Internet Pvt Ltd Block B (Galle),

                            Ground Floor, Embassy Tech Village,

                            Outer Ring Road, Devarabeesanahalli Village,

                            Varthur Hobli, Bengaluru East Taluk,

                            Bengaluru District,

                            Galle, Srilanka, 560103. <span><a href="#">read more..</a></span>
                     </p>

                    </div>
                  <div class="footer_sub_2">
                    <center>
                      <h2>Important Links</h2>
                      <ul Style="background-color:black">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Deals</a></li>
                        <li><a href="#">products</a></li>
                        <li><a href="#">Order</a></li>
                      </ul>
                    </center>
                  </div>
                  <div class="footer_sub_3">
                      <center>
                          <h2>Social Links</h2>
                          <ul Style="background-color:black">
                            <li><a href="https://www.facebook.com/hashika.maduranga">Facebook</a></li>
                            <li><a href="#">Google</a></li>
                            <li><a href="#">Youtube</a></li>
                            <li><a href="#">Twitter</a></li>
                            <li><a href="#">Linkedin</a></li>
                            <li><a href="#">Blogger</a></li>
                            <li><a href="#">Watssapp</a></li>
                            <li><a href="#">Viber</a></li>
                          </ul>
                        </center>
                  </div>
                  <form method="post" action="shopping new.php">
                  <div class="footer_sub_4">
                    <center>
                    <h2>Subcribe Us</h2>
                    <input type="text" name="subs" placeholder="Write your email" class="subs">
                    <input type="submit" name="subs"class="sub-btn"name="register_btn">
                     <p1 class="p">Enter your email for get notification by us</p1>
                  </center>
                  </div>
              </form>
                </div>
              </div>
    </body>
</html>
