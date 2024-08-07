const btnMenu = document.querySelector("#btnmenu");
const menu = document.querySelector("#menu");
btnMenu.addEventListener("click", function(){
    menu.classList.toggle("mostrar");
});
const subMenuBtn = document.querySelectorAll(".submenubtn");
for(let i=0; i < subMenuBtn.length; i++){
    subMenuBtn[i].addEventListener("click", function(){
    });
}

