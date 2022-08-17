<?php

$img = imagecreatetruecolor(50, 50);

$str = imagecolorallocate($img, 255, 255, 255);
imagestring($img, 5, 20, 16, $_GET['img'], $str);

imagepng($img);
imagedestroy($img);
