<?php
require_once './persona.php'; //includo la classe persona;
$p1 = new Persona("Paolino Paperino",33);
$p2 = new Persona("Minnie mouse",24);
$p3 = new Persona("Nonna Papera",78);
$p4 = new Persona("Daisy Duck",22);
echo $p4->stampa();
$giovane = Persona::piuGiovane([$p1, $p2, $p3, $p4]);
echo "il più giovane è ".$giovane->stampa();
