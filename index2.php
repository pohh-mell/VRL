<?php
session_start(); 
?>
<!doctype html>
<html xmlns:fb="http://www.facebook.com/2008/fbml">
  <head>
    <title>Login with Facebook</title>
<link href="http://www.bootstrapcdn.com/twitter-bootstrap/2.2.2/css/bootstrap-combined.min.css" rel="stylesheet"> 
 </head>
  <body>
  <?php if ($_SESSION['FBID']): ?>      <!--  After user login  -->
<div class="container">
<div class="hero-unit">
  <h1>Hello <?php echo $_SESSION['USERNAME']; ?></h1>
  <p>Welcome to "facebook login" tutorial</p>
  </div>
<div class="span4">
 <ul class="nav nav-list">
<li class="nav-header">Image</li>
	<li><img src="https://graph.facebook.com/<?php echo $_SESSION['FBID']; ?>/picture"></li>
<li class="nav-header">Facebook ID</li>
<li><?php echo  $_SESSION['FBID']; ?></li>
<li class="nav-header">Facebook fullname</li>
<li><?php echo $_SESSION['FULLNAME']; ?></li>
<li class="nav-header">Facebook Email</li>
<li><?php echo $_SESSION['EMAIL']; ?></li>
<div><a href="logout.php">Logout</a></div>
</ul></div></div>
    <?php else: ?>     <!-- Before login --> 
<header>
    <div class="container">
      <div class="row">
        <div class="col-xs-9 col-md-9 col-lg-9">  
          <h1><a href="">E-hääletus</a></h1>
        </div>
        <div class ="kl col-xs-3 col-md-3 col-lg-3">
          <?php if ($_SESSION['FBID']): ?>
          <div class ="row">
            <?php echo "Tere tulemast, " . $_SESSION['FULLNAME']; ?>
          </div>
          <div class ="row">
            <a href="logout.php">Logout</a>
            </div>
          <div class ="row">
          <!-- Sisselogimata --> 
          <?php else: ?>
          <div class ="row">
            <div class="fb-login-button" id="aff" onlogin="Login();" data-max-rows="1" data-size="medium" data-show-faces="false" data-auto-logout-link="false"></div>
          </div>
          <div class ="row">
            <input id="out" style="visibility:hidden"  type="button" value="Log out" onclick="Logout();" >
          </div>
          <div class ="row">
          <?php endif ?>
            <p>
              <a href=""><img src="picid/ENG.png" id="ENG" alt="eng" style="width:10%"></a>
              <a href=""><img src="picid/EE.png" id="EE" alt="ee" style="width:10%"></a>
            </p>
          </div>      
        </div>
      </div>
    </div>
  </header> 
  <div class="container">
    <div class="middle">    
      <div class="row">
        <div class="col-xs-8 col-md-4  col-md-offset-1">
          <a href="http://e-haaletus.azurewebsites.net/kandidaadid.php" class="wide blue"><img src="http://i62.tinypic.com/ojzw9.jpg" alt="kandidaadid" class="pilt">KANDIDAADID</a>
        </div>
        <div class="col-xs-8 col-md-4 col-md-offset-1">
          <a href="http://e-haaletus.azurewebsites.net/statistika.php" class="wide blue"><img src="http://i57.tinypic.com/2qbi06s.png" alt="statistika" class="pilt2">STATISTIKA</a>
        </div>
        <div class="col-xs-8 col-md-4 col-md-offset-1">
          <a href="http://e-haaletus.azurewebsites.net/tulemused.php" class="wide blue"><img src="http://i57.tinypic.com/ta1ytl.png" alt="tulemused" class="pilt">TULEMUSED</a>
        </div>
        <div class="col-xs-8 col-md-4 col-md-offset-1">
          <a href="http://e-haaletus.azurewebsites.net/kandideerimine.php" style="visibility:hidden" id="kandideerimine" class="wide blue"><img src="http://i62.tinypic.com/ojzw9.jpg" alt="kandideeri" class="pilt">KANDIDEERI</a>
        </div>
      </div>
    </div>
  </div>
  <footer>
    <div class="container">
        <!-- footeri sisu -->
      </div>
  </footer>
</body>
</html>
    
