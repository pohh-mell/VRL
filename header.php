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
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="external.css">
    <link rel="stylesheet" type="text/css" href="main.css">
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
                    <?php endif ?>
                </div>
            </div>
        </div>
    </header> 