
<?php 
/* hue */
function hueName($h) {
	if ($h < 15) { $hue = 'rouge'; }
	if ($h === 15) { $hue = 'rouge-orange'; }
	if ($h > 15) { $hue = 'orange'; }
	if ($h > 45) { $hue = 'jaune'; }
	if ($h > 70) { $hue = 'anis'; }
	if ($h > 79) { $hue = 'vert'; }
	if ($h > 163) { $hue = 'turquoise'; }
	if ($h > 193) { $hue = 'bleu'; }
	if ($h > 240) { $hue = 'indigo'; }
	if ($h > 260) { $hue = 'violet'; }
	if ($h > 270) { $hue = 'pourpre'; }
	if ($h > 291) { $hue = 'magenta'; }
	if ($h > 327) { $hue = 'rose'; }
	if ($h > 344) { $hue = 'rouge'; }
	return $hue;
}
/* saturation */
function saturationName($s) {
	if($s < 10) { $sat =  'gris'; }
	if($s > 9) {  $sat =  'très désaturé'; }
	if($s > 30) { $sat =  'désaturé'; }
	if($s > 60) { $sat =  'assez saturé'; }
	if($s > 80) { $sat =  'très saturé'; }
	return $sat;
}
/* lightness */
function lightnessName($l) {
	if($l < 10) { $light = 'presque noir'; }
	if($l > 9) { $light =  'très sombre'; }
	if($l > 22) { $light = 'sombre'; }
	if($l > 30) { $light = 'normal '; }
	if($l > 60) { $light = 'clair'; }
	if($l > 80) { $light = 'très clair'; }
	if($l > 94) { $light = 'presque blanc'; }
	return $light;
}
/* hsl */
function returnColor($h,$s,$l) {
	return 'hsl('.$h.', '.$s.'%, '.$l.'%)';
}
?>
