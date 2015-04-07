<?php

// 1 **************************************************************************
// Arrays. Let's create a more complex one. This is different than JavaScript.

$teams = array ( 'soccer' => 'revolution', 'basketball' => 'celtics', 'hockey' => 'bruins', 'football' => 'patriots' ) ;

// 2 **************************************************************************
// To refer to an element, use its key.
$teams['basketball'] ; // celtics

// 3 **************************************************************************
// Let's print an element from the array.
print ( $teams['football'] ) ; // 'patriots'

// 4 **************************************************************************
// Let's add another element to the array.
$teams['baseball'] = 'red sox' ;

// 5 **************************************************************************
// Let's remove an element from the array.
unset ( $teams['hockey']) ;

// 6 **************************************************************************
// Let's print the entire array.

print_r ( $teams ) ;
/*
Array
(
    [soccer] => revolution
    [basketball] => celtics
    [football] => patriots
    [baseball] => red sox
)
*/
?>
