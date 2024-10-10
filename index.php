<?php

include('config.php');

$user = $db->select('user',['id','step'],['id' => $chat_id])[0];

if ($text == "/start" ) {
	bot::sendMessage($chat_id,$user['id']);
	
}