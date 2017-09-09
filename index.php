<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Harichand&sons</title>
    <link rel="icon" type="image/jpg" href="img/logo.png">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
    
    <script src="js/npm.js"></script>
    <link rel="stylesheet" type="text/css" href="css/model.css">

    <?php
      require_once("inc/db.php");
        if(isset($_GET['id'])){
            $id=$_GET['id'];
        }
    ?>
    
  </head>
  
  <div class="js">
  <body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
      <div id="preloader"></div>
      
    <!--Navbar Starts-->
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#myPage">
          <div class="row">
             <div class="col-xs-4"><img src="img/logo.png" width="50px" alt="">&nbsp;&nbsp;&nbsp;</div>
            <div class="col-xs-8" id="logo_text">Harichand & Sons</div>
         </div>
      </a>
    </div>

    
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      
      
      <ul class="nav navbar-nav navbar-right">
        
        <li class="active"><a href="#myPage"><i class="fa fa-home" aria-hidden="true"></i> Home <span class="sr-only">(current)</span></a></li>
        
        <li><a href="#about"><i class="fa fa-info-circle" aria-hidden="true"></i> About</a></li>
        <li><a href="#designs"><i class="fa fa-trophy" aria-hidden="true"></i> Designs</a></li>
        <li><a href="#contact"><i class="fa fa-phone-square" aria-hidden="true"></i> Contact</a></li>
         
         <?php
              
              $query=$conn->prepare("select * from category");
              $query->execute();
              $query=$query->get_result();
              ?>

        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-list" aria-hidden="true"></i> Trophy Category<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <?php
              if($query->num_rows>0){
                  while($row=$query->fetch_object()){
                      echo "<li><a href='category.php?token_id=".$row->id."'>".ucfirst($row->category)."</a></li>";
                  }    
              }
              else{
                  echo "<li>No Category</li>";
              }
              ?>
              </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- Nabar ends -->
<!-- Carousel Starts -->

<div class="container" >
    <div class="row">
        <div class="col-lg-12 ">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
              <!-- Indicators -->
              <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
              </ol>

              <!-- Wrapper for slides -->
              <div class="carousel-inner" role="listbox">
                <div class="item active">
                  <img src="img/slide3.jpg" alt="..." width="100%">
                  <div class="carousel-caption">
                    ...
                  </div>
                </div>
                <div class="item">
                  <img src="img/slide2.jpg" alt="..." width="100%">
                  <div class="carousel-caption">
                    ...
                  </div>
                </div>
                <div class="item">
                  <img src="img/slide1.jpg" alt="..." width="100%">
                  <div class="carousel-caption">
                    ...
                  </div>
                </div>
              </div>

              <!-- Controls -->
              <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
        </div>
    </div>
</div>

<!-- Carousel Ends -->

<div id="about" class="jumbotron" >
    <center>
        <p id="intro">Who We Are!!</p>
    </center> 
    <hr>
    <div class="container">
        <div class="row">      
           <p id="height">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. <br><br>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
           </p>
        </div>
    </div>
    
  </div>

<div class="jumbotron" id="whatwe">
    <center>
       <p id="intro"><br>What we do</p>
    </center>
    <hr>
          <div class="container">
              <div class="row">  
               <p id="height">
               The company has the capability to manufacture all types of custom made unique designs of trophies.<br><br>

  Operating since 1960 under the ownership of Mr. HARICHAND. Backed by the experience and <br> relationships of more than 50 years in the industry.<br>The Company can also deliver customized designs as per the specification of the buyer.The company<br> has maintained its distinct advantage in offering its customer the premium quality Products minimum<br> delivery time.

The Company has the capability to manufacture all types of custom made unique <br>designs in silver,white metal ,copper, Brass ,alluminium ,wood and acleric articles to suit all occasions.
                </p>
          </div>
          </div>
</div>



<!--Recent designs  -->

