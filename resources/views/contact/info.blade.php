<section class="section py-5 info-container">
    <div class="container">
        <div class="row w-100">
            <div class="col-12 py-5 text-container animate-on-scroll" data-animation="animate__slideInUp">
                <p class="ff-Montserrat color-coppa-primary">Become a part of the Coppa Cocktails Community. Are you a consumer, reseller, collaborator, or a cocktail lover with questions?</p>
                <p class="ff-Montserrat color-coppa-primary">Get in touch!</p>
            </div>
            <div class="col-12 col-md-6 pb-5 d-flex flex-column animate-on-scroll" data-animation="animate__slideInUp">
                <h1 class="color-coppa-primary ff-BarlowCondensedMedium">MARKETING</h1>
                <p class="ff-Montserrat color-coppa-primary mb-5">Do you have any questions regarding marketing, partnerships, sponsorships, collaborations or press?</p>
                <a class="ff-Montserrat color-coppa-primary fw-bold text-decoration-none mb-5" href="mailto:marketing@coppacocktails.com">marketing@coppacocktails.com</a>
                <a class=""><button class="message-button ff-Montserrat" data-toggle="modal" data-target="#exampleModalCenter">SEND US A MESSAGE</button></a>
            </div>
            <div class="col-12 col-md-6 pb-5 d-flex flex-column animate-on-scroll" data-animation="animate__slideInUp">
                <h1 class="color-coppa-primary ff-BarlowCondensedMedium">SALES</h1>
                <p class="ff-Montserrat color-coppa-primary mb-5">Do you have a company and would you like to contact Coppa Cocktails about our products? Or are you already a customer and do you still have a question?</p>
                <a class="ff-Montserrat color-coppa-primary fw-bold text-decoration-none mb-5" href="mailto:sales@coppacocktails.com">sales@coppacocktails.com</a>
                <a class=""><button class="message-button ff-Montserrat" data-toggle="modal" data-target="#exampleModalCenter">SEND US A MESSAGE</button></a>
            </div>
            <div class="col-12 col-md-6 pt-5 d-flex flex-column animate-on-scroll" data-animation="animate__slideInUp">
                <h1 class="color-coppa-primary ff-BarlowCondensedMedium">CONSUMER AND OTHER QUESTIONS</h1>
                <p class="ff-Montserrat color-coppa-primary mb-5">Do you have general inquiries about our products or services?</p>
                <a class="ff-Montserrat color-coppa-primary fw-bold text-decoration-none mb-5" href="mailto:info@coppacocktails.com">info@coppacocktails.com</a>
                <a class=""><button class="message-button ff-Montserrat" data-toggle="modal" data-target="#exampleModalCenter">SEND US A MESSAGE</button></a>
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
                        <h5 class="modal-title ff-BarlowCondensedSemiBold">SEND US A MESSAGE</h5>

                    </div>
                    <form class="mx-3 mx-md-5 pt-4">
                        <div class="row my-3">
                            <div class="col-12 col-md-6 form-group">
                                <label for="firstName" class="ff-Montserrat">First name*</label>
                                <input type="text" class="form-control ff-Montserrat" id="firstName" required>
                            </div>
                            <div class="col-12 col-md-6 form-group">
                                <label for="lastName" class="ff-Montserrat">Last name*</label>
                                <input type="text" class="form-control ff-Montserrat" id="lastName" required>
                            </div>
                            <div class="col-12 form-group my-3">
                                <label for="email" class="ff-Montserrat">Email*</label>
                                <input type="email" class="form-control ff-Montserrat" id="email" required>
                            </div>
                            <div class="col-12 form-group my-3">
                                <label for="companyName" class="ff-Montserrat">Company name</label>
                                <input type="text" class="form-control ff-Montserrat" id="companyName">
                            </div>
                            <div class="col-12 form-group my-3">
                                <label for="countryRegion" class="ff-Montserrat">Country/Region</label>
                                <input type="text" class="form-control ff-Montserrat" id="countryRegion">
                            </div>
                            <div class="col-12 form-group my-3">
                                <label for="mobilePhoneNumber" class="ff-Montserrat">Mobile phone number</label>
                                <input type="text" class="form-control ff-Montserrat" id="mobilePhoneNumber">
                            </div>
                            <div class="col-12 form-group my-4">
                                <label for="message" class="ff-Montserrat">Message</label>
                                <textarea class="form-control ff-Montserrat" id="message" rows="7"></textarea>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end">
                            <img class="modal-flowers-bottom position-absolute" alt="" src="{{ asset('img/contact/modal-flowers-bottom.webp') }}">
                            <div>
                                <div class="text-end">
                                    <button type="submit" class="message-button ff-Montserrat">SUBMIT</button>
                                </div>
                                <div class="text-end mt-5">
                                    <a href="#" class="cancel-button ff-Montserrat" data-dismiss="modal">CANCEL</a>
                                </div>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



