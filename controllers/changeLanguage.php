<?php

	$lang = $_GET['action'];
	$page = $_GET['page'];

	if($lang == "en")
	{
		$_SESSION['lang'] = "en";
	}
	else
	{
		$_SESSION['lang'] = "fr";
	}

	header("Location:index.php?page=".$page);
?>