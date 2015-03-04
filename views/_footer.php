<div class="footer col col-12">
	<div>
		<ul>
        <li><span>© Moulin Neuf sur Dronne 2015 </span></li>
		<li><a href="">Mentions légales</a></li>
		<li><a href="http://www.inedits.com" target="_blank"><img src="static/images/logo_s.png" alt="Inedits l'Elan Créatif" tilte="Inedits l'Elan Créatif"  />INÉDITS L'Élan Créatif</a></li>
            </ul>
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