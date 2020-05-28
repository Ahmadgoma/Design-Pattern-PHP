<?php
/**
 * Created by PhpStorm.
 * User: Ahmad Gomaa
 * Date: 28/05/20
 * Time: 11:03 PM
 */
class VimeoAdapter implements VideoInterface
{
    private $vimeo;

    public function __construct(Vimeo $vimeo)
    {
        $this->vimeo = $vimeo;
    }

    public function fetchVideos(): array
    {
        return $this->vimeo->getVideos();
    }
}