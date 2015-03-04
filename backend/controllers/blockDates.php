<?php
	$begin = $_POST['beginDate'];
	$end = $_POST['endDate'];
	$label = rand(0,1000);
	
	$test = ((strtotime($end)-strtotime($begin))/(24*3600))+1;
	for($i = 0; $i < $test; $i++)
	{
		$bdd = DBConnect($host,$database,$user,$password);
		$date = date("d/m/Y", strtotime($begin)+24*3600*$i);
		/*$query = $bdd->prepare("INSERT INTO blocked_dates(label, day) VALUES ('$label','$date')");
		$query->execute();*/
	}



?>