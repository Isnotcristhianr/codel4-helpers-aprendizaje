//ocultar btn
document.getElementById("estiloBtn").style.display = "none";

//validador cedula ecuatoriana
function validador() {
  //capturar
  let cedula = document.getElementById("cedula").value;
  //separar
  let split = cedula.split("");

  //validar
  if (split.length == 10) {
    let indicie = 0;
    let suma = 0;
    let superior = 0;
    let resta = 0;

    for (let i = 0; i < split.length - 1; i++) {
      if (i % 2 == 0) {
        indicie = split[i] * 2;
        if (indicie > 9) {
          indicie = indicie - 9;
        }
      } else {
        indicie = split[i] * 1;
      }

      suma += indicie;
    }

    //superior
    superior = Math.ceil(suma / 10) * 10;
    resta = superior - suma;

    if (resta == split[9]) {
      // alert("Cédula valida, ingrese sin problema");
      document.getElementById("estiloBtn").style.display = "block";
      document.getElementById("estiloBtn").style.alignContent = "center";
      document.getElementById("estiloBtn").style.margin = "auto";
      document.getElementById("estiloBtn").style.marginTop = "10px";
    } else {
      alert("Cédula invalida, revisar");
      document.getElementById("estiloBtn").style.display = "none";
    }
  }
}
