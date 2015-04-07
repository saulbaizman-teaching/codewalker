<?php

// Conditional statements.
// They're nearly identical to JavaScript.

$number = 5 ;

// if ( condition ) { ... }
if ( $number > 0 ) {
    print ( "The number is greater than 0." ) ;
}

// if ( condition ) { ... } else { ... }
if ( $number > 10 ) {
    print ( "The number is greater than 10." ) ;
}
else {
    print ( "The number is less than 10." ) ;
}

// if ( condition ) { ... } elseif { ... } else { ... }
if ( $number > 5 ) {
    print ( "The number is greater than 5." ) ;
}
elseif ( $number < 5 ) {
    print ( "The number is less than 5." ) ;
}
else {
    print ( "The number is 5." ) ;
}

?>
