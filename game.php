<?php
require_once 'classes/player.php';
require_once 'utils/functions.php';
require_once 'utils/const.php';


// Create player 
$player = Player::create_player($_REQUEST['name']);
$playerData = $player->get_data();


?>


<!-- SECTIONS -->
<?php render_template('head', ['title' => TITLE]) ?>
<?php render_template('game-main', $playerData) ?>