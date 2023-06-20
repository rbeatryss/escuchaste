function validateLogin() {
    let x = document.forms["formulario"]["name"].value;
    if (x == "") {
        alert("Por favor, introduzca su nombre");
        return false;
    }
    let z = document.forms["formulario"]["email"].value;
    if (z == "") {
        alert("Por favor, introduzca su email");
        return false;
    }
}