<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>

        <script>
            (function (i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                        m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

            ga('create', 'UA-74857924-2', 'auto');
            ga('send', 'pageview');
            ga('set', 'userId', {{USER_ID}}); // Set the user ID using signed-in user_id.

        </script>

        <!--MDL-->
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://code.getmdl.io/1.1.3/material.indigo-pink.min.css">
        <script defer src="https://code.getmdl.io/1.1.3/material.min.js"></script>

        <!--Bootstrap-->
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

        <!--JQuery-->
        <script src="jquery-1.12.0.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        <script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.12.0.min.js"></script>

        <!--Style Sheets & Scripts-->
        <script src="Scripts/navscript.js" type="text/javascript"></script>
        <link href="Style Sheets/mainstyle.css" rel="stylesheet" type="text/css"/>
        <link href="Style Sheets/projectsstyle.css" rel="stylesheet" type="text/css"/>

        <title>Projects | CBM Web Development</title>
    </head>
    <body>
        <?php include 'header.php'; ?>
        <h1>Recent Projects</h1>
        <div id="carousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carousel" data-slide-to="0" class="active"></li>
                <li data-target="#carousel" data-slide-to="1"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <a href="http://www.utterfare.com/" target="_blank">"<img src="Images/uf_screenshot.png" alt=""/></a>
                </div>

                <div class="item">
                    <a href="http://www.hiltonheadislandtreeservice.com/" target="_blank"><img src="Images/treeservice_screenshot.png" alt=""/></a>
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <footer class="main-footer">
            <p class="footer-text">CBM Web Design <img class="brand-img" src="Images/web_icon.png" alt=""></p>
        </footer>
    </body>
</html>
