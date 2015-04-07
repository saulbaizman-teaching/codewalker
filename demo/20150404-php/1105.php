<?php

// 1 **************************************************************************
// Arrays. Arrays are lists, like JavaScript. Let's create a simple one.

$teams = array ( 'revolution', 'celtics', 'bruins', 'patriots' ) ;

// 2 **************************************************************************
// To refer to an element, we use bracket notation with a numerical index,
// just like JavaScript.

$football_team = $teams[3] ; // patriots

// 3 **************************************************************************
// Let's print an element from the array.

print ( $teams[2] ) ; // "bruins"

// 4 **************************************************************************
// Let's add another element to the array.

$teams[] = 'red sox' ; // adds 'red sox' to the end of the array

// 5 **************************************************************************
// Let's remove an element from the array.

unset ( $teams[0] ) ; // removes 'revolution'

// 6 **************************************************************************
// Let's print the entire array using print_r( )

print_r ( $teams ) ;
/*
Array
(
    [1] => celtics
    [2] => bruins
    [3] => patriots
    [4] => red sox
)
 */

?>
