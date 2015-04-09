/*
TODO: replace native JS with jQuery methods in Ajax calls.
 */
function loadSteps ( demo ) {

    //console.log ( 'demo: ' + demo ) ;

    $.ajax({
        type: "GET",
        url: "/php/ajax.php",
        data: { demo: demo, callback: "steps" },
        success: processData,
        fail: recover
    });

    function processData ( data ) {

        var $steps_div = $('#steps') ;

        // set opacity to 0 for steps
        $steps_div.css ({'opacity':'0'}) ;

        // if we are switching demos, blank out the source code
        $('#source_code').css ({'opacity':'0'}) ;

        // populate #steps div, fade it in ;
        $steps_div.html(data).fadeTo(250,1) ;

        // Add download link styles for steps.
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

        // Scroll to the top of the steps.
        if ( $steps_div.scrollTop() != 0 ) {
            $steps_div.scrollTop(0) ;
        }

    }

    function recover ( ) {
        console.warn ( 'No data was returned from the server!' ) ;
        $('#steps').html( '<strong>There was an error retrieving data from the server.</strong>' ) ;
    }

}

function loadStepDetails ( demo, step ) {

    $.ajax({
        type: "GET",
        url: "/php/ajax.php",
        data: { demo: demo, step_details: step, callback: "step_details" },
        success: processData,
        fail: recover
    });

    function processData ( data ) {
        // populate #source_code div
        // NOTE: this will need to be more complicated if it is to return the
        // language format automatically.
        var source_code = $('#source_code') ;

        // set opacity to 0
        source_code.css ({'opacity':'0'}) ;

        // populate the #source_code div content, then fade it in
        source_code.html(data).fadeTo(250,1) ;

        // Because we are loading rainbow'd content after the DOM has loaded, we need to manually invoke it here to style the content correctly
        Rainbow.color();

        // set the previously selected demo to not be selected
        $('.step_selected').removeClass ('step_selected') ;

        // set the selected demo to have a new class
        var selected_step = 'li#li-' + demo + '-' + step.replace('.' ,'-') ;
        $(selected_step).addClass ( 'step_selected' ) ;

    }

    function recover ( ) {
        console.warn ( 'No data was returned from the server!' ) ;
        $('#source_code').html( '<strong>There was an error retrieving data from the server.</strong>' ) ;
    }

}
