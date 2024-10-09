<?php
require_once '../game.php';

// Execute functions for each button with ajax
if (isset($_POST['action'])) {
    switch ($_POST['action']) {
        case 'Buscar comida':
            $responseData = $player->search_food();
            echo $responseData;
            break;
        case 'Descansar':
            $responseData = $player->rest();
            echo 'rest';
            break;
        case 'Explorar':
            $responseData = $player->explore();
            echo 'explore';
            break;
        case 'Intentar escapar':
            $responseData = $player->escape();
            echo 'escape';
            break;
    }
}

function select()
{
    echo "The select function is called.";
    exit;
}

function insert()
{
    echo "The insert function is called.";
    exit;
}
