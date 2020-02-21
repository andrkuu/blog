<?php

?>


<!DOCTYPE html>
<html>
<head>
    <title>Andreas Kuuskaru CV</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="css/kube.min.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/custom.min.css" />

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

        <div class="units-row units-split wrap">
            <div class="unit-20">
                <img src="img/ava.jpg" alt="Avatar">
            </div>
            <div class="unit-80">
                <h1></h1>
            </div>
            <h2>
                Andreas Kuuskaru
            </h2>
        </div>
    </div>
</div>

<!-- Work Experience -->
<div class="work section second" id="experiences">
    <div class="container">


        <h1>Töökogemus</h1>
        <ul class="work-list">
            <li>08/2017 - 03/2018</li>
            <li><a href="https://usesoft.ee/">Usesoft AS</a></li>
            <div class="ignore-css"></div>
            <li>Delphi Android arendaja. Rakenduste arendus ProdMaster majandustarkvarale.</li>
        </ul>



        <ul class="work-list">
            <li>09/2018 - Veel töötan</li>
            <li><a href="https://usesoft.ee/">Usesoft AS</a></li>
            <div class="ignore-css"></div>
            <li>Delphi Android arendaja kasutades DataSnap tehnoloogiat.
                ProdMasteri majandustarkvara ühendamine Androidi süsteemidega.</li>
        </ul>
    </div>
</div>

<!-- Schools -->
<div class="work section second" id="achievements">
    <div class="container">
        <h1>Haridus</h1>
        <ul class="work-list">
            <li>2015 - 2018</li>
            <li><a href="https://www.tptlive.ee/">Tallinna Polütehnikum</a> Noorem tarkvaraarendaja, tase 4</li>
            <li><a href="http://andreas.kuuskaru.ee/L%C3%B5put%C3%B6%C3%B6%20-%20Andreas%20Kuuskaru%20Viimane.pdf">Lõputöö</a></li>
            <br>

            <li>2018 - 2019</li>
            <li><a href="https://www.ttu.ee/">Tallinna Tehnikaülikool</a> IT süsteemide arendus</li>
            <br>

            <li>2019 - ...</li>
            <li><a href="http://www.tlu.ee/">Tallinna Ülikool</a> Informaatika</li>
            <br>

            <div class="ignore-css"></div>

        </ul>
    </div>
</div>

<!-- Technical Skills -->
<div class="skills section second" id="skills">
    <div class="container">

        <h1>Oskused</h1>
        <ul class="skill-list list-flat">

            <li class="skills delphi"></li>
            <li>Delphi</li>
            <br>

            <li class="skills cs"></li>
            <li>C#</li>
            <br>

            <li class="skills java"></li>
            <li>Java</li>
            <br>

            <li class="skills sql"></li>
            <li>SQL</li>
            <br>

            <li class="skills php"></li>
            <li>PHP</li>
            <br>

            <li class="skills html"></li>
            <li>HTML</li>
            <br>

            <li class="skills css"></li>
            <li>CSS</li>
            <br>

            <li class="skills js"></li>
            <li>JavaScript</li>
            <br>

        </ul>

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
<script>
    function newTyped(){}$(function(){$("#typed").typed({
        // Change to edit type effect
        strings: ["far northern sky", "your galaxy", "everywhere"],

        typeSpeed:90,backDelay:700,contentType:"html",loop:!0,resetCallback:function(){newTyped()}}),$(".reset").click(function(){$("#typed").typed("reset")})});
</script>
</body>
</html>

