<?php


class CopyTextCommand extends Command
{

    public $text;
    public $start;
    public $length;

    public function __construct($text, $start, $length)
    {
        $this->text = $text;
        $this->start = $start;
        $this->length = $length;
    }

    public function execute()
    {
        echo substr($this->text, $this->start, $this->length);
    }



    public function unExecute()
    {
        // TODO: Implement unExecute() method.
    }
}