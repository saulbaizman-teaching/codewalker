<?php

require 'functions.php' ;

//for all the ajax requests

//need to specify callback

if ( $_GET['callback'] == 'steps' ) {
    // return list of steps for the given project
//    echo 'these are the steps!' ;

//    echo 'hello' ;
//    echo $_GET['project_id'] ;

    print_steps ( $_GET['project'] ) ;
}

elseif ( $_GET['callback'] == 'file' ) {
    // return file for the given step
    print_file ( $_GET['project'], $_GET['file'] ) ;

}

else {

    echo 'ERROR: unrecognized callback.' ;
    exit ;

}