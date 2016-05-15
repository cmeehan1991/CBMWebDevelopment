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
        
        <meta charset="UTF-8">
        <meta name="description" content="CBM Web Development is a freelance web, mobile, and software development company. We believe that eveyrone should have high quality, affordable access to their own web page. Whether you are a small business owner, large corporation, or individual we have a service for you! Contact us today to find out more information.">
        <meta name="keywords" content="Web Development, Web Design, Web Site, Web Sites, Software, Java, PHP, Html, CSS, Javascript, JQuery, Mobile, iPhone, Android, Google Chrome, Marketing, Design, Development, Technology">
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
        <link href="Style Sheets/indexstyle.css" rel="stylesheet" type="text/css"/>

        <title>CBM Web Development</title>
    </head>
    <body>
        <div class="header-image"></div>
        <?php include 'header.php'; ?>
        <div class="index-div">
            <table width="100%" class="first_table">
                <tr>
                    <td align="right">
                        <div class="roundbutton">
                            <a class="inside-link" href="projects.php">Web Pages</a>
                        </div>
                    </td>
                    <td align="left">
                        <div class="roundbutton">
                            <a class="inside-link" href="pricing.php">Pricing</a>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
        <div class="index-div">
            <img src="Images/seo.jpg" alt=""/>
        </div>
        <div class="index-div">
            <h1>Search Engine Optimization to get your site noticed</h1>
        </div>
        <div class="index-div">
            <img src="Images/webdevelopment.jpg" alt=""/>
        </div>
        <div class="index-div">
            <h1>State of the Art Web Development</h1>
        </div>
        <div class="index-div">
            <img src="Images/mobile.jpg" alt=""/>
        </div>
        <div class="index-div">
            <h1>Mobile Web Page and Applications for On The Go Lifestyles</h1>
        </div>
        <footer class="main-footer">
            <p class="footer-text">CBM Web Design <img class="brand-img" src="Images/web_icon.png" alt=""></p>
        </footer>
    </body>
</html>