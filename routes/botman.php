<?php

use App\Http\Controllers\BotManController;
use BotMan\BotMan\Facades\BotMan;
use BotMan\BotMan\Messages\Attachments\Image;
use BotMan\BotMan\Messages\Outgoing\OutgoingMessage;

$botman = resolve('botman');
/* Lets Initiate First Contact */
$botman->hears('Hi', function ($bot) {
    $bot->reply('Hello!, Who Im i talking to?');
});


/* Introduce yourself */
$botman->hears('Im {name}', function ($bot, $name) {
    $bot->reply('Whoa,' . $name . ' Glad to meet you, how can i help you?');
});

$botman->hears('Howdy', function ($bot) {
    $bot->reply('Im feeling great, what about you?');
});

$botman->hears('Im good', function ($bot) {
    $bot->reply('Glad to hear');
});


/* Keep the conversation going
 */
$botman->hears('Start conversation', BotManController::class . '@startConversation');
$botman->hears('Help', BotManController::class . '@help');
