<?php
$title = "Statistika";
$link = "http://e-haaletus.azurewebsites.net/";
include "header.php";
?>
	<div class="container">
		<div class="middle">
			<ol class="singleline">
			<li><select id = "statvalik" onchange="funktioon();"> 
	   		    <option value="Kogu Eesti">Kogu Eesti</option>
			    <option value="Piirkond">Piirkonnad</option>
			    <option value="Partei">Parteid</option>
			</select></li>
			</ol>
			<div class = "eestiandmed" id="koguest">
			<?php
				include "andmed.php";
				?>
			</div>
			<div class = "eestiandmed" id="koguest2">
				<p>
				<?php echo "auhauh"; ?>
			</p>
			</div>
			<div class="diagramm" id="container2">
			</div>
		</div>	
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"  type="text/javascript"></script>
<script src="highcharts.js" type="text/javascript"></script>
<script src="exporting.js" type ="text/javascript"></script>
<script src="statistika.js" type="text/javascript"></script>
<?php include "footer.php"; ?>