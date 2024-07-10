$(document).ready(function() {

    // MODAL AL CARGAR

    checkStoredVerification();

    $(".modal-backdrop").hide();

    $("#modalInfoAge").modal("show");

    $(".modal-backdrop").fadeIn();

    $(".modal-backdrop").on('click', function(e) {
        if ($(e.target).hasClass('modal-backdrop')) {
            $("#modalInfoAge").modal('hide');
        }
    });

    $("#modalInfoAge").on('hidden.bs.modal', function () {
        $(".modal-backdrop").fadeOut();
        $("body").css("overflow", "");
    });

    // MODAL AL DARLE SUBMIT

    $('#modal-div-info-age button').click(function(e) {
        e.preventDefault();

        var selectedOption = $('input[name=yesornoModal]:checked').attr('id');

        if (selectedOption === 'noModal') {
            window.location.href = 'https://www.responsibility.org/';
        }else if (selectedOption === 'yesModal') {
            var rememberChecked = $('#remember').is(':checked');

            if (rememberChecked) {
                localStorage.setItem('ageVerification', selectedOption);
            } else {
                sessionStorage.setItem('ageVerification', selectedOption);
            }

            $('#modal-div-info-age').hide();
            $('.dark-overlay').hide();
            $("body").css("overflow", "auto");

        } else {
            $(".error-age-not-selected").removeClass("d-none");
        }
    });

});

function checkStoredVerification() {
    var sessionAgeVerification = sessionStorage.getItem('ageVerification');
    var localAgeVerification = localStorage.getItem('ageVerification');

    if ((sessionAgeVerification && sessionAgeVerification !== 'null') || (localAgeVerification && localAgeVerification !== 'null')) {
        $('#modal-div-info-age').hide();
        $('.dark-overlay').hide();
        $("body").css("overflow", "auto");
    } else {
        $('#modal-div-info-age').show();
        $('.dark-overlay').show();
        $("body").css("overflow", "hidden");
        $("#dark-overlay-modal-div-info-age").removeClass("d-none");
        $("#modal-div-info-age").removeClass("d-none");

    }
}
