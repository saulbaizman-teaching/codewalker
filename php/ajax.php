<?php

require 'functions.php' ;

//for all the ajax requests

//need to specify callback

if ( $_GET['callback'] == 'steps' ) {
    // return list of steps for the given project
//    echo 'these are the steps!' ;

//    echo 'hello' ;
//    echo $_GET['project_id'] ;

    print_steps ( $_GET['demo'] ) ;
}

elseif ( $_GET['callback'] == 'step_details' ) {
    // return file for the given step
    print_step_details ( $_GET['demo'], $_GET['step_details'] ) ;

}

else {

    echo 'ERROR: unrecognized callback.' ;
    exit ;

}