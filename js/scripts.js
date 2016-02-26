// Global configuration variables.
var PAGE_TITLE = 'intermediate web design (cmp 3011) demo files &mdash; sp16' ;
var PROGRAM_NAME = 'codewalker' ;
var PROGRAM_VERSION = '0.0.0.4' ;
var DEMO_DIRECTORY = 'demo' ;
// var GLOBAL_CONFIG ; // this is not explicitly defined here on purpose.

codewalker_init() ;

load_demos () ;

function codewalker_init ( ) {

// Update browser window title
    document.title = PAGE_TITLE ;

// Get the year of the current date.
    var date = new Date();

// Insert header text.
    $('header h1').html(PAGE_TITLE);

// Insert footer text.
    $('footer').html('<small>' + '&copy;' + date.getFullYear() + ' ' + PROGRAM_NAME + ' v' + PROGRAM_VERSION + '</small>');

}

function load_demos ( ) {

    $.getJSON( 'config.json', "", function ( response ) {

        GLOBAL_CONFIG = response ; // store this as a global variable for later
        // console.log ( response )
        var demo_html = '' ;
        for ( demo = 0 ; demo < response.demos.length ; demo++ ) {
            var demo_id = demo ;
            var demo_name = response.demos[demo].DEMO_NAME;
            var demo_desc = response.demos[demo].DEMO_DESCRIPTION;
            var demo_note = response.demos[demo].DEMO_NOTE;
            //var demo_folder = response.demos[demo].DEMO_FOLDER;

            demo_html += '<div id="demo-' + demo_id + '">' ;
            demo_html += '<h4><a href="javascript:loadSteps(' + demo_id + ');">' + demo_name + '</a></h4>' ;
            demo_html += '<p><a href="javascript:loadSteps(' + demo_id + ');">' + demo_desc + '</a></p>' ;
            if ( demo_note != '' ) {
                demo_html += '<p class="demo_note">' + demo_note + '</p>' ;
            }
            demo_html += '</div>' ;

        }

        // Set the content of the #demos div to the demos.
        $('#demos').html ( demo_html )
    }) ;

}

function loadSteps ( demo ) {

    var steps_html = '<ol>' ;

    target_demo = GLOBAL_CONFIG.demos[demo] ;

    for ( step = 0 ; step < target_demo.demo_files.length ; step++ ) {

        var li_id = 'li-' + demo + '-' + target_demo.demo_files[step].file.replace(/\./g, '-') ;

        // Is a download link specified in the config file? If so, use that. Otherwise, just use the filename that's being displayed.
        if ( target_demo.demo_files[step].download != '' ) {
            var $download_link = target_demo.demo_files[step].download  ;
        }
        else {
            var $download_link = target_demo.demo_files[step].file ;
        }

        steps_html += '<li id="' + li_id + '"><a id="step' + step + '" class="step" href="javascript:loadStepDetails(\'' + demo + '\',\'' + DEMO_DIRECTORY + '/'+ target_demo.DEMO_FOLDER + '\',\'' + target_demo.demo_files[step].file + '\');">' + target_demo.demo_files[step].caption + '</a>&nbsp;<a id="' + li_id + '-download" class="download" href="' + DEMO_DIRECTORY + '/'+ target_demo.DEMO_FOLDER + '/' + $download_link + '" title="Download ' + $download_link + ' " download><svg class="download_icon" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"viewBox="0 0 44.5 43.875" enable-background="new 0 0 44.5 43.875" xml:space="preserve" width="15" height="15">        <circle id="circle" fill="#000000" cx="22.531" cy="22.094" r="20.844"/> <line fill="none" stroke="#FFFFFF" stroke-width="6" stroke-linecap="round" stroke-miterlimit="10" x1="22.875" y1="10.625" x2="22.875" y2="33.625"/> <polyline fill="none" stroke="#FFFFFF" stroke-width="6" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="32.577,23.819 22.531,33.91 12.485,23.819 "/> </svg></a></li>' ;
        // Note: the download link will load the page in the browser. Users will need to option-click to download the file, unless it's ZIPped.
    }

    steps_html += '</ol>' ;

    var $steps_div = $('#steps') ;

    // set opacity to 0 for steps
    $steps_div.css ({'opacity':'0'}) ;

    // if we are switching demos, blank out the source code
    $('#source_code').css ({'opacity':'0'}) ;

    // populate #steps div, fade it in
    $steps_div.html(steps_html).fadeTo(250,1) ;

    // add download link styles for steps
    var $steps_li = $('#steps ol li') ;
    $steps_li.on ( 'mouseover', function () {
        var dl_link = '#' + this.id + '-download' ;
        $(dl_link).css( {'visibility':'visible' }) ;
    }) ;

    $steps_li.on ( 'mouseout', function () {
        var dl_link = '#' + this.id + '-download' ;
        $(dl_link).css( {'visibility':'hidden' }) ;
    }) ;

    // set the previously selected demo to not be selected
    $('.demo_selected').removeClass ('demo_selected') ;

    // set the selected demo to have a new class
    var selected_demo = '#demo-' + demo ;
    $(selected_demo).addClass ( 'demo_selected' ) ;

    // scroll to the top of the steps, if needed
    if ( $steps_div.scrollTop() != 0 ) {
        $steps_div.scrollTop(0) ;
    }

}

function loadStepDetails ( demo, folder, file ) {

    $.get ( folder + '/' + file, "", function ( response ) {
        var source_html = '<pre>';
        // This should be more dynamic; get the filename extension.
        source_html += '<code data-language="html">' ;

        source_html += response.replace(/</g,"&lt;").replace(/>/g,"&gt;") ;

        source_html += '</code>';
        source_html += '</pre>';

        var $source_code = $('#source_code') ;

        // set opacity to 0
        $source_code.css ({'opacity':'0'}) ;

        // populate the #source_code div content, then fade it in
        $source_code.html(source_html).fadeTo(250,1) ;

        // because we are loading rainbow'd content after the DOM has loaded, we need to manually invoke it here to style the content correctly
        Rainbow.color();

        // set the previously selected demo to not be selected
        $('.step_selected').removeClass ('step_selected') ;

        // set the selected demo to have a new class
        var selected_step = 'li#li-' + demo + '-' + file.replace('.' ,'-') ;
        $(selected_step).addClass ( 'step_selected' ) ;

        // scroll to the top of the source code, if needed
        if ( $source_code.scrollTop() != 0 ) {
            $source_code.scrollTop(0) ;
        }

    }) ;

}
