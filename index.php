<?php
include_once("templates/topo.php");
include_once("templates/menu.php");


if (empty($_SERVER['QUERY_STRING'])) {
    
    $var = "principal.php";
    include_once($var);
} else {
    
    parse_str($_SERVER['QUERY_STRING'], $params);
    $pg = isset($params['pagina']) ? $params['pagina'] : 'principal'; 

    
    switch ($pg) {
        case 'quemsomos':
            include_once('quemsomos.php');
            break;
        case 'clientes':
            include_once('produtos.php');
            break;
        case 'faleconosco':
            include_once('faleconosco.php');
            break;
        case 'principal':
            include_once('principal.php');
            break;
        default:
            include_once('principal.php'); 
            break;
    }
}

include_once('templates/rodape.php');
?>

