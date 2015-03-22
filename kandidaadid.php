<!DOCTYPE HTML SYSTEM>
<html>
<head>
	<title>E-hääletus</title>
	<link rel="icon" href="picid/lipp.jpg" type="image/x-icon">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="description" content="Free Web tutorials">
	<meta name="keywords" content="HTML,CSS,XML,JavaScript">
	<meta name="author" content="Hege Refsnes">

	<link href='http://fonts.googleapis.com/css?family=Old+Standard+TT:700' rel='stylesheet' type='text/css'>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="kujundus.css">
	
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"  type="text/javascript"></script>

	<!-- Latest compiled JavaScript -->
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"  type="text/javascript"></script>
</head>
<body>
<script src="facebook.js"  type="text/javascript">
</script>
	<header>
		<div class="container">
			<div class="row">
				<div class="col-xs-9 col-md-9 col-lg-9">  
					<h1><a href="http://e-haaletus.azurewebsites.net/">E-hääletus</a></h1>
					<p>Kandidaadid</p>
				</div>
				<div class ="kl col-xs-3 col-md-3 col-lg-3">
					<div class ="row">
						 <a href="fbconfig.php">Logi sisse</a>
					</div>
					<div class ="row">
						<input id="out" style="visibility:hidden"  type="button" value="Log out" onclick="LogOut();" >
					</div>
					<div class ="row">
						<p>
							<a href=""><img src="picid/ENG.png" id="ENG" alt="eng" style="width:10%"></a>
							<a href=""><img src="picid/EE.png" id="EE" alt="ee" style="width:10%"></a>
						</p>
					</div>			
				</div>
			</div>
		</div>
	</header>
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
				<input type="text" class="Valikud" name="search" id="search-text"  value="" Placeholder="Sisesta kandidaadi nimi" />
			</form></li>
			
			</ol>
			
			<table id="t01">
				<?php
					
					require_once("andmed.php");
					$conn=database();
					$sql = "SELECT kandidaadid.id AS Number,kandidaadid.Nimi AS Nimi, kandidaadid.Piirkond AS Piirkond,
					 erakonnad.Nimi AS Erakond, kandidaadid.haali AS Hääli
						FROM kandidaadid LEFT JOIN erakonnad 
						ON kandidaadid.Erakonna_id=erakonnad.id
						GROUP BY kandidaadid.id;";
					$result = $conn->query($sql);
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

					mysql_close($conn);
					?>
			</table>
		</div>
	</div>
	<footer>
 		<div class="container">
   			<!-- footeri sisu -->
  		</div>
 	</footer>
</body>
</html>

