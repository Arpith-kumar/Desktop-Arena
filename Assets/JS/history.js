
$(document).ready(function () {
    var desktop = [];

    $(document).on("change", "input.checkbox", function () {

        if (this.checked) {
            if(!(desktop.length >= 2)){
                desktop.push(this.id);
                // console.log(desktop);
                if(desktop.length >=2){
                    setCookie('desktopID',desktop[0] + "," + desktop[1],1); while(desktop.length > 0) {desktop.pop();} load_compare();
                }
            }else {
                // alert("Full");
            }
        } else {
            var a = desktop.pop();
            // console.log("POP" + a);
        }

    });
});


function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
    var expires = "expires=" + d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

