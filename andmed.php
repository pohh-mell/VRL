<?php

	// DB connection info
	$host = "eu-cdbr-azure-north-c.cloudapp.net";
	$user = "bb8f29df6ad035";
	$pwd = "461b6fa7";
	$db = "ehaaletusdata";

	// Create connection
$conn = new mysqli($host, $user, $pwd, $db);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT kandidaadid.Nimi AS Nimi, kandidaadid.Piirkond AS Piirkond, 
erakonnad.Nimi AS Erakond, kandidaadid.haali AS Hääli FROM erakonnad, kandidaadid 
WHERE kandidaadid.Erakonna_id=erakonnad.id;";
$result = $conn->query($sql);

$meielist= array();

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    	console.log("JÕUDSIN");
    	echo $row["Nimi"]. " " . $row["Piirkond"]." " . $row["Erakond"]. " " . $row["Hääli"]. "<br>";
    	//array_push($meielist, array("Nimi" => $row["Nimi"], "Piirkond" => $row["Piirkond"], "Erakond"=>$row["Erakond"], "Hääli" =>$row["Hääli"]));
        
    }
} else {
    echo "0 results";
}

$conn->close();

print_r($meielist);

function getAllItems()
{
	$conn = connect();
	$sql = "SELECT * FROM items";
	$stmt = $conn->query($sql);
	return $stmt->fetchAll(PDO::FETCH_NUM);
}
function addItem($name, $category, $date, $is_complete)
{
	$conn = connect();
	$sql = "INSERT INTO items (name, category, date, is_complete) VALUES (?, ?, ?, ?)";
	$stmt = $conn->prepare($sql);
	$stmt->bindValue(1, $name);
	$stmt->bindValue(2, $category);
	$stmt->bindValue(3, $date);
	$stmt->bindValue(4, $is_complete);
	$stmt->execute();
}
function deleteItem($item_id)
{
	$conn = connect();
	$sql = "DELETE FROM items WHERE id = ?";
	$stmt = $conn->prepare($sql);
	$stmt->bindValue(1, $item_id);
	$stmt->execute();
}
?>