<?php
/*$programmingLanguages = [
    'html',
    'css',
    'php',
    'js',
    'jq',
];
foreach ($programmingLanguages as $elem){
    echo $elem. PHP_EOL;
}*/

use Formapro\TelegramBot\Bot;
use Formapro\TelegramBot\SetWebhook;
use function GuzzleHttp\Psr7\str;

$bot = new Bot('telegramToken');

$setWebhook = new SetWebhook('https://your.app/telegram-updates-hook');

// uncomment if use use self-signed certificate
// $setWebhook->setCertificate(file_get_contents('/path/to/self-signed-certifcate.pem'));

$response = $bot->setWebhook($setWebhook);

echo str($response);
