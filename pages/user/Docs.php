<?php
    session_start();

    if(!(isset($_SESSION['username'])))
    {
         header("Location: video.php?sub=1");
    }

    $subcode = $_GET['sub'];

    require_once '../../class/project.php';

?>
<!DOCTYPE html>
<html lang="en">
  <head>
   <title>Documents</title>
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
		      <li class="nav-item">
                <a class="nav-link" href="test.php">Test</a>
              </li>
              
              <li class="nav-item  active">
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
		<div class="col-md-3">
<div class="cat-list">
	<h3>SEMESTER - I</h3>
	<ul>
		    <li><a href="Docs.php?sub=1">Computer Organisation and Design</a></li>
        <li><a href="Docs.php?sub=2">Programing with Python - I</a></li>
        <li><a href="Docs.php?sub=3">Free and Open Source Software</a></li>
        <li><a href="Docs.php?sub=4">Database Systems</a></li>
        <li><a href="Docs.php?sub=5">Discrete Mathematics</a></li>
        <li><a href="Docs.php?sub=6">Descriptive Statistics and Introduction to Probablity</a></li>
        <li><a href="Docs.php?sub=7">Soft Skills Development</a></li>
	</ul>
</div>
<br>
<div class="cat-list">
  <h3>SEMESTER - II</h3>
  <ul>
        <li><a href="Docs.php?sub=8">Programming with C</a></li>
        <li><a href="Docs.php?sub=9">Programming with Python– II</a></li>
        <li><a href="Docs.php?sub=10">Linux</a></li>
        <li><a href="Docs.php?sub=11">Data Structures</a></li>
        <li><a href="Docs.php?sub=12">Calculus</a></li>
        <li><a href="Docs.php?sub=13">Statistical Methods and Testing of Hypothesis</a></li>
        <li><a href="Docs.php?sub=14">Green Technologies</a></li>
  </ul>
</div>
<br>
<div class="cat-list">
  <h3>SEMESTER - III</h3>
  <ul>
        <li><a href="Docs.php?sub=15">Theoryof Computation</a></li>
        <li><a href="Docs.php?sub=16">Core JAVA</a></li>
        <li><a href="Docs.php?sub=17">Operating System</a></li>
        <li><a href="Docs.php?sub=18">Database Management Systems</a></li>
        <li><a href="Docs.php?sub=19">Combinatorics and Graph Theory </a></li>
        <li><a href="Docs.php?sub=20">Physical Computing and IoT Programming </a></li>
        <li><a href="Docs.php?sub=21">Skill Enhancement: Web Programming </a></li>
  </ul>
</div>
<br>
<div class="cat-list">
  <h3>SEMESTER - IV</h3>
  <ul>
        <li><a href="Docs.php?sub=22">Fundamentals of Algorithms</a></li>
        <li><a href="Docs.php?sub=23">Advanced JAVA</a></li>
        <li><a href="Docs.php?sub=24">Computer Networks</a></li>
        <li><a href="Docs.php?sub=25">Software Engineering </a></li>
        <li><a href="Docs.php?sub=26">Linear Algebra using Python </a></li>
        <li><a href="Docs.php?sub=27">.NET Technologies</a></li>
        <li><a href="Docs.php?sub=28">Skill Enhancement: Android Developer Fundamentals</a></li>
  </ul>
</div>
<br>
<div class="cat-list">
  <h3>SEMESTER - V</h3>
  <ul>
        <li><a href="Docs.php?sub=29">Artificial Intelligence </a></li>
        <li><a href="Docs.php?sub=30">Software Testing and Quality Assurance</a></li>
        <li><a href="Docs.php?sub=31">Information and Network Security</a></li>
        <li><a href="Docs.php?sub=32">Architecting of IoT</a></li>
        <li><a href="Docs.php?sub=33">Game Programming</a></li>
  </ul>
