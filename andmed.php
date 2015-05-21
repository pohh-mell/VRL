<?php


	$host = "eu-cdbr-azure-north-c.cloudapp.net";
	$user = "bb8f29df6ad035";
	$pwd = "461b6fa7";
	$db = "ehaaletusdata";
    $valjalist= array();
    $sql = "SELECT kandidaadid.id as Number,kandidaadid.nimi as Nimi,piirkond as Piirkond ,x.Nimi as Erakond, IFNULL(abi,0) as Hääli FROM kandidaadid
left join (select Haal,count(Haal) as abi from users group by users.haal) as t on kandidaadid.id=t.Haal
left join erakonnad as x on kandidaadid.Erakonna_id=x.id
order by Number;";


mysql_set_charset('utf8', $db);
	// Create connection


$conn = new mysqli($host, $user, $pwd, $db);
	if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
	}
$result=  $conn->query($sql);


if($result->num_rows != 0){
    while($rows = $result->fetch_assoc()){
            $abilist = array();
            $Nimi = $rows["Nimi"];
            $Hääli = round((float)$rows["Hääli"], 1);
            array_push($abilist, $Nimi, $Hääli);
            array_push($valjalist, $abilist);


                        }
                    }
    echo(json_encode($valjalist));

