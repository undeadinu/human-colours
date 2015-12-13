
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

<!doctype html>
<html lang="es">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Un fondo coloreado aleatoriamente</title>
<style>
body {
	font: 120%/1.5 georgia, serif;
	background: white;
	margin: 0;
	padding: 0;
}
p {
	max-width: 24em;
	margin: 0;
	padding: 1em;
	background: rgba(255,255,255,.5)
}
</style>
<?php
$h1 = rand(0,360);
$s1 = rand(0,100);
$l1 = rand(0,100);
$colour1 = hueName($h1);
$saturation1 = saturationName($s1);
$lightness1 = lightnessName($l1);
echo '<body style="background: '.returnColor($h1,$s1,$l1).'">';
echo '<p>Puede que estes viendo una pantalla de navegador de color '.$colour1.$lightness1.$saturation1.'</p>';
echo '</body>';
?>
