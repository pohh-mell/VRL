<?php 
//header('Content-type: text/plain; charset=utf-8');

	// DB connection info
	$host = "eu-cdbr-azure-north-c.cloudapp.net";
	$user = "bb8f29df6ad035";
	$pwd = "461b6fa7";
	$db = "ehaaletusdata";
mysql_set_charset('utf8', $db);
	// Create connection
$conn = new mysqli($host, $user, $pwd, $db);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT kandidaadid.number AS Number,kandidaadid.Nimi AS Nimi, kandidaadid.Piirkond AS Piirkond, erakonnad.Nimi AS Erakond, kandidaadid.haali AS Hääli 
FROM kandidaadid LEFT JOIN erakonnad 
ON kandidaadid.Erakonna_id=erakonnad.id
GROUP BY Number;;	";
$result = $conn->query($sql);

$meielist= array();

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    	console.log("JÕUDSIN");
    	array_push($meielist, array("Nr."=>$row["Number"], "Nimi" => $row["Nimi"], "Piirkond" => $row["Piirkond"], "Erakond"=>$row["Erakond"], "Hääli" =>$row["Hääli"]));
        
    }
} else {
    echo "0 results";
}

$conn->close();

function build_table($array){

    // start table

    $html = '<table>';

    // header row

    $html .= '<tr>';

    foreach($array[0] as $key=>$value){

            $html .= '<th>' . $key . '</th>';

        }

    $html .= '</tr>';

    // data rows

    foreach( $array as $key=>$value){

        $html .= '<tr>';

        foreach($value as $key2=>$value2){

            $html .= '<td>' . $value2 . '</td>';

        }

        $html .= '</tr>';

    }

    // finish table and return it

    $html .= '</table>';

    return $html;

}



echo build_table($meielist);

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