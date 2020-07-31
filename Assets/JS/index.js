// Load compare page into main div
function load_build(){
    document.cookie = "price" + "=" + "0" + ";";
    document.cookie = "cookie" + "=" + "set" + ";";
    $("#page-body").load('build.php').hide().fadeIn(1000);
}

// Load history page into main div
function load_history(){
    $("#page-body").load('history.php').hide().fadeIn(1000);
}

// Load about page into main div
function load_about(){
    $("#page-body").load('about.php').hide().fadeIn(1000);
}

function load_compare() {
    $("#page-body").load('compare.php').hide().fadeIn(1000);
}

//Loading animation controls
var myVar;
function loadingScreen() {
    if (!('hasCodeRunBefore' in localStorage)){
        console.log("load");
        $('#loading').load('loader.php');
        myVar = setTimeout(showPage, 6500);
    }
}

function showPage() {
    loadParticles();
    document.getElementById("loading").style.display = "none";
    document.getElementById("main").style.display = "block";
}

function loadParticles(){
    //Loading Particle Effect
    particlesJS.load('page-body', 'Assets/Config/particles.json',
        function(){
            console.log("Particle effect working...")
        });
}
