<?php


class VacancyObserver implements SplObserver
{
    private $name;
    private $email;
    private $experience;

    public function __construct($name, $email, $experience)
    {
        $this->name = $name;
        $this->email = $email;
        $this->experience = $experience;
    }

    public function update(SplSubject $subject)
    {
        echo "Уважаемый {$this->name}! Появились новые вакансии!\n";
    }
}