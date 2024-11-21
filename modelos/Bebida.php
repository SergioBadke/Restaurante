<?php

require_once("Item.php");

final class Bebida extends Item implements iDados
{


    private bool $alcoolico;

    public function isAlcoolico(): bool
    {
        return $this->alcoolico;
    }

    public function setAlcoolico(bool $alcoolico): self
    {
        $this->alcoolico = $alcoolico;

        return $this;
    }
}


