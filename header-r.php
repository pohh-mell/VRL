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
    <link rel="stylesheet" type="text/css" href="external.css">
    <link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
    <header>
        <div class="container">
            <div class="row">
                <div class="col-xs-8 col-md-9 col-lg-9">  
                    <h1><a href="http://e-haaletus.azurewebsites.net/">E-hääletus</a></h1>
                </div>
                <div class ="kl col-xs-4 col-md-3 col-lg-3">
                    <?php if ($_SESSION['FBID']): ?>
                    <meta http-equiv="refresh" content="0; url=http://e-haaletus.azurewebsites.net/index.php">
                   
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