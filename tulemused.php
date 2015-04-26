<?php
$title = "Tulemused";
$link = "http://e-haaletus.azurewebsites.net/";
include "header.php";
?>
	<div class="container">
		<div class="middle">
			<ol class="singleline">			
				<li>
					<a id="ErakonnadNupp">Erakonnad</a>
					<a id="KandidaadidNupp">Kandidaadid</a>
				</li>
			</ol>
			<div id="Era" style="display: none;">
                       
			<table class="Era" id ="t01">
				<tr>
							<th>Erakond</th>
							<th>Esimees</th>
							<th>Hääli</th>
							</tr><tr>
							<td>Java</td>
							<td>Karl</td>
							<td>103</td>
							</tr><tr>
							<td>Java Naiskond</td>
							<td>Meelis</td>
							<td>1</td>
							</tr><tr>
							<td>püüton</td>
							<td>lärr</td>
							<td>0</td>
							</tr><tr>
							<td>Uss</td>
							<td>Keili</td>
							<td>3</td>
							</tr>
			</table>
		</div>
		<div id="kand" style="display: none;">
			<table class ="kand" id="t02">
					<tr>
							<th>Nr</th>
							<th>Nimi</th>
							<th>Piirkond</th>
							<th>Erakond</th>
							<th>Hääli</th>
							</tr>
							<tr>
							<td>1</td>
							<td>Karl</td>
							<td>Tartu</td>
							<td>Java</td>
							<td>007</td>
							</tr>
							<tr>
							<td>2</td>
							<td>Hilx</td>
							<td>Tartu</td>
							<td>Java Naiskond</td>
							<td>2</td>
							</tr>
							
						
				</table>
		</div>
		</div>

	</div>
	<script src="jquery-1.11.2.min.js"></script>
 	<script src="ajaxviited.js" defer> </script>
<?php include "footer.php"; ?>