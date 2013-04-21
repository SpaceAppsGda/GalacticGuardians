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
      <a class="brand" href="http://localhost/GalacticGuardians/index.php">NEObserver</a>
      <div class="nav-collapse collapse">
         <form method="post" class="navbar-form pull-right">
              <?php 
                if($session!=1){
                if (isset($_POST['submit'])) { 
				  
                  $ID = $_POST['ID'];
                  $password = $_POST['password'];
                  $query = "select * from user where username='$user' and pass='$password'";
                  $result = mysql_query($query) or die ("Error in query: $query. " .mysql_error());
                  if (mysql_num_rows($result)==1) {
                    header('Location: index.php?session=1&ID='.$ID);
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
              
              print '<p>Hola! <a href="profile">'.$user.'</a> <a href="index.php?session=0">Logout</a></p>';
            }

            ?>
          </form>
          <ul class="nav">
              <li class="active"><a href="add">Add NEO</a></li>
              <li class="active"><a href="Register.html">Register</a></li>
          </ul>
      </div><!--/.nav-collapse -->
    </div>
  </div>
</div>
