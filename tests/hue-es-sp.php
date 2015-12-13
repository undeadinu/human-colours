
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
<title>Nombres correctos para valores de matiz</title>
<style>
body {
	font: 120%/1.5 georgia, serif;
	background: white;
	margin: 0;
	padding: 2em;
}
p {
	max-width: 24em;
	margin: 1em 0;
}
div {
	width: 7em;
	height: 7em;
	float: left;
}
</style>

<h1>Probando a asignar al valor de un matiz en HSL su nombre en lenguaje natural </h1>
<p>Para poder asignar los nombres correctos, la saturación está definida al 100% y la luminosidad al 50%. Por lo que <code>hsl(120,100%,50%)</code> puede resultar en algo como <q>Un verde altamente saturado</q>. <em>Considero</em> esta una buena configuración para analizar colores, si conoces una mejor configuración, por favor, hazmelo saber. Algunos colores como el <em>marrón</em> no aparecerán con esta configuración — En su lugar, el marrón podría describirse como <q>un rojo oscuro insaturado</q>.</p>

<p>En la siguiente tabla verás el valor del matiz y el nombre asociado a este. Si conoces una mejor disposición para esta tabla, por favor, hazmelo saber. </p>
<p>Estamos buscando los nombres correctos <em>y</em> los límites adecuados: ¿Realmente acaba el verde en 163? Si conoces una aproximación científica, por favor, hazmelo saber. </p>
<?php


$h1 = rand(0,360);
$s1 = rand(0,100);
$l1 = rand(0,100);
$colour1 = hueName($h1);
$saturation1 = saturationName($s1);
$lightness1 = lightnessName($l1);

$i = 0;

while ( $i < 360 ) {
	echo '<div style="background: hsl('.$i.', 100%, 50%)">'.$i.' = '.hueName($i).'</div>';
	$i++;
}

?>
