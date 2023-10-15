<?php

header ("Content-type:image/jpeg");

$img = imagecreatefromjpeg( SIT. 'images\gd.jpg');

imagejpeg($img);
imagedestroy($img);

