<?php


	$host = "eu-cdbr-azure-north-c.cloudapp.net";
	$user = "bb8f29df6ad035";
	$pwd = "461b6fa7";
	$db = "ehaaletusdata";


mysql_set_charset('utf8', $db);
	// Create connection

$sql2 = "SELECT kandidaadid.Piirkond as Piirkond,COUNT(users.Haal) as Hääli from kandidaadid
left join users on kandidaadid.id=users.haal group by piirkond;";
$conn2 = new mysqli($host, $user, $pwd, $db);
	if (!$conn2) {
	    die("Connection failed: " . mysqli_connect_error());
	}

$result2=  $conn2->query($sql2);
$valjalist2=array();
if($result2->num_rows != 0){
    while($rows = $result2->fetch_assoc()){
            $abilist = array();
            $piirkond = $rows["Piirkond"];
            $Hääli = round((float)$rows["Hääli"], 1);
            if($Hääli != 0){
                array_push($abilist, $piirkond, $Hääli);
                array_push($valjalist, $abilist);
            }

                        }
                    }
    echo(json_encode($valjalist2));

$conn2->close();
?>


