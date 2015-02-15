<?php

require 'functions.php' ;

//for all the ajax requests

if ( $_GET['callback'] == 'steps' ) {

    // return list of steps for the given demo
    print_steps ( $_GET['demo'] ) ;

}
elseif ( $_GET['callback'] == 'step_details' ) {

    // return file for the given step
    print_source_code ( $_GET['demo'], $_GET['step_details'] ) ;

}
else {

    echo 'ERROR: unrecognized callback.' ;
    exit ;

}