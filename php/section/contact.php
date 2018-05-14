<section class="resume-section p-3 p-lg-5 d-flex flex-column" id="contact">
    <div class="my-auto">
        <h2 class="mb-5">Kontakt</h2>
        <div class="row">
            <div class="col-lg-12 text-center">
                <h3 class="section-subheading text-muted">Napisz do mnie!</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <form name="sentMessage" id="contactForm" novalidate="">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="text" class="form-control otherarea" placeholder="Twoje Imie *" id="name" required="" data-validation-required-message="Prosze wprowadzić swoje imie." aria-invalid="false">
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control otherarea" placeholder="Twoj Email *" id="email" required="" data-validation-required-message="Poszę wprowadzić swój adres email.">
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <input type="tel" class="form-control otherarea" placeholder="Twoj Telefon *" id="phone" required="" data-validation-required-message="Proszę wprowadzić swój numer telefonu.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="form-group">
                                <textarea class="form-control textarea" placeholder="Twoja Wiadomość *" id="message" required="" data-validation-required-message="Proszę wprowadzić wiadomość."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-lg-12 text-center">
                            <div id="success"></div>
                            <button type="submit" class="btn btn-xl">Wyślij wiadomość</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
</section>
