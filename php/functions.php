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

if ( DEBUG )
    print_r ( $config ) ;

// Get program name.
function get_program_name ( )
{
    global $config ;
    return $config[PROGRAM_NAME] ;
}

// Get program name.
function get_program_version ( )
{
    global $config ;
    return $config[PROGRAM_VERSION] ;
}

// Get list of projects

function get_project_list() {
    global $config ;

    $projects = $config['projects'] ;

    foreach ( $projects as $project ) {
//        echo PROJECT_DIRECTORY . '/' . $project . '/project.ini.php ' . "\n<br />";

        if ( file_exists ( PROJECT_DIRECTORY . '/' . $project . '/project.ini.php' ) )
        {
            $project_config[] = parse_ini_file ( PROJECT_DIRECTORY . '/' . $project . '/project.ini.php' ) ;
        }
        else
        {
            echo 'ERROR: could not parse project ini file.' ;
            exit ;
        }

    }

    // returns an array
    return $project_config ;
}