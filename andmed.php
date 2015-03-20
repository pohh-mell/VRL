<?php

function database(){
	$host = "eu-cdbr-azure-north-c.cloudapp.net";
	$user = "bb8f29df6ad035";
	$pwd = "461b6fa7";
	$db = "ehaaletusdata";
mysql_set_charset('utf8', $db);
	// Create connection
$conn = new mysqli($host, $user, $pwd, $db);
	if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
	}
	return $conn;
}

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

?>