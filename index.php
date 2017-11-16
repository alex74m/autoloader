<?php
use \App\sousdossier\Personnage;
use \App\Autoloader;


require 'class/Autoloader.php';
Autoloader::register();

$merlin = new Personnage("Merlin");
$harry = new Personnage("Harry");

$merlin->attaque($harry);
if ($harry->mort()) {
	echo $harry->getNom()." est mort";
}
else{echo $harry->getNom()." a survécu et il lui reste ".$harry->getVie()." point de vie";}

$merlin->setNom('Connard');

if ($merlin->mort()) {
	echo $merlin->getNom()." est mort";
}
else{echo "<hr>". $merlin->getNom()." a survécu et il lui reste ".$harry->getVie()." point de vie";}


var_dump($merlin);
var_dump($harry);

echo $merlin->getNom();