<?php


class MySQLConnection implements IDBConnection
{
    public function dbConnection()
    {
        echo "Подключаюсь к базе данных MySQL<br>";
    }
}