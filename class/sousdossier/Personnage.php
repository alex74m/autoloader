<?php
namespace App\sousdossier;

class Personnage
{
	protected static $max_vie = 100;
	protected $vie = 80;
	protected $atk = 20;
	protected $nom;

	public function getVie(){return $this->vie;}
	public function getAtk(){return $this->atk;}
	public function getNom(){return $this->nom;}

	public function setNom($nom){$this->nom=$nom;}

	public function __construct($nom)
	{
		$this->nom = $nom;
	}

	public function regenerer($addVie = null)
	{	
		if (is_null($addVie)) 
		{
			$this->vie=self::$max_vie;
		}
		else{
			$this->vie+=$addVie;
		}
	}

	public function mort()
	{
		return $this->vie <= 0;
	}

	protected function empecher_negatif()
	{
		if ($this->vie<0) {
			$this->vie = 0;
		}
	}

	public function attaque($cible)
	{
		$cible->vie-=$this->atk;
		$cible->empecher_negatif();
		
	}

}