<div class="jumbotron" id="designs">
    <center>
        <h2><br>Recent Designs</h2>
    </center> 
    <hr>
         <div class="container">
      
          <?php
                $count=0;
                $query=$conn->prepare("select image_name,tokens from token order by id desc limit 4");
                $query->execute();
                $query->store_result();
                if($query->num_rows>0){
                  $query->bind_result($image,$token);
                  $num=0;
          ?>
        <div class="row">
            <?php
            while($query->fetch()){
              $count++;
            ?>
            <div class="col-md-3">
                <div class="panel panel-default">
                  <div class="panel-body">
                    <img src="admin/img/<?php echo $image;?>"  onclick="openModal();currentSlide(<?php echo ++$num; ?>)" class="hover-shadow" height="300px" width="100%" alt="trophy.png">
                  </div>
                  <div class="panel-footer text-center">
                  <h4><?php echo strtoupper($token);?></h4>
                    <div class="row">

                        <div class="col-md-12">
                            <div class="btn btn-primary btn-block">Add to cart</div>
                        </div>
                        
                    </div>  
                  </div>
                </div>
            </div>
            <?php
                  }
                }
            ?>
        </div>

        <div class="row">
            <div class="col-md-2 col-md-offset-5">
                <div class="btn btn-primary  btn-block" id="load"><a href="sample.php#category">Load More</a></div>
            </div>
        </div>
</div>
</div>



<div id="myModal" class="modal">
  <span class="close cursor" style="color: white; font-size: 60px; margin-right: 40px; margin-top: 80px;" onclick="closeModal()">&times;</span>
  
  <?php
          $mquery=$conn->prepare("select image_name,tokens from token order by id desc limit 4");
          $mquery->execute();
          $mquery->store_result();
          $number=0;
          if($mquery->num_rows>0){
            $mquery->bind_result($mimage,$mtoken);
    ?>
  <div class="modal-content">
    <?php
          while($mquery->fetch()){
    ?>
    
    <div class="mySlides">
      <div class="numbertext"><?php echo ++$number;?> / <?php echo $count;?></div>
      <img src="admin/img/<?php echo $mimage ;?>" style="width:100%">
      <div class="caption-container">
    
      <p id="caption"><h3><?php echo strtoupper("$mtoken");  ?></h3></p>
    </div>
    </div>

    <?php
          }
      }
      ?>
     
  
  </div>
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>

<!--Popular designs -->
<div class="jumbotron" id="designs">
    <center>
        <h2><br>Popular Designs</h2>
    </center> 
    <hr>
         <div class="container">
      
          <?php
                $count=0;
                $query=$conn->prepare("select image_name,tokens from token order by Rank desc limit 4");
                $query->execute();
                $query->store_result();
                if($query->num_rows>0){
                  $query->bind_result($image,$token);
                  $num=0;
          ?>
        <div class="row">
            <?php
            while($query->fetch()){
              $count++;
            ?>
            <div class="col-md-3">
                <div class="panel panel-default">
                  <div class="panel-body">
                    <img src="admin/img/<?php echo $image;?>"  onclick="openModal();currentSlide(<?php echo ++$num; ?>)" class="hover-shadow" height="300px" width="100%" alt="trophy.png">
                  </div>
                  <div class="panel-footer text-center">
                  <h4><?php echo strtoupper($token);?></h4>
                    <div class="row">
      

                        <div class="col-md-12">
                            <div class="btn btn-primary btn-block">Add to cart</div>
                        </div>
                        
                    </div>  
                  </div>
                </div>
            </div>
            <?php
                  }
                }
            ?>
        </div>

        <div class="row">
            <div class="col-md-2 col-md-offset-5">
                <div class="btn btn-primary  btn-block" id="load"><a href="sample.php#popular">Load More</a></div>
            </div>
        </div>
</div>
</div>



