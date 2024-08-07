const mensage = document.getElementById("mensage");

function mensageValid(){
    const mensageValue = mensage.Value.trim();

    mensageValue.innerHTML = 'hola los registros se haran de manera legal.';
    mensageValue.style.color = '#FF0000';
}


