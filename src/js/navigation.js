document.addEventListener('DOMContentLoaded', function(e){
    navBehavior();
});

function navBehavior(){
    const hamburguesa = document.querySelector('.hamburguer');
    const listado = document.querySelector('.listado-navegacion');
    hamburguesa.addEventListener('click',()=>{
        hamburguesa.classList.toggle('activo');
        listado.classList.toggle('activo-listado');
    })

}