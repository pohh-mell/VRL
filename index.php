<html>
<head>
	<title>E-hääletus</title>
	<link rel="icon" href="picid/lipp.jpg" type="image/x-icon" />
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href='http://fonts.googleapis.com/css?family=Old+Standard+TT:700' rel='stylesheet' type='text/css'>
	
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="kujundus.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</head>
<body>
<script src="javaskript.js">
</script>
	<header>
		<div class="container">
			<div class="row">
				<div class="col-xs-9 col-md-9 col-lg-9">  
					<h1><a href=""></br>E-hääletus</a></h1>
				</div>
				<div class ="col-xs-3 col-md-3 col-lg-3">
					<div class ="row" id="hh">
						<p></br>SISENE: <fb:login-button scope="public_profile,email" onlogin="checkLoginState();">
						</fb:login-button>
						</p>		  
					</div>
					<div class ="row" id="hh">
						<input id="clickMe" type="button" value="clickme" onclick="LogOut();" />
					</div>
					<div class ="row" id="hh">
						<p>
							<a href=""><img src="picid/ENG.png" id="ENG" style="width:10%"/></a>
							<a href=""><img src="picid/EE.png" id="EE" style="width:10%"/></a>
						</p>
					</div>			
				</div>
			</div>
		</div>
	</header>	
	<div class="container">
		<div class="middle">		
			<div class="row">
				<div class="col-xs-8 col-md-4  col-md-offset-1">
					<a href="http://e-haaletus.azurewebsites.net/kandidaadid.php" class="front-page-button">KANDIDAADID</a>
				</div>
				<div class="col-xs-8 col-md-4 col-md-offset-1">
					<a href="http://e-haaletus.azurewebsites.net/statistika.php" class="front-page-button">
						<img src="http://tinyurl.com/ptxtreq" style="width:7%" /> STATISTIKA
					</a>
				</div>
				<div class="col-xs-8 col-md-4 col-md-offset-1">
					<a href="http://e-haaletus.azurewebsites.net/tulemused.php" class="front-page-button">TULEMUSED</a>
				</div>
			</div>
		</div>
	</div>
	<footer>
 		<div class="container">
   			<!-- footeri sisu -->
  		</div>
 	</footer>
</body>
</html>