<?php
$title = "Tulemused";
$link = "http://e-haaletus.azurewebsites.net/";
include "header.php";
?>
	<div class="container">
		<div class="middle">
		
			<ol class="singleline">			
		
			<li><select class="Valikud">
	   		    <option value="Kogu Eesti">Kogu Eesti</option>
			    <option value="Tartumaa">Tartumaa</option>
			    <option value="Võrumaa">Võrumaa</option>
			  	<option value="Harjumaa">Harjumaa</option>
			</select></li>
			
			<li><select class="Valikud">
	   		    <option value="Kõik Erakonnad">Kõik Erakonnad</option>
			    <option value="JAVA">JAVA</option>
			    <option value="MUNA">MUNA</option>
			</select></li>
			
			<li><form method="get" action="">
				<input type="text" class="Valikud" name="search" id="search-text"  value="" placeholder="Sisesta kandidaadi nimi" />
			</form></li>
			
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