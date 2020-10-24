
<?php


abstract class Animal{

public function falar(){
     return "Som";
}

public function mover(){
	return "Andar";
}

}


class Cachorro extends Animal{

	public function falar(){
		return "Late";
	}
}

class Gato extends Animal{

	public function falar(){
		return "Mia";
	}
}


class Passaro extends Animal{

	public function falar(){
		return "Canta";
	}

    public function mover(){
		return "Voa e ". parent::mover();
	}

}


$pluto = new Cachorro();
echo $pluto->falar() . " - Cachorro" . "<br/>";
echo $pluto->mover() . " - Cachorro" . "<br/>";



$garfield = new Gato();
echo $garfield->falar() .  " - Gato". "<br/>";
echo $garfield->mover() . " - Gato". "<br/>";


$ave = new Passaro();
echo $ave->falar() .  " - Passaro ". "<br/>";
echo $ave->mover() . " - Passaro ". "<br/>";


?>