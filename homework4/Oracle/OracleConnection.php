<?php


class OracleConnection implements IDBConnection
{
    public function dbConnection()
    {
        echo "Подключаюсь к базе данных Oracle<br>";
    }
}