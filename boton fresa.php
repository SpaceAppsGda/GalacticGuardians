<?php
  include 'connect.php';
  $session=$_GET['session'];
  $user=$_GET['user'];
  $objectid=$_GET['objectid'];
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
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.css" rel="stylesheet">

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
  <body>
    <?php
      include 'header.php';
    ?>
    <div class="container">
    
    <form class="form-signin" method="post">
      <h3>Rate a NEO</h3>
      <p>You are rating NEO <?php echo $_GET['objectid']; ?></p> 
        <select name="select">

          <option value="1">1 min</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5 max</option>
        </select> 

        <button class="btn btn-primary" type="submit" name="submit">Submit</button>
        <?php
          if(isset($_POST['submit'])){
            $query="INSERT INTO RATING VALUES (".$objectid.",'".$user."',".$_POST['select'].");";
            $result = mysql_query($query) or die("You've already voted for this item");
            header("Location:add/index.php?session=1&user=".$user."#tab3");
            }
        ?>
      </form> 

    </div> 
    <?php
      include 'footer.php';
    ?>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
  </body>
</html>