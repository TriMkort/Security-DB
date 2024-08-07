var formulario = document.getElementById("form");
var input = document.querySelectorAll('#form input');
var respuesta = document.getElementById("respuesta");

var numero_documento = document.getElementById("numero_documento");
var nombre1 = document.getElementById("nombre1");
var nombre2 = document.getElementById("nombre2");
var apellido1 = document.getElementById("apellido1");
var apellido2 = document.getElementById("apellido2");
var direccion = document.getElementById("direccion");
var fecha = document.getElementById("fecha");
var telefono = document.getElementById("telefono");
var correo = document.getElementById("correo");
console.log("z");
formulario.addEventListener('submit', function validar (e) {
    e.preventDefault();

    var datos = new FormData(formulario);
    console.log(datos);
    fetch('../../Controlador/Registro.php', {
        method: 'POST',
        body: datos
    })

        .then(res => res.json())
        .then(data => {
            console.log(data);
            if (data === 'error') {
                numero_documento.classList.add('alertaroja');
                nombre1.classList.add('alertaroja');
                apellido1.classList.add('alertaroja');
                apellido2.classList.add('alertaroja');
                direccion.classList.add('alertaroja');
                fecha.classList.add('alertaroja');
                telefono.classList.add('alertaroja');
                correo.classList.add('alertaroja');
                respuesta.innerHTML = `
                <div class="alertaroja">
                    Llena todos los campos.
                </div>
                `
            } else if (data === 'error_letras') {
                numero_documento.classList.add('alertaroja');
                telefono.classList.add('alertaroja');
                nombre1.classList.remove('alertaroja');
                nombre2.classList.remove('alertaroja');
                apellido1.classList.remove('alertaroja');
                apellido2.classList.remove('alertaroja');
                direccion.classList.remove('alertaroja');
                fecha.classList.remove('alertaroja');
                correo.classList.remove('alertaroja');
                respuesta.innerHTML = `
                    <div class="alertaroja">
                        El campo tiene letras o simbolos deben ser numeros.
                    </div>
                    `;
            } else if (data === 'error_cantidad') {
                numero_documento.classList.add('alertaroja');
                telefono.classList.add('alertaroja');
                nombre1.classList.remove('alertaroja');
                nombre2.classList.remove('alertaroja');
                apellido1.classList.remove('alertaroja');
                apellido2.classList.remove('alertaroja');
                direccion.classList.remove('alertaroja');
                fecha.classList.remove('alertaroja');
                correo.classList.remove('alertaroja');
                respuesta.innerHTML = `
                    <div class="alertaroja">
                        La cantidad de numeros es de 11.
                    </div>
                    `;
            } else if (data === 'error_numeros') {
                nombre1.classList.add('alertaroja');
                nombre2.classList.add('alertaroja');
                apellido1.classList.add('alertaroja');
                apellido2.classList.add('alertaroja');
                numero_documento.classList.remove('alertaroja');
                direccion.classList.remove('alertaroja');
                fecha.classList.remove('alertaroja');
                telefono.classList.remove('alertaroja');
                correo.classList.remove('alertaroja');
                respuesta.innerHTML = `
                    <div class="alertaroja">
                        El campo tiene numeros o simbolos deben ser letras.
                    </div>
                `;
            } else if (data === 'aceptable') {
                numero_documento.classList.remove('alertaroja');
                nombre1.classList.remove('alertaroja');
                nombre2.classList.remove('alertaroja');
                apellido1.classList.remove('alertaroja');
                apellido2.classList.remove('alertaroja');
                direccion.classList.remove('alertaroja');
                fecha.classList.remove('alertaroja');
                telefono.classList.remove('alertaroja');
                correo.classList.add('alertaroja');
                respuesta.innerHTML = `
                    <div class="alertaroja">
                        El correo no es valido.
                    </div>
                `;
            } else {
                numero_documento.classList.remove('alertaroja');
                nombre1.classList.remove('alertaroja');
                nombre2.classList.remove('alertaroja');
                apellido1.classList.remove('alertaroja');
                apellido2.classList.remove('alertaroja');
                direccion.classList.remove('alertaroja');
                fecha.classList.remove('alertaroja');
                telefono.classList.remove('alertaroja');
                correo.classList.remove('alertaroja');

                if (data === 'validacion_usuario') {
                    respuesta.innerHTML = `
                        <div class="alertaroja">
                            Usuario ya esta en el sistema.
                        </div>
                        `
                } else {
                    respuesta.innerHTML = `
                        <div class="alertaverde">
                            ${data}
                        </div>
                        `
                }
            }



        })

});





/*
function checkExpretionValidationLetter(valorNumber){
    var RegExpLetters = /([a-z]+)/;
    var match = RegExpLetters.exec(valorNumber);

    if(match){
        numero_documento.style.cssText = `
            background-color: #E57373;
            border: 1px solid red;
        `;

        telefono.style.cssText = `
            background-color: #E57373;
            border: 1px solid red;
        `;

    }else if(valorNumber.length >= 11){
        numero_documento.style.cssText = `
            background-color: #E57373;
            border: 1px solid red;
        `;

        telefono.style.cssText = `
            background-color: #E57373;
            border: 1px solid red;
        `;
    }
}

/*

function checkExpretionValidationNumber(){
    var RegExpLetters = /([0-9]+)/;
    var matchLetter = RegExpLetters.exec(valorLetter);

    if(matchLetter){  
    }else{ 
    }
}
*/
