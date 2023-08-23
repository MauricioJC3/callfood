//evento click
document.getElementById("btn_open").addEventListener("click", open_close_menu);

//ejecutar funciom clicl

var side_menu = document.getElementById("menu__side");
var btn_open = document.getElementById("btn_open");
var body = document.getElementById("body");

//evento pra mostrar y ocultarv menu

function open_close_menu(){
    body.classList.toggle("body_move");
    side_menu.classList.toggle("menu__side_move");
}

//si el ancho de la pagina es menor a 760px, ocultar el menu

if (window.innerWidth < 760){
    body.classList.add("body_move");
    side_menu.classList.add("menu__side_move");
}

//haciedo el menu respomsive(adaptable)

window.addEventListener("resize", function(){
if(this.window.innerWidth > 760){

    body.classList.remove("body_move");
    side_menu.classList.remove(menu__side_move);
}

if(this.window.innerWidth < 760){
    
    body.classList.add("body_move");
    side_menu.classList.add("menu__side_move");
}

});








//Buscador de contenido}

//ejecutando funciones
document.getElementById("icon-search").addEventListener("click", mostrar_buscador);
document.getElementById("cover-ctn-search").addEventListener("click", ocultar_buscador);

//declarando variables

bars_search = document.getElementById("ctn-bars-search");
cover_ctn_search = document.getElementById("cover-ctn-search");
inputSearch = document.getElementById("inputSearch");
box_search = document.getElementById("box-search");

//funcion para mostrar el buscador

function mostrar_buscador(){

    bars_search.style.top = "80px";
    cover_ctn_search.style.display = "block";
    inputSearch.focus();

    if (inputSearch.value === ""){
        box_search.style.display = "none";
    }


}

//funcion oara oicultar el buscador

function ocultar_buscador(){

    bars_search.style.top = "-10px";
    cover_ctn_search.style.display = "none";
    inputSearch.value = "";
    box_search.style.display = "none";

}



// filtrado de busqueda

document.getElementById("inputSearch").addEventListener("keyup", buscador_interno);




function buscador_interno(){

    filtro = inputSearch.value.toUpperCase();
    li = box_search.getElementsByTagName("li");

    //recorriendo elementos a filtarar mediante los li

    for (i = 0; i < li.length; i++){

        a = li[i].getElementsByTagName("a")[0];
        textValue = a.textContent || a.innerText;

        if(textValue.toUpperCase().indexOf(filtro) > -1){
            
            li[i].style.display = "";
            box_search.style.display = "block";

            if(inputSearch.value === ""){
                box_search.style.display = "none";
            }

        }else{
            li[i].style.display = "none";
        }
    }

}