<?php
final class Postre extends Platos
{
    private int $gramosAzucar;

    public function __construct($nombre, $precio, $gramosAzucar)
    {
        parent::__construct($nombre, $precio);
        $this->gramosAzucar=$gramosAzucar;
    }
    

    /**
     * Get the value of gramosAzucar
     */
    public function getGramosAzucar(): int
    {
        return $this->gramosAzucar;
    }

    /**
     * Set the value of gramosAzucar
     */
    public function setGramosAzucar(int $gramosAzucar): self
    {
        $this->gramosAzucar = $gramosAzucar;

        return $this;
    }
}
