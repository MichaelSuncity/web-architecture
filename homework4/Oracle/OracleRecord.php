<?php


class OracleRecord implements IDBRecord
{
    public function dbRecord()
    {
        echo "Записываю тестовую таблицу в базу данных Oracle<br>";
    }
}