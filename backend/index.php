<?php
	session_start();

	require("models/SQLFunctions.php");
	
	if(!isset($_GET["request"]) || $_GET["request"] == NULL)
		$request = NULL;
	else
		$request = $_GET['request'];

	if(!isset($_SESSION['adminLogin']) || !isset($_SESSION['adminPwd']))
	{
		switch($request)
		{
			case NULL :
				require("controllers/login.php");
				break;
			case "authentification" :
				require("controllers/authentification.php");
				break;
			default :
				require("controllers/login.php");
		}
	}
	else
	{
		switch($request)
		{
			case NULL :
				require("controllers/panel.php");
				break;
			case "blockDates" :
				require("controllers/blockDates.php");
				break;
			case "removePeriod" :
				require("controllers/removePeriod.php");
				break;
			default :
				require("controllers/panel.php");
				break;
		}
	}
	
?>