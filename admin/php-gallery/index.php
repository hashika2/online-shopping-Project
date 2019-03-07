<html>  
    <head>  
        <title>Mobile Phones</title>  
  
  <script src="jquery.min.js"></script>  
  <script src="bootstrap.min.js"></script>
  <script src="croppie.js"></script>
  <link rel="stylesheet" href="bootstrap.min.css" />
  <link rel="stylesheet" href="croppie.css" />
   <link rel="stylesheet" href="sub.css">
    </head>  
    <body> 
       <header>
        <nav>
          <div class="main-wrapper">
            <div class="nav-loging">
              <form class="" action="index.html" method="post">
                <input type="text" name="uid" value="" placeholder="Username/Email">
                <input type="password" name="pwd" value="" placeholder="password">
                <button type="submit" name="submit" id="admin-btn">Admin Loging</button>
              </form>
            </div>
          </div>
        </nav>
      </header>
        <div id="icon-header">
        <ul class="icon">
            <li><a href=""><img src="images/youtube-logo.png"></a></li>
            <li><a href=""><img src="images/twitter-logo.png"></a></li>
            <li><a href=""><img src="images/ig-logo.png"></a></li>
            <li><a href=""><img src="images/g+-logo.png"></a></li>
            <li><a href=""><img src="images/facebook-logo.png"></a></li>
        </ul>
    </div>
    <!--End of icon header-->
    <div id="nav-bar-header">
        <img id="shopping-mall" src="images/shopping-mall-2.jpg">
        <ul class="nav-menu">
            <li id="home-btn"><a href="">Home</a></li>
            <li><a href="">Features</a></li>
            <li><a href="">Departments</a></li>
            <li><a href="">ShortCodes</a></li>
            <li><a href="">Shop</a></li>
        </ul>
    </div>

    <div class="slideshow-container">

        <!-- Full-width images with number and caption text -->
        <div class="mySlides fade">
            <div class="numbertext">1 / 5</div>
            <img src="images/phones-slide-show-1.jpg" style="width:100%">
            <div class="text">Caption Text</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">2 / 5</div>
            <img src="images/phones-slide-show-2.jpg" style="width:100%">
            <div class="text"><a href="">Hello</a></div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">3 / 5</div>
            <img src="images/phones-slide-show-3.jpg" style="width:100%">
            <div class="text">Caption Three</div>
        </div>
        <div class="mySlides fade">
            <div class="numbertext">4 / 5</div>
            <img src="images/phones-slide-show-4.jpg" style="width:100%">
            <div class="text">Caption Text</div>
        </div>
        <div class="mySlides fade">
            <div class="numbertext">5 / 5</div>
            <img src="images/phones-slide-show-5.jpg" style="width:100%">
            <div class="text">Caption Text</div>
        </div>

        <!-- Next and previous buttons -->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
    <br>

    <!-- The dots/circles -->
    <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
        <span class="dot" onclick="currentSlide(4)"></span>
        <span class="dot" onclick="currentSlide(5)"></span>
    </div>
 
        <div class="container">
          <br />
      <h3 align="center">New Mobile Phones</h3>
      <br />
      <br />
   <div class="panel panel-default">
      <div class="panel-heading">Mobile Phones</div>
      <div class="panel-body" align="center">
       <input type="file" name="insert_image" id="insert_image" accept="image/*" />
       <br />
       <a href="Samples/phones/Galaxy-s10/s10.php">
       <div id="store_image"></div>
       </a>
       <a href=""><div class="example"></div></a>
       <a href=""><div class="example"></div></a>
        <a href=""><div class="example"></div></a>
        <a href=""><div class="example"></div></a>
       <a href=""><div class="example"></div></a>
        <a href=""><div class="example"></div></a>
        <a href=""><div class="example"></div></a>
       <a href=""><div class="example"></div></a>
        <a href=""><div class="example"></div></a>
        <a href=""><div class="example"></div></a>
       <a href=""><div class="example"></div></a>
        <a href=""><div class="example"></div></a>
      </div>
     </div>
    </div>
    
    
    
    </body>  


<div id="insertimageModal" class="modal" role="dialog">
 <div class="modal-dialog">
  <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Crop & Insert Image</h4>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-8 text-center">
            <div id="image_demo" style="width:350px; margin-top:30px"></div>
          </div>
          <div class="col-md-4" style="padding-top:30px;">
        <br />
        <br />
        <br/>
            <button class="btn btn-success crop_image">Crop & Insert Image</button>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<footer id="footer">
        <p>Leo's Schooping Mall &copy ALL RIGHT RESERVED</p>
    </footer>
    
    <script type="text/javascript" src="js.js"></script>
<script>  
$(document).ready(function(){

 $image_crop = $('#image_demo').croppie({
    enableExif: true,
    viewport: {
      width:200,
      height:200,
      type:'square' //circle
    },
    boundary:{
      width:300,
      height:300
    }    
  });

  $('#insert_image').on('change', function(){
    var reader = new FileReader();
    reader.onload = function (event) {
      $image_crop.croppie('bind', {
        url: event.target.result
      }).then(function(){
        console.log('jQuery bind complete');
      });
    }
    reader.readAsDataURL(this.files[0]);
    $('#insertimageModal').modal('show');
  });

  $('.crop_image').click(function(event){
    $image_crop.croppie('result', {
      type: 'canvas',
      size: 'viewport'
    }).then(function(response){
      $.ajax({
        url:'insert.php',
        type:'POST',
        data:{"image":response},
        success:function(data){
          $('#insertimageModal').modal('hide');
          load_images();
          alert(data);
        }
      })
    });
  });

  load_images();

  function load_images()
  {
    $.ajax({
      url:"fetch_images.php",
      success:function(data)
      {
        $('#store_image').html(data);
      }
    })
  }

});  
</script>

</html>