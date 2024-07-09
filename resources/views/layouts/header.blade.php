{{-- PC HEADER --}}
<nav id="header-navbar" class="d-none d-xl-block navbar navbar-expand-lg navbar-light bg-transparent fixed-top px-5 header-page">
    <div class="container-fluid">
        <a class="navbar-brand ms-5" href="{{ route('home') }}">
            <img src="{{ asset('img/logo.webp?version='.config('app.version')) }}" alt="Logo" title="Logo">
        </a>
        <div class="collapse navbar-collapse justify-content-center">
            <ul class="navbar-nav text-white">
                <li class="nav-item">
                    <a class="nav-link color-coppa-secondary ff-Montserrat" aria-current="page" href="#">ABOUT US</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link color-coppa-secondary ff-Montserrat" href="#">OUR COCKTAILS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link color-coppa-secondary ff-Montserrat" href="#">CONTACT</a>
                </li>
            </ul>
        </div>
        <div class="dropdown div-dropdown-navbar">
            <button class="btn bg-transparent dropdown-toggle color-coppa-secondary border-0 position-relative " type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                @if(app()->getLocale() === 'en') GLOBAL @elseif(app()->getLocale() === 'de') GERMANY @elseif(app()->getLocale() === 'en-us') USA @endif
                <svg class="current-language-icon ms-2" width="14" height="8" viewBox="0 0 14 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6.99999 5.17192L11.95 0.221924L13.364 1.63592L6.99999 7.99992L0.635986 1.63592L2.04999 0.221924L6.99999 5.17192Z"></path>
                </svg>
            </button>
            <ul class="dropdown-menu dropdown-menu-end z-1" aria-labelledby="dropdownMenuButton">
                @foreach(['en' => 'GLOBAL' , 'de' => 'GERMANY', 'en-us' => 'USA'] as $key => $lang)
                    @if(app()->getLocale() === $key)
                    @else
                        <li><a class="dropdown-item bg-transparent ps-2 color-coppa-primary ff-Montserrat" href="/lang/{{$key}}">{{ $lang }}</a></li>
                    @endif
                @endforeach
            </ul>
        </div>
    </div>
</nav>

{{-- PHONE HEADER --}}
<nav id="header-navbar-phone" class="d-block d-xl-none pt-0 navbar navbar-expand-lg navbar-light bg-transparent fixed-top header-page">

    {{--  NAVBAR PHONE --}}
    <div id="navbar-menu-btn" class="d-flex justify-content-between">
        <a class="navbar-brand" href="{{ route('home') }}">
            <img width="20" src="{{ asset('img/logo.webp?version='.config('app.version')) }}" alt="Logo" title="Logo">
        </a>
        <div class="align-content-center">
            <a class="text-decoration-none text-white ff-Montserrat" onclick="openmenu()">
                <span class="me-3">MENU</span>
                <svg width="40" height="48" xmlns="http://www.w3.org/2000/svg">
                    <line x1="0" y1="20" x2="20" y2="20" stroke="white" stroke-width="2"/>
                    <line x1="0" y1="27" x2="20" y2="27" stroke="white" stroke-width="2"/>
                </svg>
            </a>
        </div>
    </div>

    {{-- MENU PHONE--}}
    <div id="div-menu-options" class="menu-phone-div bg-coppa-primary vh-100 vw-100 z-3 d-none">
        <div class="text-end py-5 pe-5">
            <svg width="40" height="40" xmlns="http://www.w3.org/2000/svg" onclick="closemenu()">
                <line x1="10" y1="10" x2="33" y2="33" stroke="#FAF1E1" stroke-width="3"/>
                <line x1="33" y1="10" x2="10" y2="33" stroke="#FAF1E1" stroke-width="3"/>
            </svg>
        </div>

        <div class="text-secondary ff-Montserrat p-3 options-menu-div-phone">
            <a class="text-decoration-none color-coppa-secondary">ABOUT US</a>
            <hr class="color-coppa-secondary">
            <a class="text-decoration-none color-coppa-secondary">OUR COCKTAILS</a>
            <hr class="color-coppa-secondary">
            <a class="text-decoration-none color-coppa-secondary">CONTACT</a>
            <hr class="color-coppa-secondary">
        </div>

        <div class="px-2 d-flex options-menu-lang-phone">
            @foreach(['en' => 'GLOBAL' , 'de' => 'GERMANY', 'en-us' => 'USA'] as $key => $lang)
                <a class="dropdown-item bg-transparent ps-2 color-coppa-secondary ff-Montserrat {{ app()->getLocale() === $key ? 'text-decoration-underline' : '' }}" href="/lang/{{$key}}">{{ $lang }}</a>
            @endforeach

        </div>
    </div>
</nav>
