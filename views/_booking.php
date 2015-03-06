<?php require("_head.php"); ?>
<?php require("_header.php"); ?>

<div class="main-container col col-12">
	<div class="teaser booking">

	</div>
	<div class="content booking">
		<div class="left-side col col-4 home">
<h1><?php echo $content['home_booking_tilte'];  ?></h1>
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
            <div class="form_instructions"><?php echo $content['form_instructions'];  ?></div>
		</div>
        <div class="col col-8"><?php echo $content['home_booking_right_tilte'];  ?></div>
		<div class="right-side col col-4">
<?php echo $content['home_booking_right_txt'];  ?>
		</div>
        	<div class="right-side col col-4">
<?php echo $content['home_booking_right_txt2'];  ?>
		</div>
	</div>
	</div>

</div>

<?php require("_footer.php"); ?>