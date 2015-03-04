<?php require("_header.php") ?>
<div class="form">
	<form action="index.php?request=authentification" enctype="multipart/form-data" id="loginForm" method="POST">
		<fieldset>
			<input id="login" name="login" placeholder="NOM D'UTILISATEUR" type="text">
			<input id="pwd" name="pwd" placeholder="MOT DE PASSE" type="password">
		</fieldset>
		<fieldset>
			<input type="submit" value="CONNEXION">
		</fieldset>
	</form>
</div>
</body>
</html>