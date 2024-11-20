<?php

require_once("Item.php");

final class Sobremesa extends Item implements iDados
{

    private bool $glutenFree;

    private bool $lactoseFree;


    /**
     * Get the value of glutenFree
     */
    public function isGlutenFree(): bool
    {
        return $this->glutenFree;
    }

    /**
     * Set the value of glutenFree
     */
    public function setGlutenFree(bool $glutenFree): self
    {
        $this->glutenFree = $glutenFree;

        return $this;
    }

    /**
     * Get the value of lactoseFree
     */
    public function isLactoseFree(): bool
    {
        return $this->lactoseFree;
    }

    /**
     * Set the value of lactoseFree
     */
    public function setLactoseFree(bool $lactoseFree): self
    {
        $this->lactoseFree = $lactoseFree;

        return $this;
    }
}

$pudim = new Sobremesa;
$pudim->setValorItem(15.90);
$pudim->setLactoseFree(false);
$pudim->setGlutenFree(true);
$pudim->setCodItem(5);
$pudim->setNomeItem("Pudim de Leite");

$saladaFruta = new Sobremesa;
$saladaFruta->setValorItem(10.90);
$saladaFruta->setLactoseFree(true);
$saladaFruta->setGlutenFree(true);
$saladaFruta->setCodItem(6);
$saladaFruta->setNomeItem("Salada de Frutas");

$bolo = new Sobremesa;
$bolo->setValorItem(12.90);
$bolo->setLactoseFree(false);
$bolo->setGlutenFree(false);
$bolo->setCodItem(7);
$bolo->setNomeItem("Bolo de Chocolate");

$torta = new Sobremesa;
$torta->setValorItem(15.90);
$torta->setLactoseFree(true);
$torta->setGlutenFree(false);
$torta->setCodItem(8);
$torta->setNomeItem("Salada de Frutas");