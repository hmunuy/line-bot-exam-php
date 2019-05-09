<?php



require "vendor/autoload.php";

$access_token = 'g08oBecwnff9aIUo+1OzkLbb+j8RN/fiz65qfOiacinpq/3tRwkiAEFVohTrXvvV+lG9LouK0XZ8EoMwuRIrFpP+eMGqp1qH8wIZPqdUN1Q28o9+EAWliMWDJ3mtpj+cWWYW8Tq7Sy1ekvFDzbGi+wdB04t89/1O/w1cDnyilFU=';
$channelSecret = '9362669de83b46da6003d3ba260ab460';

$pushID = 'U680e60e2d3c43a4d0ac71d0bf5face98';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







