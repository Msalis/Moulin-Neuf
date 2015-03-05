<?php
	$label = $_GET['period'];

	$bdd = DBConnect();
	$query = deletePeriod($bdd, $label);

	header("Location:index.php");

?>