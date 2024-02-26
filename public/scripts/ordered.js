var step1 = document.getElementsByClassName("step-1");
var step2 = document.getElementsByClassName("step-2");
var step3 = document.getElementsByClassName("step-3");

var nextstep1 = document.getElementById("next-step-1");
var nextstep2 = document.getElementById("next-step-2");

var linkstep1 = document.getElementById("link-step-1");
var linkstep2 = document.getElementById("link-step-2");

var numberstep = document.getElementById("number-step");
var textstep = document.getElementById("text-step");

var lname = document.getElementById("lname");
var fname = document.getElementById("fname");
var email = document.getElementById("email");
var phone = document.getElementById("phone");
var city = document.getElementById("city");

var lnameerror = document.getElementById("lname-error");
var fnameerror = document.getElementById("fname-error");
var emailerror = document.getElementById("email-error");
var phoneerror = document.getElementById("phone-error");
var cityerror = document.getElementById("city-error");

var recipienttotal = document.getElementById("recipienttotal");
var deliverytotal = document.getElementById("deliverytotal");
var paymentmethodtotal = document.getElementById("paymentmethodtotal");

var patternemail  = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
var patternphone = /^\d[\d\(\)\ -]{4,14}\d$/;
let testemail = "";
let testphone = "";
nextstep1.focus();

if (localStorage.getItem("lname") === undefined 
|| localStorage.getItem("lname") == null) {
    localStorage.setItem("lname", "");
}
else {
    lname.value = localStorage.getItem("lname");
}
if (localStorage.getItem("fname") === undefined 
|| localStorage.getItem("fname") == null) {
    localStorage.setItem("fname", "");
}
else {
    fname.value = localStorage.getItem("fname");
}
if (localStorage.getItem("email") === undefined 
|| localStorage.getItem("email") == null) {
    localStorage.setItem("email", "");
}
else {
    email.value = localStorage.getItem("email");
}
if (localStorage.getItem("phone") === undefined 
|| localStorage.getItem("phone") == null) {
    localStorage.setItem("phone", "");
}
else {
    phone.value = localStorage.getItem("phone");
}
if (localStorage.getItem("city") === undefined 
|| localStorage.getItem("city") == null) {
    localStorage.setItem("city", "");
}
else {
    city.value = localStorage.getItem("city");
}
if (localStorage.getItem("delivery") === undefined 
|| localStorage.getItem("delivery") == null) {
    localStorage.setItem("delivery", "newpost");
}
else {
    document.getElementById(localStorage.getItem("delivery")).checked =  "checked";
}
if (localStorage.getItem("deliveryadres") === undefined 
|| localStorage.getItem("deliveryadres") == null) {
    localStorage.setItem("deliveryadres", "");
}
else {
    
}
if (localStorage.getItem("pay") === undefined 
|| localStorage.getItem("pay") == null) {
    localStorage.setItem("pay", "whenreceived");
}
nextstep1.addEventListener("click", function () {
    testemail = patternemail.test(String(email.value).toLowerCase());
    testphone = patternphone.test(String(phone.value).toLowerCase());
    if (testemail && testphone && lname.value != "" && fname.value != "" && city.value != "") {
        step1[0].style.display = "none";
        step3[0].style.display = "none";
        step2[0].style.display = "block";
        numberstep.innerText = 2;
        textstep.innerText = "Оберіть спосіб доставки і оплати";
        nextstep2.focus();

        recipienttotal.innerHTML = lname.value+" "+fname.value+", "+phone.value+";";
        deliverytotal.innerHTML = "Нова Почта,<br>місто: "+city.value+", Віділення не вказано";
        paymentmethodtotal.innerHTML = "Оплата при отримані";

        localStorage.setItem("lname", lname.value);
        localStorage.setItem("fname", fname.value);
        localStorage.setItem("email", email.value);
        localStorage.setItem("phone", phone.value);
        localStorage.setItem("city", city.value);
    }
    if (lname.value != "" && lname.value != null) {
        lname.style.borderColor = "#ccc";
        lnameerror.style.display = "none";
    }
    else {
        lname.style.borderColor = "red";
        lnameerror.style.display = "block";
    }
   if (fname.value != "" && fname.value != null) {   
        fname.style.borderColor = "#ccc";
        fnameerror.style.display = "none";
    }
    else {
        fname.style.borderColor = "red";
        fnameerror.style.display = "block";
    }

    if (testemail) {
        email.style.borderColor = "#ccc";
        emailerror.style.display = "none";
    }
    else {
        email.style.borderColor = "red";
        emailerror.style.display = "block";
    }
   if (testphone) {   
        phone.style.borderColor = "#ccc";
        phoneerror.style.display = "none";
    }
    else {
        phone.style.borderColor = "red";
        phoneerror.style.display = "block";
    }
    if (city.value != "" && city.value != null) {   
        city.style.borderColor = "#ccc";
        cityerror.style.display = "none";
    }
    else {
        city.style.borderColor = "red";
        cityerror.style.display = "block";
    }
});
nextstep2.addEventListener("click", function () {
    step1[0].style.display = "none";
    step2[0].style.display = "none";
    step3[0].style.display = "block";
    numberstep.innerText = 3;
    textstep.innerText = "Підтвердження замовлення";
});
linkstep1.addEventListener("click", function () {
    step2[0].style.display = "none";
    step3[0].style.display = "none";
    step1[0].style.display = "block";
    numberstep.innerText = 1;
    textstep.innerText = "Контактні дані";
    nextstep1.focus();
});
linkstep2.addEventListener("click", function () {
    step1[0].style.display = "none";
    step3[0].style.display = "none";
    step2[0].style.display = "block";
    numberstep.innerText = 2;
    textstep.innerText = "Підтвердження замовлення";
    nextstep2.focus();

});
