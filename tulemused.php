<?php
$title = "Tulemused";
$link = "http://e-haaletus.azurewebsites.net/";
include "header.php";
?>
	<div class="container">
		<div class="middle">
		
			<ol class="singleline">			
		
			<button id="ErakonnadNupp">Erakonnad</button>
			<button id="KandidaadidNupp">Kandidaadid</button>
			
			</ol>
			
			<table id="t01">
				<?php
					
					require_once("andmed.php");
					$conn=database();
					$sql = "SELECT erakonnad.Nimi AS Erakond, erakonnad.Esimees AS Esimees, IFNULL(sum(kandidaadid.haali),0) AS Hääli
							FROM erakonnad 
							LEFT JOIN kandidaadid ON erakonnad.id=kandidaadid.Erakonna_id 
							GROUP BY Erakond;";
					$result = $conn->query($sql);
					echo "<tr>
							<th>Erakond</th>
							<th>Esimees</th>
							<th>Hääli</th>
							</tr>";
					if($result->num_rows != 0){
						while($rows = $result->fetch_assoc()){
							$Erakond = $rows["Erakond"];
							$Esimees = $rows["Esimees"];
							$Hääli = $rows["Hääli"];

							echo "<tr>
							<td>$Erakond</td>
							<td>$Esimees</td>
							<td>$Hääli</td>
							</tr>";
						}
					}
					else{
    				echo "0 results";
					}

					mysql_close($conn);
					?>
			</table>
			<table id="t02">
			<?php
			require_once("andmed.php");
					$conn=database();

	
					$sql = "SELECT kandidaadid.id AS Number,kandidaadid.Nimi AS Nimi, kandidaadid.Piirkond AS Piirkond,
					 erakonnad.Nimi AS Erakond, kandidaadid.haali AS Hääli
						FROM kandidaadid  LEFT JOIN erakonnad 
						ON kandidaadid.Erakonna_id=erakonnad.id
						GROUP BY kandidaadid.id;";
					$result = $con->query($sql);
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

					mysql_close($con);


				
					?>
				</table>
		</div>
	</div>
<?php include "footer.php"; ?>
 <script src="ajaxviited.js"</script>