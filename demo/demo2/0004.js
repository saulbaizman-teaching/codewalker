function loadSteps ( demo ) {
    //alert ('loading steps') ;

    //make the clicked item red
    //var el = document.getElementById('project' + project).className = "project_selected" ;
    // loop through other projects to de-select them.

    var xhr = new XMLHttpRequest() ;

    xhr.onload = function () {
        if (xhr.status == 200) {
            // do stuff; populate div
            // can use jquery here: see 314-318 in j+j
            // eventually, fade the code in
            $('#steps').html(xhr.responseText) ;
        }
    } ;

    // set the previously selected project to not be selected
    $('.demo_selected').removeClass ('demo_selected') ;

    // set the selected project to have a new class
    var selected_demo = '#demo-' + demo ;
    $(selected_demo).addClass ( 'demo_selected' ) ;

    //set opacity to 0
    $('#steps').css ({'opacity':'0'}) ;

    //request steps
    xhr.open ( 'GET', '/php/ajax.php?demo=' + demo + '&callback=steps', true ) ;

    xhr.send ( null ) ;

    //fade the content in
    $('#steps').fadeTo(250,1) ;

}

function loadStepDetails ( demo, step ) {

    var xhr = new XMLHttpRequest() ;

    xhr.onload = function () {
        if (xhr.status == 200) {
            // do stuff; populate div
            $('#code').html ( xhr.responseText ) ;
        }
    } ;

    // set the previously selected project to not be selected
    $('.step_selected').removeClass ('step_selected') ;

    // set the selected project to have a new class
    var selected_step = 'li#li-' + demo + '-' + step.replace('.' ,'-') ;
    $(selected_step).addClass ( 'step_selected' ) ;

    // make all steps white
    //var $steps = $('li.step a') ;
    //$steps.css ( {'color': '#777' } ) ;
    //
    //// make selected step orange
    //var selected = 'li#li-' + demo + '-' + step.replace('.' ,'-') ;
    //var $selected_step = $(selected + ' a') ;
    //$selected_step.css ( {'color': 'orange' } ) ;

    //set opacity to 0
    $('#code').css ({'opacity':'0'}) ;

    xhr.open ( 'GET', '/php/ajax.php?demo=' + demo + '&step_details=' + step + '&callback=step_details', true ) ;

    xhr.send ( null ) ;

    $('#code').fadeTo(250,1) ;

}