<?php   
    require_once("dbconfig.php");
    $nimi = $_POST['nimi'];
    $isikukood = $_POST['isikukood'];
    $erakond = $_POST['erakond'];
    $piirkond= $_POST['piirkond'];
    $query = "INSERT INTO kandidaadid(Nimi,Piirkond,Erakonna_id,isikukood) VALUES ('$nimi','$piirkond',$erakond,$isikukood);";
    mysql_query($query);
    mysql_close($conn);

?>	