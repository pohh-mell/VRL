<?php

function database($valik){
    $sql=$valik;
	$host = "eu-cdbr-azure-north-c.cloudapp.net";
	$user = "bb8f29df6ad035";
	$pwd = "461b6fa7";
	$db = "ehaaletusdata";
    $valjastring="";
mysql_set_charset('utf8', $db);
	// Create connection
$conn = new mysqli($host, $user, $pwd, $db);
	if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
	}
$result=  $conn->query($sql);
if($result->num_rows != 0){
    while($rows = $result->fetch_assoc()){
            $Nimi = $rows["Nimi"];
            $Hääli = $rows["Hääli"];
            $abi = $Nimi . "," . $Hääli ';';
            $valjastring .= $abi;


                        }
                    }
    echo $valjastring;
	return $valjastring;
}
