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
<title>Qualificatifs pour les valeurs de clarté</title>
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


<h1 lang="fr">Tentative d’association des qualificatifs corrects de clarté aux valeurs hsl</h1>

<p lang="fr">
	Afin de définir les noms de clarté corrects, les couleurs sont définies à 120 de teinte (vert), et à 50% de clarté. Ainsi, <code>hsl(120, 100%, 15%)</code> pourrait se traduire par quelque chose comme « un vert très sombre très saturé ». Je <em>suppose</em> que c’est une approximation suffisante pour décrire la clarté; si vous connaissez une meilleure manière, dites-moi.
</p lang="fr">
<p>
	Dans ce tableau suivant, vous verrez la valeur de la clarté, et sa traduction à sa suite. Si vous connaissez une meilleure mise en page pour un tel tableau, dites-moi.
</p>
<p lang="fr">
	Ici, nous cherchons les qualificatifs corrects <em>et</em> les limites correctes : est-ce que « presque noir » se termine vraiment à 9? Si vous connaissez une approche plus scientifique, s'il vous plaît, dites-moi.
</p>

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







