<?php


class CopyCommand extends Command
{

    public $operator;
    public Text $text;

    public function __construct($operator, Text $text)
    {
        $this->operator = $operator;
        $this->text = $text;
    }

    public function execute()
    {
        $this->text->operation($this->operator);
    }
    public function unExecute()
    {
        // TODO: Implement unExecute() method.
    }
}