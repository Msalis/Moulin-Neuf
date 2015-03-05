<?php

	$host = "localhost";
	$database = "moulin-neuf";
	$user = "root";
	$password ="";


	function DBConnect()
	{
		try
		{
			$bdd = new PDO('mysql:host=localhost;dbname=moulin-neuf','root', '');
		}
		catch (Exception $e)
		{
			die('Erreur : ' . $e->getMessage());
		}

		return $bdd;
	}

	function getReservation($DB)
	{
		$query = $DB->query("SELECT * FROM reservations ORDER BY id DESC");
		//$res = $query->fetch();
		return $query;
	}

	function insertBlockedDate($DB, $label, $date)
	{
		$query = $DB->prepare("INSERT INTO blocked_dates(label, day) VALUES ('$label','$date')");
		
	}
?>