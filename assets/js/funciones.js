function validador(e) {
    var teclado = (document.all) ? e.keyCode : e.which;
    if (teclado == 8) return true;
    var patron = /[0-9\d .]/;
    var prueba = String.fromCharCode(teclado);
    return patron.test(prueba);
}

function separarJs(){
    let cedula = document.getElementById("cedula").value;
    
    let caracteres = cedula.split("");

    let separar = caracteres.join(".");
    document.getElementById("cedula").value = separar;

    console.log(caracteres);
}

