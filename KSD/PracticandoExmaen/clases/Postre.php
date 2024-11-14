<?php

class Postre extends Plato 
{
    private int $cantidadAzucar;
    

	public function __construct(String $nombre, float $precio, int $cantidadAzucar) {
        parent::__construct($nombre, $precio);
		$this->cantidadAzucar = $cantidadAzucar;
	}


	public function getCantidadAzucar() : int {
		return $this->cantidadAzucar;
	}

	public function setCantidadAzucar(int $value) {
		$this->cantidadAzucar = $value;
	}
}