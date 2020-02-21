<?php


class PostgreSQLRecord implements IDBRecord
{
    public function dbRecord()
    {
        echo "Записываю  тестовую таблицу в базу данных PostgreSQL<br>";
    }
}