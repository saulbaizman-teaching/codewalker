function loadSteps ( project ) {
    //alert ('loading steps') ;

    //make the clicked item red
    //var el = document.getElementById('project' + project).className = "project_selected" ;
    // loop through other projects to de-select them.

    var xhr = new XMLHttpRequest() ;

    xhr.onload = function () {
        if (xhr.status == 200) {
            // do stuff; populate div
            document.getElementById('steps').innerHTML = xhr.responseText ;
        }
    } ;

    xhr.open ( 'GET', '/php/ajax.php?project=' + project + '&callback=steps', true ) ;

    xhr.send ( null ) ;
}

function loadFile ( project, file ) {

    var xhr = new XMLHttpRequest() ;

    xhr.onload = function () {
        if (xhr.status == 200) {
            // do stuff; populate div
            document.getElementById('code').innerHTML = xhr.responseText ;
        }
    } ;

    xhr.open ( 'GET', '/php/ajax.php?project=' + project + '&file=' + file + '&callback=file', true ) ;

    xhr.send ( null ) ;

}