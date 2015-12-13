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
function saturationName($s) {
	if($s < 10) { $sat =  'n casi gris'; }
	if($s > 9) { $sat =  ' muy insaturado'; }
	if($s > 30) { $sat =  'n insaturado'; }
	if($s > 60) { $sat =  ' bastante saturado'; }
	if($s > 80) { $sat =  ' altamente saturado'; }
	return $sat;
}
function lightnessName($l) {
	if($l < 10) { $light = ', casi negro, '; }
	if($l > 9) { $light = ', muy oscuro '; }
	if($l > 22) { $light = ', oscuro '; }
	if($l > 30) { $light = ' '; }
	if($l > 60) { $light = ', claro '; }
	if($l > 80) { $light = ', muy claro '; }
	if($l > 94) { $light = ', casi blanco, '; }
	return $light;
}
function returnColor($h,$s,$l) {
	return 'hsl('.$h.', '.$s.'%, '.$l.'%)';
}
//example usage:
?>
<!doctype html>
<html lang="en">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Nombres correctos para valores de luminosidad.</title>
<style>
body {
	font: 120%/1.5 georgia, serif;
	background: white;
	margin: 0;
	padding: 2em;
}
h1 {
	max-width: 24em;
}
p {
	max-width: 24em;
	margin: 1em 0;
	-moz-hyphens: auto;
	hyphens: auto;
}
div {
	width: 7em;
	height: 7em;
	float: left;
}
</style>

<h1>Probando a asignar al valor de la luminosidad en HSL su nombre en lenguaje natural</h1>
<p>Para asignar los nombres correctos, el matiz se ha definido como 120 (verde), y la saturación al 100%. Por lo que <code>hsl(120,100%,15%)</code> podria resultar en algo como <q>Un verde muy oscuro bastante saturado</q>. <em>Considero</em> esta una buena configuración para analizar luminosidades, si conoces una mejor, por favor, hazmelo saber. </p>

<p>En la siguiente tabla verás el valor de la luminosidad y el nombre asociado a este. Si conoces una mejor disposición para esta tabla, por favor, hazmelo saber. </p>
<p>Estamos buscando los nombres correctos <em>y</em> los límites adecuados: ¿Realmente acaba el <em>casi negro</em> en 9? Si conoces una aproximación científica, por favor, hazmelo saber.</p>
<?php
$h1 = rand(0,360);
$s1 = rand(0,100);
$l1 = rand(0,100);
$colour1 = hueName($h1);
$saturation1 = saturationName($s1);
$lightness1 = lightnessName($l1);
$i = 1;
while ( $i < 101 ) {
	echo '<div style="background: hsl(120, 100%, '.$i.'%)">'.$i.' = '.lightnessName($i).'</div>';
	$i++;
}
?>
