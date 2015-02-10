<?php

error_reporting ( E_ALL ^ E_NOTICE ) ;

// declare config file as a constant
define ( 'CONFIG', dirname (__FILE__) . '/config.ini.php' ) ;

if ( file_exists ( CONFIG ) )
{
    $config = parse_ini_file ( CONFIG ) ;
}
else
{
    echo 'No configuration file found! Exiting...' ;
    exit ;
}

// declare debugging state as a constant
define ( 'DEBUG', $config[DEBUG] ) ;

define ('PROJECT_DIRECTORY', $config[PROJECT_DIRECTORY]) ;

//print_r ( $config ) ;

// Get program name.
function get_program_name ( )
{
    global $config ;
    return $config[PROGRAM_NAME] ;
}