// Load parts into div
function load_processor(){
    var obj = document.getElementById("start-building");
    obj.style.display = "none";
    document.cookie = "cookie" + "=" + "set" + ";";
    $("#summary-page").load('summary.php').hide().fadeIn(1000);
    $("#selection-page").load('processor.php').hide().fadeIn(1000);
}
function load_motherboard(){
    var obj = document.getElementById("start-building");
    obj.style.display = "none";

    $("#selection-page").load('motherboard.php').hide().fadeIn(1000);
}
function load_memory(){
    var obj = document.getElementById("start-building");
    obj.style.display = "none";

    $("#selection-page").load('memory.php').hide().fadeIn(1000);
}
function load_storage(){
    var obj = document.getElementById("start-building");
    obj.style.display = "none";

    $("#selection-page").load('storage.php').hide().fadeIn(1000);
}
function load_videocard(){
    var obj = document.getElementById("start-building");
    obj.style.display = "none";

    $("#selection-page").load('videocard.php').hide().fadeIn(1000);
}
function load_opticaldrive(){
    var obj = document.getElementById("start-building");
    obj.style.display = "none";

    $("#selection-page").load('opticaldrive.php').hide().fadeIn(1000);
}
function load_powersupply(){
    var obj = document.getElementById("start-building");
    obj.style.display = "none";

    $("#selection-page").load('powersupply.php').hide().fadeIn(1000);
}
function load_chassie(){
    var obj = document.getElementById("start-building");
    obj.style.display = "none";

    $("#selection-page").load('chassie.php').hide().fadeIn(1000);
}
function load_display(){
    var obj = document.getElementById("start-building");
    obj.style.display = "none";

    $("#selection-page").load('display.php').hide().fadeIn(1000);
}
function load_keyboard(){
    var obj = document.getElementById("start-building");
    obj.style.display = "none";

    $("#selection-page").load('keyboard.php').hide().fadeIn(1000);
}
function load_cabincooler(){
    var obj = document.getElementById("start-building");
    obj.style.display = "none";

    $("#selection-page").load('cabincooler.php').hide().fadeIn(1000);
}
function load_cpucooler(){
    var obj = document.getElementById("start-building");
    obj.style.display = "none";

    $("#selection-page").load('cpucooler.php').hide().fadeIn(1000);
}
function load_os(){
    var obj = document.getElementById("start-building");
    obj.style.display = "none";

    $("#selection-page").load('operatingsystem.php').hide().fadeIn(1000);
}
function load_mouse(){
    var obj = document.getElementById("start-building");
    obj.style.display = "none";

    $("#selection-page").load('mouse.php').hide().fadeIn(1000);
}

function load_summary() {
    $("#summary-page").load('summary.php').hide().fadeIn(1000);
}

//onClick Scrolling
function scrolltoDiv(section){
    console.log("Test");
    $('html, body').animate({
        'scrollTop' : $(section).position().top - 51 // (nav-bar height)
    });
}

// Go to top button

//Get the button
var mybutton = document.getElementById("top");
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 40 || document.documentElement.scrollTop > 40) {
        mybutton.style.display = "block";
        mybutton.style.transition = "ease"
    } else {
        mybutton.style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}

function load_price(){
    $.ajax({
        type: "GET",
        url: "summary.php",
        data: "select=true",
        success:function(result){
            $('#summary-page').html(result);
        }
    });
}

