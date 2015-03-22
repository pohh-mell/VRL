<?php 
session_start();
session_unset();
 $url = $_SESSION['url'];
    $_SESSION['FBID'] = NULL;
    $_SESSION['FULLNAME'] = NULL;
    $_SESSION['EMAIL'] =  NULL;
header("Location: http://e-haaletus.azurewebsites.net/$url");      // you can enter home page here ( Eg : header("Location: " ."http://www.krizna.com"); 
?>
