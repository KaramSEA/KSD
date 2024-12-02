<?php
class Vaca extends Animal
{
    public function __construct(String $id, int $peso) {
        parent::__construct($id, $peso);
	}
    public function __toString()
    {
        return parent::__toString();
    }
}
