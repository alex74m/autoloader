<?php

namespace App\sousdossier;
/**
* 
*/
class Archer extends Personnage
{
	protected $vie=42;

	public function __construct($nom)
	{
		$this->vie=$this->vie/2;
		parent::__construct($nom);
	}

	public function attaque($cible)
	{
		$cible->vie-=$this->atk;
		parent::attaque($cible);
	}
}

