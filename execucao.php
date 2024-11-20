<?php

require_once("modelo/Pedido.php");
require_once("modelo/Prato.php");
require_once("modelo/Bebida.php");
require_once("modelo/Sobremesa.php");


//Menu//

do{

    echo ("-------------------- PEDIDO -------------------");
    echo ("-----------------------------------------------");
    echo ("- 1 - Adicionar - Item ------------------------");
    echo ("- 2 - Listar - Itens --------------------------");
    echo ("- 3 - Remover - Item --------------------------");
    echo ("- 4 - Fechar - Pedido -------------------------");
    echo ("-----------------------------------------------");

    $opcao=readline("Informe opçaão: ");

    switch ($opcao) {
        case 1:
            //adicionar
            break;
        case 2:
            //listar
            break;
        
        case 3:
            # code...
            break;
            
        case 4:
            $opcao=0;
            break;
        default:
            echo "Opção Invalida";
            break;
    }



}while($opcao!=0);