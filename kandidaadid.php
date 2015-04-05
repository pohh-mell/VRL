<?php
$title = "Kandidaadid";
$link = "http://e-haaletus.azurewebsites.net/";
include "header.php";
?>
	<div class="container">
		<div class="middle">		
			<ol class="singleline">				
			<li><select class="Valikud1"  >
				<option value="">------</option>
	   		    <option value="1">Kogu Eesti</option>
			    <option value="asd">asd</option>
			    <option value="Võrumaa">Võrumaa</option>
			  	<option value="Valgamaa">Valgamaa</option>
			</select></li>					
			<li><select class="Valikud">	
				<option value="tühi">------</option>
				<?php
				require_once("andmed.php");
				$conn=database();
				//Query the database
				$resultSet = $conn->query("SELECT nimi FROM erakonnad group by nimi;");
				if($resultSet->num_rows != 0){
					while($rows = $resultSet->fetch_assoc()){
						$errakond = $rows['nimi'];
						echo"<option value=\"$errakond\">$errakond</option>";
					}
				}
				$conn->close();
				?>
			</select></li>
			<li><form method="get" action="">
				<input type="text" class="Valikud" name="search" id="search-text"  value="" placeholder="Sisesta kandidaadi nimi">
			</form></li>
			</ol>			
			<table id="t01"></table>
		</div>
	</div>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js" type="text/javascript"></script>
<script src="kandidaadid.js" type="text/javascript"></script>
<?php include "footer.php"; ?>

