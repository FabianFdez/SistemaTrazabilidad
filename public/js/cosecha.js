function activar(value) {
    element = document.getElementById("texto");
    element1 = document.getElementById("texto2");
    element2 = document.getElementById("texto3");
    
    check = document.getElementById("dos");
    check1 = document.getElementById("tres");
    
    if (value == true) {
        element.style.display = 'block';
        
        // habilitamos
        document.getElementById("dos").disabled = false;
    } else if (value == false) {
        
        check.checked = false;
        check1.checked = false;

        element.style.display = 'none';
        element1.style.display = 'none';
        element2.style.display = 'none';
        
        // deshabilitamos
        document.getElementById("dos").disabled = true;
        document.getElementById("tres").disabled = true;
    }
}
function activar2(value) {
    element = document.getElementById("texto2");
    element2 = document.getElementById("texto3");
    
    check = document.getElementById("tres");
    
    if (value == true) {
       element.style.display = 'block';
        
        // habilitamos
        document.getElementById("tres").disabled = false;
    } else if (value == false) {

        check.checked = false;

        element.style.display = 'none';
        element2.style.display = 'none';
        
        // deshabilitamos
        document.getElementById("tres").disabled = true;
    }
}
function activar3(value) {
    element = document.getElementById("texto3");

    if (value == true) {
        element.style.display = 'block';

    } else if (value == false) {

        element.style.display = 'none';

    }
}