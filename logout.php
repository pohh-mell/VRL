<?php 
session_start();
$url = $_SESSION['url'];
session_unset();
	$_SESSION['EMAIL'] =  NULL;
    $_SESSION['FBID'] = NULL;
    $_SESSION['FULLNAME'] = NULL;
//header("Location: index.php");      // you can enter home page here ( Eg : header("Location: " ."http://www.krizna.com"); 
	header("Location: http://e-haaletus.azurewebsites.net$url");
?>
