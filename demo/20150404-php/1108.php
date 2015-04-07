<?php

// Loops.

// For loop.
// They're nearly identical to JavaScript.

$teams = array ( 'revolution', 'celtics', 'bruins', 'patriots' ) ;
$teams_count = count ( $teams ) ; // count the number of items in the array

for ( $team_index = 0 ; $team_index < $teams_count; $team_index++ ) {
    print ( $teams[$team_index]) ; // print the team name
}

// While loop.
// They're nearly identical to JavaScript.

$team_index = 0 ; // create a counter for the index

while ( $team_index < $teams_count ) {
    print ( $teams[$team_index]) ; // print the team name
    $team_index++ ; // increment the index value
}

?>
