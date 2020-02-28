<?php


class User
{
    private $text;
    private $commands;
    private $current = 0;

    public function __construct()
    {
        $this->text = new Text;
    }

    public function runCopyCommand($text, $start, $length){
        $command = new CopyTextCommand($text, $start, $length);
        $command->execute();
        $this->commands[] = $command;
        $this->current++;
    }
}