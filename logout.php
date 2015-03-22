<?php 
session_start();
session_unset();
// $url = $_SESSION['url'];
    $_SESSION['FBID'] = NULL;
    $_SESSION['FULLNAME'] = NULL;
    $_SESSION['EMAIL'] =  NULL;
//header("Location: http://e-haaletus.azurewebsites.net/$url");      // you can enter home page here ( Eg : header("Location: " ."http://www.krizna.com"); 
//header("Location: index.php");
if ( isset( $session ) ) {

  // graph api request for user data
  $request = new FacebookRequest( $session, 'GET', '/me' );
  $response = $request->execute();
  // get response
  $graphObject = $response->getGraphObject();
      $url = $_SESSION['url'];
     
  header("Location: http://e-haaletus.azurewebsites.net/$url");
 
} else {
  $loginUrl = $helper->getLoginUrl();
 header("Location: ".$loginUrl);
}
?>
