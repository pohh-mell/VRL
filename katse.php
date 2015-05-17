<?php
$host = "eu-cdbr-azure-north-c.cloudapp.net";
	$user = "bb8f29df6ad035";
	$pwd = "461b6fa7";
	$db = "ehaaletusdata";
$con = mysqli_connect($host, $user, $pwd, $db);
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}	


                    $sql = "SELECT kandidaadid.id as Number,kandidaadid.nimi as Nimi,piirkond as Piirkond ,x.Nimi as Erakond, IFNULL(abi,0) as Hääli FROM kandidaadid
left join (select Haal,count(Haal) as abi from users group by users.haal) as t on kandidaadid.id=t.Haal
left join erakonnad as x on kandidaadid.Erakonna_id=x.id;";
					



					//$sql = "SELECT * FROM kandidaadid
//left join (select Haal,count(1) from users group by users.haal) as t on kandidaadid.id=t.Haal;";
					$result = $con->query($sql);
					echo "<tr>
							<th>Nr</th>
							<th>Nimi</th>
							<th>Piirkond</th>
							<th>Erakond</th>
							<th>Hääli</th>
							</tr>";
					if($result->num_rows != 0){
						while($rows = $result->fetch_assoc()){
							$nr = $rows["Number"];
							$Nimi = $rows["Nimi"];
							$Piirkond = $rows["Piirkond"];
							$Erakond = $rows["Erakond"];
							$Hääli = $rows["Hääli"];

							echo "<tr>
							<td>$nr</td>
							<td>$Nimi</td>
							<td>$Piirkond</td>
							<td>$Erakond</td>
							<td>$Hääli</td>
							</tr>";
						}
					}
					else{
    				echo "0 results";
					}

					mysql_close($con);


				
					?>