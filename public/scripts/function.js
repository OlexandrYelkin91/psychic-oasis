var xhttp = new XMLHttpRequest();

var characteristics_button = document.getElementById("characteristics_button");
var description_button = document.getElementById("description_button");
var response_button = document.getElementById("response_button");
var labels_button = document.getElementById("labels_button");

var characteristics_text = document.getElementById("characteristics_text");
var description_text = document.getElementById("description_text");
var response_text = document.getElementById("response_text");
var labels_text = document.getElementById("labels_text");

var add_pages_h3 = document.getElementById("add_pages_h3");
var add_pages_form = document.getElementById("add_pages");
var add_goods_h3 = document.getElementById("add_goods_h3");
var add_goods_form = document.getElementById("add_goods");
var add_brend_h3 = document.getElementById("add_brend_h3");
var add_brend_form = document.getElementById("add_brend");
var all_goods_h3 = document.getElementById("all_goods_h3");
var all_goods = document.getElementById("all_goods");
var orders_h3 = document.getElementById("orders_h3");
var allorders = document.getElementById("all-orders");

var addressesInput = document.getElementById("addresses_input");
var newpostInput = document.getElementById("newpost_input");

if (characteristics_button) {
    characteristics_button.addEventListener('click', function () {
        characteristics_button.style.color = "#B8860B";
        characteristics_text.style.display = "block";

        if (description_button) {
            description_button.style.color = "#000";
            description_text.style.display = "none";
        }
        if (response_button) {
            response_button.style.color = "#000";
            response_text.style.display = "none";
        }
        if (labels_button) {
            labels_text.style.display = "none";
            labels_button.style.color = "#000";
        }
    });
}
if (description_button) {
    description_button.addEventListener('click', function () {
        description_button.style.color = "#B8860B";
        description_text.style.display = "block";

        if (characteristics_button) {
            characteristics_button.style.color = "#000";
            characteristics_text.style.display = "none";
        }
        if (response_button) {
            response_button.style.color = "#000";
            response_text.style.display = "none";
        }
        if (labels_button) {
            labels_text.style.display = "none";
            labels_button.style.color = "#000";
        }
    });
}
if (response_button) {
    response_button.addEventListener('click', function () {
        response_button.style.color = "#B8860B";
        response_text.style.display = "block";

        if (characteristics_button) {
            characteristics_button.style.color = "#000";
            characteristics_text.style.display = "none";
        }
        if (description_button) {
            description_button.style.color = "#000";
            description_text.style.display = "none";
        }
        if (labels_button) {
            labels_text.style.display = "none";
            labels_button.style.color = "#000";
        }
    });
}
if (labels_button) {
    labels_button.addEventListener('click', function () {
        labels_button.style.color = "#B8860B";
        labels_text.style.display = "block";

        if (add_pages_form) {
            characteristics_button.style.color = "#000";
            characteristics_text.style.display = "none";
        }
        if (description_button) {
            description_button.style.color = "#000";
            description_text.style.display = "none";
        }
        if (response_button) {
            response_button.style.color = "#000";
            response_text.style.display = "none";
        }
    });
}

