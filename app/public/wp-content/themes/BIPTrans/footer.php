<div class="footer  footer-color py-4">
    <div class="container px-5">
        <div class="row">
            <div class="col-6 col-md-2  d-flex flex-column ">
                <div>Browse Pages</div>
                <div>Home</div>
                <div>About Us</div>
                <div>Services</div>
                <div>Destination</div>
                <div>News</div>
                <div>Career</div>

            </div>
            <div class="col-6 col-md-2 d-flex flex-column justify-content-md-center align-items-center">
                <div>
                    <img src="<?= get_template_directory_uri() . '/assets/icons/office-icon.png' ?>" alt="">
                </div>
                <div class="text-center">
                    PT. BIP Trans
                </div>
                <div class="text-center">Jl. Pulomas III F No. 6, Jakarta Timur 13210
                </div>
            </div>
            <div class="col-12 col-md-4 d-flex flex-column justify-content-between ">
                <div class="row">
                    <div class="col-6 d-flex flex-column justify-content-center align-items-center">
                        <div class="text-center">
                            Customer Care
                        </div>
                        <div class="text-center">
                            <?= get_theme_mod('bip-footer-callout-cs') ?>
                        </div>
                    </div>
                    <div class="col-6 d-flex flex-column justify-content-center align-items-center">
                        <div class="text-center">
                            Operations
                        </div>
                        <div class="text-center">
                            <?= get_theme_mod('bip-footer-callout-operation') ?>
                        </div>
                    </div>
                </div>


                <div class="row mt-3">
                    <div class="col-md-6 d-flex flex-column justify-content-center align-items-center">
                        <div class="text-center">
                            E-Mail
                        </div>
                        <div class="text-center">
                            <?= get_theme_mod('bip-footer-callout-email') ?>
                        </div>
                    </div>
                    <div class=" col-md-6 d-flex flex-column justify-content-center align-items-center">
                        <div class="text-center">
                            Telephone
                        </div>
                        <div class="text-center">+
                            <?= get_theme_mod('bip-footer-callout-telephone') ?>
                        </div>
                    </div>
                </div>



            </div>

            <div class="col d-flex flex-column justify-content-between">
                <div>
                    Subscribte Newsletter
                </div>
                <div style="font-size:0.7em">
                    Keep updated for new releases and information.
                    Please enter your email and susbcribe to our newsletter
                </div>
                <div class="input-group input-group-sm">
                    <input type="text" class="form-control" placeholder="Your Email address here" aria-label="Recipient's username" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <span class="input-group-text" id="basic-addon2">Subscribe</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container px-5" style="background-color: #0C91D2;">
        <div class="row my-3">
            <div class="col-12">
                <?= get_theme_mod('bip-footer-callout-cs') ?>
            </div>

        </div>
    </div>
</div>

</div>
<?= wp_footer() ?>
</body>

</html>