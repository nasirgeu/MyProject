var element;
function myFunction() {
    element = document.getElementById("image1");
    element.classList.remove("active1");
    element.classList.remove("active2");
    element.classList.remove("active3");
    element.classList.add("active");
    const box = document.getElementById('text1');
    box.style.display = 'none';
}


function myFunction1() {
    element = document.getElementById("image1");
    element.classList.remove("active");
    element.classList.remove("active2");
    element.classList.remove("active3");
    element.classList.add("active1");
}

function myFunction2() {
    element = document.getElementById("image1");
    element.classList.remove("active");
    element.classList.remove("active1");
    element.classList.remove("active3");
    element.classList.add("active2");

}

function myFunction3() {
    element = document.getElementById("image1");
    element.classList.remove("active");
    element.classList.remove("active1");
    element.classList.remove("active2");
    element.classList.add("active3");

}

function originalimage() {
    element = document.getElementById("image1");
    element.classList.remove("active");
    element.classList.remove("active1");
    element.classList.remove("active2");
    element.classList.remove("active3");
    const box = document.getElementById('text1');
    box.style.display = 'inline';
}

function originalstate() {
    element = document.getElementById("image1");
    element.classList.remove("active");
    element.classList.remove("active1");
    element.classList.remove("active2");
    element.classList.remove("active3");
    const box = document.getElementById('text1');
    box.style.display = 'inline';
}

