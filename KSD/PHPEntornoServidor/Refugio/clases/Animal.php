<?php

abstract class Animal 
{
    private String $id;
    private int $peso;
    

    

	public function __construct(String $id, int $peso) {

		$this->id = $id;
		$this->peso = $peso;
	}
    public function __toString()
    {
        return "El id del animal es ". $this->id . "y su peso es ". $this->id;
    }

	public function getId() : String {
		return $this->id;
	}

	public function setId(String $value) {
		$this->id = $value;
	}

	public function getPeso() : int {
		return $this->peso;
	}

	public function setPeso(int $value) {
		$this->peso = $value;
	}
}