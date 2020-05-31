<?php
/**
 * Created by PhpStorm.
 * User: Ahmad Gomaa
 * Date: 31/05/20
 * Time: 05:49 AM
 */
require_once 'Computer.php';
require_once 'ComputerFacade.php';

$computer = new ComputerFacade(new Computer());
$computer->turnOn(); // Ouch! Beep beep! Loading.. Ready to be used!
$computer->turnOff(); // Bup bup buzzz! Haah! Zzzzz