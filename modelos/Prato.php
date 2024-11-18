<?php

require_once("Item.php");

final class Prato extends Item implements iDados
{
    private int $calorias;


    /**
     * Get the value of calorias
     */
    public function getCalorias(): int
    {
        return $this->calorias;
    }

    /**
     * Set the value of calorias
     */
    public function setCalorias(int $calorias): self
    {
        $this->calorias = $calorias;

        return $this;
    }
}


$estrogonofe = new Prato;
$estrogonofe->setCalorias(145);
$estrogonofe->setCodItem(1);
$estrogonofe->setNomeItem("Strogonoff de Frango");
$estrogonofe->setValorItem(31.99);

$risoto = new Prato;
$risoto->setCalorias(350);
$risoto->setCodItem(2);
$risoto->setNomeItem("Risoto de Camarão");
$risoto->setValorItem(45.50);

$macarrao = new Prato;
$macarrao->setCalorias(228);
$macarrao->setCodItem(3);
$macarrao->setNomeItem("Macarrão ao Molho de Queijos");
$macarrao->setValorItem(37.90);

$bifeBatata = new Prato;
$bifeBatata->setCalorias(145);
$bifeBatata->setCodItem(4);
$bifeBatata->setNomeItem("Bife com Batatas");
$bifeBatata->setValorItem(25.99);
