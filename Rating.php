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
    <title>Sign in &middot; Twitter Bootstrap</title>
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

      <form class="form-signin" method="post">
        <h2 class="form-signin-heading">Grade the NEO</h2>
        <select>
           <option> </option>
          <option onMouseOut="<?php $voto="1" ?>">1 min</option>
          <option onMouseOut="<?php $voto="2" ?>">2</option>
          <option onMouseOut="<?php $voto="3" ?>">3</option>
          <option onMouseOut="<?php $voto="4" ?>">4</option>
          <option onMouseOut="<?php $voto="5" ?>">5 max</option>
           <option> </option>
        </select> 

        <button class="btn btn-large btn-primary" type="submit" name="submit" onMouseOut="<?php
		$prom = ($Obj[0] + $voto)/2;

        mysql_query("UPDATE rating SET Rate ='".$prom."' WHERE ObjectID = '".$SelectNeo."'"); 
		/*echo"<script>history.go(-1)</script>";*/
		?>">Submit</button>
<?php		echo $prom;
		echo $Obj[0];
		echo $voto;
		?>
      </form>

    </div> <!-- /container -->

    <!-- Le javascript

    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../GalacticGuardians/js/jquery.js"></script>
    <script src="../GalacticGuardians/js/bootstrap-transition.js"></script>
    <script src="../GalacticGuardians/js/bootstrap-alert.js"></script>
    <script src="../GalacticGuardians/js/bootstrap-modal.js"></script>
    <script src="../GalacticGuardians/js/bootstrap-dropdown.js"></script>
    <script src="../GalacticGuardians/js/bootstrap-scrollspy.js"></script>
    <script src="../GalacticGuardians/js/bootstrap-tab.js"></script>
    <script src="../GalacticGuardians/js/bootstrap-tooltip.js"></script>
    <script src="../GalacticGuardians/js/bootstrap-popover.js"></script>
    <script src="../GalacticGuardians/js/bootstrap-button.js"></script>
    <script src="../GalacticGuardians/js/bootstrap-collapse.js"></script>
    <script src="../GalacticGuardians/js/bootstrap-carousel.js"></script>
    <script src="../GalacticGuardians/js/bootstrap-typeahead.js"></script>

  </body>
</html>
