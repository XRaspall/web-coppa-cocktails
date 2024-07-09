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
