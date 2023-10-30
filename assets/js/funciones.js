
function validador(evt) {
    
    let cod = (evt.which) ? evt.which : evt.keyCode;
    
    if (cod >= 48 && cod <= 57) {
        return true;
    } else {
        return false;
    }
}

function verificar(){
    
    if (document.getElementById("cedula").value.length == 10) {
        separarJS();
    }
}

function separarJS() {
    let cedula = document.getElementById("cedula").value;
    let caracteres = cedula.split("");
    let mul = 0;
    let suma = 0;
    let decima = 0;
    let resta = 0;

    for (let i = 0; i < caracteres.length - 1; i++) {
        if (i % 2 == 0) {
            mul = caracteres[i] * 2;
            if (mul > 9) {
                mul = mul - 9;
            }
        } else {
            mul = caracteres[i] * 1;
        }

        suma += mul;
    }

    decima = (Math.floor(suma / 10) + 1) * 10;
    resta = decima - suma;

    if (resta == 10) {
        resta = 0;
    }

    if (resta == caracteres[9]) {
        alert("Cédula valida, ingrese sin problema");
        document.getElementById("btnEnviar").style.display="block";
    } else {
        alert("Cédula invalida, revisar")
    }

}