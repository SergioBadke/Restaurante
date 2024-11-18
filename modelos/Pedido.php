<?php

require_once("Item.php");

final class Pedido extends Item
{
    private string $cliente;
    private int $codPedido;
    private int $valorTotal;


    /**
     * Get the value of cliente
     */
    public function getCliente(): string
    {
        return $this->cliente;
    }

    /**
     * Set the value of cliente
     */
    public function setCliente(string $cliente): self
    {
        $this->cliente = $cliente;

        return $this;
    }

    /**
     * Get the value of codPedido
     */
    public function getCodPedido(): int
    {
        return $this->codPedido;
    }

    /**
     * Set the value of codPedido
     */
    public function setCodPedido(int $codPedido): self
    {
        $this->codPedido = $codPedido;

        return $this;
    }

    /**
     * Get the value of valorTotal
     */
    public function getValorTotal(): int
    {
        return $this->valorTotal;
    }

    /**
     * Set the value of valorTotal
     */
    public function setValorTotal(int $valorTotal): self
    {
        $this->valorTotal = $valorTotal;

        return $this;
    }
}
