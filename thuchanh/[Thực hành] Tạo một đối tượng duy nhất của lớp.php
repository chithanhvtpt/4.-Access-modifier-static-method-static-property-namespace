<?php


class Applications
{
    private static $instance;

    public function __construct()
    {
    }

    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new Applications();
        }
        return self::$instance;
    }
}

$app1 = Applications::getInstance();
$app2 = Applications::getInstance();
$app3 = new Applications();
