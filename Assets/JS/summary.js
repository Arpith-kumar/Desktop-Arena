function setPCName() {
    var name = document.getElementById("pcname").value;
    var flag = true;
    if(!(name == null || name == "")){

        var cookieArray = "processor,motherboard,memory,storage,powersupply,chassie,cabincooler,cpucooler".split(",");

        cookieArray.forEach(loop);

        function loop(item, index) {
            var myCookie = getCookie(item);
            if (myCookie == null) {
                // cookie doesn't exist
                alert(item.toUpperCase() + " not selected!");
                flag = false;
            }
        }

        if(flag){
            var x = document.getElementById("snackbar");
            x.className = "show";
            setTimeout(function(){

                x.className = x.className.replace("show", "");


                document.cookie = "pcname" + "=" + name + ";";
                $.ajax({
                    type: "GET",
                    url: "summary.php",
                    data: "create=true",
                    success:function(result){
                        $('#summary-page').html(result);
                    }
                });


                //REDIRECT
                load_history();



            }, 2500);



        }

    }


}

function getCookie(name) {
    var dc = document.cookie;
    var prefix = name + "=";
    var begin = dc.indexOf("; " + prefix);
    if (begin == -1) {
        begin = dc.indexOf(prefix);
        if (begin != 0) return null;
    }
    else
    {
        begin += 2;
        var end = document.cookie.indexOf(";", begin);
        if (end == -1) {
            end = dc.length;
        }
    }
    // because unescape has been deprecated, replaced with decodeURI
    //return unescape(dc.substring(begin + prefix.length, end));
    return decodeURI(dc.substring(begin + prefix.length, end));
}


function insertDesktop() {

}