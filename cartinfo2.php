<!DOCTYPE html>
<html>
    <head>
        <title>Dressmore</title>
        <link rel="stylesheet"  href="Cart.css">
        <link href="webcss.css" type="text/css" rel="stylesheet">
    </head>
    <body>
    <ul style="background-color: rgb(82, 4, 4);">
                    <a href="shoppingnew.php"><img src="images/Ca.PNG " height="60px" width="150px"></a>
                    <img src="images/Capture.PNG " height="60px" width="250px">
                    
                       
                        <li class><a href="service.html">service</a></li>
                        <li class><a href="#">partner</a></li>
                        <li><a href="#">login</a></li>
                      
                      <input class="input" type="text"placeholder ="search.."style="  border-radius:10px;width:800px" ><button type="submit"style="  border-radius:10px;">search</button>
                    </ul>

<?php
session_start();

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
            echo '<script>window.location="catinfo2.php"</script>';


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
                echo '<script>window.location="shoppingBag.php"</script>';
            }
        }
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
                        <td><a href="shoppingBag.php?action=delete&id=<?php echo $values["item_id"];?>"><span class="re">Remove</span></a></td>

                    </tr>
                    <?php
                         $total=$total + ($values["item_quantity"] * $values["item_price"]);
                    }
                        ?>

                    <tr>
                        <td colspan="3" aling="right"><b>Total</b></td>
                        <td aling="right"><b>$.<?php echo number_format($total,2);?></b></td>
                        <td colspan="3" aling="right"><b><a href="shoppingBag.php">Add</a></b></td>
                    </tr>
                    <?php
                    }

                    ?>
             </table>


                </div>

            </div>
