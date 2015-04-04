<?php
$title = "Kandidaadid";
$link = "http://e-haaletus.azurewebsites.net/";
include "header.php";
?>
<script>
	

	function uuenda(str) {
	alert("jõudsin");
    if (str == "") {
        document.getElementById("t01").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("t01").innerHTML = xmlhttp.responseText;
            }
        }
        xmlhttp.open("GET","katse.php?q="+str,true);
        xmlhttp.send();
    }
}	


</script>
	<div class="container">
		<div class="middle">
		
			<ol class="singleline">			
		
			<li><select class="Valikud1" onchange="uuenda(this.value)" >
				<option value="">------</option>
	   		    <option value="1">Kogu Eesti</option>
			    <option value="Tartumaa">Tartumaa</option>
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
			<button class="nupp" type="submit" onclick="uuenda()" id="submit-button">Otsi</button>
			</ol>
			
			<table id="t01">
				<?php include "katse.php"
				 ?>
			

			</table>
		</div>
	</div>
<?php include "footer.php"; ?>

