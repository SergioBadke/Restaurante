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

$coca = new Bebida;
$coca->setAlcoolico(false);
$coca->setCodItem(9);
$coca->setNomeItem("Coca-Cola");
$coca->setValorItem(5.50);

$cocaZero = new Bebida;
$cocaZero->setAlcoolico(false);
$cocaZero->setCodItem(10);
$cocaZero->setNomeItem("Coca-Cola Sem Açúcar");
$cocaZero->setValorItem(5.50);

$cha = new Bebida;
$cha->setAlcoolico(false);
$cha->setCodItem(11);
$cha->setNomeItem("Chá Gelado Sabor de Limão");
$cha->setValorItem(6.35);


$cerveja = new Bebida;
$cerveja->setAlcoolico(false);
$cerveja->setCodItem(12);
$cerveja->setNomeItem("Cerveja Heineken");
$cerveja->setValorItem(9.90);
