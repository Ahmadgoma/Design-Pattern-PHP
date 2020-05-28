<?php
/**
 * Created by PhpStorm.
 * User: Ahmad Gomaa
 * Date: 28/05/20
 * Time: 06:15 PM
 */

final class President
{
    private static $instance;

    private function __construct()
    {
        // disable constructor
    }

    public static function getInstance():President
    {
        if(!self::$instance)
            self::$instance = new self();

        return self::$instance;
    }

    public function __clone()
    {
        // Disable cloning.
    }

    public function __wakeup()
    {
        // Disable unserialize
    }
}