<?php

	$host = "";
	$database = "";
	$user = "";
	$password ="";


	function DBConnect($host,$database,$user,$password)
	{
		$bdd = NULL;
		try
		{
			$bdd = new PDO('mysql:host=localhost;dbname=inedits8_smartnetwork2015','inedits8_admin', 'kariboudu38');
		}
		catch (Exception $e)
		{
			die('Erreur : ' . $e->getMessage());
		}

		return $bdd;
	}

	function getReservation($DB)
	{
		$query = $DB->query("SELECT * FROM reservation ORDER BY id DESC");
		$res = $query->fetch();
		return $res;
	}
?>