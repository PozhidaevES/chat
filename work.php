<?php 

include('File.php');





define('TOKEN', '1261804910:AAGpB9KAOA0R33c488ILuwGiS0ZpEzD_Ogo');
define('URL', 'https://api.telegram.org/bot'.TOKEN.'/');

$chat = 824029525;

send($chat, $_POST['text']);

function send( $chat, $msg ){
    file_get_contents(URL."sendmessage?parse_mode=HTML&text=$msg&chat_id=$chat");
}




$file = new File('/var/www/www-root/data/www/ironlinks.ru/nordic/sofia/nordic5/timon/chat/data.txt');

$file->dataAdd();

header('location: index.php#form');