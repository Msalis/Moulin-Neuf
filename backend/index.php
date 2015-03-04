<?php
	session_start();

	if(!isset($_GET["request"]) || $_GET["request"] == NULL)
			$request = NULL;
		else
			$request = $_GET['request'];

	if(!isset($_SESSION) || empty($_SESSION))
	{
		switch($request)
		{
			case NULL :
				require("controllers/login.php");
				break;
			case "authentification" :
				require("controllers/authentification.php");
		}
	}
	
?>