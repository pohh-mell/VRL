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
        alert("tühi");
        return;
    } else { 
    	alert("else");
        if (window.XMLHttpRequest) {
        	alert("piisav browser");
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
        	alert("odav browser");
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        alert("get ready");
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            	alert("document.getelement");
                document.getElementById("t01").innerHTML = xmlhttp.responseText;
            }
        }
        alert("open");
        xmlhttp.open("GET","katse.php?q="+str,true);
        alert("send");
        xmlhttp.send(); alert("kõik done");
    }
}	


</script>
	<div class="container">
		<div class="middle">
		
			<ol class="singleline">			
		
			<li><select class="Valikud1" onchange="uuenda(this.value)" >
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
			<button class="nupp" type="submit" onclick="uuenda()" id="submit-button">Otsi</button>
			</ol>
			
			<table id="t01">
				<?php include "katse.php"
				 ?>
			

			</table>
		</div>
	</div>
<?php include "footer.php"; ?>

