<?php

require 'functions.php' ;

$demo = $_GET['demo'] ;
$file = $_GET['file'] ;

output_download_file ( $demo, $file ) ;

exit ;