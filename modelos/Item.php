<?php

require_once ("iDados.php");

class Item implements iDados
{

    protected int $codItem;
    protected float $valorItem;
    protected string $nomeItem;

    public function getDados($codItem, $valorItem, $nomeItem)
    {
        $dados = "O item " . $nomeItem . " de valor " . $valorItem . " possui código no menu de: " . $codItem . "\n";
        return $dados;
    }


    public function getCodItem(): int
    {
        return $this->codItem;
    }

    public function setCodItem(int $codItem): self
    {
        $this->codItem = $codItem;

        return $this;
    }

    public function getValorItem(): float
    {
        return $this->valorItem;
    }

    public function setValorItem(float $valorItem): self
    {
        $this->valorItem = $valorItem;

        return $this;
    }

    public function getNomeItem(): string
    {
        return $this->nomeItem;
    }

    public function setNomeItem(string $nomeItem): self
    {
        $this->nomeItem = $nomeItem;

        return $this;
    }
}
