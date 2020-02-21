<?php
//require("./config.php");
require_once("./functions_blog.php");
?>


<!DOCTYPE html>
<html>
<head>
    <title>Andreas Kuuskaru Blogi</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="css/kube.min.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/custom.css" />

    <link href='https://fonts.googleapis.com/css?family=Playfair+Display+SC:700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
    <style>
        .intro h1:before {
            /* Edit this with your name or anything else */
            content: 'ANDREAS';
        }

    </style>
</head>
<body>
<!-- Navigation -->
<div class="main-nav">
    <div class="container">
        <header class="group top-nav">
            <div class="navigation-toggle" data-tools="navigation-toggle" data-target="#navbar-1">
                <span class="logo">Andreas Kuuskaru</span>
            </div>
            <nav id="navbar-1" class="navbar item-nav">
                <ul>
                    <li class="active"><a href="#about">Minust</a></li>
                    <li><a href="#experiences">Töökogemus</a></li>
                    <li><a href="#achievements">Haridus</a></li>
                    <li><a href="#skills">Oskused</a></li>
                </ul>
            </nav>
        </header>
    </div>
</div>

<!-- Introduction -->
<div class="intro section" id="about">
    <div class="container">


        <div class="unit-20">
            <img src="img/ava.jpg" alt="Avatar">
        </div>

    </div>
</div>

<!-- Work Experience -->
<div class="post section second" id="experiences">
    <div class="container">

        <?php
        echo(get_post($_GET["post"]));
        ?>

    </div>
</div>



</div>


<footer>
    <div class="container">
        <div class="units-row">

            <div class="unit-50">
                <ul class="social list-flat right">
                    <li><a href="mailto:andreaskuuskaru99@hotmail.com"><i class="fa fa-send"></i></a></li>
                    <li><a href="https://github.com/andrkuu/"><i class="fa fa-github"></i></a></li>

                </ul>
            </div>
        </div>
    </div>
</footer>

<!-- Javascript -->
<script src="js/jquery.min.js"></script>
<script src="js/typed.min.js"></script>
<script src="js/kube.min.js"></script>
<script src="js/site.js"></script>

</body>
</html>

