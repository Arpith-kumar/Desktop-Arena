// The ready event occurs when the DOM (document object model) has been loaded.
$(document).ready(function() {
    var counter = 0;

    // Start the changing images
    setInterval(function() {

        if(counter === 10) {
            counter = 0;
        }

        changeImage(counter);
        counter++;
    },2000);

    // Set the percentage off
    loading();
});

function changeImage(counter) {
    var images = [
        '<img src="Assets/Images/video-card.png">',
        '<img src="Assets/Images/motherboard.png">',
        '<img src="Assets/Images/workstation.png">',
        '<img src="Assets/Images/thunderbolt.png">',
        '<img src="Assets/Images/c-drive.png">',
        '<img src="Assets/Images/processor.png">',
        '<img src="Assets/Images/usb-connector.png">',
        '<img src="Assets/Images/virtual-reality.png">'];

    $(".image").html(images[counter]);
}

function loading(){
    var num = 0;

    for(i=0; i<=100; i++) {

        setTimeout(function() {
            $('.loader span').html(num+'%');

            if(num === 100) {
                return;
            }

            num++;

        },i*65);

    }

}