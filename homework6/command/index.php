<?php


use commands\Copy;
use commands\Cut;
use commands\Paste;

spl_autoload_register(static function ($className) {
    $file = str_replace('\\', DIRECTORY_SEPARATOR, $className);
    require __DIR__ . DIRECTORY_SEPARATOR . $file . '.php';
});

$text = 'Какой-то текст, полученный из файла';
$word = new Word($text);
$word->editText(new Copy(0, 5));
$word->editText(new Paste(0, 0));
$word->editText(new Cut(20, 25));
$word->editText(new Paste(10, 0));

echo $word->getText() . PHP_EOL;

$word->undo(4);
echo $word->getText() . PHP_EOL;
