<?php 
 function carre($nb)
 {
  return $nb*$nb;
 }
$x = 45;
$y=12;

$norme = sqrt(carre($x) + carre($y));
var_dump($norme);
 ?>