<?php 
//$SelectNeo = addslashes($_POST["Pass"]);
$SelectNeo = 1;

$Admin = mysql_connect("10.43.7.44" , "GG" , "starlord") or die (mysql_error());
mysql_select_db("neo");
$IDneo = mysql_query("SELECT Rate FROM rating WHERE ObjectID = '".$SelectNeo."'");
$Obj = mysql_fetch_array($IDneo);
?>

<!DOCTYPE html>
  <html lang="en">
    <head>
      <meta charset="utf-8">
      <title>My Profile</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="description" content="">
      <meta name="author" content="">

      <!-- Le styles -->
      <link href="../GalacticGuardians/css/bootstrap.css" rel="stylesheet">
      <style type="text/css">
        body {
          padding-top: 40px;
          padding-bottom: 40px;
          background-color: #f5f5f5;
		  margin:0;
	      padding:0;
    	  height:100%;
        }
		countent{
		 padding-bottom:100px;
		}

        .form-signin {
          max-width: 300px;
          padding: 19px 29px 29px;
          margin: 0 auto 20px;
          background-color: #fff;
          border: 1px solid #e5e5e5;
          -webkit-border-radius: 5px;
             -moz-border-radius: 5px;
                  border-radius: 5px;
          -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
             -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                  box-shadow: 0 1px 2px rgba(0,0,0,.05);
        }
        .form-signin .form-signin-heading,
        .form-signin .checkbox {
          margin-bottom: 10px;
        }
        .form-signin input[type="text"],
        .form-signin input[type="password"] {
          font-size: 16px;
          height: auto;
          margin-bottom: 15px;
          padding: 7px 9px;
        }

      </style>
      <link href="../GalacticGuardians/css/bootstrap-responsive.css" rel="stylesheet">

      <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
      <!--[if lt IE 9]>
<script src="../assets/js/html5shiv.js"></script>
<![endif]-->

      <!-- Fav and touch icons -->
      <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../GalacticGuardians/ico/apple-touch-icon-144-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../GalacticGuardians/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../GalacticGuardians/ico/apple-touch-icon-72-precomposed.png">
                      <link rel="apple-touch-icon-precomposed" href="../GalacticGuardians/ico/apple-touch-icon-57-precomposed.png">
                                     <link rel="shortcut icon" href="../GalacticGuardians/ico/favicon.png">
    </head>

    <body>

    <div class="container">
       <div class="row">
            <div class="span1"><i class="icon-search icon-envelope"></i></div>
      <div class="span4">...</div>
     <div class="span2 offset2">
     <div class="row">
     <div class="text-right"><br/><br/>Drax The Destroyer<br/>"Guardian of the galaxy" <br/> progreso 250/300</div>
     <div class="progress progress-striped">
       <div class="bar" style="width: 80%;"></div>
     </div>
     </div>
     </div> 
            <div class="span3"><img src="img/drax.jpg" class="img-polaroid"></img></div>
       </div>
             <!-- Jumbotron -->
      <div class="jumbotron">
        
                <div class="tabbable"> <!-- Only required for left/right tabs -->
			
			
            

			<ul class="nav nav-tabs">
              <li><a href="#tab1" data-toggle="tab">MyNeos</a>
              <li><a href="#tab2" data-toggle="tab">Following NEOS</a></li>
              <li><a href="#tab3" data-toggle="tab">Following Guardians</a></li>
               <li><a href="#tab4" data-toggle="tab">My Scores</a></li>

            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="tab1">
               <p>Object ID</p>
              </div>
              <div class="tab-pane" id="tab2">

                <p><a href="#myModal" role="text" class="btn" data-toggle="modal">1</a>		         CMP		                  	17.6			           37	                		5		0.0510949		   2011-1-1		     	Anonymus</p>



<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">Grade this NEO</h3>
  </div>
  <div class="modal-body">
    
<form class="form-signin" method="post">
        <select>
          <option onMouseOut=<?php $voto="1" ?>>1 min</option>
          <option onMouseOut=<?php $voto="2" ?>>2</option>
          <option onMouseOut=<?php $voto="3" ?>>3</option>
          <option onMouseOut=<?php $voto="4" ?>>4</option>
          <option onMouseOut=<?php $voto="5" ?>>5 max</option>
        </select> 

  
      </form>


  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
    <button class="btn btn-primary">Save changes</button>
  </div>
</div>


              </div>
                        <div class="tab-pane" id="tab3">
                <p>Here are the reports of the Guardians that you are following.</p>
              </div>
              <div class="tab-pane" id="tab4">
                <p>Here are the scores that you got for you discoveriers.</p>
              </div

            </div>
          </div>
        
        
      
      </div>

      <div class="footer pull-left">
        <p>&copy; Company 2013</p>
      </div>

    </div> <!-- /container -->

   
    </div> <!-- /container -->
<!-- Le javascript
================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    </body>
  </html>