//$(''). on ( )

function loadSteps ( demo ) {

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
            // NOTE: this will need to be more complicated if it is to return the
            // language format automatically.
            $('#source_code').html ( xhr.responseText ) ;

            //because we are loading rainbow'd content after the DOM has loaded, we need to manually invoke it here to style the content correctly
            Rainbow.color();
        }
    } ;

    // set the previously selected project to not be selected
    $('.step_selected').removeClass ('step_selected') ;

    // set the selected project to have a new class
    var selected_step = 'li#li-' + demo + '-' + step.replace('.' ,'-') ;
    $(selected_step).addClass ( 'step_selected' ) ;

    //set opacity to 0
    $('#source_code').css ({'opacity':'0'}) ;

    xhr.open ( 'GET', '/php/ajax.php?demo=' + demo + '&step_details=' + step + '&callback=step_details', true ) ;

    xhr.send ( null ) ;

    $('#source_code').fadeTo(250,1) ;

}


//http://stackoverflow.com/questions/24816/escaping-html-strings-with-jquery

function escapeHtml(string) {
    var entityMap = {
        "&": "&amp;",
        "<": "&lt;",
        ">": "&gt;",
        '"': '&quot;',
        "'": '&#39;',
        "/": '&#x2F;'
    };

    return String(string).replace(/[&<>"'\/]/g, function (s) {
        return entityMap[s];
    });
}
