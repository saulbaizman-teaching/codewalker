<?php

    require 'php/functions.php' ;

?>
<html>
<head>
    <title><?php echo get_program_name () ; ?></title>

    <!-- local styles -->
    <link rel="stylesheet" href="css/styles.css" type="text/css">


    <!-- Oswald typeface via Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Oswald:400,700,300' rel='stylesheet' type='text/css'>

    <!--syntax color highlighter styles-->
    <link rel="stylesheet" href="css/rainbow-theme.css" type="text/css">
<!--    <link rel="stylesheet" href="css/line-numbers.css" type="text/css">-->

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

<div id="source_code">

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
<script type="text/javascript" src="js/rainbow.js"></script>
<script type="text/javascript" src="js/generic.js"></script>
<script type="text/javascript" src="js/javascript.js"></script>

<!--    <script type="text/javascript" src="js/rainbow.linenumbers.js"></script>-->


</body>
</html>
