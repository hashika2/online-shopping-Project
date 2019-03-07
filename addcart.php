<?php 
$connect=mysqli_connect("localhost","root","","login");

if(isset($_POST["add_to_cart"])){
    if(isset($_SESSION["shopping_cart"])){

        $item_array_id=array_column($_SESSION["shopping_cart"],"item_id");
        if(!in_array($_GET["id"],$item_array_id)){
            $count=count($_SESSION["shoppng_cart"]);
            $item_array=array(
                
                    'item_id'=>$_GET["id"],
                    'item_name'=>$_POST["hidden_name"],
                    'item_price'=>$_POST["hidden_price"],
                    'item_quality'=>$_POST["quality"]
                );
                $_SESSION["shopping_cart"][0]=$item_array;
            
        }
    }
    else{
       echo'<script>alert("Item already added")</script>';
       echo'<script>window.location="addcart.php"</script>';
       
    }
}
else{
    $item_array=array(
                
        'item_id'=>$_GET["id"],
        'item_name'=>$_POST["hidden_name"],
        'item_price'=>$_POST["hidden_price"],
        'item_quality'=>$_POST["quality"]
    );
    $_SESSION["shopping_cart"][0]=$item_array;
}
if(isset($_GET["actioon"])){
    if($_get["action"]=="delete"){
        foreach($_SESSION["shopping_cart"] as $keys=>$values ){
            if($values["item_id"]==$_GET["id"]){
                unset($_SESSION["shopping_cart"][$keys]);
                echo'<script>alert("item removed")</script>';
                echo '<script>window.location="sign_in.php"</script>';
            }
        }
    }
}

?>

<!DOCTYPE <!DOCTYPE html>
<html>
<head>
   
    
    <title>Page Title</title>
    
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body>
    <br>
    <div class="container" style="width:700px;">
    <h3 align="center">shopping cart</h3><br/>
    <?php 
    $query="select * from cart order by id asc";
    $result=mysqli_query($connect,$query);
    if(mysqli_num_rows($result)>0){
        while($row=mysqli_fetch_array($result)){
            ?>
       
    <div class="col-md-4">
        <form method="post" action="addcart.php?action=add&id=<?php 
        $row["id"];?>">
        <div style="border:1px solid #333;background-color:#1234;border-radius:20px;background-size=30px;">
        <img src="phones/<?php  echo $row["image"]; ?>" class="img-responsive"/><br />
        <h4 class="text-info"> </h4>
        <h4 class="text-danger">$<?php echo $row["price"];?> </h4>
        <input type="text" name="quantity" class="form-control" value="1">
        <input type="hidden" name="hidden_name"  value="<?php echo $row["name"];?>">
        <input type="hidden" name="hidden_price"  value="<?php echo $row["price"];?>">
        <input type="submit" name="add_to_cart "style="argin-top:5px;" class="btn btn-success" value="add to cart">
        </div>
        <?php
    }
}
?>
</form>
</div>
<?php

?>
<div style="clear:both"></div>
<br>
<h3>Order Details</h3>
    <div class="table-responsive">
        <table class="table table-bordered">
            <tr>
                <th width="40%">Item name</th>
                <th width="10%">Item name</th>
                <th width="20%">Item name</th>
                <th width="15%">Item name</th>
                <th width="5%">Item name</th>
</tr>
<?php
  if(!empty($_SESSION["shopping_cart"])){
      $total=0;
      foreach($_SESSION["shoping_cart"] as $keys=>$values)
      {
  
?>
<tr>
    <td><?php echo $values["item_name"]; ?></td>
    <td><?php echo $values["item_quality"]; ?></td>
    <td><?php echo $values["item_price"]; ?></td>
    <td><?php echo number_format($values["item_quality"],2  )?></td>
    <td><a href="index.php?action=delete & id=<?php echo $values["item_id"]; ?>"><span class="text-danger">remove</span></a></td>
      </tr>

      <?php
            $total=$total+($values["item_quality"]*$values["item_price"]);   
      }
    }
      ?>
      <tr>
      <td> colspan="3" align="right">Total</td>
      <td align="right">$<?php echo number_format($total,); ?></td>
    </tr>
    </table>
    </div>
    </div>
    
    
</body>

</html>