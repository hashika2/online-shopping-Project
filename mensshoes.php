

<!DOCTYPE html>
<html>

<head>
  <title>shirts design</title>
  <link rel="stylesheet" href="Cart.css">
  <link href="webcss.css" type="text/css" rel="stylesheet">
  <style>
    .prod-box {
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


    <input class="input" type="text" placeholder="search.." style="  border-radius:10px;width:800px"><button
      type="submit" style="  border-radius:10px;">search</button>
  </ul>
  <!--products-->
  <?php
            $connection = mysqli_connect('localhost','root','','testin');
            $query = "SELECT * FROM cart WHERE id >=51 and id <59";
            $result =  mysqli_query($connection,$query);
            if(mysqli_num_rows($result)>0){
                while($row = mysqli_fetch_array($result))
                {
                    ?>
  <div class="ca2">
    <form method="post" action="cartinfo4.php?action=add&id=<?php echo $row["id"]; ?>">
      <div class="prod-container">
        <!--first product-->
        <div class="prod-box">
          <img src="shoes/<?php echo $row["image"]; ?>" height="300px" alt="man suit">
          <h5 style="color:black;font-size:20px;"><?php echo $row["name"]; ?></h5>
          <div class="prod-trans">
            <div class="prod-feature">
              <p>men special</p>
              <p style="color:white ;font-weight:bold">$<?php echo $row["price"] ; ?></p>
              <input type="text" name="quantity" value="1">
              <input type="hidden" name="hidden_name" value="<?php echo $row["name"];?> ">
              <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>">
              <br>
              <button type="submit" name="add_to_cart">Add to cart </button>

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

  <div id="footer">
    <div class="container">
      <div class="footer_sub_1">

        <h2>Mail Us:</h2>

        <p class="p" Style="background-color:black">Mail Us:
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
            <input type="submit" name="subs" class="sub-btn" name="register_btn">
            <p1 class="p">Enter your email for get notification by us</p1>
          </center>
        </div>
      </form>
    </div>
  </div>
</body>

</html>
