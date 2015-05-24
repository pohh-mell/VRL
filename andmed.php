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

    $sql2 = "SELECT kandidaadid.Piirkond as Piirkond,COUNT(users.Haal) as Hääli from kandidaadid
left join users on kandidaadid.id=users.haal group by piirkond;";

$sql3 = "SELECT erakonnad.nimi as Erakond,COUNT(users.Haal) as Hääli from 
((kandidaadid inner join users on kandidaadid.id=users.haal)
inner join erakonnad on kandidaadid.Erakonna_id=erakonnad.id)
group by Erakond;";


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


$result2=  $conn->query($sql2);
$valjalist2=array();
if($result2->num_rows != 0){
    while($rows = $result2->fetch_assoc()){
            $abilist = array();
            $piirkond = $rows["Piirkond"];
            $Hääli = round((float)$rows["Hääli"], 1);
            array_push($abilist, $piirkond, $Hääli);
            array_push($valjalist2, $abilist);


                        }
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

$lopp = array($valjalist, $valjalist2, $valjalist3);    
echo(json_encode($lopp)); 

$conn->close();
?>