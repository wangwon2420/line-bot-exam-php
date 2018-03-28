<?php


$access_token = '2/Pynu5L9LqjYN8/UiTF6ZgEsobxzGd0c9bBT/ILLGIcRgcVzxZIJBG/EvgO1lPCvhIED6xiy0w5o1GNgv/yJMjjkJJXJgA5qGHDyhCACow8kXXb1KiEcWv96OT/P9bXB2caEAnspVBkHVO0vQR+4AdB04t89/1O/w1cDnyilFU=';

$userId = 'Uffa138efe037e6e889d0b0f4a871c005';

$url = 'https://api.line.me/v2/bot/profile/'.$userId;

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

