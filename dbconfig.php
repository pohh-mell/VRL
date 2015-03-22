<?php
define('DB_SERVER', 'eu-cdbr-azure-north-c.cloudapp.net');
define('DB_USERNAME', 'bb8f29df6ad035');    // DB username
define('DB_PASSWORD', '461b6fa7');    // DB password
define('DB_DATABASE', 'ehaaletusdata');      // DB name
$connection = mysql_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD) or die( "Unable to connect");
$database = mysql_select_db(DB_DATABASE) or die( "Unable to select database");
?>