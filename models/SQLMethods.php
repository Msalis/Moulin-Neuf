<?php
	function DBConnect()
	{
		$bdd = NULL;
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

	function getBlockedDates($DB)
	{
		$query = $DB->query("SELECT * FROM blocked_dates");
		//$res = $query->fetch();
		return $query;
	}

?>