</div>
<br>
<div class="cat-list">
  <h3>SEMESTER - VI</h3>
  <ul>
        <li><a href="Docs.php?sub=34">Wireless Sensor Networks and Mobile Communication</a></li>
        <li><a href="Docs.php?sub=35">Cyber Forensics</a></li>
        <li><a href="Docs.php?sub=36">Digital Image Processing</a></li>
        <li><a href="Docs.php?sub=37">Data Science</a></li>
        <li><a href="Docs.php?sub=38">Ethical Hacking</a></li>
  </ul>
</div>
        </div>
        <div class="col-md-9 cat-products">
      <h3 class="cate-head">
        <?php 
        if($subcode==1){
            echo "Computer Organisation and Design";
        }
        if($subcode==2){
            echo "Programing with Python - I";
        }
        if($subcode==3){
            echo "Free and Open Source Software";
        }
        if($subcode==4){
            echo "Database Systems";
        }
        if($subcode==5){
            echo "Discrete Mathematics";
        }
        if($subcode==6){
            echo "Descriptive Statistics and Introduction to Probablity";
        }
        if($subcode==7){
            echo "Soft Skills Development";
        }
        if($subcode==8){
            echo "Programming with C";
        }
        if($subcode==9){
            echo "Programming with Python– II";
        }
        if($subcode==10){
            echo "Linux";
        }
        if($subcode==11){
            echo "Data Structures";
        }
        if($subcode==12){
            echo "Calculus";
        }
        if($subcode==13){
            echo "Statistical Methods and Testing of Hypothesis";
        }
        if($subcode==14){
            echo "Green Technologies";
        }
        if($subcode==15){
            echo "Theoryof Computation";
        }
        if($subcode==16){
            echo "Core JAVA";
        }
        if($subcode==17){
            echo "Operating System";
        }
        if($subcode==18){
            echo "Database Management Systems";
        }
        if($subcode==19){
            echo "Combinatorics and Graph Theory";
        }
        if($subcode==20){
            echo "Physical Computing and IoT Programming";
        }
        if($subcode==21){
            echo "Skill Enhancement: Web Programming";
        }
        if($subcode==22){
            echo "Fundamentals of Algorithms";
        }
        if($subcode==23){
            echo "Advanced JAVA";
        }
        if($subcode==24){
            echo "Computer Networks";
        }
        if($subcode==25){
            echo "Software Engineering";
        }
        if($subcode==26){
            echo "Linear Algebra using Python";
        }
        if($subcode==27){
            echo ".NET Technologies";
        }
        if($subcode==28){
            echo "Skill Enhancement: Android Developer Fundamentals";
        }
        if($subcode==29){
            echo "Artificial Intelligence";
        }
        if($subcode==30){
            echo "Software Testing and Quality Assurance";
        }
        if($subcode==31){
            echo "Information and Network Security";
        }
        if($subcode==32){
            echo "Architecting of IoT";
        }
        if($subcode==33){
            echo "Game Programming";
        }
        if($subcode==34){
            echo "Wireless Sensor Networks and Mobile Communication";
        }
        if($subcode==35){
            echo "Cyber Forensics";
        }
        if($subcode==36){
            echo "Digital Image Processing";
        }
        if($subcode==37){
            echo "Data Science";
        }
        if($subcode==38){
            echo "Ethical Hacking";
        }


        ?>
          
      </h3>
    <hr/>
   
    <div class="row">

    <?php



            $condition ="subject = ".$_GET['sub'];

            $rows = $objproject->select("*", "docs", "$condition");
            // pre($rows);
            $rows = json_decode($rows, true);

            foreach ($rows as $row) {
                # code...
             $filepath = $row['file'];
        ?>            
        <div class="card col-md-3" style="margin: 10px;">
          <div class="card-body" style="height: 250px;">
            <h4 class="card-title" style="text-align: center;"><i class="fas fa-book" style="font-size: 80px; color: #888;"></i></h4>
            <p class="card-text" style="font-size: 20px; font-weight: bold;text-align: center;"><?php echo "$row[title]";?></p>
            <h6 style="font-size: 12px;"><?php echo "$row[desciption]";?></h6>
            <a href="<?php echo $filepath;?>" download style="position: absolute; bottom: 15px; right: 20px;">Download</a>
            
          </div>
        </div>
        <?php
         }
        ?>

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