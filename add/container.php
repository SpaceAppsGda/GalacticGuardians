<?php
  if($user==""){
    header("Location: http://10.43.7.44//GalacticGuardians/register.php");
  }
?>
<style type="text/css">
      body {
        padding-top: 20px;
        padding-bottom: 60px;
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
</style>
<div class="jumbotron">
    <div class="tabbable"> <!-- Only required for left/right tabs -->
  		<ul class="nav nav-tabs">
  		    <li class="active"><a href="#tab1" data-toggle="tab">Add NEO</a></li>
  		    <li><a href="#tab2" data-toggle="tab">Top 10</a></li>
            <li><a href="#tab3" data-toggle="tab">Database</a></li>
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
        			<div class="active item"><img src="../img/1.png"></div>
        			<div class="item"><img src="../img/2.png"></div>
        			<div class="item"><img src="../img/3.png"></div>
                    <div class="item"><img src="../img/4.png"></div>
        			<div class="item"><img src="../img/5.png"></div>
        		</div>
    		<!-- Carousel nav -->
    		    <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
                <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
	        </div>
            <a class="btn btn-large btn-success" href="#myModal" role"button" class="btn" data-toggle="modal">Add your own NEO</a>
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
        <?php include '../home.php' ?>
    	</div>
        <div class="tab-pane" id="tab3">
    	   <?php include 'tabla.php' ?>
    	</div>
    </div>
</div>