<?php

require_once("Item.php");

final class Sobremesa extends Item implements iDados
{

    private bool $glutenFree;

    private bool $lactoseFree;
}
