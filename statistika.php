<?php
$title = "Statistika";
$link = "http://e-haaletus.azurewebsites.net/";
include "header.php";
?>

<script src="http://code.highcharts.com/highcharts.js"></script>
<script src="http://code.highcharts.com/modules/exporting.js"></script>




	<div class="container">
		<div class="middle">
			<ol class="singleline">
			<li><select onchange="funktioon();">
	   		    <option value="Kogu Eesti">Kogu Eesti</option>
			    <option value="Tartumaa">Partei</option>
			</select></li>
			</ol>

			<script type="text/javascript" src="javaskript.js">
    			function funktioon() {
          		        
   				}
			</script>


			<div id="container2" style="min-width: 310px; height: 400px; max-width: 600px; margin: 0 auto">
				
				





			</div>


		</div>	
	</div>
<?php include "footer.php"; ?>