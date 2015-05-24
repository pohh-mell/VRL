<?php


	$host = "eu-cdbr-azure-north-c.cloudapp.net";
	$user = "bb8f29df6ad035";
	$pwd = "461b6fa7";
	$db = "ehaaletusdata";


mysql_set_charset('utf8', $db);
	// Create connection

$sql3 = "SELECT erakonnad.nimi as Erakond,COUNT(users.Haal) as Hääli from 
((kandidaadid inner join users on kandidaadid.id=users.haal)
inner join erakonnad on kandidaadid.Erakonna_id=erakonnad.id)
group by Erakond;";
$conn = new mysqli($host, $user, $pwd, $db);
	if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
	}

$result3=  $conn->query($sql3);
$valjalist3=array();
if($result3->num_rows != 0){
    while($rows = $result3->fetch_assoc()){
            $abilist = array();
            $erakond = $rows["Erakond"];
            $Hääli = round((float)$rows["Hääli"], 1);
            array_push($abilist, $erakond, $Hääli);
            array_push($valjalist3, $abilist);


                        }
                    }
    echo(json_encode($valjalist3));

$conn->close();
?>


