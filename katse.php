<?php
					
					require_once("andmed.php");
					$conn=database();
					$sql = "SELECT kandidaadid.id AS Number,kandidaadid.Nimi AS Nimi, kandidaadid.Piirkond AS Piirkond,
					 erakonnad.Nimi AS Erakond, kandidaadid.haali AS Hääli
						FROM kandidaadid LEFT JOIN erakonnad 
						ON kandidaadid.Erakonna_id=erakonnad.id
						GROUP BY kandidaadid.id;";
					$result = $conn->query($sql);
					echo "<tr>
							<th>Nr</th>
							<th>Nimi</th>
							<th>Piirkond</th>
							<th>Erakond</th>
							<th>Hääli</th>
							<th></th>
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
							<td>Hääleta</td>
							</tr>";
						}
					}
					else{
    				echo "0 results";
					}

					mysql_close($conn);
					?>