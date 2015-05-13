<?php
/**
 * Created by PhpStorm.
 * User: massartuser
 * Date: 4/10/15
 * Time: 1:34 PM
 */

require '../php/functions.php';

function escape_quote ( $s ) {

     return str_replace ( '"', '\"', $s ) ;
}

$d = get_demos ( $parent_folder = '../' ) ;

$demo_count = count ( $d ) ;

$demo_counter = 0 ;

//print_r ( $d ) ;

echo '{' ;

echo '  "demos": [' ;

foreach ( $d as $demo ) {
//    print_r ( $demo ) ;
//    return ;

// begin demo
    echo '{' ;
    echo '"DEMO_FOLDER":"",' ;
    echo '"DEMO_NAME": "' . $demo['DEMO_NAME'] . '",' ;
    echo '"DEMO_DESCRIPTION": "' . $demo['DEMO_DESCRIPTION'] . '",' ;
    echo '"DEMO_NOTE": "' . $demo['DEMO_NOTE'] . '",' ;
    echo '"demo_files": [' ;
    for ( $index = 0 ;  $index < count ( $demo['file'] ) ; $index++ ) {
        echo '{' ;

        echo '"file": "' . $demo['file'][$index] . '",' ;
        echo '"download": "' . $demo['download'][$index] .'",' ;
        echo '"caption": "' . escape_quote ( $demo['caption'][$index] ) . '"' ;

        // no comma if we're on the last element
        if ( $index != ( count ( $demo['file'] ) - 1 ) ) {
            echo '},' ;
        }
        else {
            echo '}' ;
        }
    }
    echo ']' ;

//end demo; remove trailing comma
    if ( $demo_counter != ( $demo_count - 1 ) ) {
        echo '},' ;
    }
    else {
        echo '}' ;
    }

    $demo_counter++ ;

}


echo ']' ;
echo '}' ;