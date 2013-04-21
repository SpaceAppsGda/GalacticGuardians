<?php
  include 'connect.php';
?> 
<div class="navbar navbar-inverse navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container-fluid">
      <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="brand" href="http://10.43.7.44/GalacticGuardians/index.php"><img src="http://10.43.7.44/GalacticGuardians/img/NEOLogoSmall.png"></a>
      <div class="nav-collapse collapse">
         <form method="post" class="navbar-form pull-right">
            <?php 
            if($session!=1){
                if (isset($_POST['submit'])) { 
				  
                  $user = $_POST['user'];
                  $password = $_POST['password'];
                  $query = "select * from user where username='$user' and pass='$password'";
                  echo $query;
                  $result = mysql_query($query) or die ("Error in query: $query. " .mysql_error());
                  if (mysql_num_rows($result)==1) {
                    header('Location: index.php?session=1&user='.$user);
                  }
                  else{
                    echo '<font color="red">Could not log you in.</font>';
                  }
                }

            print '<input class="span2" type="text" placeholder="Username" name="user">
            <input class="span2" type="password" placeholder="Password" name="password">
            <button name="submit" type="submit" class="btn">Log In</button>';    
            }
            else {
              
              print '<font color="#ffffff">Hola <a href="http://10.43.7.44//GalacticGuardians/profile/index.php?session=1&user='.$user.'"/>'.$user.'</a>! | <a href="index.php?session=0">Logout</a></font>';
            }

            ?>
          </form>
          <ul class="nav">
              <li class="active"><a href=<?php print "http://10.43.7.44/GalacticGuardians/add/index.php?session=".$session."&user=".$user;?>>Add NEO</a></li>
              <?php
              if($session!=1){
                print '<li class="active"><a href= "http://10.43.7.44/GalacticGuardians/register.php">Register</a></li>';
              }
              else {
                print '<li class="active"><a href= "http://10.43.7.44/GalacticGuardians/profile/index.php?session=1&user='.$user.'">Profile</a></li>';
              }
              
              ?>
          </ul>
      </div><!--/.nav-collapse -->
    </div>
  </div>
</div>
