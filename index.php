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

    <!-- local scripts -->
    <script type="text/javascript" src="js/scripts.js"></script>

    <!-- jQuery courtesy of Google -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

</head>
<body>
<?php

?>
<header>
<h1><?php echo get_program_name () ; ?></h1>
</header>

<?php

    // is the query string ?p=projectname present in the URL?
    if ( ! isset ( $_GET['p'] ) ) {


        ?>

<!--        <h3>choose a project below</h3>-->

        <?php

        $projects_array = get_project_list();

        ?>


    <?php

    }
    else
    {
        echo 'viewing project X' ;

        // make sure the project is real, and then
        // display the project.



    }

?>

<div class="">

</div>


<footer>

</footer>
</body>
</html>
