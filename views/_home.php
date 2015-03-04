<?php require("_head.php"); ?>
<?php require("_header.php"); ?>

<div class="main-container col col-12">
	<div class="teaser">
<div class="form-teaser col col-2">

    			<form id="bookingForm" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" enctype="multipart/form-data">
                        <?php echo $content['introform'];  ?>
				<fieldset>
					<input type="text" id="name" name="name" placeholder="<?php echo $content['formName'];  ?>">
					<input type="text" id="firstName" name="firstName" placeholder="<?php echo $content['formFirstName'];  ?>">
					<input type="text" id="mail" name="mail" placeholder="<?php echo $content['formMail'];  ?>">
					<input type="text" id="nbPersons" name="nbPersons" placeholder="<?php echo $content['formNbPeople']; ?>">
				</fieldset>
				<fieldset>
					<input type="text" id="datepickerBegin" placeholder="<?php echo $content['formBeginDate']; ?>">
					<input type="text" id="datepickerEnd" placeholder="<?php echo $content['formEndDate']; ?>">
				</fieldset>
				<fieldset>
					<textarea id="specialReq" placeholder="<?php echo $content['formTextarea']; ?>"></textarea>
				</fieldset>
				<fieldset>
					<input type="submit" value="<?php echo $content['formSubmit']; ?>">
				</fieldset>
			</form>
    </div>
	</div>
	<div class="content">
		<div class="left-side col col-8 home">
<h1><?php echo $content['home_histoire_tilte'];  ?></h1>
            <p><?php echo $content['home_histoire_txt'];  ?></p>
		</div>
		<div class="right-side col col-4">
<article><img src="static/images/thumb1.jpg" alt="Histoire de Moulin Neuf sur Dronne" tilte="Histoire de Moulin Neuf sur Dronne" /><?php echo $content['home_histoire_intro'];  ?><a class="button" href="index.php?page=history"><?php echo $content['home_read_more'];  ?></a></article>
            
            <article><img src="static/images/thumb2.jpg" alt="Activités de Moulin Neuf sur Dronne" tilte="Activités de Moulin Neuf sur Dronne" /><?php echo $content['home_activite_intro'];  ?><a class="button" href="index.php?page=history"><?php echo $content['home_read_more'];  ?></a></article>
		</div>
	</div>

</div>

<?php require("_footer.php"); ?>