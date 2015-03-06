<?php require("_head.php"); ?>
<?php require("_header.php"); ?>

<div class="main-container col col-12">
	<div class="teaser contact">

	</div>
	<div class="content">
		<div class="left-side col col-8 home">
<h1><?php echo $content['home_contact_tilte'];  ?></h1>
            <?php echo $content['home_contact_txt'];  ?>
            			<form id="contactgForm" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" enctype="multipart/form-data">
                       
				<fieldset>
					<input type="text" id="name" name="name" placeholder="<?php echo $content['formName'];  ?>">
					<input type="text" id="firstName" name="firstName" placeholder="<?php echo $content['formFirstName'];  ?>">
					<input type="text" id="mail" name="mail" placeholder="<?php echo $content['formMail'];  ?>">
					
				</fieldset>
				<fieldset>
					<textarea id="specialReq" placeholder="<?php echo $content['formTextarea']; ?>"></textarea>
				</fieldset>
				<fieldset>
					<input type="submit" value="<?php echo $content['formSubmit']; ?>">
				</fieldset>
			</form>  
		</div>
		<div class="right-side col col-4">

		</div>
	</div>
	</div>

</div>

<?php require("_footer.php"); ?>