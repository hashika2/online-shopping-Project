<?php 
    $connection = mysqli_connect('localhost','root','','testin');
    if(isset($_GET['q'])) {
    $search = mysqli_real_escape_string($connection,trim($_GET['q']));
    $query = "SELECT * from cart where name like '%$search%' ORDER BY name";
    $result =  mysqli_query($connection,$query);

    if(mysqli_num_rows($result)>0){
        while($row = mysqli_fetch_array($result))
        {
            ?>
            <!DOCTYPE html>
            <html>
            <div class="ca2">
              <form method="post" action= "searchItems.php">
                <div class="prod-container">
                            <!--first product-->
                        <div class="prod-box" >
                                <img src="shirts/<?php echo $row["image"]; ?>" height="300px" alt="man suit">
                                <h5 style="color:black;font-size:20px;"><?php echo $row["name"]; ?></h5>
                                <div class="prod-trans">
                                <div class="prod-feature">
                                    <p>men special</p>
                                    <p style="color:white ;font-weight:bold">$<?php echo $row["price"] ; ?></p>  
                                    <input type="text" name="quantity"  value="1">
                                    <input type="hidden" name="hidden_name" value="<?php echo $row["name"];?> ">
                                    <input type="hidden"  name="hidden_price" value="<?php echo $row["price"]; ?>">
                                    <br>   
                                  <button type="submit" name="add_to_cart" >Add to cart </button>
                                  <a href="infoItem.php?action=add&id=<?php echo $row["id"]; ?>"><button type="button" >More info </button></a>
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
