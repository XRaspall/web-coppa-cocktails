document.addEventListener('DOMContentLoaded', function () {
    var carousel = new bootstrap.Carousel(document.getElementById('carouselReadyToDrink'), {
        interval: false
    });

    window.toggleAccordion = function (id, index) {
        var element = document.getElementById(id);
        var currentlyShown = element.classList.contains('show');

        if (currentlyShown) {
            return;
        }

        document.querySelectorAll('.accordion-collapse').forEach((collapse) => {
            collapse.classList.remove('show');
        });

        document.querySelectorAll('.accordion-header').forEach((header) => {
            header.classList.remove('active');
        });

        element.classList.add('show');

        document.querySelectorAll('.accordion-header')[index].classList.add('active');

        carousel.to(index);
    };

    document.getElementById('carouselReadyToDrink').addEventListener('slid.bs.carousel', function (event) {
        var index = event.to;
        document.querySelectorAll('.accordion-collapse').forEach((collapse) => {
            collapse.classList.remove('show');
        });

        document.querySelectorAll('.accordion-header').forEach((header) => {
            header.classList.remove('active');
        });

        document.querySelectorAll('.accordion-header')[index].classList.add('active');
        document.querySelectorAll('.accordion-collapse')[index].classList.add('show');
    });
});
