<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Template &middot; Bootstrap</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 20px;
        padding-bottom: 60px;
      }

      /* Custom container */
      .container {
        margin: 0 auto;
        max-width: 1000px;
      }
      .container > hr {
        margin: 60px 0;
      }

      /* Main marketing message and sign up button */
      .jumbotron {
        margin: 80px 0;
        text-align: center;
      }
      .jumbotron h1 {
        font-size: 100px;
        line-height: 1;
      }
      .jumbotron .lead {
        font-size: 24px;
        line-height: 1.25;
      }
      .jumbotron .btn {
        font-size: 21px;
        padding: 14px 24px;
      }

      /* Supporting marketing content */
      .marketing {
        margin: 60px 0;
      }
      .marketing p + h4 {
        margin-top: 28px;
      }


      /* Customize the navbar links to be fill the entire space of the .navbar */
      .navbar .navbar-inner {
        padding: 0;
      }
      .navbar .nav {
        margin: 0;
        display: table;
        width: 100%;
      }
      .navbar .nav li {
        display: table-cell;
        width: 1%;
        float: none;
      }
      .navbar .nav li a {
        font-weight: bold;
        text-align: center;
        border-left: 1px solid rgba(255,255,255,.75);
        border-right: 1px solid rgba(0,0,0,.1);
      }
      .navbar .nav li:first-child a {
        border-left: 0;
        border-radius: 3px 0 0 3px;
      }
      .navbar .nav li:last-child a {
        border-right: 0;
        border-radius: 0 3px 3px 0;
      }*/
    </style>
    <link href="css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="../assets/ico/favicon.png">
  </head>

  <body>

    <div class="container">

      <div class="masthead">
        <h3 class="muted">Project name</h3>
        <div class="navbar">

                <a href="#"><button class="btn btn-large btn-primary pull-right" type="button">Profile</button></a>

        </div><!-- /.navbar -->
      </div>

      <!-- Jumbotron -->
      <div class="jumbotron">
        
                <div class="tabbable"> <!-- Only required for left/right tabs -->
    				<ul class="nav nav-tabs">
    					<li class="active"><a href="#tab1" data-toggle="tab">Add NEO</a></li>
   						<li><a href="#tab2" data-toggle="tab">DataBase</a></li>
                        <li><a href="#tab3" data-toggle="tab">Glosary</a></li>
    				</ul>
    				<div class="tab-content">
    					<div class="tab-pane active" id="tab1">
                        
                        
                            <div id="myCarousel" class="carousel slide">
    							<ol class="carousel-indicators">
    								<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    								<li data-target="#myCarousel" data-slide-to="1"></li>
    								<li data-target="#myCarousel" data-slide-to="2"></li>
                                    <li data-target="#myCarousel" data-slide-to="3"></li>
    								<li data-target="#myCarousel" data-slide-to="4"></li>
    							</ol>
   							<!-- Carousel items -->
    							<div class="carousel-inner">
    								<div class="active item"><img src="img/1.png"></div>
    								<div class="item"><img src="img/2.png"></div>
    								<div class="item"><img src="img/3.png"></div>
                                    <div class="item"><img src="img/4.png"></div>
    								<div class="item"><img src="img/5.png"></div>
    							</div>
    						<!-- Carousel nav -->
    							<a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
    							<a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
    						</div>
                        
                        
                        
    						<a class="btn btn-large btn-success" href="#myModal" role"button" class="btn" data-toggle="modal">Add your own NEO</a>
        
   
     
    		<!-- Modal -->
   		<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
   			<div class="modal-header">
    			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    			<h3 id="myModalLabel">Add NEO</h3>
   		 	</div>
    	<div class="modal-body">
    		<form class="form-signin">
       				<input type="text" class="input-block-level" placeholder="Date" name="Date">
        			<input type="text" class="input-block-level" placeholder="Place of Discovery" name="PlaceOfDiscovery">
        			<input type="text" class="input-block-level" placeholder="Magnitude" name="Magnitude">
        			<input type="text" class="input-block-level" placeholder="Number of Observations" name="NoObservations">
        			<input type="text" class="input-block-level" placeholder="Arc" name="Arc">
        			<input type="text" class="input-block-level" placeholder="Orbital" name="Orbital">
                    <input type="text" class="input-block-level" placeholder="Discoverer" name="Discoverer">
					<textarea type="text" class="input-block-level" rows="5" placeholder="Notes" name="Notes"></textarea>
					
      		</form>
    	</div>
    	
        	<div class="modal-footer">
    			<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
    			<button class="btn btn-primary">Save changes</button>
    		</div>
    	</div>
        
    					</div>
    					<div class="tab-pane" id="tab2">
                Hola
    						
    					</div>
                <div class="tab-pane" id="tab3">
    						<?php
                  include 'home.php';
                ?>
    					</div>
    				</div>
    			</div>
        
        
      
      </div>

      <div class="footer pull-left">
        <p>&copy; Company 2013</p>
      </div>

    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
  </body>
</html>
