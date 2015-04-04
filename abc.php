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