<?php
class Principal extends Plato
{
    private bool $conOsinGluten;



	public function __construct(String $nombre, float $precio, bool $conOsinGluten) {
        parent::__construct($nombre, $precio);
		$this->conOsinGluten = $conOsinGluten;
	}
    

	public function getConOsinGluten() : bool {
		return $this->conOsinGluten;
	}

	public function setConOsinGluten(bool $value) {
		$this->conOsinGluten = $value;
	}
}