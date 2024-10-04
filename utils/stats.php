
<?php

require_once 'classes/player.php';


$player = Player::create_player('Nerea');

$player = $player->search_food($player);
$player_data = $player->get_data();
echo $player_data['food'];
echo $player_data['water'];
echo $player_data['energy'];

$player = $player->rest($player);
$player_data = $player->get_data();
echo $player_data['food'];
echo $player_data['water'];
echo $player_data['energy'];

?> 