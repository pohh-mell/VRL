<?php
session_start(); 
$_SESSION['url'] = $_SERVER['REQUEST_URI'];
?>
<!DOCTYPE html>
<html>
<head>
  <title>E-hääletus</title>
  <link rel="icon" href="picid/lipp.jpg" type="image/x-icon">
  <meta charset="UTF-8">
  <meta name="description" content="Free Web tutorials">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="keywords" content="HTML,CSS,XML,JavaScript">
  <meta name="author" content="Hege Refsnes">
  
  <link href='http://fonts.googleapis.com/css?family=Old+Standard+TT:700' rel='stylesheet' type='text/css'>
  
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

  <link rel="stylesheet" type="text/css" href="kujundus.css">
</head>
<body>
<header>
    <div class="container">
        <div class="row">
            <div class="col-xs-9 col-md-9 col-lg-9">  
                <h1><a href="<?php echo $link; ?>">E-hääletus</a></h1>
                <p><?php echo $title; ?></p>
            </div>
            <div class ="kl col-xs-3 col-md-3 col-lg-3">
                <?php if ($_SESSION['FBID']): ?>
                <div class ="row">
                    <p><?php echo "Tere tulemast, " . $_SESSION['FULLNAME']; ?></p>
                </div>
                
                <div class ="row">
                    <a href="logout.php" class="aad btn btn-facebook">Logi välja</a>
                </div>
               
                <!-- Sisselogimata --> 
                <?php else: ?>
                <div class ="row">
                    <a class="aad btn btn-facebook" href="fbconfig.php"><i class="fa fa-facebook"></i> | Logi sisse</a>
                </div>

                <div class ="row">
                    <br>
                </div>

                <?php endif ?>
                <div class ="row">
                    <p>
                        <a href=""><img src="picid/ENG.png" id="ENG" alt="eng"></a>
                        <a href=""><img src="picid/EE.png" id="EE" alt="ee"></a>
                    </p>
                </div>     
            </div>
        </div>
    </div>
  </header> 