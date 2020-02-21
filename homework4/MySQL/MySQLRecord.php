<?php


class MySQLRecord implements IDBRecord
{
    public function dbRecord()
    {
       echo "Записываю  тестовую таблицу в базу данных MySQL<br>";
    }
}