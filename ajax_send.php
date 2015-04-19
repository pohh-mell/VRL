<?php   
    require_once("dbconfig.php");
    $nimi = $_POST['nimi'];
    $nr = $_POST['nr'];
    
    $query = "UPDATE `ehaaletusdata`.`users` SET `Haal`='$nr' WHERE `Fuid`='$nimi';";
    mysql_query($query);
    mysql_close($conn);

?>	