<?php
session_start();
	include("../static/lang/".$_SESSION['lang']."/lang-".$_SESSION['lang'].".php");

	$name = $_POST['name'];
	$firstName = $_POST['firstName'];
	$mail = $_POST['mail'];
	$requirements = $_POST['requirements'];
	
	$error = false;
	$response = "ok";
	$nerr = 0;
	
	$error_array = array(
		1 => "Le nom que vous avez renseigné comporte un (ou des) caractère(s) invalide(s)",
		2 => "Le prénom que vous avez renseigné comporte un (ou des) caractère(s) invalide(s)",
		3 => "Le mail que vous avez renseigné comporte un (ou des) caractère(s) invalide(s)",
		4 => "Le message que vous avez composé comporte un (ou des) caractère(s) invalide(s)"
	);

	if(!preg_match("/^[a-zA-Z- Éàéèêëîïôöùûü]+$/", $name))
	{
		$error = true;
		$nerr = 1;
	}
	else if(!preg_match("/^[a-zA-Z- Éàéèêëîïôöùûü]+$/", $firstName))
	{
		$error = true;
		$nerr = 2;
	}
	else if(!filter_var($mail, FILTER_VALIDATE_EMAIL))
	{
		$error = true;
		$nerr = 3;
	}
	else if(!preg_match("/^[[:alnum:],.;?!' -éèàôçî&]+$/", $requirements))
	{
		$error = true;
		$nerr = 7;
	}
	
	if(!$error)
	{
		/*$customer_html = 
		'
		<html>
			<head>
			</head>
			<body>
				<table width="600" border="0" align="center" cellpadding="0" cellspacing="0" style="font-family:Arial, sans-serif;">
					  <tr>
						<td style="padding:5px 10px;border:#cf0a10 solid 1px" valign="top" colspan="2">
							
						</td>
					  </tr>
				</table>
			</body>
		</html>
		';*/
/*
		$customer_txt = $content['intromail1'].$firstName." ".$name.",".$passage_ligne.$passage_ligne.
						$content['intromail2'].$passage_ligne.$content['confirm'].$passage_ligne.$passage_ligne.
						$content['recapDemand'].$passage_ligne.
						$content['recapStayPeriod1'].$begin.$content['recapStayPeriod2'].$end.".".$passage_ligne.
						$content['recapNbPerson'].$nb.".".$passage_ligne.
						$content['recapRequirements'].$requirements.$passage_ligne.
						$content['thanks'].$passage_ligne.$passage_ligne.
						$content['sender'];

// TEST DU MAIL SUR UN ENVOI
		
		//=====Création de la boundary.
		$boundary = "-----=".md5(rand());
		$boundary_alt = "-----=".md5(rand());
		//==========
		//=====Définition du sujet.
		$sujet = "martin@inedits.com";
		
		$dest = "";
		
		$passage_ligne = "\n";

		//=====Création du header de l'e-mail.
		$header = "From: \"".$name." ".$firstName."\"<".$mail.">".$passage_ligne;
		$header .= "Reply-to: \"".$name." ".$firstName."\" <".$mail.">".$passage_ligne;
		$header .= "MIME-Version: 1.0".$passage_ligne;
		$header .= "Content-Type: multipart/alternative;".$passage_ligne." boundary=\"$boundary\"".$passage_ligne;
		
		$message = $passage_ligne."--".$boundary.$passage_ligne;
		$message .= "Content-Type: text/plain; charset=\"utf-8\"".$passage_ligne;
		$message .= "Content-Transfer-Encoding: 8bit".$passage_ligne;
		$message .= $passage_ligne.$customer_txt.$passage_ligne;
		$message .= $passage_ligne."--".$boundary."--".$passage_ligne;
		
		//=====Envoi de l'e-mail.
		mail($dest, $sujet, $message, $header);*/

		$response = "ok";
	}
	else
	{
		$response = $error_array[$nerr];
		// Assigner à chaque erreur un id entier
		//Declarer un array repertoriant les messages d'erreurs avec pour id l'id des erreurs levées. 	
	}
	$reponse = array('reponse'=>$response);
	echo json_encode($reponse);

?>