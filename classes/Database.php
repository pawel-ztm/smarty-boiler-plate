<?php

class Database
{
    private $host;
    private $name;
    private $user;
    private $pass;

    public function __construct($host, $name, $user, $pass)
    {
        $this->host = $host;
        $this->name = $name;
        $this->user = $user;
        $this->pass = $pass;
    }

    public function getConnection(): PDO
    {
        $dns = "mysql:host=$this->host;dbname=$this->name";

        return new PDO($dns, $this->user, $this->pass, [
            PDO::ATTR_EMULATE_PREPARES => false,
            PDO::ATTR_STRINGIFY_FETCHES => false
        ]);
    }
}
