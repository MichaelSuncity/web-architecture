<?php


class MySQLQueryBuilder implements IDBQueryBuilder
{
    public function dbQueryBuilder()
    {
        echo "Конструктор запросов к базе данных MySQL<br>";
    }
}