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
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link href='http://fonts.googleapis.com/css?family=Old+Standard+TT:700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="/css/kujundus.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"  type="text/javascript"></script>
    <!-- Latest compiled JavaScript -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"  type="text/javascript"></script>
</head>
<body>
    <header>
        <div class="container">
            <div class="row">
                <div class="col-xs-8 col-md-9 col-lg-9">  
                    <h1><a href="<?php echo $link; ?>">E-hääletus</a></h1>
                    <p><?php echo $title; ?></p>
                </div>
                <div class ="kl col-xs-4 col-md-3 col-lg-3">
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
                            <a href=""><img src="picid/ENG.png" id="ENG" alt="eng" style="width: 10%"></a>
                            <a href=""><img src="picid/EE.png" id="EE" alt="ee" style="width: 10%"></a>
                        </p>
                    </div>     
                </div>
            </div>
        </div>
    </header> 