<?php
abstract class Plato   
{
    private String $nombre;
    private float $precio;
    


	
    public function __toString() {
        return "$this->nombre , precio: $this->precio";
    }

	public function __construct(String $nombre, float $precio) {

		$this->nombre = $nombre;
		$this->precio = $precio;
	}

	public function getNombre() : String {
		return $this->nombre;
	}

	public function setNombre(String $value) {
		$this->nombre = $value;
	}

	public function getPrecio() : float {
		return $this->precio;
	}

	public function setPrecio(float $value) {
		$this->precio = $value;
	}
}