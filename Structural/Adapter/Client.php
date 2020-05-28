<?php
/**
 * Created by PhpStorm.
 * User: Ahmad Gomaa
 * Date: 28/05/20
 * Time: 11:01 PM
 */
require_once 'VideoInterface.php';
require_once 'VimeoAdapter.php';
require_once 'Vimeo.php';

$vimeoAdapter = new VimeoAdapter(new Vimeo());

$listVideos = $vimeoAdapter->fetchVideos();

print_r($listVideos);