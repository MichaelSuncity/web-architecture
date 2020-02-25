<?php


class PostgreSQLConnection implements IDBConnection
{
    public function dbConnection()
    {
        echo "Подключаюсь к базе данных PostgreSQL<br>";
    }
}