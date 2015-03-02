<?php

	session_start();
	if(empty($_SESSION)) 
	{
		$_SESSION['lang']="fr";
	}

	/*$url = substr($_SERVER['REQUEST_URI'],1);
	echo $url;*/
	include("static/lang/".$_SESSION['lang']."/lang-".$_SESSION['lang'].".php");

	if(!isset($_GET['page']))
		$page = "home";
	else
		if(!preg_match("/^[a-z]+$/", $_GET['page']))
		{
			$page = "404";
		}
		else
			$page = $_GET['page'];

	switch($page)
	{
		case "home" :
			require("controllers/home.php");
			break;

		case "history" :
			require("controllers/history.php");
			break;

		case "surroundings" :
			require("controllers/surroundings.php");
			break;

		case "ecotourism" :
			require("controllers/ecotourism.php");
			break;

		case "activities" :
			require("controllers/activities.php");
			break;

		case "booking" :
			require("controllers/booking.php");
			break;

		case "contact" :
			require("controllers/contact.php");
			break;

		default :
			require("controllers/home.php");
	}

	if(isset($_GET['action']))
	{
		require("controllers/changeLanguage.php");
	}
	 





?>