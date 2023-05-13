function menuShow(){
    let menuMobile = document.querySelector('.celu-menu');
    if (menuMobile.classList.contains('open')){
        menuMobile.classList.remove('open');
        document.querySelector('.icon')
    }
    else{
            menuMobile.classList.add('open')
        }
    }