<div id="myModal" class="modal">
  <span class="close cursor" style="color: white; font-size: 60px; margin-right: 40px; margin-top: 80px;" onclick="closeModal()">&times;</span>
  
  <?php
          $mquery=$conn->prepare("select image_name,tokens from token order by Rank desc limit 4");
          $mquery->execute();
          $mquery->store_result();
          $number=0;
          if($mquery->num_rows>0){
            $mquery->bind_result($mimage,$mtoken);
    ?>
  <div class="modal-content">
    <?php
          while($mquery->fetch()){
    ?>
    
    <div class="mySlides">
      <div class="numbertext"><?php echo ++$number;?> / <?php echo $count;?></div>
      <img src="admin/img/<?php echo $mimage ;?>" style="width:100%">
      <div class="caption-container">
    
      <p id="caption"><h3><?php echo strtoupper("$mtoken");  ?></h3></p>
    </div>
    </div>

    <?php
          }
      }
      ?>
     
  
  </div>
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>

<!-- Contact starts -->

<div class="jumbotron" id="contact">
  <center>
        <h2><br>Get In Touch</h2><br>
    </center> <hr>
    <div class="row">
        <div class="col-md-6">
      <div class="panel panel-default">
                  <div class="panel-body">
        <div id="map" style="width:100%;height:470px"></div>
        </div></div>

<script>
function myMap() {
  var mapCanvas = document.getElementById("map");
  var myCenter = new google.maps.LatLng(29.9409131,76.8178548,17); 
  var mapOptions = {center: myCenter, zoom: 10};
  var map = new google.maps.Map(mapCanvas,mapOptions);
  var marker = new google.maps.Marker({
    position: myCenter,
    animation: google.maps.Animation.BOUNCE
  });
  marker.setMap(map);
  var infowindow = new google.maps.InfoWindow({
  content:'<strong>Shop 7, Street 23</strong><br>Harichand & Sons Company<br>136120 Ambala<br>'
  });

infowindow.open(map,marker);
}
</script>


                    
        </div>
        <div class="col-md-5">
           <center><h3>Contact-Form</h3></center>
            <div class="form" id="form">
                <div class="form-group">
                    <input type="text"  class="form-control" placeholder="Full Name">
                </div>
                <div class="form-group">
                    <input type="text"  class="form-control" placeholder="Email Address">
                </div>
                <div class="form-group">
                    <input type="text"  class="form-control" placeholder="Contact number">
                </div>
                <div class="form-group">
                    <textarea name="text" class="form-control" placeholder="Your Query" id="text" cols="30" rows="5 "></textarea>
                </div>
                <input type="text" class="btn btn-primary" value="Submit">
            </div>
        </div>
    </div>
</div>
  
<!-- Footer Starts -->
  <footer>
        <div class="container"> <br>
            <div class="row">
                 <div class="col-md-2 col-md-offset-5">
                    <div class="pull-rigth">
                        <div class="row">
                            <div class="col-xs-3 ">
                                <a href="https://www.facebook.com/" target="_blank"><img src="img/fb.png" width="30px" alt=""></a>
                            </div>
                            <div class="col-xs-3 ">
                                <a href="https://www.twitter.com/" target="_blank"><img src="img/twit.png"  alt="" width="30px"> </a>
                            </div>
                            <div class="col-xs-3">
                                <a href="https://www.plus.google.com/" target="_blank"><img src="img/google.png" alt="" width="30px"></a>
                            </div>
                            <div class="col-xs-3 ">
                                <a href="https://www.instagram.com/" target="_blank"><img src="img/insta.png" alt="" width="30px"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div><hr>
            <div class="row">
                   <center> Copyright &copy; <span id="logo_text">Trophy</span>. All rights reserved by 2014-2017.
            </center>
            </div>
          </div>
    </footer>

    <!-- Footer Ends -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <!-- to include map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB0nx7ddhcwDtgtmIemm0X2ayHdSDN462k&callback=myMap"></script>
    
    <script type="text/javascript" src="js/model.js"></script>
    <script src="js/scrollHome.js"></script>
    <script src="js/loadingscript.js"></script>
    <script>
         $(function() { // when the DOM is ready...
            //  Move the window's scrollTop to the offset position of #now
            $(window).scrollTop($('#<?php echo $id;?>').offset().top);
        });
    </script>

    
  </body>
  </div>
</html>