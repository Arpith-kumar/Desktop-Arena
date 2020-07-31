
var table = document.getElementById("customers");
if (table) {
    for (var i = 0; i < table.rows.length; i++) {
        table.rows[i].onclick = function() {
            tableText(this);
        };
    }
}

function tableText(tableRow) {
    var id = tableRow.childNodes[1].innerHTML;
    var brand = tableRow.childNodes[3].innerHTML;
    var model = tableRow.childNodes[5].innerHTML;
    var price = tableRow.childNodes[9].innerHTML;
    var data = brand + "," + model + "," + price + "," + id;
    console.log(data);
    setCookie('memory', data, 1);
}

function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
    var expires = "expires=" + d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}