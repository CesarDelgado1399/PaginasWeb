const mostrar = document.getElementById("aparecer");
const agregar = document.getElementById("btnAgregar");
const bajar = document.getElementById("bajar");
console.log(agregar.style);

let bandera = true;
agregar.addEventListener("click", () => {
  mostrar.style.heigth = "40vh";
  mostrar.style.display = "block";
  bajar.style.height = "60vh";
  agregar.innerHTML="Cancelar";

  if (!bandera) {
    /*ingresar datos */
    mostrar.style.display = "none";
    /*mostrar datos */
    bajar.style.height = "100vh";
    /*Cambiar valor al boton */
    agregar.innerHTML="Agregar Alumno";
    bandera = true;
  } else {
    bandera = false;
  }
});
