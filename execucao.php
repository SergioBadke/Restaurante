<?php

require_once("modelo/Pedido.php");
require_once("modelo/Prato.php");
require_once("modelo/Bebida.php");
require_once("modelo/Sobremesa.php");

function listarPedido($pedidos)
{
    if (count($pedidos) > 0) {
        foreach ($pedidos as $i => $pedido)
            printf($pedidos);
    } else
        echo "Nenhum prato.\n";
}


function menu(){
    
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


//--><--//

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

//--><--//

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



//Menu//

do {

    echo ("-------------------- PEDIDO -------------------");
    echo ("-----------------------------------------------");
    echo ("- 1 - Adicionar - Item ------------------------");
    echo ("- 2 - Listar - Itens --------------------------");
    echo ("- 3 - Remover - Item --------------------------");
    echo ("- 4 - Fechar - Pedido -------------------------");
    echo ("-----------------------------------------------");

    $opcao = readline("Informe opçaão: ");

    $listaPedido = array();
    switch ($opcao) {
        case 1:
            //adicionar

            break;
        case 2:
            listarPedido($listaPedido);
            break;

        case 3:
            # code...
            break;

        case 4:
            $opcao = 0;
            break;
        default:
            echo "Opção Invalida";
            break;
    }
} while ($opcao != 0);
