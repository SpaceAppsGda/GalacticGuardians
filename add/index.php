<?php
  include 'connect.php';
  $session=$_GET['session'];
  $user=$_GET['user'];
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>NASA &middot; Neobserver</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="../css/bootstrap.css" rel="stylesheet">
    <link href="../css/bootstrap-responsive.css" rel="stylesheet">-->
   
    <link href="../Scripts/jtable/themes/lightcolor/gray/jtable.css" rel="stylesheet" type="text/css" />

    <script src="../js/jquery.js" type="text/javascript"></script>
    <script src="../scripts/jquery-ui-1.8.16.custom.min.js" type="text/javascript"></script>
    <script src="../Scripts/jtable/jquery.jtable.js" type="text/javascript"></script>
    <style type="text/css">
    table {
    font-size: 90%;
    }
    </style>

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../GalacticGuardians/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../GalacticGuardians/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../GalacticGuardians/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../GalacticGuardians/ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="../GalacticGuardians/ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="../GalacticGuardians/ico/favicon.png">
  </head>

  <body>
    <?php
	    include '../header.php';
    ?>
    <div class="container">
      <?php
        include 'container.php';
      ?>
    
    <?php
      include '../footer.php';
    ?>
    </div> 
    <script src="../js/bootstrap.js"></script>
  </body>
</html>
