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

        <!--Style Sheets & Scripts-->
        <script src="Scripts/navscript.js" type="text/javascript"></script>
        <link href="Style Sheets/mainstyle.css" rel="stylesheet" type="text/css"/>
        <link href="Style Sheets/pricingstyle.css" rel="stylesheet" type="text/css"/>

        <title>Pricing | CBM Web Development</title>
    </head>
    <body>
        <?php include 'header.php'; ?>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h1 align="center">Services and Pricing Structure</h1>
                </div>
                <div class="col-md-12">
                    <h3>Web Development</h3>
                    <label>Primary Web Services:</label>
                    <ul>
                        <li>
                            <b>New Web Pages*:</b>
                            <ul>
                                <li><b>Basic, Static Web Site:</b> $150 + $30/hour every hour over the first 10 hours</li>
                                <li><b>Dynamic, Interactive Web Site:**</b>$300 + $50/hour every hour over the first 10 hours</li>
                            </ul>
                        </li>
                        <li>
                            <b>Updating an Existing Web Page:</b>
                            <ul>
                                <li><b>Minor Style Updates:**</b>$100 + $30/hour every hour over the first 5 hours</li>
                                <li><b>Major Site Overhaul:**</b> $300 + $50/hour every hour over the first 5 hours</li>
                            </ul>
                        </li>
                    </ul>
                    <label>Other Web Services:</label>
                    <ul>
                        <li><b>Consultations: </b>$30/hour</li>
                    </ul>
                    <p><b>Note: </b> Unless otherwise requested all web sites are created to be mobile friendly.</p>
                    <p>*Price does not include web hosting fees.</p>
                    <p>**Price includes basic mobile web pages.</p>
                </div>
                <div class="col-md-12">
                    <hr>
                </div>
                <div class="col-md-12">
                    <h3>Mobile Applications</h3>
                    <ul>
                        <li><b>Android Application: </b> $500 + $50/hour for every hour over 15 hours.</li>
                        <li><b>iOS Application: </b>Coming Soon!</li>
                    </ul>
                </div>
                <div class="col-md-12">
                    <hr>
                </div><div class="col-md-12">
                    <h3>Software Development</h3>
                    <ul>
                        <li><b>Desktop Software: </b> Case by Case</li>
                        <li><b>Enterprise Application: </b>Coming Soon!</li>
                    </ul>
                </div>
            </div>
        </div>
        <footer class="main-footer">
            <p class="footer-text">CBM Web Design <img class="brand-img" src="Images/web_icon.png" alt=""></p>
        </footer>
    </body>
</html>
