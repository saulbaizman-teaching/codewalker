<?php

// Let's talk about variables, shall we?

// $page_title = 'PHP in-class demo' ;

/*
   Rules for variable names:
   You can name a variable anything you want so long as it follows these rules:

   + They all start with a dollar sign ("$")
   + The next character is a letter.
   + The name is made up of letters, numbers, and the underscore character (that’s the _ character, as in "$baby_names")
   + The name isn’t used elsewhere (like "print," which is a function to output words).
   Warning: variable names are case-sensitive, so $name and $Name are different.

 */


$title = 'php is awesome' ;
?>

<!DOCTYPE html>
<html>

<head>
    <title><?php print ( $title ) ; ?></title>
    <style type="text/css">
        body {
            font-family: Helvetica ;
            line-height: 1.5em ;
        }
    </style>

</head>
<body>

<h1><?php print ( $title ) ; ?></h1>
<h2>Get involved</h2>
<p>
    Brackets is an open-source project. Web developers from around the world are contributing to build
    a better code editor. Many more are building extensions that expand the capabilities of Brackets.
    Let us know what you think, share your ideas or contribute directly to the project.
</p>

</body>
</html>
