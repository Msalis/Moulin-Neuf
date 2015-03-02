<?php

	session_start();
	if(empty($_SESSION)) 
	{
		$_SESSION['lang']="fr";
	}

	/*$url = substr($_SERVER['REQUEST_URI'],1);
	echo $url;*/

	if(!isset($_GET['page']))
		$action = NULL;
	else
		if(!preg_match("/^[a-z]+$/", $_GET['page']))
		{
			$action = "404";
		}
		else
			$action = $_GET['page'];

	switch($action)
	{
		case NULL :
			require("controllers/home.php");
			break;

		case "" :
			require("controllers/home.php");
			break;

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
	 





?>