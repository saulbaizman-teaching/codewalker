<?php

// Dynamic imagery.
// Let's pass the string to write on the image via the query string.

// http://localhost:8888/1113.php?string=adfdafdsa
// If we wanted to pass multiple arguments, we'd separate them with an ampersand (&):
// http://localhost:8888/1113.php?string=adfdafdsa&background_color=255,23,0

$my_message = $_GET['string'] ;

// Image creation and manipulation.
// http://php.net/imagecreate

// Print the appropriate header
header("Content-Type: image/png");

// Create a new image resource.
$png_image = imagecreate ( 600, 600 )
or die("Cannot Initialize new GD image stream.");

// Create a resource for the background color (black).
// (Recognize the color notation?)
$background_color = imagecolorallocate ( $png_image, 0, 0, 0 );

// Create a resource for the foreground (text) color.
$text_color = imagecolorallocate($png_image, 255, 255, 255 );

// Draw a simple phrase.
// imagestring ( resource $image , int $font , int $x , int $y , string $string , int $color )
imagestring ( $png_image, 5, 50, 50, $my_message, $text_color);

// Create the PNG and output it.
imagepng ( $png_image ) ;

// Free up the memory the png image resource was using.
// Not necessary to explicitly call this function, but git is ood practice.
imagedestroy ( $png_image ) ;

?>
