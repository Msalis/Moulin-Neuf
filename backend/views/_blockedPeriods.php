<div class="blockedPeriods">
	<?php
		$bdd = DBConnect();
		$labels = getLabels($bdd);
		if($labels == NULL)
		{
			echo "Il n'y a pas de dates bloquées à ce jour.";
		}
		else
		{
	?>

	<ul>
		<span>Périodes bloquées :</span>
	<?php
			while($res = $labels->fetch())
			{
				$q1 = getFirst($bdd, $res['label']);
				$r1 = $q1->fetch();
				$q2 = getLast($bdd, $res['label']);
				$r2 = $q2->fetch();

				$first = $r1['blockedDate'];
				$last = $r2['blockedDate'];
				$begin = explode("-", $first);
				$end = explode("-", $last);
				
				for($i = 0; $i < sizeof($begin); $i++)
				{
					if(strlen($begin[$i]) == 1)
					{
						$begin[$i] = "0".$begin[$i];
					}
					if(strlen($end[$i]) == 1)
					{
						$end[$i] = "0".$end[$i];
					}
				}

				$toto = strtotime($begin[2]."-".$begin[0]."-".$begin[1]);

				echo "  <li>
							<div>
								Période du ".date("j/m/Y",strtotime($begin[2]."-".$begin[0]."-".$begin[1]))." au ".date("j/m/Y",strtotime($end[2]."-".$end[0]."-".$end[1]))."
								<a href='index.php?request=removePeriod&period=".$res['label']."'>Débloquer cette période</a>
							<div>
						</li>";
				//echo $toto;


				
			}		
		}
	?>
</ul>
</div>