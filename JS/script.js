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
    const main = document.getElementById('main')

    modal.style.display = "flex"
    canvas.style.display = "flex"
    main.style.pointerEvents = "none"

    document.body.classList.add('modal-open');
}

function closeModal(id){
    const modal = document.getElementById('modal-'+id)
    const canvas = document.getElementById('canvas')
    const main = document.getElementById('main')
    modal.style.display = "none"
    canvas.style.display = "none"
    main.style.pointerEvents = "all"

    document.body.classList.add('modal-open');
}