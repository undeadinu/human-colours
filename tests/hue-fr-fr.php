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
function saturationName($s) {
	if($s < 10) { $sat =  'gris'; }
	if($s > 9) {  $sat =  'très désaturé'; }
	if($s > 30) { $sat =  'désaturé'; }
	if($s > 60) { $sat =  'assez saturé'; }
	if($s > 80) { $sat =  'très saturé'; }
	return $sat;
}
function lightnessName($l) {
	if($l < 10) { $light = 'presque noir'; }
	if($l > 9) { $light =  'très sombre'; }
	if($l > 22) { $light = 'sombre'; }
	if($l > 30) { $light = 'normal ?'; }
	if($l > 60) { $light = 'clair'; }
	if($l > 80) { $light = 'très clair'; }
	if($l > 94) { $light = 'presque blanc'; }
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
<title>Qualificatifs pour les valeurs de teinte</title>
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



<h1>Tentative d’association des qualificatifs corrects de teinte aux valeurs hsl</h1>

<p>
	Afin de définir les noms de teinte corrects, les couleurs sont définies à 100% de saturation, et à 50% de clarté. Ainsi, <code>hsl(120, 65%, 25%)</code> pourrait se traduire par quelque chose comme « un vert sombre assez saturé ». Je <em>suppose</em> que c’est une approximation suffisante pour décrire la teinte ; si vous connaissez une meilleure manière, dites-moi. Des couleurs telles que « marron » n’apparaitront pas ; marron se traduirait ici comme <q>un rouge désaturé et sombre</q>.
</p>
<p>
	Dans ce tableau suivant, vous verrez la valeur de la teinte, et son nom humain à sa suite. Si vous connaissez une meilleure mise en page pour un tel tableau, dites-moi.
</p>
<p>
	Ici, nous cherchons les qualificatifs corrects <em>et</em> les limites correctes : est-ce que le vert se termine vraiment à 163 ? Si vous connaissez une approche plus scientifique, s'il vous plaît, dites-moi.
</p>
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
