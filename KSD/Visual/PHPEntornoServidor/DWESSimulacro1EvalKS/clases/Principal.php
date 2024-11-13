<?php
class Principal extends Platos
{
    
    private bool $conOsinGluten;

    public function __construct($nombre, $precio, $conOsinGluten)
    {
        parent::__construct($nombre, $precio);
        $this->conOsinGluten=$conOsinGluten;
    }
   

    /**
     * Get the value of conOsinGluten
     */
    public function isConOsinGluten(): bool
    {
        return $this->conOsinGluten;
    }

    /**
     * Set the value of conOsinGluten
     */
    public function setConOsinGluten(bool $conOsinGluten): self
    {
        $this->conOsinGluten = $conOsinGluten;

        return $this;
    }
}
