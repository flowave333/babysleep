<?php 
//set content type so that image will be rendered in the browser ... remember in jsp
header("Content-type: image/png");

//create new 300x300 image
$myImage = ImageCreate(300,300);

//the first color allocated is the background color
$black = ImageColorAllocate($myImage, 0, 0, 0);
$white = ImageColorAllocate($myImage, 0xff, 0xff, 0xff);
$red = ImageColorAllocate($myImage, 0xff, 0, 0);
$blue = ImageColorAllocate($myImage, 0, 0, 0xff);
$green = ImageColorAllocate($myImage, 0, 0xff, 0);

//draw image
ImageFilledArc($myImage, 155, 155, 200, 150, 0, 90, $red, IMG_ARC_PIE);     //origin x, origin y, width, height , from, to  ...
ImageFilledArc($myImage, 150, 150, 200, 150, 90, 180, $green, IMG_ARC_PIE);
ImageFilledArc($myImage, 150, 150, 200, 150, 180, 360, $blue, IMG_ARC_PIE);

//send the bytes of the image
ImagePng($myImage);

// free the memory fot the image
ImageDestroy($myImage);

?>