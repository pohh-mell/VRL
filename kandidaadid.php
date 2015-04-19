<?php
$title = "Kandidaadid";
$link = "http://e-haaletus.azurewebsites.net/";
include "header.php";
session_start(); 
?>
<script type="text/javascript">
	function hääletafunc() {
		alert("töötab");
		sendTable();
	}


	function sendTable(){
        $.ajax({
        		var idekas = '<%=Session["FBID"] %>';
        		alert(idekas);
                url:"ajax_send.php",
                type:"POST",
                data:{nimi: idekas,
                nr:document.getElementById("hääleta").value
                },
                success: function(){
                	alert("Hääl on antud!");
                },      
                error: function(){
                        alert("Kandidaadi lisamine ebaõnnestus");
                }
                
        });
}

</script>
	<div class="container">
		<div class="middle">		
			<ol class="singleline">				
				<li><select class="Valikud"  >
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
							echo"<option value=\"$errakond\">$errakond</option>";
						}
					}
					$conn->close();
					?>
				</select></li>
				<li><form method="get">
					<input type="text" class="Valikud" name="search" id="search-text"  value="" placeholder="Sisesta kandidaadi nimi">
				</form></li>
			</ol>	
			<?php if ($_SESSION['FBID']): ?>		
			<ol class="singleline">
				<li><form method="get">
					<input type="text" class="Hääleta" name="hääleta" id="hääleta"  value="" placeholder="Sisesta kandidaadi nr!">
					<button id="hääleta-nupp" onclick="hääletafunc()">Hääleta</button>
				</form></li>
			</ol>
			<?php endif ?>  
			<table id="t01"></table>
		</div>
	</div>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js" type="text/javascript"></script>
<script src="kandidaadid.js" type="text/javascript"></script>
<?php include "footer.php"; ?>

