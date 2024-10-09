<?php
require_once 'classes/player.php';
require_once 'utils/functions.php';
require_once 'utils/const.php';


// Create player  
$player = Player::create_player($_REQUEST['name']);
$playerData = $player->get_data();

// First response
$response = 'Una pequeña ola cargada de algas rompe contra tu cara, despertándote abruptamente. Estás tirado en la
orilla de una playa. Miras a tu alrededor. Océano a izquierda y derecha te rodean hasta donde te alcanza la vista.
No recuerdas exactamente lo que ha pasado, pero parece que te encuentras totalmente solo... y sin móvil... ';
$playerData['response'] = $response;


//Save player in a cookie
$playerJson = json_encode($playerData);
setcookie("playerData", $playerJson);
// $return = $_COOKIE['cook'];
// $arr = json_decode($return, true);


// after the page reloads, print them out
// if (isset($_COOKIE['cookie'])) {
//     foreach ($_COOKIE['cookie'] as $name => $value) {
//         $name = htmlspecialchars($name);
//         $value = htmlspecialchars($value);
//         echo "$name : $value <br />\n";
//     }
// }

?>


<!-- SECTIONS -->
<?php render_template('head', ['title' => TITLE]) ?>
<?php render_template('game-main', $playerData) ?>