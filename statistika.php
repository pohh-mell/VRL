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
					<p>Statistika</p>
				</div>
				<div class ="kl col-xs-3 col-md-3 col-lg-3">
					 <?php if ($_SESSION['FBID']): ?>
                  <div class ="row">
                    <?php echo "Tere tulemast, " . $_SESSION['FULLNAME']; ?>
                  </div>
                  
                  <div class ="row">
                    <a href="logout.php">Logout</a>
                  </div>
                 
                  <!-- Sisselogimata --> 
                  <?php else: ?>
                  <div class ="row">
                    <a href="fbconfig.php">Login with Facebook</a>
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
			
		</div>	
	</div>
	<footer>
 		<div class="container">
   			<!-- footeri sisu -->
  		</div>
 	</footer>
</body>
</html>