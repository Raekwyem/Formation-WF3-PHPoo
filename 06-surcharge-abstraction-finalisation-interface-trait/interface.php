<?php
//06-surcharge-abstraction-finalisation-interface-trait/interface.php

interface Mouvement
{
	public function start();
	public function turnLeft();
	public function turnRight();
}


class Bateau extends Vehicule implements Mouvement
{
	public function start(){
		//traitement de la méthode
	}
	
	public function turnLeft(){
		//traitement de la méthode
	}
	
	public function turnRight(){
		//traitement de la méthode
	}
}


class Avion extends Vehicule implements Mouvement
{
	public function start(){
		//traitement de la méthode
	}
	
	public function turnLeft(){
		//traitement de la méthode
	}
	
	public function turnRight(){
		//traitement de la méthode
	}
}

 
/*
Commentaires : 
	- Une interface est une liste de méthodes (sans contenu) qui permet de garantir que toutes les classes qui implements l'interface contiennent les mêmes méthodes. Cela garantit une convention de nommage. C'est une sorte de contrat passé entre le développeur maître (lead dev') de l'application, et les autres dev'. 
	
	- Une interface n'est pas instanciable. 
	- Par exemple : Bateau et Avion, appartiennent au groupe "Véhicule" (héritage), et partagent un point commun "Mouvement" (implements). 
	
	- Il est possible d'implémenter plusieurs interfaces (class H implements I, J)
	- Une classe peut hériter d'une autre classe et en même temps implémenter une ou plusieurs interface(s). 
	- Les méthodes d'une interface sont forcement public, sinon elles ne pourraient pas être redéfinies. 
*/
















