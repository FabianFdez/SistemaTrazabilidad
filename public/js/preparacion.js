function showContent() {
    element = document.getElementById("texto");
    check = document.getElementById("uno");

    if (check.checked) {
        element.style.display = 'block';
    } else {
        element.style.display = 'none';
    }
}
function showContent2() {
    element = document.getElementById("texto2");
    check = document.getElementById("dos");
    if (check.checked) {
        element.style.display = 'block';
    } else {
        element.style.display = 'none';
    }
}
function showContent3() {
    element = document.getElementById("texto3");
    check = document.getElementById("tres");
    if (check.checked) {
        element.style.display = 'block';
    } else {
        element.style.display = 'none';
    }
}
function showContent4() {
    element = document.getElementById("texto4");
    check = document.getElementById("cuatro");
    if (check.checked) {
        element.style.display = 'block';
    } else {
        element.style.display = 'none';
    }
}
function showContent5() {
    element = document.getElementById("texto5");
    check = document.getElementById("cinco");
    if (check.checked) {
        element.style.display = 'block';
    } else {
        element.style.display = 'none';
    }
}
function activar(value) {
    if (value == true) {
        // habilitamos
        document.getElementById("dos").disabled = false;
    } else if (value == false) {
        // deshabilitamos
        document.getElementById("dos").disabled = true;
    }
}
function activar2(value) {
    if (value == true) {
        // habilitamos
        document.getElementById("tres").disabled = false;
    } else if (value == false) {
        // deshabilitamos
        document.getElementById("tres").disabled = true;
    }
}
function activar3(value) {
    if (value == true) {
        // habilitamos
        document.getElementById("cuatro").disabled = false;
    } else if (value == false) {
        // deshabilitamos
        document.getElementById("cuatro").disabled = true;
    }
}
function activar4(value) {
    if (value == true) {
        // habilitamos
        document.getElementById("cinco").disabled = false;
    } else if (value == false) {
        // deshabilitamos
        document.getElementById("cinco").disabled = true;
    }
}


