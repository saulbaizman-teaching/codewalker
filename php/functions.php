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
                echo 'Error parsing INI file: ' . DEMO_DIRECTORY . '/' . $demo . '/demo.ini.php' ;
                return ;
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
    // print_r ( $demos_array ) ;
    $demo_count = count ( $demos_array ) ;

    for ( $demo_index = 0 ; $demo_index < $demo_count ; $demo_index++ ){

        $demo_name = $demos_array[$demo_index]['DEMO_NAME'] ;
        $demo_description = $demos_array[$demo_index]['DEMO_DESCRIPTION'] ;
        $demo_note = $demos_array[$demo_index]['DEMO_NOTE'] ;

        $div_id = 'demo-' . $demo_index ;
        echo '<div id="' . $div_id . '">' ;
        echo '<h4><a href="javascript:loadSteps(' . $demo_index. ');">' . $demo_name . '</a></h4>' ;
        echo '<p><a href="javascript:loadSteps(' . $demo_index . ');">' . $demo_description . '</a></p>' ;
        if ( $demo_note ) {
            echo '<p><small><em>' . $demo_note . '</em></small></p>' ;
        }
        echo '</div>' ;
    }

}

function print_steps ( $demo ) {

    $demo_details = get_demos ( '../' ) ;

    $one_demo = $demo_details[$demo] ;

    echo '<ol>' . "\n" ;
    for ( $step = 0 ; $step < count ( $one_demo['file'] ) ; $step++ ) {
        $li_id = 'li-' . $demo . '-' . str_replace ( '.','-', $one_demo['file'][$step] ) ;

        // Is a download link specified in the ini file? If so, use that. Otherwise, just use the filename that's being displayed.
        if ( isset ( $one_demo['download'][$step] ) && ( $one_demo['download'][$step] != '' ) ) {
            $download_link = $one_demo['download'][$step]  ;
        }
        else {
            $download_link = $one_demo['file'][$step] ;
        }

        echo '<li id="' . $li_id . '"><a id="step' . $step . '" class="step" href="javascript:loadStepDetails(\'' . $demo . '\',\'' . $one_demo['file'][$step] . '\');">' . $one_demo['caption'][$step] . '</a>&nbsp;<a id="' . $li_id . '-download" class="download" href="/php/download.php?demo=' . $demo . '&file=' . $download_link . '" title="Download ' . $download_link . '" >&ogt;</a></li>' . "\n" ;
    }
    echo '</ol>' ;

}

function print_source_code ( $demo, $step ) {

    global $config ;

    // Get array of demos.
    $demos = $config['demos'] ;

    // Get the parent folder for the current demo.
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
    else {
        $print_code_tag = true ;
    }

    // Does the requested file exist?
    if ( file_exists ( $file_path ) ) {

        echo '<pre>' ;
        if ( $print_code_tag ) {
            echo '<code data-language="' . $supported_languages[$extension] . '">';
        }

        // Load the file into the $file variable.
        $file = file_get_contents( $file_path ) ;

        // convert entities
        echo htmlentities ($file ) ;

        if ( $print_code_tag ) {
            echo '</code>';
        }
        echo '</pre>' ;

    }
    else
    {
        // FIXME: wrap in a CSS class and style the output below.
        echo "Our apologies. The requested file doesn't seem to exist!" ;
    }

}

function output_download_file ( $demo, $file ) {

    global $config ;

    // Get array of demos.
    $demos = $config['demos'] ;

    // Get the parent folder for the current demo.
    $parent_folder = $demos[$demo] ;

    $file_path = '../' . DEMO_DIRECTORY . '/' . $parent_folder . '/' . $file ;

    if ( file_exists ( $file_path ) ) {

        // Immediately output the file.
        header ( 'Content-Type: application/octet-stream' );
        header ( 'Content-Disposition: attachment; filename="' . $demo . '-' . $file . '"' );
        // header ( 'Content-Length: " . $content_length );
        readfile ( $file_path ) ;
        // Prepend comment to downloaded file. FIXME: this is a clever little trick that gets lost!
        // Maybe check to see if the download link is empty, and if so, insert the comments into the downloaded file.
        // ... file_get_contents ( ) ...
        // echo comment ( $step . ': ' . $one_demo['caption'][$step_index], $extension ) ;

    }
    else
    {
        // FIXME: wrap in a CSS class and style the output below.
        echo "Our apologies. The requested file doesn't seem to exist!" ;
    }

}

function comment ( $string, $language ) {

    $supported_languages = array (
        'js' => array ( 'start' => '/*', 'end' => '*/'),
        'html' => array ( 'start' => '<!--', 'end' => '-->'),
        'php' => array ( 'start' => '/* ', 'end' => '*/'),
        'css' => array ( 'start' => '/*', 'end' => '*/'),
        'scss' => array ( 'start' => '/*', 'end' => '*/'),
    ) ;

    if ( array_key_exists ( $language, $supported_languages ) ) {
        $start_tag = $supported_languages[$language]['start'] ;
        $end_tag = $supported_languages[$language]['end'] ;
    }

    // If the language isn't there, it's not supported, and the start and end tags will be empty.

    return "\n\n" . $start_tag . "\n\n" . $string . "\n\n" . $end_tag . "\n\n" ;

}