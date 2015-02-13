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


    xhr.open ( 'GET', '/php/ajax.php?demo=' + demo + '&callback=steps', true ) ;

    xhr.send ( null ) ;
}

function loadFile ( demo, step ) {

    var xhr = new XMLHttpRequest() ;

    xhr.onload = function () {
        if (xhr.status == 200) {
            // do stuff; populate div
            $('#code').html ( xhr.responseText ) ;
        }
    } ;

    // make all steps white
    var $steps = $('li.step a') ;
    $steps.css ( {'color': '#777' } ) ;

    // make selected step orange
    var selected = 'li#li-' + demo + '-' + step.replace('.' ,'-') ;
    var $selected_step = $(selected + ' a') ;
    $selected_step.css ( {'color': 'orange' } ) ;

    xhr.open ( 'GET', '/php/ajax.php?demo=' + demo + '&step_details=' + step + '&callback=step_details', true ) ;

    xhr.send ( null ) ;

}