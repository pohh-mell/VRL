<?php
$title = "Statistika";
$link = "http://e-haaletus.azurewebsites.net/";
include "header.php";
?>
<style>
.diagramm{
	min-width: 310px; 
	height: 400px; 
	max-width: 600px; 
	margin: 0 auto;
}
</style>

	<div class="container">
		<div class="middle">
			<ol class="singleline">
			<li><select> <!-- onchange="funktioon();" -->
	   		    <option value="Kogu Eesti">Kogu Eesti</option>
			    <option value="Tartumaa">Partei</option>
			</select></li>
			</ol>
			<div class="diagramm" id="container2">
			</div>
		</div>	
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"  type="text/javascript"></script>
<script src="highcharts.js" type="text/javascript"></script>
<script src="exporting.js" type="text/javascript"></script>
<!--<script src="statistika.js" type="text/javascript"></script>-->
<?php include "footer.php"; ?>