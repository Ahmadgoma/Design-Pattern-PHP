<?php
/**
 * Created by PhpStorm.
 * User: Ahmad Gomaa
 * Date: 28/05/20
 * Time: 06:22 PM
 */

require_once 'President.php';

$president = President::getInstance();
$president2 = President::getInstance();

var_dump($president === $president2); //bool(true)