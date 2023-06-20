function validateSignup() {
    let x = document.forms["formulario"]["name"].value;
    if (x == "") {
        alert("Por favor, introduzca su nombre");
        return false;
    }
    let y = document.forms["formulario"]["surname"].value;
    if (y == "") {
        alert("Por favor, introduzca su apellido");
        return false;
    }
    let z = document.forms["formulario"]["email"].value;
    if (z == "") {
        alert("Por favor, introduzca su email");
        return false;
    }
    let v = document.forms["formulario"]["username"].value;
    if (v == "") {
        alert("Por favor, escoja un nombre de usuario");
        return false;
    }
}