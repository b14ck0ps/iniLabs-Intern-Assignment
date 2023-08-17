<?php

require_once 'Logger.php';

class UserLogger implements Logger
{
    private $username;
    public function __construct($username)
    {
        $this->username = $username;
    }

    public function log($message)
    {
        echo "[" . date('Y-m-d H:i:s') . "] " . $message . " -> " . $this->username . "\n";
    }
}
