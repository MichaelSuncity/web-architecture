<?php


class PostgreSQLFactory implements IFactory
{
    protected $connection;
    protected $record;
    protected $queryBuilder;

    public function __construct()
    {
        $this->connection = new PostgreSQLConnection();
        $this->record = new PostgreSQLRecord();
        $this->queryBuilder = new PostgreSQLQueryBuilder();
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