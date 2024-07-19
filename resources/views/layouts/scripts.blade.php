<script src="{{ asset('js/bootstrap.bundle.min.js?version='.config('app.version')) }}" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script src="{{ asset('js/menu.js?version='.config('app.version')) }}"></script>
<script src="{{ asset('js/custom.js?version='.config('app.version')) }}"></script>
<script src="{{ asset('js/swiper-controllers.js?version='.config('app.version')) }}"></script>
<script src="{{ asset('js/modal.js?version='.config('app.version')) }}"></script>


<!-- Cookie Consent by TermsFeed https://www.TermsFeed.com -->
<script type="text/javascript" src="https://www.termsfeed.com/public/cookie-consent/4.1.0/cookie-consent.js" charset="UTF-8"></script>
<script type="text/javascript" charset="UTF-8">
    document.addEventListener('DOMContentLoaded', function () {
        cookieconsent.run({"notice_banner_type":"simple","consent_type":"implied","palette":"dark","language":"es","page_load_consent_levels":["strictly-necessary","functionality","tracking","targeting"],"notice_banner_reject_button_hide":false,"preferences_center_close_button_hide":false,"page_refresh_confirmation_buttons":false,"website_name":"Coppa Cocktails"});
    });
</script>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        function initObserver(animationClass, element) {
            let options = {
                root: null,
                rootMargin: '0px',
                threshold: 0.5
            };

            let observer = new IntersectionObserver(function (entries, observer) {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.remove('hidden-before-scroll');
                        entry.target.classList.add('animate__animated', animationClass);
                        observer.unobserve(entry.target);
                    }
                });
            }, options);

            observer.observe(element);
        }

        let elements = document.querySelectorAll('.animate-on-scroll');
        elements.forEach(el => {
            el.classList.add('hidden-before-scroll');
            let animationClass = el.getAttribute('data-animation');
            initObserver(animationClass, el);
        });
    });

</script>
