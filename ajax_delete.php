<?php   
    require_once("dbconfig.php");
    $nimi = $_POST['nimi'];
    
    $query = "UPDATE `ehaaletusdata`.`users` SET `Haal`='0' WHERE `Fuid`='$nimi';";
    mysql_query($query);
    mysql_close($conn);

?>	