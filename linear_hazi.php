<?php 

header("content-type: image/png");

$width = 256 * 6;
$img = imagecreatetruecolor($width, 50);


for ($i = 0; $i < 256; $i++) { 
    $c = imagecolorallocate($img, 255, $i, 0);
    imageline($img, 256 * 0 + $i, 20, 256 * 0 + $i, 30, $c);
}

for ($i = 0; $i < 256; $i++) { 
    $c = imagecolorallocate($img, 255 - $i, 255, 0);
    imageline($img, 256 * 1 + $i, 20, 256 * 1 + $i, 30, $c);
}

for ($i = 0; $i < 256; $i++) { 
    $c = imagecolorallocate($img, 0, 255, $i);
    imageline($img, 256 * 2 + $i, 20, 256 * 2 + $i, 30, $c);
}

for ($i = 0; $i < 256; $i++) { 
    $c = imagecolorallocate($img, 0, 255 -$i, 255);
    imageline($img, 256 * 3 + $i, 20, 256 * 3 + $i, 30, $c);
}

for ($i = 0; $i < 256; $i++) { 
    $c = imagecolorallocate($img, $i, 0, 255);
    imageline($img, 256 * 4 + $i, 20, 256 * 4 + $i, 30, $c);
}

for ($i = 0; $i < 256; $i++) { 
    $c = imagecolorallocate($img, 255, 0, 255 - $i);
    imageline($img, 256 * 5 + $i, 20, 256 * 5 + $i, 30, $c);
}

imagepng($img);
imagedestroy($img);
?>