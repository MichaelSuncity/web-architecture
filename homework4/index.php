<?php

require "interfaces/IDBConnection.php";
require "interfaces/IDBRecord.php";
require "interfaces/IFactory.php";
require "interfaces/IDBQueryBuilder.php";
require "MySQL/MySQLConnection.php";
require "MySQL/MySQLFactory.php";
require "MySQL/MySQLRecord.php";
require "MySQL/MySQLQueryBuilder.php";
require "Oracle/OracleConnection.php";
require "Oracle/OracleFactory.php";
require "Oracle/OracleRecord.php";
require "Oracle/OracleQueryBuilder.php";
require "PostgreSQL/PostgreSQLConnection.php";
require "PostgreSQL/PostgreSQLFactory.php";
require "PostgreSQL/PostgreSQLRecord.php";
require "PostgreSQL/PostgreSQLQueryBuilder.php";


function testFactory (IFactory $factory){
    $factory->dbConnection();
    $factory->dbRecord();
    $factory->dbQueryBuilder();
}

testFactory(new PostgreSQLFactory());
testFactory(new MySQLFactory());
testFactory(new OracleFactory());