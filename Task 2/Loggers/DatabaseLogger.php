<?php

require_once 'Logger.php';

class DatabaseLogger implements Logger
{
    private $connection;

    public function __construct($connection)
    {
        $this->connection = $connection;
    }

    public function log($message)
    {
        echo "[" . date('Y-m-d H:i:s') . "] " . $message . "[" . $this->connection . "]\n";
    }
}
