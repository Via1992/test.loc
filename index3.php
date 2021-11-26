<?php

$dirs = scandir('./images');
$path = 'images/';
$images = [];
foreach ($dirs as $dir) {
    if ($dir !== '.' && $dir !== '..') {
        $images[] = $dir;
    }
}

foreach ($images as $image) {
    echo '<a target="_blank" href="' . $path . $image . '"><img src="' . $path . $image . '" style = width:200px></a>';
}