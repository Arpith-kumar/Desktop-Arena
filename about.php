<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="Assets/CSS/about.css"/>
</head>
<body>

<a href="#" onclick="openSettings()" class="round-button">
    <img src="https://img.icons8.com/wired/64/000000/settings.png">
</a>

<div id="settings" class="overlay">

    <!-- Button to close the overlay navigation -->
    <!-- The reason you’d want to do this with the href of a link is that normally, a javascript: URL will redirect the browser to a plain text version of the result of evaluating that JavaScript. But if the result is undefined, then the browser stays on the same page. void(0) is just a short and simple script that evaluates to undefined. -->
    <!-- <a href="javascript:void(0)" class="closebtn" onclick="closeSettings()">&times;</a> -->
    <button class="closebtn" onclick="closeSettings()">&times;</button>

    <!-- Overlay content -->
    <div class="overlay-content">
        <a href="#">About</a>
        <a href="#">Services</a>
        <a href="#">Clients</a>
        <a href="#">Contact</a>
    </div>

</div>

<script src="Assets/JS/about.js"></script>
</body>
</html>
