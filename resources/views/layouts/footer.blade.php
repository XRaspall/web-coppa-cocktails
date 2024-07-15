<footer class="bg-coppa-primary text-light py-5">
    <div class="row w-100 mt-5">
        <div class="col-md-4 d-flex justify-content-center">
            <div class="d-flex flex-column">
                <a href="{{ route('home') }}"><img src="{{ asset('img/logo.webp') }}" alt="{{ __('footer.logo_alt') }}" class="mb-5" width="150"></a>
                <p class="ff-Montserrat fw-bold">{{ __('footer.company_name') }}</p>
                <p class="ff-Montserrat fw-light">{{ __('footer.location') }}</p>
                <p class="ff-Montserrat fw-light">&copy; {{ __('footer.copyright') }}</p>
                <p class="ff-Montserrat fw-bold">{{ __('footer.responsibility_message') }}</p>
            </div>
        </div>
        <div class="col-md-4 d-flex justify-content-center">
            <div class="links-container">
                <ul class="list-unstyled">
                    <li class="mb-4"><a href="{{ route('home') }}" class="text-decoration-none ff-Montserrat">{{ __('footer.about_us') }}</a></li>
                    <li class="mb-4"><a href="{{ route('ourCocktailsPage') }}" class="text-decoration-none ff-Montserrat">{{ __('footer.our_cocktails') }}</a></li>
                    <li class="mb-4"><a href="{{ route('home') }}" class="text-decoration-none ff-Montserrat">{{ __('footer.whats_happening') }}</a></li>
                    <li class="mb-4"><a href="{{ route('contactPage') }}" class="text-decoration-none ff-Montserrat">{{ __('footer.contact') }}</a></li>
                </ul>
            </div>
        </div>
        <div class="col-md-4 d-flex justify-content-center">
            <div class="links-container">
                <ul class="list-unstyled">
                    <li><a href="{{ route('home') }}" class="text-decoration-none ff-Montserrat">{{ __('footer.website_terms') }}</a></li>
                    <li><a href="{{ route('home') }}" class="text-decoration-none ff-Montserrat">{{ __('footer.privacy') }}</a></li>
                    <li><a href="{{ route('home') }}" class="text-decoration-none ff-Montserrat">{{ __('footer.general_terms') }}</a></li>
                    <li class="mt-3 text-decoration-none ff-Montserrat">{{ __('footer.advice') }}</li>
                    <li class="mt-3">
                        <a class="me-2" href="https://www.instagram.com/coppacocktails/" target="_blank"><img src="{{ asset('img/icons/instagram.svg') }}" alt="Instagram" class="" width="20"></a>
                        <a class="me-2" href="https://www.facebook.com/CoppaCocktailsGlobal" target="_blank"><img src="{{ asset('img/icons/facebook.svg') }}" alt="Facebook" class="" width="10"></a>
                        <a class="me-2" href="https://www.youtube.com/channel/UC2Fa5bb_ZUqlQFB7R5oQVNg" target="_blank"><img src="{{ asset('img/icons/youtube.webp') }}" alt="Youtube" class="" width="20"></a>
                        <a class="me-2" href="https://www.linkedin.com/company/coppa-cocktails/?originalSubdomain=nl" target="_blank"><img src="{{ asset('img/icons/linkedin.svg') }}" alt="Linkedin" class="" width="20"></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
