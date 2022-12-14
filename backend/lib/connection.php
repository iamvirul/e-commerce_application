<?php

class Database
{
    public $connection;
    public function __construct()
    {
        $this->connection = new mysqli("127.0.0.1", "root", "200528100634@Vn", "shop_online", "3306");
    }
    public function search($q)
    {
        $resultset = $this->connection->query($q);
        return $resultset;
    }
    public function insert($q)
    {
        $resultset = $this->connection->query($q);
        return $resultset;
    }
    public function iud($q)
    {
        $resultset = $this->connection->query($q);
        return $resultset;
    }
}
