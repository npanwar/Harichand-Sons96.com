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
      <a class="navbar-brand" href="index.php#myPage">
          <div class="row">
             <div class="col-xs-4"><img src="img/logo.png" width="50px" alt="">&nbsp;&nbsp;&nbsp;</div>
            <div class="col-xs-8" id="logo_text">Harichand & Sons</div>
         </div>
      </a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      
      
      <ul class="nav navbar-nav navbar-right">
        
        <li class="active"><a href="index.php"><i class="fa fa-home" aria-hidden="true"></i> Home <span class="sr-only">(current)</span></a></li>
        
        <li><a href="index.php#about"><i class="fa fa-info-circle" aria-hidden="true"></i> About</a></li>
        <li><a href="index.php#designs"><i class="fa fa-trophy" aria-hidden="true"></i> Designs</a></li>
        <li><a href="index.php#contact"><i class="fa fa-phone-square" aria-hidden="true"></i> Contact</a></li>
         
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
  </div></nav>

<!-- navbar ends -->
<!--Heading Section-->
    
    <div class="top"></div>
    <div class="container heading">
        <ol class="breadcrumb">
            <li class="active"><a href="index.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>     
            <li class=""><i class="fa fa-list" aria-hidden="true"></i> All Trophiess</li>     
        </ol>
    </div>
    
    <!--Heading Section-->
    <!--new design  -->

    <div class="jumbotron">
     <?php
                    $count=0;
            if(isset($_GET['token_id'])){
                $cat_id=$_GET['token_id'];
                $cat_query=$conn->prepare("select * from category where id=?");
                $cat_query->bind_param("i",$cat_id);
                $cat_query->execute();
                $cat_query=$cat_query->get_result();
                if($cat_query->num_rows>0){
                    
                    $crow=$cat_query->fetch_object();
                    $cat=$crow->category;
                    $query=$conn->prepare("select image_name,tokens from token where category=? order by id desc");
                   $query->bind_param("s",$cat);
                    $query->execute();
                    $query->store_result();
                    if($query->num_rows>0){
                      $query->bind_result($image,$token);
                      $num=0;
              ?>
        <center>
            <h2>
    <?php echo ucfirst($cat);?> Designs</h2>
        </center> 
        <hr>
             <div class="container">
          
             
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
                    else{
                        echo "<h3>No Trophies Available..</h3>";
                    }
                    
                }
                else{
                    echo "<h3>No Such Category Available..</h3>";
                }
            }
                ?>
            </div>

          
    </div>
    </div>



    <div id="myModal" class="modal">
      <span class="close cursor" style="color: white; font-size: 60px; margin-right: 40px; margin-top: 80px;" onclick="closeModal()">&times;</span>
      
      <?php
            if(isset($_GET['token_id'])){
                $mcat_id=$_GET['token_id'];
                $mcat_query=$conn->prepare("select * from category where id=?");
                $mcat_query->bind_param("i",$mcat_id);
                $mcat_query->execute();
                $mcat_query=$mcat_query->get_result();
                if($mcat_query->num_rows>0){
                    
                    $crow=$mcat_query->fetch_object();
                    $mcat=$crow->category;
                    $mquery=$conn->prepare("select image_name,tokens from token where category=? order by id desc");
                   $mquery->bind_param("s",$mcat);
                    $mquery->execute();
                    $mquery->store_result();
                    if($mquery->num_rows>0){
                      $mquery->bind_result($mimage,$mtoken);
              ?>
      <div class="modal-content">
        <?php $num=1;
              while($mquery->fetch()){

        ?>
        
        <div class="mySlides">
          <div class="numbertext"><?php echo $num++;?> / <?php echo $count;?></div>
          <img src="admin/img/<?php echo $mimage ;?>" style="width:100%">
          <div class="caption-container">
        
          <p id="caption"><h3><?php echo strtoupper("$mtoken");  ?></h3></p>
        </div>
        </div>

        <?php
              }
          }
          }
          }
          ?>
         
      
      </div>
      <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>

    <!-- design -->

   <!--footer  Starts -->
    <footer>
        <div class="container">
           
            <br>
            <div class="row">
                 <div class="col-md-2 col-md-offset-5">
                    <div class="pull-rigth">
                        <div class="row">
                            <div class="col-xs-3 ">
                                <a href="https://www.facebook.com/industrycell/" target="_blank"><img src="img/fb.png" width="30px" alt=""></a>
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
        </div></footer>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/model.js"></script>
    <script src="js/scrollCategory.js"></script>
    <script src="js/loadingscript.js"></script>
    <script>
         $(function() { // when the DOM is ready...
            //  Move the window's scrollTop to the offset position of #now
            $(window).scrollTop($('#<?php echo $id; ?>').offset().top);
        });
    </script>
    
  </body>
  </div>
</html>