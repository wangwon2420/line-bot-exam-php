<?php



require "vendor/autoload.php";

$access_token = 'rxsJix6hJjDqw7d4u0NcUsKvoCrOBPDRNRQ8NZG2gnu1w2alxPhti6hHc2/pDnCTvhIED6xiy0w5o1GNgv/yJMjjkJJXJgA5qGHDyhCACoyVN0g9mUvpiYE1fonuEBoVVQ5M9lIKUGlOfYwxrc9ikgdB04t89/1O/w1cDnyilFU=';

$channelSecret = '9ae4901802f334eb5426f3242060bb5b
';

$pushID = 'U7ef7a449f2a5c2057eacfc02ba2eb286';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







