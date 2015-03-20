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
						<p id="aff"></br>SISENE: <fb:login-button scope="public_profile,email" onlogin="checkLoginState();">
						</fb:login-button>
						</p>		  
					</div>
					<div class ="row">
						<input id="clickMe" type="button" value="Log out" onclick="LogOut();">
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
			
			<table style="width:100%" id="t01">
				<?php
					
					require_once("andmed.php");
					$conn=database();
					$sql = "SELECT kandidaadid.number AS Number,kandidaadid.Nimi AS Nimi, kandidaadid.Piirkond AS Piirkond, erakonnad.Nimi AS Erakond, kandidaadid.haali AS Hääli 
						FROM kandidaadid LEFT JOIN erakonnad 
						ON kandidaadid.Erakonna_id=erakonnad.id
						GROUP BY Number;;	";
					$result = $conn->query($sql);

					$meielist= array();

					if ($result->num_rows > 0) {
   					 // output data of each row
    					while($row = $result->fetch_assoc()) {
    						console.log("JÕUDSIN");
    						array_push($meielist, array("Nr."=>$row["Number"], "Nimi" => $row["Nimi"], "Piirkond" => $row["Piirkond"], "Erakond"=>$row["Erakond"], "Hääli" =>$row["Hääli"]));
        	
    						}
						} else {
    				echo "0 results";
					}

					$conn->close();
					build_table($meielist);
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

