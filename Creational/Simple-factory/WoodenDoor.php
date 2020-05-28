<?php
/**
 * Created by PhpStorm.
 * User: Ahmad Gomaa
 * Date: 28/05/20
 * Time: 04:55 PM
 */
class WoodenDoor implements Door
{
    protected $width;
    protected $height;

    public function __construct(float $width, float $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    public function getWidth(): float
    {
        return $this->width;
    }

    public function getHeight(): float
    {
        return $this->height;
    }
}