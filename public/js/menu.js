// MENU

function openmenu() {

    // D-NONE
    $("#navbar-menu-btn").addClass("d-none");
    $("#div-menu-options").removeClass("d-none");


    // BLOQUEAR EL SCROLL
    $("body").css("overflow", "hidden");
}

function closemenu() {

    // ICONOS Y FOTOS

    $("#div-menu-options").addClass("d-none");
    $("#navbar-menu-btn").removeClass("d-none");

    // DESBLOQUEAR EL SCROLL
    $("body").css("overflow", "auto");


}


// BG WHITE
document.addEventListener('DOMContentLoaded', function() {
    const headerPage = document.querySelector('.header-page');

    window.addEventListener('scroll', function() {
        if (window.scrollY > 0) {
            headerPage.style.backgroundColor = 'white';
            const secondaryElements = headerPage.querySelectorAll('.color-coppa-secondary');
            secondaryElements.forEach(function(element) {
                element.classList.remove('color-coppa-secondary');
                element.classList.add('color-coppa-primary');
            });
        } else {
            headerPage.style.backgroundColor = 'transparent';
            const primaryElements = headerPage.querySelectorAll('.color-coppa-primary');
            primaryElements.forEach(function(element) {
                element.classList.remove('color-coppa-primary');
                element.classList.add('color-coppa-secondary');
            });
        }
    });
});

