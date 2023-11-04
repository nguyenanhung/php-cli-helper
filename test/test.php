<?php
require_once __DIR__ . '/../vendor/autoload.php';


$question = 'are you an idiot? (y/n)';
$answers = ['y', 'n'];

if (cli_input_ask($question, $answers) === 'y') {
    die('ngu vl');
} elseif (cli_input_ask($question, $answers) === 'n') {
    die('Bạn thì kinh rồi!');
}


