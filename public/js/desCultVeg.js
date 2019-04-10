function activar(value) {
    element = document.getElementById("texto");
    element1 = document.getElementById("texto2");
    element2 = document.getElementById("texto3");
    element3 = document.getElementById("texto4");
    element4 = document.getElementById("texto5");
    element5 = document.getElementById("texto6");

    check = document.getElementById("dos");
    check1 = document.getElementById("tres");
    check2 = document.getElementById("cuatro");
    check3 = document.getElementById("cinco");
    check4 = document.getElementById("seis");

    if (value == true) {
        element.style.display = 'block';
        
        // habilitamos
        document.getElementById("dos").disabled = false;
    } else if (value == false) {
        check.checked = false;
        check1.checked = false;
        check2.checked = false;
        check3.checked = false;
        check4.checked = false;

        element.style.display = 'none';
        element1.style.display = 'none';
        element2.style.display = 'none';
        element3.style.display = 'none';
        element4.style.display = 'none';
        element5.style.display = 'none';

        // deshabilitamos
        document.getElementById("dos").disabled = true;
        document.getElementById("tres").disabled = true;
        document.getElementById("cuatro").disabled = true;
        document.getElementById("cinco").disabled = true;
        document.getElementById("seis").disabled = true;
    }
}
function activar2(value) {
    
    element = document.getElementById("texto2");
    element2 = document.getElementById("texto3");
    element3 = document.getElementById("texto4");
    element4 = document.getElementById("texto5");
    element5 = document.getElementById("texto6");

    check = document.getElementById("tres");
    check2 = document.getElementById("cuatro");
    check3 = document.getElementById("cinco");
    check4 = document.getElementById("seis");

    if (value == true) {
        element.style.display = 'block';
        
        // habilitamos
        document.getElementById("tres").disabled = false;
    } else if (value == false) {
        
        check.checked = false;
        check2.checked = false;
        check3.checked = false;
        check4.checked = false;

        element.style.display = 'none';
        element2.style.display = 'none';
        element3.style.display = 'none';
        element4.style.display = 'none';
        element5.style.display = 'none';

        // deshabilitamos
        document.getElementById("tres").disabled = true;
        document.getElementById("cuatro").disabled = true;
        document.getElementById("cinco").disabled = true;
        document.getElementById("seis").disabled = true;
    }
}
function activar3(value) {

    element = document.getElementById("texto3");
    element3 = document.getElementById("texto4");
    element4 = document.getElementById("texto5");
    element5 = document.getElementById("texto6");

    check = document.getElementById("cuatro");
    check3 = document.getElementById("cinco");
    check4 = document.getElementById("seis");

    if (value == true) {
        element.style.display = 'block';
        
        // habilitamos
        document.getElementById("cuatro").disabled = false;
    } else if (value == false) {
        
        check.checked = false;
        check3.checked = false;
        check4.checked = false;

        element.style.display = 'none';
        element3.style.display = 'none';
        element4.style.display = 'none';
        element5.style.display = 'none';

        // deshabilitamos
        document.getElementById("cuatro").disabled = true;
        document.getElementById("cinco").disabled = true;
        document.getElementById("seis").disabled = true;
    }
}
function activar4(value) {
    
    element = document.getElementById("texto4");
    element4 = document.getElementById("texto5");
    element5 = document.getElementById("texto6");

    check = document.getElementById("cinco");
    check4 = document.getElementById("seis");

    if (value == true) {
        element.style.display = 'block';
        
        // habilitamos
        document.getElementById("cinco").disabled = false;
    } else if (value == false) {
        
        check.checked = false;
        check4.checked = false;

        element.style.display = 'none';
        element4.style.display = 'none';
        element5.style.display = 'none';

        // deshabilitamos
        document.getElementById("cinco").disabled = true;
        document.getElementById("seis").disabled = true;
    }
}
function activar5(value) {
    
    element = document.getElementById("texto5");
    element5 = document.getElementById("texto6");

    check = document.getElementById("seis");

    if (value == true) {
        element.style.display = 'block';

        // habilitamos
        document.getElementById("seis").disabled = false;
    } else if (value == false) {
        
        check.checked = false;
        
        element.style.display = 'none';
        element5.style.display = 'none';

        // deshabilitamos
        document.getElementById("seis").disabled = true;
    }
}
function activar6(value) {
    
    element = document.getElementById("texto6");

    if (value == true) {
        element.style.display = 'block';

    } else if (value == false) {
        element.style.display = 'none';

    }
}