<?php
require "vendor/autoload.php";
$access_token = 'Ph9Iw2Y6PiN0BrG98j8gxgELX8Zz1+DwFV1X9yubXB7H62CiOtFDydszhJh5jR6wP5UyUabKOdNNz6vL4GDQ9QdI0ssu9FnObIMDnDBt/x65rcsQbdWx/UXRpyrxla3+maixKZGebebuDjB+/ZW0V1GUYhWQfeY8sLGRXgo3xvw=';
$channelSecret = '5a620251ba162a0a6c51ad2b11c8dd85';
$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);
$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($idPush, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();
