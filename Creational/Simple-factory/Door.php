<?php

/**
 * Created by PhpStorm.
 * User: Ahmad Gomaa
 * Date: 28/05/20
 * Time: 04:53 PM
 */

interface Door
{
    /**
     * @return float
     */
    public function getWidth(): float;

    /**
     * @return float
     */
    public function getHeight(): float;
}