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
            echo '<script>window.location="Cart2.php"</script>';


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
                echo '<script>window.location="Cart2.php"</script>';
            }
        }
    }
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Dressmore</title>
        <link rel="stylesheet"  href="Cart.css">
    </head>
    <body>
        <div class="ca1">
            <h2> Shoping Cart</h2>
            <?php
             $query = "SELECT * FROM cart ORDER BY id ASC";
            $result =  mysqli_query($connection,$query);
            if(mysqli_num_rows($result)>0){
                while($row = mysqli_fetch_array($result))
                {
                    ?>
            <div class="ca2">
            <form method="post" action="Cart2.php?action=add&id=<?php echo $row["id"]; ?>">
                <div class="ca3"  >
                    <img src="<?php echo $row["image"]; ?>" style="width:150px; height:250px;" >
                    <h5><?php echo $row["name"]; ?></h5>
                    <h5><?php echo $row["price"] ; ?></h5>
                    <input type="text" name="quantity"  value="1">
                    <input type="hidden" name="hidden_name" value="<?php echo $row["name"];?> ">
                    <input type="hidden"  name="hidden_price" value="<?php echo $row["price"]; ?>">
                            <br><br>
                    <button type="submit" name="add_to_cart" >Add to cart </button>


                </div>
            </form>
            </div>
            <?php
                }
            }
            ?>
            <div style="clear:both"></div>
            <h2>Order Details </h2>
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
                        <td>Rs.<?php echo $values["item_price"]; ?></td>
                        <td><?php  echo number_format ($values["item_quantity"]*$values["item_price"],2); ?></td>
                        <td><a href="Cart2.php?action=delete&id=<?php echo $values["item_id"];?>"><span class="re">Remove</span></a></td>

                    </tr>
                    <?php
                         $total=$total + ($values["item_quantity"] * $values["item_price"]);
                    }
                        ?>

                    <tr>
                        <td colspan="3" aling="right"><b>Total</b></td>
                        <td aling="right"><b>Rs.<?php echo number_format($total,2);?></b></td>
                    </tr>
                    <?php
                    }

                    ?>
             </table>




            </div>


        </div>

    </body>
</html>
