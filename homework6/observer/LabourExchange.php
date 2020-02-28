<?php


class LabourExchange implements SplSubject
{
    private $observers;
    public $vacancies;


    public function getVacancies()
    {
        return $this->vacancies;
    }

    public function setVacancies($vacancies)
    {
        $this->vacancies = $vacancies;
    }

    public function __construct()
    {
        $this->observers = new SplObjectStorage();
    }

    public function attach(SplObserver $observer)
    {
        echo "Новый подписчик.\n";
        $this ->observers->attach($observer);
    }
    public function detach(SplObserver $observer)
    {
        $this ->observers->detach($observer);
        echo "Подписчик отписался.\n";
    }
    public function notify()
    {
        foreach ( $this->observers as $observer) {
            $observer->update( $this );
        }
    }
}