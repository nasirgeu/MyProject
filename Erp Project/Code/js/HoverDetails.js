var ele1, sh1 = true, ele2, sh2 = true, ele3, sh3 = true;
var ele4, ele5, sh4 = true, sh5 = true;
var hideelement, element, element1;
function show1() {
    if (sh1) {
        ele1 = document.getElementById("1");
        ele1.classList.add("active");
        sh1 = false;
    } else {
        ele1.classList.remove("active");
        sh1 = true;
    }
}

function show2() {
    if (sh2) {
        ele2 = document.getElementById("2");
        ele2.classList.add("active");
        sh2 = false;
    } else {
        ele2.classList.remove("active");
        sh2 = true;
    }
}

function show3() {
    if (sh3) {
        ele3 = document.getElementById("3");
        ele3.classList.add("active");
        sh3 = false;
    } else {
        ele3.classList.remove("active");
        sh3 = true;
    }
}

function show4() {
    if (sh4) {
        ele4 = document.getElementById("4");
        ele4.classList.add("active");
        sh4 = false;
    } else {
        ele4.classList.remove("active");
        sh4 = true;
    }
}
function show5() {
    if (sh5) {
        ele5 = document.getElementById("5");
        ele5.classList.add("active");
        sh5 = false;
    } else {
        ele5.classList.remove("active");
        sh5 = true;
    }
}
var temp = true, temp1 = true;
var element, element1, hideelement, hide1 = true;
function myFunction() {

    if (temp) {
        element = document.getElementById("hoverdetail");
        element.classList.add("active");
        temp = false;
    } else {
        element.classList.remove("active");
        temp = true;
    }
}

function myFunction1() {

    if (temp1) {
        element1 = document.getElementById("photodetails");
        element1.classList.add("active");
        temp1 = false;
    } else {
        element1.classList.remove("active");
        temp1 = true;
    }
}
var hide2 = true, hideelement1, hideelement2;

function toggle1() {
    if (hide2) {
        hideelement1 = document.getElementById("feenavshow");
        hideelement1.classList.add("active");
        hideelement2 = document.getElementById("navshowbtn");
        hideelement2.classList.add("active1");
        hide2 = false;
    } else {
        hideelement1.classList.remove("active");
        hideelement2.classList.remove("active1");
        hide2 = true;
    }
}
function toggle() {

    if (hide1) {
        hideelement = document.getElementById("hide");
        hideelement.classList.add("active");
        hide1 = false;
    } else {
        hideelement.classList.remove("active");
        hide1 = true;
    }

    ele1.classList.remove("active");
    ele2.classList.remove("active");
    ele3.classList.remove("active");
    ele4.classList.remove("active");
    ele5.classList.remove("active");
}

window.addEventListener('mouseup', function (event) {
    element = document.getElementById("hoverdetail");
    element1 = document.getElementById("photodetails");
    if (event.target != element) {
        element.classList.remove("active");
        element1.classList.remove("active");
    }
});



function view() {
    ele = document.getElementById("eleg");
    subli = document.getElementById("subli");
    bac = document.getElementById("appliedb");

    bac.classList.remove("active1");
    ele.classList.remove("active");
    subli.classList.add("active");
}

function elegibel() {
    ele = document.getElementById("eleg");
    subli = document.getElementById("subli");
    bac = document.getElementById("appliedb");
    bac.classList.remove("active1");
    subli.classList.remove("active");
    ele.classList.add("active");
}
function appliedback() {
    bac = document.getElementById("appliedb");
    ele = document.getElementById("eleg");
    subli = document.getElementById("subli");
    subli.classList.remove("active");
    ele.classList.remove("active");
    bac.classList.add("active1");
}