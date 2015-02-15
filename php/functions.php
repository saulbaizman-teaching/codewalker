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

define ('DEMO_DIRECTORY', $config[DEMO_DIRECTORY]) ;

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

// Get list of demos

function get_demos ( $parent_folder = '' ) {

    global $config ;

    $demos = $config['demos'] ;

    foreach ( $demos as $demo ) {

        if ( file_exists ( $parent_folder . DEMO_DIRECTORY . '/' . $demo . '/demo.ini.php' ) )
        {
            if ( ! parse_ini_file ( $parent_folder . DEMO_DIRECTORY . '/' . $demo . '/demo.ini.php' ) )
            {
                echo 'Error parsing INI file.' ;
            }
            else {
                $demo_config[] = parse_ini_file ( $parent_folder . DEMO_DIRECTORY . '/' . $demo . '/demo.ini.php' ) ;
            }

        }
        else
        {
            echo 'ERROR: could not parse demo ini file.' ;
            exit ;
        }

    }

    // returns an array
    return $demo_config ;
}

function print_demos ( $demo = false ) {

    $demos_array = get_demos ( ) ;
//print_r ( $demos_array ) ;
    $demo_count = count ( $demos_array ) ;

    for ( $demo_index = 0 ; $demo_index < $demo_count ; $demo_index++ ){

        $demo_name = $demos_array[$demo_index]['DEMO_NAME'] ;
        $demo_description = $demos_array[$demo_index]['DEMO_DESCRIPTION'] ;

        $div_id = 'demo-' . $demo_index ;
        echo '<div id="' . $div_id . '">' ;
        echo '<h4><a href="javascript:loadSteps(' . $demo_index. ');">' . $demo_name . '</a></h4>' ;
        echo '<p><a href="javascript:loadSteps(' . $demo_index . ');">' . $demo_description . '</a></p>' ;
        echo '</div>' ;
    }


}

//function print_steps ( $demo = false ) {
function print_steps ( $demo ) {

    $demo_details = get_demos ( '../' ) ;

    $one_demo = $demo_details[$demo] ;

    echo '<ol>' . "\n" ;
    for ( $step = 0 ; $step < count ( $one_demo['file'] ) ; $step++ ) {
        $li_id = 'li-' . $demo . '-' . str_replace ( '.','-', $one_demo['file'][$step] ) ;
        echo '<li id="' . $li_id . '"><a href="javascript:loadStepDetails(\'' . $demo . '\',\'' . $one_demo['file'][$step] . '\');">' . $one_demo['caption'][$step] . '</a> <a href="/php/download.php?demo=' . $demo . '&step=' . $one_demo['file'][$step] . '">&ogt;</a></li>' . "\n" ;
    }
    echo '</ol>' ;

}

function print_source_code ( $demo, $step, $print_pre = true ) {

    global $config ;

    $demos = $config['demos'] ;


    $parent_folder = $demos[$demo] ;

    $file_path = '../' . DEMO_DIRECTORY . '/' . $parent_folder . '/' . $step ;

    $pathinfo = pathinfo ( $file_path ) ;

    $extension = $pathinfo['extension'] ;

    $supported_languages = array (
        'js' => 'js',
        'html' => 'html',
        'php' => 'php',
        'css' => 'css',
    ) ;

    if ( ! in_array ( $extension, $supported_languages ) )
    {
        $print_code_tag = false ;
    }
    else{
        $print_code_tag = true ;
    }

    if ( file_exists ( $file_path ) ) {

        if ( $print_pre ) {
            echo '<pre>' ;
            if ( $print_code_tag )
                echo '<code data-language="' . $supported_languages[$extension] . '">' ;

        }

        $file = file_get_contents( $file_path) ;
        echo htmlentities ($file ) ;

        if ( $print_pre ) {
            if ( $print_code_tag )
                echo '</code>' ;
            echo '</pre>' ;

        }
    }
    else
    {
//        FIXME: wrap in a class and style
        echo 'Our apologies. The requested file doesn\'t seem to exist!' ;
    }

}