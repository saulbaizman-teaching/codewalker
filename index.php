<?php

    require 'php/functions.php' ;

?>
<html>
<head>
    <title><?php echo get_program_name () ; ?></title>

    <!-- local styles -->
    <link rel="stylesheet" href="css/styles.css">

    <!-- Oswald typeface via Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Oswald:400,700,300' rel='stylesheet' type='text/css'>

</head>
<body>
<?php

?>
<header>
<h1><?php echo get_program_name () ; ?></h1>
</header>

<div id="demos">

    <?php

    // is the query string ?p=projectname present in the URL?
    // perhaps the step should be included as well?

    print_demos ( $_GET['p'] ) ;

    ?>
</div>

<div id="steps">
    <?php

//    print_steps ( '1' ) ;

    ?>

</div>

<div id="code">

</div>

<div id="spacer">

</div>

<div id="preview">

</div>

<footer>
<small>&copy;<?php echo date ('Y') ?> <?php echo get_program_name () ; ?> v<?php echo get_program_version () ; ?>.</small>
</footer>

<!-- jQuery courtesy of Google -->
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

<!-- local scripts -->
<script type="text/javascript" src="js/scripts.js"></script>

<!-- code formatting courtesy of http://craig.is/making/rainbows -->

<!--<script type="text/javascript" src="js/rainbow-custom.min.js"></script>-->

</body>
</html>
