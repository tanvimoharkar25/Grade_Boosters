<?php
	session_start();

  if(!(isset($_SESSION['username'])))
    {
         header("Location: ../index.php");
    }
  else{
    if ($_SESSION['username']!='admin') {
        header("Location: ../user/Docs.php?sub=1");
    }
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
   <title>Grade Boosters Tutorials</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=11, chorme=1">
   <link rel="stylesheet" href="../../assets/css/font-awesome.min.css" />
<link href="../../assets/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href="../../assets/css/style.css" rel="stylesheet" id="bootstrap-css">
 </head>
  <body>

  	<style type="text/css">
  		#err3,#err4,#err5{
  			display: none;
  		}
  	</style>

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
		        <a class="nav-link active" href="../index.php">Home</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="../../test/add.php">Test</a>
		      </li>
		      
         
		      <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Admin</a>
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
           <span class="subheading-sm">Admin Panel</span>
        </div>
      </div>
    </div>
  </div>

<!--End Intro Banner -->

<!-- Middle -->

<section class="middle-container">
	<div class="container">
		 <div class="row">
         	<div class="col-md-9">

			 <div id="accordion">


    <div class="card">
      <div class="card-header">
        <a class="card-link" data-toggle="collapse" href="#collapseOne">
          Upload Video Reference
        </a>
      </div>
      <div id="collapseOne" class="collapse show" data-parent="#accordion">
        <div class="card-body">
          
          <form method="post" name="myform1" id="myform1">
            <div class="form-group">
              <label for="product">Title:</label>
              <input type="text" class="form-control" name="txttitle" id="txtproduct">
            </div>

            <div class="form-group">
              <label for="product">Subject:</label>
              <select name="ddlcategory" id="ddlcategory" class="form-control" required>
                 <option value="1">Computer Organisation and Design</option>
                 <option value="2">Programing with Python - I</option>
                 <option value="3">Free and Open Source Software</option>
                 <option value="4">Database Systems</option>
                 <option value="5">Discrete Mathematics</option>
                 <option value="6">Descriptive Statistics and Introduction to Probablity</option>
                 <option value="7">Soft Skills Development</option>
                 <option value="8">Programming with C</option>
                 <option value="9">Programming with Python - II</option>
                 <option value="10">Linux</option>
                 <option value="11">Data Structures</option>
                 <option value="12">Calculus</option>
                 <option value="13">Statistical Methods and Testing of Hypothesis</option>
                 <option value="14">Green Technologies</option>
                 <option value="15">Theoryof Computation</option>
                 <option value="16">Core JAVA</option>
                 <option value="17">Operating System</option>
                 <option value="18">Database Management Systems</option>
                 <option value="19">Combinatorics and Graph Theory</option>
                 <option value="20">Physical Computing and IoT Programming</option>
                 <option value="21">Skill Enhancement: Web Programming</option>
                 <option value="22">Fundamentals of Algorithms</option>
                 <option value="23">Advanced JAVA</option>
                 <option value="24">Computer Networks</option>
                 <option value="25">Software Engineering</option>
                 <option value="26">Linear Algebra using Python</option>
                 <option value="27">.NET Technologies</option>
                 <option value="28">Skill Enhancement: Android Developer Fundamentals</option>
                 <option value="29">Artificial Intelligence</option>
                 <option value="30">Software Testing and Quality Assurance</option>
                 <option value="31">Information and Network Security</option>
                 <option value="32">Architecting of IoT</option>
                 <option value="33">Game Programming</option>
                 <option value="34">Wireless Sensor Networks and Mobile Communication</option>
                 <option value="35">Cyber Forensics</option>
                 <option value="36">Digital Image Processing</option>
                 <option value="37">Data Science</option>
                 <option value="38">Ethical Hacking</option>
              </select>
            </div>
            <div class="form-group">
                    <label for="product">Reference Link:</label>
                    <input type="text" class="form-control" name="txtlink" id="txtlink">
                  </div>
                  <div class="form-group">
                    <label for="product">Description:</label>
                    <textarea class="form-control" name="txtdescription" id="txtdescription"></textarea>
                  </div>
                   <button type="button" class="btn btn-primary btnvid" id="btnvid">Save Video</button>
                    <div id="err3" class="alert alert-danger"></div>
            </form>
          
        </div>
      </div>
    </div>


    <div class="card">
      <div class="card-header">
        <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree">
          Upload Documents
        </a>
      </div>
      <div id="collapseThree" class="collapse" data-parent="#accordion">
        <div class="card-body">
          
          <form method="post" name="myform3" id="myform3" enctype="multipart/form-data">
            <div class="form-group">
              <label for="product">Title:</label>
              <input type="text" class="form-control" name="txttitle" id="txtproduct">
            </div>

            <div class="form-group">
              <label for="product">Subject:</label>
              <select name="ddlcategory" id="ddlcategory" class="form-control" required>
                 <option value="1">Computer Organisation and Design</option>
                 <option value="2">Programing with Python - I</option>
                 <option value="3">Free and Open Source Software</option>
                 <option value="4">Database Systems</option>
                 <option value="5">Discrete Mathematics</option>
                 <option value="6">Descriptive Statistics and Introduction to Probablity</option>
                 <option value="7">Soft Skills Development</option>
                 <option value="8">Programming with C</option>
                 <option value="9">Programming with Python - II</option>
                 <option value="10">Linux</option>
                 <option value="11">Data Structures</option>
                 <option value="12">Calculus</option>
                 <option value="13">Statistical Methods and Testing of Hypothesis</option>
                 <option value="14">Green Technologies</option>
                 <option value="15">Theoryof Computation</option>
                 <option value="16">Core JAVA</option>
                 <option value="17">Operating System</option>
                 <option value="18">Database Management Systems</option>
                 <option value="19">Combinatorics and Graph Theory</option>
                 <option value="20">Physical Computing and IoT Programming</option>
                 <option value="21">Skill Enhancement: Web Programming</option>
                 <option value="22">Fundamentals of Algorithms</option>
                 <option value="23">Advanced JAVA</option>
                 <option value="24">Computer Networks</option>
                 <option value="25">Software Engineering</option>
                 <option value="26">Linear Algebra using Python</option>
                 <option value="27">.NET Technologies</option>
                 <option value="28">Skill Enhancement: Android Developer Fundamentals</option>
                 <option value="29">Artificial Intelligence</option>
                 <option value="30">Software Testing and Quality Assurance</option>
                 <option value="31">Information and Network Security</option>
                 <option value="32">Architecting of IoT</option>
                 <option value="33">Game Programming</option>
                 <option value="34">Wireless Sensor Networks and Mobile Communication</option>
                 <option value="35">Cyber Forensics</option>
                 <option value="36">Digital Image Processing</option>
                 <option value="37">Data Science</option>
                 <option value="38">Ethical Hacking</option>
              </select>
            </div>
            <div class="form-group">
                  <label for="product">Upload Document:</label>
                  <input type="file" class="form-control" name="docup" id="docup">
                </div>
                 <div class="form-group">
                  <label for="product">Description:</label>
                  <textarea class="form-control" name="txtdescription" id="txtdescription"></textarea>
                </div>
                 <button type="submit" class="btn btn-primary btndoc" id="btndoc">Upload Document</button>
                  <div id="err5" class="alert alert-danger"></div>
          </form>
          
        </div>
      </div>
    </div>
  
</div>

					
        	</div>
    	</div>
	</div>
</section>

<!-- Middle -->

     <!-- < Footer  -> -->
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
 <script src="../../assets/js/adminupload.js"></script>

</script>
</body>
</html> 