<?php
session_start(); 
$_SESSION['url'] = $_SERVER['REQUEST_URI'];
?>

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
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js" type="text/javascript"></script>

	<!-- Latest compiled JavaScript -->
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js" type="text/javascript"></script>
</head>
<body>
	<header>
		<div class="container">
			<div class="row">
				<div class="col-xs-9 col-md-9 col-lg-9">  
					<h1><a href="http://e-haaletus.azurewebsites.net/">E-hääletus</a></h1>
					<p>Tulemused</p>
				</div>
				<div class ="kl col-xs-3 col-md-3 col-lg-3">
					<?php if ($_SESSION['FBID']): ?>
                  	<div class ="row">
                    	<p><?php echo "Tere tulemast, " . $_SESSION['FULLNAME']; ?></p>
                  	</div>
                  
                  	<div class ="row">
            			<a class="aad" href="logout.php"><button class="btn btn-facebook">Logi välja</button></a>
		            </div>
           
		            <!-- Sisselogimata --> 
		            <?php else: ?>
		            <div class ="row">
		   	        	<a class="aad" href="fbconfig.php"><button class="btn btn-facebook"><i class="fa fa-facebook"></i> | Logi sisse</button></a>
		            </div>

                  	<?php endif ?>
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
	<footer>
 		<div class="container">
   			<!-- footeri sisu -->
  		</div>
 	</footer>
</body>
</html>