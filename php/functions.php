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

function get_projects ( $parent_folder = '' ) {

    global $config ;

    $projects = $config['projects'] ;
//print_r ( $projects ) ;
//    exit ;

    foreach ( $projects as $project ) {
        // echo PROJECT_DIRECTORY . '/' . $project . '/project.ini.php ' . "\n<br />";

        if ( file_exists ( $parent_folder . PROJECT_DIRECTORY . '/' . $project . '/project.ini.php' ) )
        {
            $project_config[] = parse_ini_file ( $parent_folder . PROJECT_DIRECTORY . '/' . $project . '/project.ini.php' ) ;
        }
//        elseif ( file_exists ( '../' . PROJECT_DIRECTORY . '/' . $project . '/project.ini.php' ) ) {
//            $project_config[] = parse_ini_file ( '../' . PROJECT_DIRECTORY . '/' . $project . '/project.ini.php' ) ;
//
//        }
        else
        {
            echo 'ERROR: could not parse project ini file.' ;
            exit ;
        }

    }

    // returns an array
    return $project_config ;
}

function print_projects ( $project = false ) {

    $projects_array = get_projects ( ) ;

    $project_count = count ( $projects_array ) ;

//        echo 'count: ' . $project_count ;

    for ( $project_index = 0 ; $project_index < $project_count ; $project_index++ ){

        $project_name = $projects_array[$project_index]['PROJECT_NAME'] ;
        $project_description = $projects_array[$project_index]['PROJECT_DESCRIPTION'] ;

        $div_id = 'project-' . $project_index ;
        echo '<div id="' . $div_id . '" class="project">' ;
        echo '<h4><a href="javascript:loadSteps(' . $project_index. ');">' . $project_name . '</a></h4>' ;
//        echo '<p id="project' . $project_index . '"><a href="javascript:loadSteps(' . $project_index . ');">' . $project_description . '</a></p>' ;
        echo '<p><a href="javascript:loadSteps(' . $project_index . ');">' . $project_description . '</a></p>' ;
        echo '</div>' ;
    }


}

//function print_steps ( $project = false ) {
function print_steps ( $project ) {

    $project_details = get_projects ( '../' ) ;

//    if ( ! $project_id === false )
//    {
        $one_project = $project_details[$project] ;
//    }

    echo '<ol>' ;
    for ( $step = 0 ; $step < count ( $one_project['file'] ) ; $step++ ) {
        $li_id = 'li-' . $project . '-' . str_replace ( '.','-', $one_project['file'][$step] ) ;
        echo '<li id="' . $li_id . '" class="step"><a href="javascript:loadFile(\'' . $project . '\',\'' . $one_project['file'][$step] . '\');">' . $one_project['caption'][$step] . '</a></li>' ;
    }
    echo '</ol>' ;

}

function print_file ( $project, $file ){

    global $config ;

    $projects = $config['projects'] ;

//    $project_details = get_projects ( '../' ) ;

//    print_r ( $projects ) ;
//    print_r ( $project_details ) ;

//    echo 'project: ' . $project . '   file: ' . $file ;

    $parent_folder = $projects[$project] ;

//    $requested_file = $project_details[$project]['file'][$file];

    $file_path = '../' . PROJECT_DIRECTORY . '/' . $parent_folder . '/' . $file ;
//echo 'path: ' . $file_path ;
    readfile ( $file_path ) ;

}