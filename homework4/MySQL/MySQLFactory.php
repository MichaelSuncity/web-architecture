<?php


class MySQLFactory implements IFactory
{
    protected $connection;
    protected $record;
    protected $queryBuilder;

    public function __construct()
    {
        $this->connection = new MySQLConnection();
        $this->record = new MySQLRecord();
        $this->queryBuilder= new MySQLQueryBuilder();
    }

    public function dbConnection()
    {
        $this->connection->dbConnection();
    }
    public function dbRecord()
    {
        $this->record->dbRecord();
    }
    public function dbQueryBuilder()
    {
        $this->queryBuilder->dbQueryBuilder();
    }
}