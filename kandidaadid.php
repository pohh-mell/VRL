<?php
$title = "Kandidaadid";
$link = "http://e-haaletus.azurewebsites.net/";
include "header.php";
session_start(); 
?>
<input type="hidden" name="fbide" id="fbide" value="<?php echo  $_SESSION['FBID'];?>" />
	<div class="container">
		<div class="middle">				
			<?php if ($_SESSION['FBID']): ?>		
			<ol class="singleline">
				<li><form method="get">
					<input type="text" class="Hääleta" name="hääleta" id="hääleta"  value="" placeholder="Sisesta kandidaadi nr!">
					<button type="button" onclick="hääletafunc()" id="submit-button">Hääleta</button>
					<button type="button" onclick="eemaldafunc()" id="submit-button">Eemalda hääl</button>
				</form></li>
			</ol>
			<?php else: ?>
			<ol class="singleline">
				<li>
					<p> Kandidaadile hääle andmiseks logige sisse. </p>
				</li>
			</ol>
			<?php endif ?>  

			<table id="t01"></table>

			<ol class="singleline">			
				<p>Otsing:</p>	
				<li><select class="Valikud"  >
					<option value="">------</option>
		   		    <?php
					require_once("andmebaas.php");
					$conn=database();
					//Query the database
					$resultSet = $conn->query("SELECT piirkond, id FROM kandidaadid group by piirkond;");
					if($resultSet->num_rows != 0){
						while($rows = $resultSet->fetch_assoc()){
							$piirrkond = $rows['piirkond'];
							$piirid = $rows['id'];
							echo"<option value=\"$piirid\">$piirrkond</option>";
						}
					}
					$conn->close();
					?>
				</select></li>					
				<li><select class="Valikud">	
					<option value="tühi">------</option>
					<?php
					require_once("andmebaas.php");
					$conn=database();
					//Query the database
					$resultSet = $conn->query("SELECT nimi, id FROM erakonnad group by nimi;");
					if($resultSet->num_rows != 0){
						while($rows = $resultSet->fetch_assoc()){
							$errakond = $rows['nimi'];
							$eraid = $rows['id'];
							echo"<option value=\"$eraid\">$errakond</option>";
						}
					}
					$conn->close();
					?>
				</select></li>
				<li><form method="get">
					<input type="text" class="Valikud" name="search" id="search-text"  value="" placeholder="Sisesta kandidaadi nimi">
				</form></li>
			</ol>	
		</div>
	</div>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js" type="text/javascript"></script>
<script src="kandidaadid.js" type="text/javascript"></script>
<script src="haal.js" type="text/javascript"></script>
<?php include "footer.php"; ?>

