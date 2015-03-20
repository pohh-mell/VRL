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
					<p>Kandideerimine</p>
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
			<!-- kandidaadi lisamine -->
			<form class="ff1" action="post">
				<div class="block">
	    			<label>Nimi:</label>
	    			<input type="text" id="name-input" name="variable">
				</div>
				<div class="block">
	    			<label>Piirkond:</label>
	    			<input type="text" id="piirkond-input" name="variable">
				</div>
				<div class="block">
	    			<label>Erakond:</label>
	    			<input type="text" id="erakond-input" name="variable">
				</div>
				<div class="block">
	    			<label>Isikukood:</label>
	    			<input type="text" id="isikukood-input" name="variable">
				</div>
				<button class="nupp" type="submit"  id="submit-button">Lisa end kandidaadiks</button>
			</form>
		</div>
	</div>
	<footer>
 		<div class="container">
   			<!-- footeri sisu -->
  		</div>
 	</footer>
</body>
</html>