<?php
class Oveja extends Animal
{
    private bool $enferma;


	public function __construct(String $id, int $peso, bool $enferma) {
        parent::__construct($id, $peso);
		$this->enferma = $enferma;
	}
    public function __toString()
    {
        return parent::__toString() . if($this->enferma){echo "si"} else{echo "no"}."esta enferma";
    }

	public function getEnferma() : bool {
		return $this->enferma;
	}

	public function setEnferma(bool $value) {
		$this->enferma = $value;
	}
}