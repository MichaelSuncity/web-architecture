<?php


class OracleQueryBuilder implements IDBQueryBuilder
{
    public function dbQueryBuilder()
    {
        echo "Конструктор запросов к базе данных Oracle<br>";
    }
}