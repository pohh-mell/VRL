<?php
$title = "Kandidaadid";
$link = "http://e-haaletus.azurewebsites.net/";
include "header.php";
?>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script type="text/javascript">
	window.addEventListener("load", function(){
        
	setInterval(getTable,5000);}
	, true);


function getTable(){
$.ajax({
                url:"katse.php",
                type:"POST",
                success: function(){
                        alert("success");
                },      
                error: function(){
                        alert("error");
                        
                }
                
        });


}
</script>
	<div class="container">
		<div class="middle">
		
			<ol class="singleline">			
		
			<li><select class="Valikud1"  >
				<option value="">------</option>
	   		    <option value="1">Kogu Eesti</option>
			    <option value="asd">asd</option>
			    <option value="Võrumaa">Võrumaa</option>
			  	<option value="Valgamaa">Valgamaa</option>
			</select></li>
						
				<li><select class="Valikud">	
					<option value="tühi">------</option>
						<?php
						require_once("andmed.php");
						$conn=database();
						//Query the database
						$resultSet = $conn->query("SELECT nimi FROM erakonnad group by nimi;");
						if($resultSet->num_rows != 0){
							while($rows = $resultSet->fetch_assoc()){
								$errakond = $rows['nimi'];
								echo"<option value=$errakond>$errakond</option>";
							}
						}
						$conn->close();
						?>
						</select></li>
			
			<li><form method="get" action="">
				<input type="text" class="Valikud" name="search" id="search-text"  value="" placeholder="Sisesta kandidaadi nimi">
			</form></li>
			</ol>
			
			<table id="t01">
				
			<?php include "katse.php"; ?>

			</table>
		</div>
	</div>
<?php include "footer.php"; ?>

