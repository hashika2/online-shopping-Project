<!--<?php
if(isset($_GET['q'])){
if($_GET['q']=='search...'){
  header('location:shoppingnew.php');
}
}

if($_GET['q']!==''){
$connect=mysqli_connect('localhost','root','','searchbar');
//$db=mysqli_select_db($connect,'searchbar ')
$q = $_GET['q'];

 ?>-->

<!DOCTYPE html>
<html>
    <head>
        <title>my online shopping website</title>

     

    </head>
    <link href="webcss.css" type="text/css" rel="stylesheet">
    <style>
    
    ul{
      background-color: rgb(82, 4, 4);
      padding:2%;


    }
    .input{
      width: 50%;
    }
    p{

      background-color: rgb(70, 10, 10);
      color: rgb(145, 192, 233);
}
.slideshow-container{
    max-width: 100%;
    position: center;
    margin: auto;



}
.dropdown{
    width: 223px;
    border-radius:10px; 
}
.container{
  margin-left:110px;
  
}

#hd a{
    float:right;
}
.input{
  border-radius:10px;
}
button{
  border-radius:10px;
}
.catbox{
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  text-align: center;
  font-family: arial;
  background-size: 20px;
  width: 307px;
  height: auto;
  margin-left: 20px;
  margin-right: 90px;

}






. button {
  border: none;
  outline: 0;
  padding: 12px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}



.catbox span{
  font-size:20px;
  color:yellow;
}
.bttn{
  float: right;
  margin: 10PX;
  width: 100px;
  height: 40px;
  background-color: rgb(114, 119, 114);
}



      </style>
    <body>


        <ul class="list">
        <div id="wrapper">
        <div id="hd">
          <div id="subhd">
            <div class="container">
              <p>Sri Lankan fastest online shopiinng service    <a href="#"><img src="logo1.jpg "width="20px;" width="5px"></a>

              <a href="https://www.facebook.com/hashika.maduranga"><img src="logo2.jpg "width="20px;" width="5px"></a>
              <a href="#"><img src="logo3.jpg "width="20px;" width="5px"></a>
              <a href="#"><img src="logo6.jpg "width="20px;" width="5px"></a>
              <a href="#"><img src="logo5.jpg "width="20px;" width="5px"></a></p>
</div>

          </div>
      </div>
</div>
         <form action="shoppingnew.php"  method="post" id="searchform">
        <img src="Ca.PNG " height="60px" width="150px">
        <img src="Capture.PNG " height="60px" width="250px">


            <li class><a href="sign_in.php">sign in</a></li>
            <li class><a href="partner.php">partner</a></li>
            <li class><a href="register.php">sign out</a></li>

          <input class="input" type="text"placeholder ="search.."name = "q" id='q1' >
           <input  type="submit" name = "search" onclick="window.location.href='shoppingnew.php?document.getElementById('q1').value'" placeholder="Enter" class="bttn" value="search"style="  border-radius:10px;">
</form>

<?php
if(!isset($q)){
  echo '';
}else{
$query=mysqli_query($connect,"SELECT * from product where title like '%$q%'");
$num_rows=mysqli_num_rows($query);
?>
<p> <strong><?php echo $num_rows; ?></strong> results for '<?php echo $q ?>'</p>
<!--<?php

while($row=mysqli_fetch_array($query)){
  $id=$row['id'];
  $title=$row['title'];
  $desc=$row['description'];

  echo '<h3>'.$title.'</h3><p>'.$desc. "</p><br />";

}
}

 ?>-->
