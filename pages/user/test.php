<?php
    session_start();

    if(!(isset($_SESSION['username'])))
    {
         header("Location: video.php?sub=1");
    }

    // $subcode = $_GET['sub'];

    require_once '../../class/project.php';

?>
<!DOCTYPE html>
<html lang="en">
  <head>
   <title>Tests</title>
      <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=11, chorme=1">
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
<link href="../../assets/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href="../../assets/css/style.css" rel="stylesheet" id="bootstrap-css">
 </head>
  <body>

<!-- Top navigation -->
<nav class="navbar navbar-expand-md fixed-top top-nav">
	<div class="container">
		  <a class="navbar-brand" href="../index.php"><strong>Grade Boosters Tutorials</strong></a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"><i class="fa fa-bars" aria-hidden="true"></i></span>
		  </button>

		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		    <ul class="navbar-nav ml-auto">
		      <li class="nav-item">
		        <a class="nav-link" href="../index.php">Home</a>
		      </li>
		      <li class="nav-item active">
                <a class="nav-link" href="#">Test</a>
              </li>
              
              <li class="nav-item ">
                <a class="nav-link" href="Docs.php?sub=1">Documents</a>
              </li>
		      <li class="nav-item">
		        <a class="nav-link" href="video.php?sub=1">Video</a>
		      </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#"><?php  echo "$_SESSION[username]"; ?></a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="../logout.php">Logout</a>
                </div>
              </li>
		      
		    </ul>
		  </div>	
	</div>
</nav>

<!-- Intro Banner -->

  <div class="block-30 block-30-sm item" style="background-image: url('../../assets/images/menu_4.jpg');" data-stellar-background-ratio="0.5">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-10">
           <span class="subheading-sm">Welcome &nbsp;&nbsp;&nbsp;<?php  echo "$_SESSION[username]"; ?></span>
        </div>
      </div>
    </div>
  </div>

<!--End Intro Banner -->

<!-- Middle -->

<section class="middle-container">
	<div class="container">
		 <div class="row">
		<div class="col-md-12">
<div class="cat-list">  
   
    <div class="row col-md-12">

        <div class="card col-md-4" style="margin: 10px;">
          <div class="card-body" style="height: 250px;">
            <h4 class="card-title" style="text-align: center;"><i class="fas fa-book" style="font-size: 80px; color: #888;"></i></h4>
            <p class="card-text" style="font-size: 20px; font-weight: bold;text-align: center;">Computer Organisation and Design</p>
            
            <a href="../../test/index.php?tn=1" style="position: absolute; bottom: 15px; right: 20px;">Start</a>
            
          </div>
        </div>
        <div class="card col-md-4" style="margin: 10px;">
          <div class="card-body" style="height: 250px;">
            <h4 class="card-title" style="text-align: center;"><i class="fas fa-book" style="font-size: 80px; color: #888;"></i></h4>
            <p class="card-text" style="font-size: 20px; font-weight: bold;text-align: center;">Programing with Python - I</p>
           
            <a href="../../test/index.php?tn=2" style="position: absolute; bottom: 15px; right: 20px;">Start</a>
            
          </div>
        </div>
        <div class="card col-md-4" style="margin: 10px;">
          <div class="card-body" style="height: 250px;">
            <h4 class="card-title" style="text-align: center;"><i class="fas fa-book" style="font-size: 80px; color: #888;"></i></h4>
            <p class="card-text" style="font-size: 20px; font-weight: bold;text-align: center;">Free and Open Source Software</p>
            
            <a href="../../test/index.php?tn=3" style="position: absolute; bottom: 15px; right: 20px;">Start</a>
            
          </div>
        </div>
        <div class="card col-md-4" style="margin: 10px;">
          <div class="card-body" style="height: 250px;">
            <h4 class="card-title" style="text-align: center;"><i class="fas fa-book" style="font-size: 80px; color: #888;"></i></h4>
            <p class="card-text" style="font-size: 20px; font-weight: bold;text-align: center;">Database Systems</p>
            
            <a href="../../test/index.php?tn=4" style="position: absolute; bottom: 15px; right: 20px;">Start</a>
            
          </div>
        </div>
        <div class="card col-md-4" style="margin: 10px;">
          <div class="card-body" style="height: 250px;">
            <h4 class="card-title" style="text-align: center;"><i class="fas fa-book" style="font-size: 80px; color: #888;"></i></h4>
            <p class="card-text" style="font-size: 20px; font-weight: bold;text-align: center;">Discrete Mathematics</p>
           
            <a href="../../test/index.php?tn=5" style="position: absolute; bottom: 15px; right: 20px;">Start</a>
            
          </div>
        </div>
        <div class="card col-md-4" style="margin: 10px;">
          <div class="card-body" style="height: 250px;">
            <h4 class="card-title" style="text-align: center;"><i class="fas fa-book" style="font-size: 80px; color: #888;"></i></h4>
            <p class="card-text" style="font-size: 20px; font-weight: bold;text-align: center;">Descriptive Statistics and Introduction to Probablity</p>
            
            <a href="../../test/index.php?tn=6" style="position: absolute; bottom: 15px; right: 20px;">Start</a>
            
          </div>
        </div>
        <div class="card col-md-4" style="margin: 10px;">
          <div class="card-body" style="height: 250px;">
            <h4 class="card-title" style="text-align: center;"><i class="fas fa-book" style="font-size: 80px; color: #888;"></i></h4>
            <p class="card-text" style="font-size: 20px; font-weight: bold;text-align: center;">Soft Skills Development</p>
            <a href="../../test/index.php?tn=7" style="position: absolute; bottom: 15px; right: 20px;">Start</a>
            
          </div>
        </div>
        

    </div>

        </div>
         </div>
	</div>
</section>


<!-- Middle -->

      <!--- Footer  --->
<footer>
  <div class="container">
	<div class="row">		
		<div class=" col-md-12 text-center">
          Copyright &copy; 2019 reserved by Grade Boosters Tutorials. 
       </div>
   </div>
  </div>
</footer>



<script src="../../assets/js/jquery.min.js"></script>
 <script src="../../assets/js/bootstrap.min.js"></script>
 <script src="../../assets/js/main.js"></script>   
  </body>
</html>