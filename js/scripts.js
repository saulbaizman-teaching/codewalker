/*
TODO: replace native JS with jQuery methods in Ajax calls.
 */
function loadSteps ( demo ) {

    var xhr = new XMLHttpRequest() ;

    xhr.onload = function () {
        if (xhr.status == 200) {
            // populate #steps div
            $('#steps').html(xhr.responseText) ;

            //$('a.download').hide ( ) ;
            var $steps = $('#steps ol li') ;
            $steps.on ( 'mouseover', function () {
                //console.log ( 'moused over') ;
                //console.log ( this.id ) ;
                //$steps.next().css( {'visibility':'visible' } ) ;
                //console.log (this.id) ;
                var dl_link = '#' + this.id + '-download' ;
                $(dl_link).css( {'visibility':'visible' }) ;
                // $(dl_link).fadeTo( 1 ) ;
                //$(dl_link).fadeIn(500) ;
            }) ;
            $steps.on ( 'mouseout', function () {
                // console.log ( 'moused over') ;
                //$steps.next().css( {'visibility':'visible' } ) ;
                //console.log (this.id) ;
                var dl_link = '#' + this.id + '-download' ;
                $(dl_link).css( {'visibility':'hidden' }) ;
                // $(dl_link).fadeTo( 1 ) ;
                //$(dl_link).fadeOut(500) ;
            }) ;
        }
    } ;

    // set the previously selected demo to not be selected
    $('.demo_selected').removeClass ('demo_selected') ;

    // set the selected demo to have a new class
    var selected_demo = '#demo-' + demo ;
    $(selected_demo).addClass ( 'demo_selected' ) ;

    // set opacity to 0 for steps
    $('#steps').css ({'opacity':'0'}) ;

    // if we are switching demos, blank out the source code
    $('#source_code').css ({'opacity':'0'}) ;

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
            // populate #source_code div
            // NOTE: this will need to be more complicated if it is to return the
            // language format automatically.
            $('#source_code').html ( xhr.responseText ) ;

            //because we are loading rainbow'd content after the DOM has loaded, we need to manually invoke it here to style the content correctly
            Rainbow.color();
        }
    } ;

    // set the previously selected demo to not be selected
    $('.step_selected').removeClass ('step_selected') ;

    // set the selected demo to have a new class
    var selected_step = 'li#li-' + demo + '-' + step.replace('.' ,'-') ;
    $(selected_step).addClass ( 'step_selected' ) ;

    // set opacity to 0
    $('#source_code').css ({'opacity':'0'}) ;

    xhr.open ( 'GET', '/php/ajax.php?demo=' + demo + '&step_details=' + step + '&callback=step_details', true ) ;

    xhr.send ( null ) ;

    $('#source_code').fadeTo(250,1) ;

}
