<?php

//error_reporting ( E_ALL ^ E_NOTICE ) ;

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

function get_demos ( $parent_folder = '' ) {

    global $config ;

    $demos = $config['demos'] ;

    foreach ( $demos as $demo ) {

        if ( file_exists ( $parent_folder . PROJECT_DIRECTORY . '/' . $demo . '/project.ini.php' ) )
        {
            $project_config[] = parse_ini_file ( $parent_folder . PROJECT_DIRECTORY . '/' . $demo . '/project.ini.php' ) ;
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

function print_demos ( $project = false ) {

    $demos_array = get_demos ( ) ;

    $demo_count = count ( $demos_array ) ;

    for ( $demo_index = 0 ; $demo_index < $demo_count ; $demo_index++ ){

        $demo_name = $demos_array[$demo_index]['PROJECT_NAME'] ;
        $demo_description = $demos_array[$demo_index]['PROJECT_DESCRIPTION'] ;

        $div_id = 'demo-' . $demo_index ;
        echo '<div id="' . $div_id . '">' ;
        echo '<h4><a href="javascript:loadSteps(' . $demo_index. ');">' . $demo_name . '</a></h4>' ;
        echo '<p><a href="javascript:loadSteps(' . $demo_index . ');">' . $demo_description . '</a></p>' ;
        echo '</div>' ;
    }


}

//function print_steps ( $project = false ) {
function print_steps ( $demo ) {

    $project_details = get_demos ( '../' ) ;

    $one_demo = $project_details[$demo] ;

    echo '<ol>' . "\n" ;
    for ( $step = 0 ; $step < count ( $one_demo['file'] ) ; $step++ ) {
        $li_id = 'li-' . $demo . '-' . str_replace ( '.','-', $one_demo['file'][$step] ) ;
        echo '<li id="' . $li_id . '" class="step"><a href="javascript:loadFile(\'' . $demo . '\',\'' . $one_demo['file'][$step] . '\');">' . $one_demo['caption'][$step] . '</a></li>' . "\n" ;
    }
    echo '</ol>' ;

}

function print_step_details ( $demo, $step ) {

    global $config ;

    $demos = $config['demos'] ;

//    $project_details = get_projects ( '../' ) ;

//    print_r ( $projects ) ;
//    print_r ( $project_details ) ;

//    echo 'project: ' . $project . '   file: ' . $file ;

    $parent_folder = $demos[$demo] ;

//    $requested_file = $project_details[$project]['file'][$file];

    $file_path = '../' . PROJECT_DIRECTORY . '/' . $parent_folder . '/' . $step ;
//echo 'path: ' . $file_path ;
    readfile ( $file_path ) ;

}