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

	function getBlockedDates($DB)
	{
		$query = $DB->query("SELECT * FROM blocked_dates");
		return $query;
	}

	function insertBlockedPeriod($DB, $label, $date)
	{
		$query = $DB->prepare("INSERT INTO blocked_dates(label, blockedDate) VALUES ('$label','$date')");
		$query->execute();		
	}

	function deletePeriod($DB, $label)
	{
		$query = $DB->query("DELETE FROM blocked_dates WHERE label='$label'");
		return $query;
	}

	function getLabels($DB)
	{
		$query = $DB->query("SELECT DISTINCT label FROM blocked_dates ORDER BY blockedDate ASC");
		return $query;
	}

	function getFirst($DB, $label)
	{
		// Recuperation de la date de début
		$query = $DB->query("SELECT * FROM blocked_dates WHERE label = '$label' ORDER BY blockedDate ASC LIMIT 1");
		return $query;
	}

	function getLast($DB, $label)
	{
		// Recuperation de la date de début
		$query = $DB->query("SELECT * FROM blocked_dates WHERE label = '$label' ORDER BY blockedDate DESC LIMIT 1");
		return $query;
	}




?>