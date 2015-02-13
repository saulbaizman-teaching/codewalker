function loadSteps ( project ) {
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


    // set all the projects to have a white left border

    var $projects = $('div.project') ;
    // $projects.css ( {'border-left': '4px solid #ffffff' }) ;
//FIXME: the link colors are an issue; it shoud just swap a CSS class
    $projects_h4 = $('div.project h4 a') ;
    $projects_h4.css ( {'color': '#000000' }) ;
    $projects_p = $('div.project p a') ;
    $projects_p.css ( {'color': '#777' }) ;


    // set the selected project to have a red left border
    var selected = '#project-' + project ;
    var $selected_project = $(selected) ;
    // $selected_project.css ( {'border-left': '4px solid #dd0000' }) ;
//FIXME: the link colors are an issue; it shoud just swap a CSS class
    $selected_project_h4 = $(selected+' h4 a') ;
    $selected_project_h4.css ( {'color': '#dd0000' }) ;
    $selected_project_p = $(selected+' p a') ;
    $selected_project_p.css ( {'color': '#dd0000' }) ;


    xhr.open ( 'GET', '/php/ajax.php?project=' + project + '&callback=steps', true ) ;

    xhr.send ( null ) ;
}

function loadFile ( project, file ) {

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
    var selected = 'li#li-' + project + '-' + file.replace('.' ,'-') ;
    var $selected_step = $(selected + ' a') ;
    $selected_step.css ( {'color': 'orange' } ) ;

    xhr.open ( 'GET', '/php/ajax.php?project=' + project + '&file=' + file + '&callback=file', true ) ;

    xhr.send ( null ) ;

}