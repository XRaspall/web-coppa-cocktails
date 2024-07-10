<div id="dark-overlay-modal-div-info-age" class="dark-overlay d-none"></div>

<div id="modal-div-info-age" class="position-fixed align-content-center d-none">
    <div class="container d-flex bg-white">
        <img src="{{ asset('img/modal/modalagetop.webp?version='.config('app.version')) }}" class="img-top-right">
        <div class="mx-auto">
            <div class="d-flex mb-5 pt-3">
                <img width="200" class="mx-auto" src="{{ asset('img/logo.webp?version='.config('app.version')) }}" alt="Logo" title="Logo">
            </div>
            <div class="text-center pt-4">
                <h2 class="text-uppercase color-coppa-primary ff-BarlowCondensedSemiBold">WELCOME</h2>
                <p class="pt-3 quest-modal-age color-coppa-primary ff-Montserrat">Are you of Legal drinking age?</p>
                <div class="pb-5 answer-age-div d-flex justify-content-center">
                    <div class="me-5">
                        <input class="form-check-input" type="radio" name="yesornoModal" id="yesModal">
                        <label class="form-check-label mt-1 text-uppercase color-coppa-primary ff-BarlowCondensedSemiBold" for="yesModal">YES</label>
                    </div>
                    <div class="ms-5">
                        <input class="form-check-input" type="radio" name="yesornoModal" id="noModal">
                        <label class="form-check-label mt-1 text-uppercase color-coppa-primary ff-BarlowCondensedSemiBold" for="noModal">NO</label>
                    </div>
                </div>
                <div class="error-age-not-selected d-none">
                    <p class="text-danger ff-Montserrat">You need to be older than 18 to enter this website</p>
                </div>

                <div class="pb-5 remember-age-div d-flex justify-content-center">
                    <div class="d-flex align-items-center">
                        <input class="form-check-input" type="checkbox" value="" name="rememberAge" id="remember">
                        <label class="form-check-label ms-2 mt-1 color-coppa-primary ff-Montserrat" for="remember">Remember me</label>
                    </div>
                    <button class="color-coppa-primary ff-Montserrat">SUBMIT</button>
                </div>
                <div class="privacity-modal-age pt-5">
                    <div>
                        <p class="ff-Montserrat color-coppa-primary">By accessing our website, you are agreeing to our <a href="/terms-conditions-coppa-cocktails" rel="noopener" target="_blank" class="ff-Montserrat color-coppa-third">Terms and Conditions</a>, <a href="/privacy-statement-coppa-cocktails" rel="noopener" target="_blank" class="ff-Montserrat color-coppa-third">Privacy Policy and Cookie usage.</a> Please do not share or forward to anyone below legal drinking age. 2021 Coppa Cocktails AB. All rights reserved. Imported in the US by Coppa Cocktails US. Boston, MA.</p>
                    </div>

                </div>
            </div>
        </div>
        <img src="{{ asset('img/modal/modalagebottom.webp?version='.config('app.version')) }}" class="img-bottom-left">

    </div>
</div>
