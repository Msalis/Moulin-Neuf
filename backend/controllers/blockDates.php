<?php
	$begin = $_POST['beginDate'];
	$end = $_POST['endDate'];
	$label = rand(0,1000);
	
	$test = ((strtotime($end)-strtotime($begin))/(24*3600))+1;

	for($i = 0; $i < $test; $i++)
	{
		$bdd = DBConnect($host,$database,$user,$password);
		$date = date("n-j-Y", strtotime($begin)+24*3600*$i);
		$query = insertBlockedPeriod($bdd, $label, $date);
	}

	header("Location:index.php");

?>