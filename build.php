<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Bootstrap -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
    <link rel="stylesheet" type="text/css" href="Assets/CSS/build.css"/>
    <title></title>
</head>
<body>
<!-- Go to top button -->
<button onclick="topFunction()" id="top" >Top</button>

<!-- Video Player -->
<div class="overlay">
    <div>
        <h1 id = "build-title">Build</h1>
        <h6 id = "build-description">Build something a touch beyond ordinary</h6>
        <a id = "build-button" href="#" onclick="scrolltoDiv('#component-list')">EXPLORE</a><h3 id = "build-arrow">&nbsp;></h3>
    </div>

    <div>
        <h1 id = "compare-title">Compare</h1>
        <h6 id = "compare-description">Build something a touch beyond ordinary</h6>
        <a id = "compare-button" href="#" onclick="load_history()">EXPLORE</a><h3 id = "compare-arrow">&nbsp;></h3>
    </div>

</div>

<video id="player" autoplay loop muted>
    <source src="Assets/Videos/background_video.mp4" type="video/mp4">
</video>


<div id = "component-list">
    <button onclick="load_processor()">Processor</button>
    <button onclick="load_motherboard()">Motherboard</button>
    <button onclick="load_memory()">Memory</button>
    <button onclick="load_storage()">Storage</button>
    <button onclick="load_videocard()">Video Card</button>
    <button onclick="load_opticaldrive()">Optical Drive</button>
    <button onclick="load_powersupply()">Power Supply</button>
    <button onclick="load_chassie()">Chassis</button>
    <button onclick="load_display()">Display</button>
    <button onclick="load_keyboard()">Keyboard</button>
    <button onclick="load_mouse()">Mouse</button>
    <button onclick="load_cabincooler()">Cabin Cooler</button>
    <button onclick="load_cpucooler()">CPU Cooler</button>
    <button onclick="load_os()">Operating Systems</button>
</div>

<div id = "build-container">
    <div id = "selection-page"></div>
    <div id = "summary-page"></div>
<!--    <div id="button-container">-->
<!--        <button id="get" onclick="getCookieData();">Get</button>-->
<!--        <button id="confirm">Confirm</button>-->
<!--    </div>-->
</div>

<div id="start-building">
    <img id="start" src="Assets/Images/build.png" alt="" onclick="load_processor()">
<!--    <img src="Assets/Images/dog1.gif" alt="">-->
</div>

<!--<footer id="foot">-->
<!--    <p>©️ Desktop-Arena</p>-->
<!--</footer>-->

<script src="Assets/JS/build.js"></script>
<script src="Assets/JS/jquery-3.4.1.min.js"></script>
</body>
</html>