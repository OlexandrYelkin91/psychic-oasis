function getXmlHttp() {
    var a;
    try {
        a = new ActiveXObject("Msxml2.XMLHTTP")
    }
    catch (b) {
        try {
            a = new ActiveXObject("Microsoft.XMLHTTP")
        }
        catch (c) {
            a = !1
        }
    }
    a || "undefined" == typeof XMLHttpRequest || (a = new XMLHttpRequest); return a
};
var XmlHttp = new getXmlHttp();
var numberbasket = document.getElementById('number-basket');
if (localStorage.getItem("qulityAll") == 0) {
    numberbasket.style.display = "none";
}
else {
    numberbasket.style.display = "block";
}
if (localStorage.getItem("qulityAll") === undefined || localStorage.getItem("qulityAll") == null) {
    localStorage.setItem("qulityAll", 0);
}
if (localStorage.getItem("user") === undefined || localStorage.getItem("user") == null) {
    XmlHttp.open("get", '/check_user', true);
    XmlHttp.onreadystatechange = function () {
        if (XmlHttp.readyState == 4 && XmlHttp.status == 200) {
            localStorage.setItem("user", XmlHttp.responseText);
        }
    };
    XmlHttp.send();
}
function AddBasketfotting(id, q) {
    for (let i = 0; i < document.getElementsByTagName('input').length; i++)
    {
        if (document.getElementsByTagName('input')[i].name == "_token") {
            var tok = document.getElementsByTagName('input')[i].value;
        }
        
    }
    XmlHttp.open("post", '/add_besket', true);
    XmlHttp.setRequestHeader("X-Requested-With", "XMLHttpRequest");
    XmlHttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded; charset=UTF-8");
    XmlHttp.onreadystatechange = function () {
        if (XmlHttp.readyState == 4 && XmlHttp.status == 200) {
            localStorage.setItem("qulityAll", +localStorage.getItem("qulityAll") + q);
            numberbasket.innerHTML = localStorage.getItem("qulityAll");
            numberbasket.style.display = "block";
        }
    };
    XmlHttp.send("id=" + id + "&quil=" + q + "&user=" + localStorage.getItem("user") + "&_token=" + tok);
    
    if (localStorage.getItem("qulityAll") == 0) {
        numberbasket.style.display = "none";
    }
    else {
        numberbasket.style.display = "block";
    }
    }
function AddBasketfottingPage(id) {
    AddBasketfotting(id, +document.getElementById('qulity').value);
}
function AddBasketHidendoor(id, q) {
    for (let i = 0; i < document.getElementsByTagName('input').length; i++) {
        if (document.getElementsByTagName('input')[i].name == "_token") {
            var tok = document.getElementsByTagName('input')[i].value;
        }

    }
    let code = document.getElementById('code');
    let size = document.getElementById('size');
    let coating = document.getElementById('coating');
    let opening = document.getElementById('opening');
    let additionaloption = document.getElementById('additional-option');
    let lock = document.getElementById('lock');
    let price = document.getElementById('price');
    XmlHttp.open("post", '/add_besketHidendoors', true);
    XmlHttp.setRequestHeader("X-Requested-With", "XMLHttpRequest");
    XmlHttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded; charset=UTF-8");
    XmlHttp.onreadystatechange = function () {
        if (XmlHttp.readyState == 4 && XmlHttp.status == 200) {
           localStorage.setItem("qulityAll", +localStorage.getItem("qulityAll") + q);
           numberbasket.innerHTML = localStorage.getItem("qulityAll");
           numberbasket.style.display = "block";
        }
    };
    XmlHttp.send("id=" + id + "&quil=" + q + "&user=" + localStorage.getItem("user") + "&_token=" + tok
        + "&code=" + code.options[code.selectedIndex].text
        + "&size=" + size.options[size.selectedIndex].text
        + "&coating=" + coating.options[coating.selectedIndex].text
        + "&opening=" + opening.options[opening.selectedIndex].text
        + "&additionaloption=" + additionaloption.options[additionaloption.selectedIndex].text
        + "&lock=" + lock.options[lock.selectedIndex].text
        + "&price=" + price.options[price.selectedIndex].text);

    if (localStorage.getItem("qulityAll") == 0) {
        numberbasket.style.display = "none";
    }
    else {
        numberbasket.style.display = "block";
    }
}
