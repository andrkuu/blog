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
    <link rel="stylesheet" href="css/kube.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/custom.css" />

    <link href='https://fonts.googleapis.com/css?family=Playfair+Display+SC:700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
    <style>
        .intro h1:before {
            /* Edit this with your name or anything else */
            content: 'ANDREAS';
        }

        .skills {
            text-align: left;
            padding-top: 10px;
            padding-bottom: 10px;
            color: white;

        }

        .delphi {width: 100%; height: 100%; background-color: #4CAF50;}
        .cs {width: 90%; height: 100%; background-color: #84af33;}
        .java {width: 80%; height: 100%; background-color: #af9b32;}
        .sql {width: 70%; background-color: #f3af22;}
        .php {width: 70%; background-color: #f3af22;}
        .html {width: 50%; background-color: #f3803b;}
        .js {width: 50%; background-color: #f3803b;}
        .css {width: 50%; background-color: #f3803b;}

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
                    <li class="active"><a href="http://andreas.kuuskaru.ee/blog/">Blogi</a></li>
                    <li><a href="http://andreas.kuuskaru.ee/">Minust</a></li>
                </ul>
            </nav>
        </header>
    </div>
</div>

<!-- Introduction -->
<div class="intro section" id="about">
    <div class="container">

        <div class="units-row units-split wrap">
            <div class="unit-20">
                <img src="img/ava.jpg" alt="Avatar">
                <h2>
                    Andreas Kuuskaru
                </h2>
            </div>
            <div class="unit-80">
                <h1></h1>
            </div>

        </div>
    </div>
</div>

<!-- Work Experience -->
<div class="post section second" id="experiences">
    <div class="container">

        <?php
            echo(get_posts());
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

