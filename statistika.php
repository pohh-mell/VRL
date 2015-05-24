<?php
$title = "Statistika";
$link = "http://e-haaletus.azurewebsites.net/";
include "header.php";
?>
	<div class="container">
		<div class="middle">
			<ol class="singleline">
			<li><select id = "statvalik" onchange="funktioon();"> 
				<option value="tyhi">---------</option>
	   		    <option value="Kogu Eesti">Kogu Eesti</option>
			    <option value="Piirkond">Piirkonnad</option>
			    <option value="Partei">Parteid</option>
			</select></li>
			</ol>
			<div class="diagramm" id="container2">
			</div>
		</div>	
</div>
<input type="hidden" id="koguest2" name="Language" value='<?php include  "andmed.php";?>'>
<input type="hidden" id="piirk" name="Language" value='<?php include  "piirkonnaandmed.php";?>'>
<!--<input type="hidden" id="erak" name="Language" value='<?php include  "erakonnaandmed.php";?>'>-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"  type="text/javascript"></script>
<script src="highcharts.js" type="text/javascript"></script>
<script src="exporting.js" type ="text/javascript"></script>
<script src="statistika.js" type="text/javascript"></script>
<?php include "footer.php"; ?>