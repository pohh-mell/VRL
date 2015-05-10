<?php
$host = "eu-cdbr-azure-north-c.cloudapp.net";
	$user = "bb8f29df6ad035";
	$pwd = "461b6fa7";
	$db = "ehaaletusdata";
$con = mysqli_connect($host, $user, $pwd, $db);
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}	


                    $sql = "SELECT kandidaadid.id AS Number,kandidaadid.Nimi AS Nimi, kandidaadid.Piirkond AS Piirkond,
                     erakonnad.Nimi AS Erakond, count(users.haal) as Hääli
                        FROM kandidaadid
                        left join erakonnad on kandidaadid.Erakonna_id=erakonnad.id
                        left join users on users.haal=kandidaadid.id
                        group by Nimi
                        order by Number;";
					



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