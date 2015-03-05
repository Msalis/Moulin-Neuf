<div class="footer col col-12">
	<div>
		<ul>
        <li><span>© Moulin Neuf sur Dronne 2015 </span></li>
		<li><a href="">Mentions légales</a></li>
		<li><a href="http://www.inedits.com" target="_blank"><img src="static/images/logo_s.png" alt="Inedits l'Elan Créatif" tilte="Inedits l'Elan Créatif"  />INÉDITS L'Élan Créatif</a></li>
            </ul>
	</div>
	<div class="lang">
		<a href="index.php?action=fr&page=<?php if(!isset($_GET['page'])){echo "home";}else{echo $_GET['page'];} ?>" ><img src="static/images/fr.svg" alt="FR" tilte="fr"/></a>
		<a href="index.php?action=en&page=<?php if(!isset($_GET['page'])){echo "home";}else{echo $_GET['page'];} ?>" ><img src="static/images/gb.svg" alt="FR" tilte="fr" /></a>
	</div>
</div>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="static/js/jquery-ui-1.11.3.custom/jquery-ui.js"></script>
<script src="static/js/default.js"></script>
<?php 
	$bdd = DBConnect();
	$query =  getBlockedDates($bdd);
	$dates = $str = "";
	if($query != NULL)
	{
		while($res = $query->fetch())
		{
			$str .= '"'.$res["blockedDate"].'",';
		}
		$dates = substr($str,0,-1);
	}
	else
		$dates = "";
	
	//echo $dates;
?>
<script>
	var disabledSpecificDays = [<?php echo $dates; ?>];
	
	function disableSpecificDaysAndWeekends(date) {
	    var m = date.getMonth();
	    var d = date.getDate();
	    var y = date.getFullYear();
	 
	    for (var i = 0; i < disabledSpecificDays.length; i++) {
	        if ($.inArray((m + 1) + '-' + d + '-' + y, disabledSpecificDays) != -1 || new Date() > date) {
	            return [false];
	        }
	    }
	    var noWeekend = $.datepicker.noWeekends(date);
	    return noWeekend[0] ? noWeekend : [true];
}
</script>

<script>
	$(function() {
		$( "#datepickerBegin, #datepickerEnd" ).datepicker({
			beforeShowDay : disableSpecificDaysAndWeekends
		});

	});
</script>


</body>
</html>