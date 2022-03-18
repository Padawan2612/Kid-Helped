
function registrarse () {
    window.location = '../Indexs/registro.html';
}






































/*///////////////////////////////////////////////////////////////////////////////////////////////////*/
/*guardamos los datos del registro (creamos un usuario)*/
/*
const expresiones = {
  nickname: /^[a-zA-Z0-9\_\-]{6,16}$/, //letras, numeros, guion y guion_bajo
  name: /^[a-zA-Z0-9À-ÿ\s]{1,40}$/, //letras y espacios, pueden llevar acentos
  lastName: /^[a-zA-Z0-9À-ÿ\s]{1,40}$/, //letras y espacios, pueden llevar acentos
  age: /^[0-9]{2}$/,
  password: /^.{4,12}$/, //4 a 12 digitos
  gmail: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
};

const inputs = document.querySelectorAll("#form_container_id input");

const verifircar__input = (e) => {
  switch (e.target.name) {
    case "nickname__iniciar__session":
      verificar__campo(expresiones.nickname, e.target.name, "nickname__iniciar__session");
      console.log(e.target.name);
      break;

    case "clave__iniciar__session":
      verificar__campo(expresiones.name, e.target.name, "clave__iniciar__session");
      //const nombre = document.getElementById("clave__iniciar__session").value;
      //console.log(expresiones.nombre.test(nombre));
      break;
    default:
      break;
  }
};

const verificar__campo = (expresion, input, campo) => {
  if (expresion.test(input.value)) {
      document.getElementById(`${campo}`).classList.add("correcto");
    document.getElementById(`${campo}`).classList.remove("incorrecto");

    //console.log("correcto");
  } else {
      document.getElementById(`${campo}`).classList.add("incorrecto");
    document.getElementById(`${campo}`).classList.remove("correcto");

    //console.log("in_correcto");
  }
};

inputs.forEach((input) => {
  input.addEventListener("keyup", verifircar__input);
  input.addEventListener("blur ", verifircar__input);
});
*/