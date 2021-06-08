<?php

use App\Http\Controllers\BotManController;
use BotMan\BotMan\Facades\BotMan;

$botman = resolve('botman');
/* Lets Initiate First Contact */
$botman->hears('Hi', function ($bot) {
    $bot->reply('Hello!');
});

$botman->hears('Howdy', function ($bot) {
    $bot->reply('Im feeling great, what about you?');
});

$botman->hears('Start conversation', BotManController::class . '@startConversation');
$botman->hears('Help', BotManController::class . '@help');