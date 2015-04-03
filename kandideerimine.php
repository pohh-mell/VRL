<?php
$title = "Kandideerimine";
include "header-k.php";
?>
<?php 	if( $_POST ){
		require_once("dbconfig.php");
		
		$nimi = $_POST['nimi'];
		$isikukood = $_POST['isikukood'];
		$erakond = $_POST['erakond'];
		$piirkond= $_POST['piirkond'];
		$query = "INSERT INTO kandidaadid(Nimi,Piirkond,Erakonna_id,isikukood) VALUES ('$nimi','$piirkond',$erakond,$isikukood);";
		mysql_query($query);
		mysql_close($conn);
	}


	?>
	
	<div class="container">
		<div class="middle">
			<!-- kandidaadi lisamine -->
			<form class="ff1" action="<?php $_PHP_SELF ?>" method="post">
				<div class="block">
	    			<label>Nimi:</label>
	    			<input type="text" id="nimi" name="nimi">
				</div>
				<div class="block">
	    			<label>Piirkond:</label>
	    			<input type="text" id="piirkond" name="piirkond">
				</div>
				<div class="block">
	    			<label>Erakond:</label>
	    			<input type="text" id="erakond" name="erakond">
				</div>
				<div class="block">
	    			<label>Isikukood:</label>
	    			<input type="text" id="isikukood" name="isikukood">
				</div>
				<button class="nupp" type="submit"  id="submit-button">Lisa end kandidaadiks</button>
			</form>
		</div>
	</div>
	
<?php include "footer.php"; ?>
 <?php else: ?>
 <meta http-equiv="refresh" content="0; url=http://e-haaletus.azurewebsites.net/index.php" />
<?php endif ?>