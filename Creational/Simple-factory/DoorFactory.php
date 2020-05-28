<?php
/**
 * Created by PhpStorm.
 * User: Ahmad Gomaa
 * Date: 28/05/20
 * Time: 04:59 PM
 */

class DoorFactory
{
    public static function makeDoor(float $width, float $height):Door
    {
        return new WoodenDoor($width, $height);
    }
}