<div class="listing">
	<?php
		$bdd = DBConnect($host,$database,$user,$password);
		$reservations = getReservation($bdd);
	?>
	<ul>
		<?php
			while($res = $reservations->fetch())
			{
				echo "<li>".$res['name']."&nbsp".$res['firstName']."&nbsp".$res['mail']."&nbsp".$res['nbPers']."&nbsp".$res['begin']."&nbsp".$res['end']."</li>";
			} 
		?>
	</ul>
</div>