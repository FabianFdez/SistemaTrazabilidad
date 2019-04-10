function activar(value) {
    element = document.getElementById("texto");
    element1 = document.getElementById("texto2");
    element2 = document.getElementById("texto3");
    element3 = document.getElementById("texto4");
    element4 = document.getElementById("texto5");
    element5 = document.getElementById("texto6");
    element6 = document.getElementById("texto7");
    element7 = document.getElementById("texto8");
    element8 = document.getElementById("texto9");

    check = document.getElementById("dos");
    check1 = document.getElementById("tres");
    check2 = document.getElementById("cuatro");
    check3 = document.getElementById("cinco");
    check4 = document.getElementById("seis");
    check5 = document.getElementById("siete");
    check6 = document.getElementById("ocho");
    check7 = document.getElementById("nueve");

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
        check5.checked = false;
        check6.checked = false;
        check7.checked = false;

        element.style.display = 'none';
        element1.style.display = 'none';
        element2.style.display = 'none';
        element3.style.display = 'none';
        element4.style.display = 'none';
        element5.style.display = 'none';
        element6.style.display = 'none';
        element7.style.display = 'none';
        element8.style.display = 'none';        

        // deshabilitamos
        document.getElementById("dos").disabled = true;
        document.getElementById("tres").disabled = true;
        document.getElementById("cuatro").disabled = true;
        document.getElementById("cinco").disabled = true;
        document.getElementById("seis").disabled = true;
        document.getElementById("siete").disabled = true;
        document.getElementById("ocho").disabled = true;
        document.getElementById("nueve").disabled = true;
    }
}
function activar2(value) {

    element = document.getElementById("texto2");
    element2 = document.getElementById("texto3");
    element3 = document.getElementById("texto4");
    element4 = document.getElementById("texto5");
    element5 = document.getElementById("texto6");
    element6 = document.getElementById("texto7");
    element7 = document.getElementById("texto8");
    element8 = document.getElementById("texto9");

    check = document.getElementById("tres");
    check2 = document.getElementById("cuatro");
    check3 = document.getElementById("cinco");
    check4 = document.getElementById("seis");
    check5 = document.getElementById("siete");
    check6 = document.getElementById("ocho");
    check7 = document.getElementById("nueve");

    if (value == true) {

        element.style.display = 'block';

        // habilitamos
        document.getElementById("tres").disabled = false;
    } else if (value == false) {

        check.checked = false;
        check2.checked = false;
        check3.checked = false;
        check4.checked = false;
        check5.checked = false;
        check6.checked = false;
        check7.checked = false;

        element.style.display = 'none';
        element2.style.display = 'none';
        element3.style.display = 'none';
        element4.style.display = 'none';
        element5.style.display = 'none';
        element6.style.display = 'none';
        element7.style.display = 'none';
        element8.style.display = 'none';

        // deshabilitamos
        document.getElementById("tres").disabled = true;
        document.getElementById("cuatro").disabled = true;
        document.getElementById("cinco").disabled = true;
        document.getElementById("seis").disabled = true;
        document.getElementById("siete").disabled = true;
        document.getElementById("ocho").disabled = true;
        document.getElementById("nueve").disabled = true;
    }
}
function activar3(value) {

    element = document.getElementById("texto3");
    element3 = document.getElementById("texto4");
    element4 = document.getElementById("texto5");
    element5 = document.getElementById("texto6");
    element6 = document.getElementById("texto7");
    element7 = document.getElementById("texto8");
    element8 = document.getElementById("texto9");

    check = document.getElementById("cuatro");
    check3 = document.getElementById("cinco");
    check4 = document.getElementById("seis");
    check5 = document.getElementById("siete");
    check6 = document.getElementById("ocho");
    check7 = document.getElementById("nueve");

    if (value == true) {

        element.style.display = 'block';

        // habilitamos
        document.getElementById("cuatro").disabled = false;
    } else if (value == false) {

        check.checked = false;
        check3.checked = false;
        check4.checked = false;
        check5.checked = false;
        check6.checked = false;
        check7.checked = false;

        element.style.display = 'none';
        element3.style.display = 'none';
        element4.style.display = 'none';
        element5.style.display = 'none';
        element6.style.display = 'none';
        element7.style.display = 'none';
        element8.style.display = 'none';

        // deshabilitamos
        document.getElementById("cuatro").disabled = true;
        document.getElementById("cinco").disabled = true;
        document.getElementById("seis").disabled = true;
        document.getElementById("siete").disabled = true;
        document.getElementById("ocho").disabled = true;
        document.getElementById("nueve").disabled = true;
    }
}
function activar4(value) {

    element = document.getElementById("texto4");
    element4 = document.getElementById("texto5");
    element5 = document.getElementById("texto6");
    element6 = document.getElementById("texto7");
    element7 = document.getElementById("texto8");
    element8 = document.getElementById("texto9");

    check = document.getElementById("cinco");
    check4 = document.getElementById("seis");
    check5 = document.getElementById("siete");
    check6 = document.getElementById("ocho");
    check7 = document.getElementById("nueve");

    if (value == true) {

        element.style.display = 'block';

        // habilitamos
        document.getElementById("cinco").disabled = false;
    } else if (value == false) {

        check.checked = false;
        check4.checked = false;
        check5.checked = false;
        check6.checked = false;
        check7.checked = false;

        element.style.display = 'none';
        element4.style.display = 'none';
        element5.style.display = 'none';
        element6.style.display = 'none';
        element7.style.display = 'none';
        element8.style.display = 'none';

        // deshabilitamos
        document.getElementById("cinco").disabled = true;
        document.getElementById("seis").disabled = true;
        document.getElementById("siete").disabled = true;
        document.getElementById("ocho").disabled = true;
        document.getElementById("nueve").disabled = true;
    }
}
function activar5(value) {

    element = document.getElementById("texto5");
    element5 = document.getElementById("texto6");
    element6 = document.getElementById("texto7");
    element7 = document.getElementById("texto8");
    element8 = document.getElementById("texto9");

    check = document.getElementById("seis");
    check5 = document.getElementById("siete");
    check6 = document.getElementById("ocho");
    check7 = document.getElementById("nueve");

    if (value == true) {
        
        element.style.display = 'block';

        // habilitamos
        document.getElementById("seis").disabled = false;
    } else if (value == false) {

        check.checked = false;
        check5.checked = false;
        check6.checked = false;
        check7.checked = false;

        element.style.display = 'none';
        element5.style.display = 'none';
        element6.style.display = 'none';
        element7.style.display = 'none';
        element8.style.display = 'none';

        // deshabilitamos
        document.getElementById("seis").disabled = true;
        document.getElementById("siete").disabled = true;
        document.getElementById("ocho").disabled = true;
        document.getElementById("nueve").disabled = true;

    }
}
function activar6(value) {

    element = document.getElementById("texto6");
    element6 = document.getElementById("texto7");
    element7 = document.getElementById("texto8");
    element8 = document.getElementById("texto9");

    check = document.getElementById("siete");
    check6 = document.getElementById("ocho");
    check7 = document.getElementById("nueve");

    if (value == true) {

        element.style.display = 'block';

        // habilitamos
        document.getElementById("siete").disabled = false;
    } else if (value == false) {

        check.checked = false;
        check6.checked = false;
        check7.checked = false;

        element.style.display = 'none';
        element6.style.display = 'none';
        element7.style.display = 'none';
        element8.style.display = 'none';

        // deshabilitamos
        document.getElementById("siete").disabled = true;
        document.getElementById("ocho").disabled = true;
        document.getElementById("nueve").disabled = true;
    }
}
function activar7(value) {

    element = document.getElementById("texto7");
    element7 = document.getElementById("texto8");
    element8 = document.getElementById("texto9");

    check = document.getElementById("ocho");
    check7 = document.getElementById("nueve");

    if (value == true) {

        element.style.display = 'block';

        // habilitamos
        document.getElementById("ocho").disabled = false;
    } else if (value == false) {

        check.checked = false;
        check7.checked = false;

        element.style.display = 'none';
        element7.style.display = 'none';
        element8.style.display = 'none';

        // deshabilitamos
        document.getElementById("ocho").disabled = true;
        document.getElementById("nueve").disabled = true;
    }
}
function activar8(value) {

    element = document.getElementById("texto8");
    element8 = document.getElementById("texto9");

    check = document.getElementById("nueve");

    if (value == true) {

        element.style.display = 'block';

        // habilitamos
        document.getElementById("nueve").disabled = false;
    } else if (value == false) {

        check.checked = false;

        element.style.display = 'none';
        element8.style.display = 'none';

        // deshabilitamos
        document.getElementById("nueve").disabled = true;
    }
}
function activar9(value) {
    element = document.getElementById("texto9");

    if (value == true) {

       element.style.display = 'block';

    } else if (value == false) {

        element.style.display = 'none';
    }
}