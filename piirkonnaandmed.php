<?php


	$host = "eu-cdbr-azure-north-c.cloudapp.net";
	$user = "bb8f29df6ad035";
	$pwd = "461b6fa7";
	$db = "ehaaletusdata";


mysql_set_charset('utf8', $db);
	// Create connection

$sql2 = "SELECT piirkond as Piirkond, IFNULL(abi,0) as Hääli FROM kandidaadid
left join (select Haal,count(Haal) as abi from users group by users.haal) as t on kandidaadid.id=t.Haal Group by piirkond;";
$conn = new mysqli($host, $user, $pwd, $db);
	if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
	}

$result2=  $conn->query($sql2);
$valjalist2=array();
if($result2->num_rows != 0){
    while($rows = $result2->fetch_assoc()){
            $abilist = array();
            $piirkond = $rows["Piirkond"];
            $Hääli = round((float)$rows["Hääli"], 1);
            array_push($abilist, $Nimi, $Hääli);
            array_push($valjalist2, $abilist);#


                        }
                    }
#$_SESSION['piirkond'] = json_encode($valjalist2);
   # $_SESSION['koguestonia'] = json_encode($valjalist);
    echo(json_encode($valjalist));


?>


