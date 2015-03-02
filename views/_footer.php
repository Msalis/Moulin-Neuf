<div class="footer">
	<div>
		<span></span>
		<a href="">Mentions légales</a>
		<a href="">INÉDITS L'Élan Créatif</a>
	</div>
	<div>
		<a href="index.php?action=fr&page=<?php if(!isset($_GET['page'])){echo "home";}else{echo $_GET['page'];} ?>" >FR</a>
		<a href="index.php?action=en&page=<?php if(!isset($_GET['page'])){echo "home";}else{echo $_GET['page'];} ?>" >EN</a>
	</div>
</div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="static/js/jquery-ui-1.11.3.custom/jquery-ui.js"></script>
<script>
	$(function() {
		$( "#datepickerBegin, #datepickerEnd" ).datepicker();
	});
</script>


</body>
</html>