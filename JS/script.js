// DESGIN BACKGROUND LINEAR GRADIENT

if (document.documentElement.scrollHeight > 1100) {
    document.body.style.background = "var(--linear-gradient)";
}

// GESTION BURGER MENU NAVBAR

function openBurger(){
    const burger = document.getElementById('mobile-nav')

    if(burger.style.display == "flex"){
        burger.style.display = "none"
    }
    else{
        burger.style.display = "flex"
    }
}

// GESTION DE MODAL

function openModal(id){
    const modal = document.getElementById('modal-'+id)
    const canvas = document.getElementById('canvas')
    modal.style.display = "flex"
    canvas.style.display = "flex"
}

function closeModal(id){
    const modal = document.getElementById('modal-'+id)
    const main = document.getElementById('main')
    modal.style.display = "none"
    canvas.style.display = "none"
}