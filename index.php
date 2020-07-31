<?php
// unset cookies
if (isset($_SERVER['HTTP_COOKIE'])) {
    $cookies = explode(';', $_SERVER['HTTP_COOKIE']);
    foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        setcookie($name, '', time()-1000);
        setcookie($name, '', time()-1000, '/');
    }
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>DESKTOP-ARENA</title>
        <!-- Site Theam -->
        <meta name="thean-color" content="#7f7f7f">
        <!-- RWD -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Browser tab icon -->
        <link rel="icon" href="https://img.icons8.com/color/48/000000/video-card.png">
        <link rel="stylesheet" type="text/css" href="Assets/CSS/index.css"/>
    </head>
    <body id="primary" onload="loadingScreen()">

        <!-- Loading effect -->
        <div id="loading"></div>

        <p class="warning-msg">
            <br>
            DISPLAY RESOLUTION NOT SUPPORTED!<br><em>Please switch to a standard desktop monitor to continue using our
            service.</em>
        </p>

        <div id="main">
            <nav class="nav-bar">
                <a href="index.php">Home</a>
                <a href="#" onclick="load_build()">Build</a>
                <a href="#" onclick="load_history()">History</a>
                <a href="#" onclick="load_compare()">Compare</a>
                <a href="#" onclick="load_about()">About</a>
            </nav>

            <div id="page-body">
                <h1 id="title">Desktop Arena</h1>
                <h6 id="moto">Performance . Benchmarked</h6>
                <h6 id="gsButton">
                    <button id="getStarted" onclick="load_build()"><span>Get Started</span></button>
                </h6>

            </div>
<!--            <div class="footer">This footer will always be positioned at the bottom of the page, but <strong>not fixed</strong>.</div>-->
        </div>



        <!-- jQuery -->
        <script src="Assets/JS/jquery-3.4.1.min.js"></script>
        <!-- Package for particle effect -->
        <script src="Assets/JS/particles.min.js"></script>
        <script src="Assets/JS/index.js"></script>
    </body>
</html>
