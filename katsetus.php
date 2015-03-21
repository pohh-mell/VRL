<?php
		$host = "eu-cdbr-azure-north-c.cloudapp.net";
		$user = "bb8f29df6ad035";
		$pwd = "461b6fa7";
		$db = "ehaaletusdata";
		$conn = new mysqli($host, $user, $pwd, $db);
		$name = $_POST['nimi'];
		$isikukood = $_POST['isikukood'];

		$query = "
		INSERT INTO katsetus(nimi,isikukood) VALUES ($name,$isikukood);";
		mysql_query($query);
		mysql_close($conn);

	?>