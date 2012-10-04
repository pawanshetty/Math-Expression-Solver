<!DOCTYPE html>
<?php require_once("EvalMath.php"); ?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Math Expression Test</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="The math expression test done in PHP and twitter bootstrap">
    <meta name="author" content="Pawan Shetty">

    <!-- Used all the frontend materials of twitter bootstrap including the jquery implementation -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <style>
      body {
        padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
      }
    </style>
    <link href="css/bootstrap-responsive.css" rel="stylesheet">

    
  </head>

  <body>
<!--Navigation menu-->
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="#">Math Solver</a>
          
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="active"><a href="index.php">Home</a></li>
              <li><a href="Resume.php">About Me</a></li>
             </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container">
        <!--Modal popup from bootstrap its much more customizable and dynamic and nice-->

   <div class="hero-unit">
         <h1>
         <?php
         $expr = $_POST["text"];
         $m=new EvalMath;
         $result = $m->evaluate($expr);
         echo $expr." = ".$result;
         ?>
         </h1>
 <p style="margin-top:20px">Solution </p>
           
  </p>
</div>
 </div> <!-- /container ends here -->

    <!-- Le javascript :)
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
<script src="js/jquery-1.8.2.js"></script> 
<script src="bootstrap.min.js"></script>
    <script src="js/bootstrap-transition.js"></script>
    <script src="js/bootstrap-alert.js"></script>
    <script src="js/bootstrap-modal.js"/>
    <script src="js/bootstrap-dropdown.js"></script>
    <script src="js/bootstrap-button.js"></script>
    <script src="js/bootstrap-collapse.js"></script>
   </body>
</html>


