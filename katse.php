<?php
$q = intval($_GET['q']);

$host = "eu-cdbr-azure-north-c.cloudapp.net";
	$user = "bb8f29df6ad035";
	$pwd = "461b6fa7";
	$db = "ehaaletusdata";
$con = mysqli_connect($host, $user, $pwd, $db);
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}	
	echo"jõudsiphp "; 
	echo $q+"    ";

					if($q=="1"){
						$sql = "SELECT * FROM ehaaletusdata.abi;";
					}else{
						$kaktus = "asd";
					$sql = "SELECT * FROM ehaaletusdata.abi piirkond = $kaktus ";
				}
					$result = $conn->query($sql);
					echo "<tr>
							<th>Nr</th>
							<th>Nimi</th>
							<th>Piirkond</th>
							<th>Erakond</th>
							<th>Hääli</th>
							<th></th>
							</tr>";
					if($result->num_rows != 0){
						while($rows = $result->fetch_assoc()){
							$nr = $rows["Number"];
							$Nimi = $rows["Nimi"];
							$Piirkond = $rows["Piirkond"];
							$Erakond = $rows["Erakond"];
							$Hääli = $rows["Hääli"];

							echo "<tr>
							<td>$nr</td>
							<td>$Nimi</td>
							<td>$Piirkond</td>
							<td>$Erakond</td>
							<td>$Hääli</td>
							<td>Hääleta</td>
							</tr>";
						}
					}
					else{
    				echo "0 results";
					}

					mysql_close($conn);


				
					?>