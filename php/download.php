<?php

require 'functions.php' ;

$demo = $_GET['demo'] ;
$step = $_GET['step'] ;

header( 'Content-type: text/plain' );
header( 'Content-disposition: attachment; filename="' . $demo . '-' . $step . '"' );

print_source_code ( $demo, $step, false ) ;

exit ;