<?php
/**
 * Created by PhpStorm.
 * User: Ahmad Gomaa
 * Date: 28/05/20
 * Time: 05:01 PM
 */

require_once 'Door.php';
require_once 'WoodenDoor.php';
require_once 'DoorFactory.php';

$door = DoorFactory::makeDoor(100, 250);

echo 'width is '. $door->getWidth();
echo ' and height is '. $door->getHeight();