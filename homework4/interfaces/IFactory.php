<?php

interface IFactory {
    public function dbConnection();
    public function dbRecord();
    public function dbQueryBuilder();
}