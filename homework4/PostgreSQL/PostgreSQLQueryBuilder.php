<?php


class PostgreSQLQueryBuilder implements IDBQueryBuilder
{
    public function dbQueryBuilder()
    {
        echo "Конструктор запросов к базе данных PostgreSQL<br>";
    }
}