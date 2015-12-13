
<?php 
/* hue */
function hueName($h) {
	if ($h < 15) { $hue = 'rojo'; }
	if ($h === 15) { $hue = 'rojizo'; }
	if ($h > 15) { $hue = 'naranja'; }
	if ($h > 45) { $hue = 'amarillo'; }
	if ($h > 70) { $hue = 'lima'; }
	if ($h > 79) { $hue = 'verde'; }
	if ($h > 163) { $hue = 'turquesa'; }
	if ($h > 193) { $hue = 'azul'; }
	if ($h > 240) { $hue = 'indigo'; }
	if ($h > 260) { $hue = 'violeta'; }
	if ($h > 270) { $hue = 'morado'; }
	if ($h > 291) { $hue = 'magenta'; }
	if ($h > 327) { $hue = 'rosa'; }
	if ($h > 344) { $hue = 'rojo'; }
	return $hue;
}
/* saturation */
function saturationName($s) {
	if($s < 10) { $sat =  'casi gris'; }
	if($s > 9) { $sat =  'muy insaturado'; }
	if($s > 30) { $sat =  'insaturado'; }
	if($s > 60) { $sat =  'bastante saturado'; }
	if($s > 80) { $sat =  'altamente saturado'; }
	return $sat;
}
/* lightness */
function lightnessName($l) {
	if($l < 10) { $light = 'casi negro'; }
	if($l > 9) { $light = 'muy oscuro'; }
	if($l > 22) { $light = 'oscuro'; }
	if($l > 30) { $light = 'normal'; }
	if($l > 60) { $light = 'claro'; }
	if($l > 80) { $light = 'muy claro'; }
	if($l > 94) { $light = 'casi blanco'; }
	return $light;
}
/* hsl */
function returnColor($h,$s,$l) {
	return 'hsl('.$h.', '.$s.'%, '.$l.'%)';
}
?>
