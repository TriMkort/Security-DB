function validar(){
     var usuario = document.getElementById('usu').value;
     var pass = document.getElementById('pass').value;
     if (usuario === 0 || usuario == '' ||  pass === 0 || pass == ''){ alert("Hay una casilla vacia");

     }else{ alert("Iniciando Sesion");
     }

}

