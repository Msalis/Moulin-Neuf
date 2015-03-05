<?php
	$error = false;
	$errorType = NULL;

	$login = $_POST['login'];
	$pwd = md5($_POST['pwd']);

	/*echo $error;
	echo $login." ".$pwd;*/

	if(is_null($login) /*|| is_null(str_replace(" ", "", $login)) */|| !preg_match("/^[a-zA-Z0-9]+$/", $login) || $login != "toto")
	{
		$error = true;
		$errorType = 1;
	}
	else if(is_null($pwd) /*|| is_null(str_replace(" ", "", $pwd)) */|| !preg_match("/^[-_a-zA-Z0-9]+$/", $pwd) || $pwd != "toto")
	{
		$error = true;
		$errorType = 2;
	}


	if(!$error)
	{
		echo $login." ".$pwd;
		$_SESSION['adminLogin']=$login;
		$_SESSION['adminPwd']=$pwd;
		header('Location:index.php');
	}
	else
	{
		header("Location:index.php?error=".$errorType);
	}

?>