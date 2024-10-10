<?php

include 'request.php';

class bot {
	private static $token;
	private static $request;
	
	public function __construct($token){
		self::$token = $token;
		self::$request = new request($token);
	}
	
	public static function getUpdate($set = null){
		$update = json_decode(file_get_contents('php://input'));
		if ($set == null) {
		return $update;
		}else {
			return $update->$set;
		}
	}
	
	public static function sendMessage($chat_id,$text){
		$response = self::$request->sendRequest('sendmessage',[
			'chat_id' => $chat_id,
			'text' => $text
			]);
			return $response;
	}
}