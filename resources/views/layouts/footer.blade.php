<footer class="bg-coppa-primary text-light py-5">
    <div class="row w-100">
        <div class="col-md-4 d-flex justify-content-center">
            <div class="d-flex flex-column">
                <a href="{{ route('home') }}"><img src="{{ asset('img/logo.webp') }}" alt="Coppa Cocktails Logo" class="" width="150"></a>
                <p class="ff-Montserrat fw-bold">Coppa Cocktails B.V.</p>
                <p class="ff-Montserrat fw-light">Amsterdam (NL)</p>
                <p class="ff-Montserrat fw-light">&copy; 2021 - Coppa Cocktails B.V.</p>
                <p class="ff-Montserrat fw-bold">Enjoy responsibly</p>
            </div>

        </div>
        <div class="col-md-4 d-flex justify-content-center">
            <div class="links-container">
                <ul class="list-unstyled">
                    <li class="mb-3"><a href="{{ route('home') }}" class="text-decoration-none ff-Montserrat">About us</a></li>
                    <li class="mb-3"><a href="{{ route('home') }}" class="text-decoration-none ff-Montserrat">Our cocktails</a></li>
                    <li class="mb-3"><a href="{{ route('home') }}" class="text-decoration-none ff-Montserrat">What's Happening</a></li>
                    <li class="mb-3"><a href="{{ route('contactPage') }}" class="text-decoration-none ff-Montserrat">Contact</a></li>
                </ul>
            </div>
        </div>
        <div class="col-md-4 d-flex justify-content-center">
            <div class="links-container">
                <ul class="list-unstyled">
                    <li><a href="{{ route('home') }}" class="text-decoration-none ff-Montserrat">Website Terms & Conditions</a></li>
                    <li><a href="{{ route('home') }}" class="text-decoration-none ff-Montserrat">Privacy Statement</a></li>
                    <li><a href="{{ route('home') }}" class="text-decoration-none ff-Montserrat">General Terms & Conditions</a></li>
                    <li class="mt-3 text-decoration-none ff-Montserrat">At Coppa Cocktails we don't support underaged drinking</li>
                    <li class="mt-3">
                        <a class="me-2" href="https://www.instagram.com/coppacocktails/" target="_blank"><img src="{{ asset('img/icons/instagram.svg') }}" alt="" class="" width="20"></a>
                        <a class="me-2" href="https://www.facebook.com/CoppaCocktailsGlobal" target="_blank"><img src="{{ asset('img/icons/facebook.svg') }}" alt="" class="" width="10"></a>
                        <a class="me-2" href="https://www.youtube.com/channel/UC2Fa5bb_ZUqlQFB7R5oQVNg" target="_blank"><img src="{{ asset('img/icons/youtube.webp') }}" alt="" class="" width="20"></a>
                        <a class="me-2" href="https://www.linkedin.com/company/coppa-cocktails/?originalSubdomain=nl" target="_blank"><img src="{{ asset('img/icons/linkedin.svg') }}" alt="" class="" width="20"></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
