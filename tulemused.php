<?php
$title = "Tulemused";
$link = "http://e-haaletus.azurewebsites.net/";
include "header.php";
?>
	<div class="container">
		<div class="middle">
		
			<ol class="singleline">			
		
			<a href="#C4">Erakonnad</a>
			<a href="#C4">Kandidaadid</a>
			
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
		</div>
	</div>
<?php include "footer.php"; ?>