 <link href="../GalacticGuardians/css/bootstrap.css" rel="stylesheet">
      <style type="text/css">
        body {
          padding-top: 40px;
          padding-bottom: 40px;
          background-color: #f5f5f5;
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
<div class="container1">
       <div class="row">
            <div class="span1"><i class="icon-search icon-envelope"></i></div>
      <div class="span4">...</div>
     <div class="span2 offset2">
     <div class="row">
	 <?php 
		$USERquery=mysql_query("SELECT UserName FROM user WHERE UserName='$user'") or die (mysql_error());
		$USER=mysql_fetch_array($USERquery);
	?>
     <div class="text-right"><br/><br/><?php echo $user?><br/>"Guardian of the galaxy" <br/> progreso 250/300</div>
     <div class="progress progress-striped">
       <div class="bar" style="width: 80%;"></div>
     </div>
     </div>
     </div> 
            <div class="span3"><img src="../img/drax.jpg" class="img-polaroid"></img></div>
       </div>
             <!-- Jumbotron -->
      <div class="jumbotron">
        
                <div class="tabbable"> <!-- Only required for left/right tabs -->
      
      
            

      <ul class="nav nav-tabs">
              <li><a href="#tab1" data-toggle="tab">MyNeos</a>
              <li><a href="#tab2" data-toggle="tab">My Scores</a></li>
              <li><a href="#tab3" data-toggle="tab">Following NEOS</a></li>

            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="tab1">
               Test
              </div>
              <div class="tab-pane" id="tab2">
                <?php
                $query = "SELECT neo.ObjectID, Category, PlaceOfDiscovery, Magnitude, NoObservations, Arc, Orbital,  `Date` , neo.UserName, Discoverer, AVG( rate ) AS average FROM neo
                INNER JOIN rating ON neo.objectid = rating.objectid
                GROUP BY neo.objectid and neo.Username = '$user';";
                  $result = mysql_query($query) or die ("Error in query: $query. " .mysql_error());
                  if (mysql_num_rows($result)>=1) {
                    echo 'Tienes NEOs';
                    include 'myratings.php';
                  }
                  else{
                    echo '<font color="red">No tienes NEOs</font>';
                  }
                  ?>


              </div>
                        <div class="tab-pane" id="tab3">
                          <?php
                $query = "select * from rating where username='$user'";
                  $result = mysql_query($query) or die ("Error in query: $query. " .mysql_error());
                  if (mysql_num_rows($result)>=1) {
                    echo 'Tienes NEOs';
                    include 'followingneos.php';
                  }
                  else{
                    echo '<font color="red">No tienes NEOs</font>';
                  }
                  ?>
              </div>
            </div>
          </div>


    </div> <!-- /container -->