</body>
</html>
<?php
}
else{
  header('location:shoppingnew.php');
}
 ?>


        </ul>
        <!--slideshow container-->

        <div class="slideshow-container">

          <div class="mySlides fade">
            <div class="numbertext"></div>
            <img src="sh6.jpg "height="500px" style="width:100%;">
            <div class="text"></div>
          </div>

          <div class="mySlides fade">
            <div class="numbertext"></div>
            <img src="sh2.jpg"height="500px" style="width:100%">
            <div class="text"></div>
          </div>

          <div class="mySlides fade">
            <div class="numbertext"></div>
            <img src="B.jpg" height="500px"style="width:100%">
            <div class="text"></div>
          </div>

          <div  class="mySlides fade">
            <div class="numbertext"></div>
            <img src="A.jpg"height="500px" style="width:100%">
            <div class="text"></div>
          </div>





          </div>
          <br>

          <div style="text-align:center">
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
          </div>
          <script src="webpage.js"></script>

      </div>
      <div class="heading">
        <h2 style="font-size:40px; background-color:red">Category</h2>
      </div>
      <div class="container">

      </div>
  
      <ul class="sub_head" style="background-color:rgb(104, 100, 100); padding: 1px;margin:20px" >

        <!--=====category list======-->
  <div class="main_container">
  <li class="dropdown" >
      <a href="javascript:void(0)" class="dropbtn">spectacles</a>
      <div class="dropdown-content">
        <a href="men.html"> For men</a>
        <a href="#">For women</a>
        <a href="#">New models</a>
        <a href="#">Simple ones</a>
        <a href="#">Popular ones</a>
      </div>
    </li>
    <li class="dropdown">
      <a href="javascript:void(0)" class="dropbtn">watches</a>
      <div class="dropdown-content">
        <a href="gentlemen.html"> For Gentlement</a>
        <a href="femail.html">For femails</a>
        <a href="#">New brands</a>
        <a href="#">For Wall</a>
      </div></li>
    <li class="dropdown">
      <a href="javascript:void(0)" class="dropbtn">Chairs</a>
      <div class="dropdown-content">
        <a href="wood.html">Wood</a>
        <a href="#">Modern</a>
        <a href="#">Plastic</a>
        <a href="#">Comfortable</a>
      </div></li>
    <li class="dropdown">
      <a href="javascript:void(0)" class="dropbtn">Sarri</a>
      <div class="dropdown-content">
        <a href="wedding.html">Wedding</a>
        <a href="latest.html">Latest</a>
        <a href="newsaree.html"> New</a>
        <a href="#">cotton</a>
      </div></li>
    <li class="dropdown">
      <a href="javascript:void(0)" class="dropbtn">Shoes</a>
      <div class="dropdown-content">
        <a href="mens.html">Mens</a>
        <a href="ladies.html">ladies</a>
        <a href="babyshoe.php">Babies</a>
        <a href="#">Boys</a>
        <a href="#">Formel pattern</a>

      </div></li>
    <li class="dropdown">
      <a href="javascript:void(0)" class="dropbtn">phones</a>
      <div class="dropdown-content">
        <a href="sign_huawei.php">Huawei</a>
        <a href="apple.html">Apple</a>
        <a href="samsung.html">Samsung</a>
        <a href="android.html">Android</a>
        <a href="home.html">Home</a>
      </div></li>
    <li class="dropdown">
      <a href="javascript:void(0)" class="dropbtn">Bags</a>
      <div class="dropdown-content">
        <a href="school.html">Schools</a>
        <a href="handbag.html">Hand bag for women</a>
        <a href="new.html">New</a>
        <a href="shopping.html">Shopping</a>
      </div></li>
    <li class="dropdown">
      <a href="javascript:void(0)" class="dropbtn">Shirts</a>
      <div class="dropdown-content">
        <a href="babies.html">Babies</a>
        <a href="older.html">olders</a>
        <a href="modern.html">Modern shirts</a>
        <a href="popular.html">popular</a>
      </div></li>

</ul>




<!---catagory-->
  <div class="container">
    
  
     <!---first catbox-->
    <a href="popular.html">
        <div class="catbox">
            <img src="shirts/sh1.jpg " height="400px" alt="bag">
            <span>Shirts <b>20%</b></span>
          </div>
    </a>
     <!---seecond catbox-->
    <a href="shopping.html">
        <div class="catbox">
            <img src=" bags/bg1.jpg " height="400px" alt="bag">
            <span>Bags <b>20%</b></span>
          </div>
    </a>
     <!---third catbox-->
    <a href="samsung.html">
        <div class="catbox">
            <img src=" phones/pn1.jpg " height="400px" alt="bag">
            <span>Smart phones <b>15%</b></span>
          </div>
    </a>
     <!---fourth catbox-->
    <a href="mens.html">
        <div class="catbox">
            <img src=" shoes/sho2.jpg " height="400px" alt="bag">
            <span>Boys shoes <b>20%</b></span>
          </div>
    </a>
    <!---five catbox-->
    <a href="wedding.html">
        <div class="catbox">
            <img src=" sari/sari1.jpg " height="400px" alt="bag">
            <span>Sarri <b>25%</b></span>
          </div>
    </a>
    <!---six catbox-->
    <a href="wood.php">
        <div class="catbox">
            <img src=" chair/ch1.jpg " height="400px" alt="bag">
            <span>Chairs <b>10%</b></span>
          </div>
    </a>
    <!---seven catbox-->
    <a href="gentlemen.html">
        <div class="catbox">
            <img src=" watch/wch1.jpg " height="400px" alt="bag">
            <span>watches <b>30%</b></span>
          </div>
    </a>
    <!---eight catbox-->
    <a href="men.html">
        <div class="catbox">
            <img src=" spectacles/sp1.jpg " height="400px" alt="bag">
            <span>spectacles <b>10%</b></span>
          </div>
    </a>

</div>

  </div>

  <!--offers -->
  <div id="heading">
        <h2 style="font-size:40px; background-color:red">Offers</h2>
      </div>
  <div class="container">
      
       <!--offers  boxes -->
      <div class="offers">
        <a href="#"><img src="offer2.jpg" height="210px"style="margin-left:50px;"></a><!--no same size of all pictures thats why marigns are different-->
      </div>
      <div class="offers">
          <a href="#"><img src="offer6.jpg" height="210px"style="margin-left:80px;"></a>
        </div>
        <div class="offers">
            <a href="#"><img src="offer4.jpg" height="210px"style="margin-left:110px;"></a>
          </div>
      </div>



              <div id="footer">
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

        //echo "new record inserted succsesful";
    }
    else{
        echo "error: ".$sql."<br>".$conn->error;
    }
    $conn->close();
}
?>







    </body>
</html>
