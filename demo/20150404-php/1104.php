<?php

// Let's talk about parse errors.

// They're scary! They stop your script dead in the water and sometimes output nasty things on your webpage.

// The 'prit' function doesn't exist! PHP will barf and stop processing your script, depending on how PHP is configured.
prit ( 'hello world 1.' ) ;
print ( 'hello world 2.' ) ;

// Let's look at the configuration settings now.
// /Applications/MAMP/bin/php/php5.6.6/conf/php.ini
?>