if (add_pages_h3 != null) {
    add_pages_h3.addEventListener('click', function () {
        add_goods_form.style.display = "none";
        add_brend_form.style.display = "none";
        all_goods.style.display = "none";
        allorders.style.display = "none";
        orders_h3.style.color = "#000";
        orders_h3.style.backgroundColor = "#fff";
        add_brend_h3.style.color = "#000";
        add_brend_h3.style.backgroundColor = "#fff";
        add_goods_h3.style.color = "#000";
        add_goods_h3.style.backgroundColor = "#fff";
        all_goods_h3.style.color = "#000";
        all_goods_h3.style.backgroundColor = "#fff";

        if (add_pages_form.style.display != "block") {

            add_pages_form.style.display = "block";
            add_pages_h3.style.color = "#B8860B";
            add_pages_h3.style.backgroundColor = "#f1f1f0";
        }
    });
}
if (add_goods_h3 != null) {
    add_goods_h3.addEventListener('click', function () {
        add_pages_form.style.display = "none";
        add_brend_form.style.display = "none";
        all_goods.style.display = "none";
        allorders.style.display = "none";
        orders_h3.style.color = "#000";
        orders_h3.style.backgroundColor = "#fff";
        add_brend_h3.style.color = "#000";
        add_brend_h3.style.backgroundColor = "#fff";
        add_pages_h3.style.color = "#000";
        add_pages_h3.style.backgroundColor = "#fff";
        all_goods_h3.style.color = "#000";
        all_goods_h3.style.backgroundColor = "#fff";

        if (add_goods_form.style.display != "block") {
            add_goods_form.style.display = "block";
            add_goods_h3.style.color = "#B8860B";
            add_goods_h3.style.backgroundColor = "#f1f1f0";

        }
    });
}
if (add_brend_h3 != null) {
    add_brend_h3.addEventListener('click', function () {
        add_pages_form.style.display = "none";
        add_goods_form.style.display = "none";
        all_goods.style.display = "none";
        allorders.style.display = "none";
        orders_h3.style.color = "#000";
        orders_h3.style.backgroundColor = "#fff";
        all_goods_h3.style.color = "#000";
        all_goods_h3.style.backgroundColor = "#fff";
        add_pages_h3.style.color = "#000";
        add_pages_h3.style.backgroundColor = "#fff";
        add_goods_h3.style.color = "#000";
        add_goods_h3.style.backgroundColor = "#fff";

        if (add_brend_form.style.display != "block") {
            add_brend_form.style.display = "block";
            add_brend_h3.style.color = "#B8860B";
            add_brend_h3.style.backgroundColor = "#f1f1f0";
        }
    });
}
if (all_goods_h3 != null) {
    all_goods_h3.addEventListener('click', function () {
        add_pages_form.style.display = "none";
        add_goods_form.style.display = "none";
        add_brend_form.style.display = "none";
        allorders.style.display = "none";
        orders_h3.style.color = "#000";
        orders_h3.style.backgroundColor = "#fff";
        add_brend_h3.style.color = "#000";
        add_brend_h3.style.backgroundColor = "#fff";
        add_pages_h3.style.color = "#000";
        add_pages_h3.style.backgroundColor = "#fff";
        add_goods_h3.style.color = "#000";
        add_goods_h3.style.backgroundColor = "#fff";

        if (all_goods.style.display != "block") {
            all_goods.style.display = "block";
            all_goods_h3.style.color = "#B8860B";
            all_goods_h3.style.backgroundColor = "#f1f1f0";
        }
    });
}
if (orders_h3 != null) {
    orders_h3.addEventListener('click', function () {
        add_pages_form.style.display = "none";
        add_goods_form.style.display = "none";
        add_brend_form.style.display = "none";
        all_goods.style.display = "none";
        add_brend_h3.style.color = "#000";
        add_brend_h3.style.backgroundColor = "#fff";
        all_goods_h3.style.color = "#000";
        all_goods_h3.style.backgroundColor = "#fff";
        add_pages_h3.style.color = "#000";
        add_pages_h3.style.backgroundColor = "#fff";
        add_goods_h3.style.color = "#000";
        add_goods_h3.style.backgroundColor = "#fff";

        if (allorders.style.display != "block") {
            allorders.style.display = "block";
            orders_h3.style.color = "#B8860B";
            orders_h3.style.backgroundColor = "#f1f1f0";
        }
    });
}
var burger_menu = document.getElementById('burger_menu');
if (burger_menu != null) {
    burger_menu.addEventListener("click", function () {
        let sidebar = document.getElementById('sidebar');
        let sidebarCrm = document.getElementById('sidebar-crm');
        var step = null;
        var elem = null;
        var revers = null;
        revers = "-170px";
        if (sidebar != null) {
             elem = sidebar;
             step = "10px";
         }
         else if (sidebarCrm != null) {
             elem = sidebarCrm;
             step = "33px";
         }
        if (elem.style.left == step) {
            elem.style.left = revers;
            this.style.backgroundImage = "url(../images/bars-solid.svg)";
            this.style.backgroundSize = "25px";
        }
        else {
            elem.style.left = step;
            this.style.backgroundImage = "url(../images/xmark-solid.svg)";
            this.style.backgroundSize = "18px";
        }
    });
}
function disableSelect(currentRadio){
    if(currentRadio.value === 'Адресна доставка')
        {
         addressesInput.disabled = false;
         newpostInput.disabled = true;
        }
    else {
        addressesInput.disabled = true;
        newpostInput.disabled = false;
    }
}
function OpenHideOrdered(block) {
    let elem = document.getElementsByClassName(block)[0].style;
    let linkElem = block + "_link_open";
    let link = document.getElementById(linkElem);
    let openIcon = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M151.6 469.6C145.5 476.2 137 480 128 480s-17.5-3.8-23.6-10.4l-88-96c-11.9-13-11.1-33.3 2-45.2s33.3-11.1 45.2 2L96 365.7V64c0-17.7 14.3-32 32-32s32 14.3 32 32V365.7l32.4-35.4c11.9-13 32.2-13.9 45.2-2s13.9 32.2 2 45.2l-88 96zM320 32h32c17.7 0 32 14.3 32 32s-14.3 32-32 32H320c-17.7 0-32-14.3-32-32s14.3-32 32-32zm0 128h96c17.7 0 32 14.3 32 32s-14.3 32-32 32H320c-17.7 0-32-14.3-32-32s14.3-32 32-32zm0 128H480c17.7 0 32 14.3 32 32s-14.3 32-32 32H320c-17.7 0-32-14.3-32-32s14.3-32 32-32zm0 128H544c17.7 0 32 14.3 32 32s-14.3 32-32 32H320c-17.7 0-32-14.3-32-32s14.3-32 32-32z"/></svg>';
    let closeIcon = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M151.6 42.4C145.5 35.8 137 32 128 32s-17.5 3.8-23.6 10.4l-88 96c-11.9 13-11.1 33.3 2 45.2s33.3 11.1 45.2-2L96 146.3V448c0 17.7 14.3 32 32 32s32-14.3 32-32V146.3l32.4 35.4c11.9 13 32.2 13.9 45.2 2s13.9-32.2 2-45.2l-88-96zM320 32c-17.7 0-32 14.3-32 32s14.3 32 32 32h32c17.7 0 32-14.3 32-32s-14.3-32-32-32H320zm0 128c-17.7 0-32 14.3-32 32s14.3 32 32 32h96c17.7 0 32-14.3 32-32s-14.3-32-32-32H320zm0 128c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H320zm0 128c-17.7 0-32 14.3-32 32s14.3 32 32 32H544c17.7 0 32-14.3 32-32s-14.3-32-32-32H320z"/></svg>';
    if (elem.display == "none" || elem.length == 0) {
        elem.display = "block";
        link.innerHTML = closeIcon;
    }
    else {
        elem.display = "none";
        link.innerHTML = openIcon;
    }
};
function Deploy(e) {
    if (e.parentElement.parentElement.style.height == "" || e.parentElement.parentElement.style.height == "45px") {
        e.parentElement.parentElement.style.height = "auto";
        e.className = "caret-up"
    }
    else {
        e.parentElement.parentElement.style.height = "45px";
        e.className = "caret-down";
    }
}
function delElem(id, code) {
    let locate = location.origin + location.pathname + "/allgoods/delete/" + id;
    var isAdmin = confirm("Видалити товар з кодом: "+code);

    if (isAdmin) {
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("elem_" + id).remove();
            }
        };
        xhttp.open("GET", locate, true);
        xhttp.send();
    }
}
