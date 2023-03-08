let click_events = 1;
function clique_explorar(){
    if(click_events == 1){
        document.getElementById('dropdown_explorar_girar').classList.add("girar_dropdown");
        click_events=2;
    }else if(click_events == 2){
        document.getElementById('dropdown_explorar_girar').classList.remove("girar_dropdown");
        click_events = 1;
    }
}

let click_perfil = 1;
function clique_perfil(){
    if(click_perfil == 1){
        document.getElementById('dropdown_perfil_girar').classList.add("girar_dropdown");
        click_perfil=2;
    }else if(click_perfil == 2){
        document.getElementById('dropdown_perfil_girar').classList.remove("girar_dropdown");
        click_perfil = 1;
    }
}