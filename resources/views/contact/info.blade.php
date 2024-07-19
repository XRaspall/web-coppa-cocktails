<section class="section py-5 info-container">
    <div class="container">
        <div class="row w-100">
            <div class="col-12 py-5 text-container animate-on-scroll" data-animation="animate__slideInUp">
                <p class="ff-Montserrat color-coppa-primary">{{ __('contact.info.text1') }}</p>
                <p class="ff-Montserrat color-coppa-primary">{{ __('contact.info.text2') }}</p>
            </div>
            <div class="col-12 col-md-6 pb-5 d-flex flex-column animate-on-scroll" data-animation="animate__slideInUp">
                <h1 class="color-coppa-primary ff-BarlowCondensedMedium">{{ __('contact.info.contact1title') }}</h1>
                <p class="ff-Montserrat color-coppa-primary mb-5">{{ __('contact.info.contact1text') }}</p>
                <a class="ff-Montserrat color-coppa-primary fw-bold text-decoration-none mb-5" href="mailto:marketing@coppacocktails.com">marketing@coppacocktails.com</a>
                <a class=""><button class="message-button ff-Montserrat open-send-message" data-toggle="modal" data-target="#exampleModalCenter" data-email="marketing">{{ __('contact.info.btn') }}</button></a>
            </div>
            <div class="col-12 col-md-6 pb-5 d-flex flex-column animate-on-scroll" data-animation="animate__slideInUp">
                <h1 class="color-coppa-primary ff-BarlowCondensedMedium">{{ __('contact.info.contact2title') }}</h1>
                <p class="ff-Montserrat color-coppa-primary mb-5">{{ __('contact.info.contact2text') }}</p>
                <a class="ff-Montserrat color-coppa-primary fw-bold text-decoration-none mb-5" href="mailto:sales@coppacocktails.com">sales@coppacocktails.com</a>
                <a class=""><button class="message-button ff-Montserrat open-send-message" data-toggle="modal" data-target="#exampleModalCenter" data-email="sales">{{ __('contact.info.btn') }}</button></a>
            </div>
            <div class="col-12 col-md-6 pt-5 d-flex flex-column animate-on-scroll" data-animation="animate__slideInUp">
                <h1 class="color-coppa-primary ff-BarlowCondensedMedium">{{ __('contact.info.contact3title') }}</h1>
                <p class="ff-Montserrat color-coppa-primary mb-5">{{ __('contact.info.contact3text') }}</p>
                <a class="ff-Montserrat color-coppa-primary fw-bold text-decoration-none mb-5" href="mailto:info@coppacocktails.com">info@coppacocktails.com</a>
                <a class=""><button class="message-button ff-Montserrat open-send-message" data-toggle="modal" data-target="#exampleModalCenter" data-email="info">{{ __('contact.info.btn') }}</button></a>
            </div>
        </div>
    </div>
</section>

<div class="modal fade position-fixed align-content-center" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="container d-flex justify-content-center">
        <div class="modal-dialog modal-dialog-centered mx-0 mw-100" role="document">
            <div class="modal-content p-0">
                <div class="d-flex justify-content-between w-100">
                    <img class="modal-flowers-top" alt="" src="{{ asset('img/contact/modal-flowers-top.webp') }}">
                    <div class="p-2">
                        <svg id="closeModal" data-dismiss="modal" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" style="cursor: pointer;">
                            <line x1="1" y1="1" x2="23" y2="23" stroke="black" stroke-width="2"/>
                            <line x1="23" y1="1" x2="1" y2="23" stroke="black" stroke-width="2"/>
                        </svg>
                    </div>
                </div>

                <div class="px-0 px-md-5 pb-5 mt-form-custom">
                    <div class="text-center">
                        <h5 class="modal-title ff-BarlowCondensedSemiBold">{{ __('contact.info.modal.title') }}</h5>
                    </div>
                    <form class="mx-3 mx-md-5 pt-4" action="{{ route('contactSendName') }}" method="post">
                        @csrf
                        <input type="hidden" id="contactEmail" name="contactEmail" value="">
                        <div class="row my-3">
                            <div class="col-12 col-md-6 form-group">
                                <label class="ff-Montserrat">{{ __('contact.info.modal.label1') }}</label>
                                <input type="text" class="form-control ff-Montserrat" name="name" required>
                            </div>
                            <div class="col-12 col-md-6 form-group">
                                <label class="ff-Montserrat">{{ __('contact.info.modal.label2') }}</label>
                                <input type="text" class="form-control ff-Montserrat" name="surnames" required>
                            </div>
                            <div class="col-12 form-group my-3">
                                <label for="email" class="ff-Montserrat">{{ __('contact.info.modal.label3') }}</label>
                                <input type="email" class="form-control ff-Montserrat" name="email" required>
                            </div>
                            <div class="col-12 form-group my-3">
                                <label class="ff-Montserrat">{{ __('contact.info.modal.label4') }}</label>
                                <input type="text" class="form-control ff-Montserrat" name="company">
                            </div>
                            <div class="col-12 form-group my-3">
                                <label class="ff-Montserrat">{{ __('contact.info.modal.label5') }}</label>
                                <input type="text" class="form-control ff-Montserrat" name="country">
                            </div>
                            <div class="col-12 form-group my-3">
                                <label class="ff-Montserrat">{{ __('contact.info.modal.label6') }}</label>
                                <input type="text" class="form-control ff-Montserrat" name="phone">
                            </div>
                            <div class="col-12 form-group my-4">
                                <label class="ff-Montserrat">{{ __('contact.info.modal.label7') }}</label>
                                <textarea class="form-control ff-Montserrat" name="message" rows="7"></textarea>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end">
                            <img class="modal-flowers-bottom position-absolute" alt="" src="{{ asset('img/contact/modal-flowers-bottom.webp') }}">
                            <div>
                                <div class="text-end">
                                    <button type="submit" class="message-button ff-Montserrat">{{ __('contact.info.modal.submit') }}</button>
                                </div>
                                <div class="text-end mt-5">
                                    <a href="#" class="cancel-button ff-Montserrat" data-dismiss="modal">{{ __('contact.info.modal.cancel') }}</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div><div class="modal fade position-fixed align-content-center" id="successModal" tabindex="-1" role="dialog" aria-labelledby="successModalTitle" aria-hidden="true">
    <div class="container d-flex justify-content-center">
        <div class="modal-dialog modal-dialog-centered mx-0 mw-100 w-75" role="document">
            <div class="modal-content p-0">
                <div class="d-flex justify-content-between w-100">
                    <img class="modal-flowers-top" alt="" src="{{ asset('img/contact/modal-flowers-top.webp') }}">
                    <div class="p-2">
                        <svg id="closeSuccessModal" data-dismiss="modal" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" style="cursor: pointer;">
                            <line x1="1" y1="1" x2="23" y2="23" stroke="black" stroke-width="2"/>
                            <line x1="23" y1="1" x2="1" y2="23" stroke="black" stroke-width="2"/>
                        </svg>
                    </div>
                </div>

                <div class="px-0 px-md-5 pb-5">
                    <div class="text-center">
                        <h5 class="modal-title ff-BarlowCondensedSemiBold">{{ __('contact.info.success.title') }}</h5>
                    </div>
                    <div class="mx-3 mx-md-5 pt-4 text-center">
                        <p class="ff-Montserrat">{{ __('contact.info.success.message') }}</p>
                        <div class="text-end mt-5">
                            <a href="#" class="cancel-button ff-Montserrat" data-dismiss="modal">{{ __('contact.info.success.close') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>





