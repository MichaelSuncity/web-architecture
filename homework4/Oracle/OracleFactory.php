<?php


class OracleFactory implements IFactory
{
    protected $connection;
    protected $record;
    protected $queryBuilder;

    public function __construct()
    {
        $this->connection = new OracleConnection();
        $this->record = new OracleRecord();
        $this->queryBuilder = new OracleQueryBuilder();
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