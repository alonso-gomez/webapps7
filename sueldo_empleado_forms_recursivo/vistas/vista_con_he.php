<p>El empleado <?php echo "$nombre $apellidos"; ?> trabajó <?php echo $ht; ?> horas por lo que obtuvo un sueldo de $<?php echo $total; ?>, a continuación se presenta un desglose de su sueldo:</p>
<ul>
	<li>Horas normales: <?php echo ($ht <= 40) ? $ht : 40; ?></li>
	<li>Sueldo por hora normal: <?php echo ($ht <= 40) ? $total : $sueldo_hn; ?> </li>
	<?php if($ht > 40) { ?>
		<li>Horas extras: <?php echo $he; ?></li>
		<li>Sueldo por hora extra: <?php echo $sueldo_he; ?> </li>
	<?php } ?>
	<li>TOTAL: <?php echo $total ?></li>
</ul>