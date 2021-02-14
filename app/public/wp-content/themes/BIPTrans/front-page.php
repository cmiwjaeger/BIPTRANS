<?php /* Template Name: Front Page */ ?>

<?= get_header() ?>



<div class="container p-5 text-white" style='
        display:flex;
        flex-direction:column;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/cargo.png);
        min-height: 90vh;
        position: relative;
        justify-content:space-between;
        '>

    <div class="row">
        <div class="col-md-4 ">
            <h3>Ekspedisi Terpercaya
                Sejak 1990</h3>
            <p class="mt-4">BIP Trans menyediakan ekspedisi
                via darat, laut maupun udara.
                Mengantarkanbarang anda dengan
                cepat dan aman.</p>
        </div>

    </div>
    <div class="row">
        <div class="col-md-5">
            <div class="rect white">
                <div class="accent"></div>
                <h4 class="title">
                    Lorem ipsum dolor sit amet
                </h4>
                <div class="desc">
                    What We Do
                    consectetur adipisicing elit. Dolor, praesentium numquam nihil minima vitae quaerat perspiciatis est excepturi quod illo porro rerum cupiditate sequi facilis iste sapiente unde nostrum assumenda!
                </div>
            </div>
        </div>
    </div>
</div>




<div class="container px-5 py-3">
    <div class="row align-items-center">
        <div class="col-md-5">
            <img width="400" height="200" src="<?= get_template_directory_uri() . '/assets/images/shipper.png' ?>" class="img-thumbnail" />
        </div>
        <div class="col">

            <h3 class="title" style="font-weight: normal;">
                They’ve <span style="font-weight: bold;">trusted</span> us, are you next?
            </h3>
            <div class="d-flex justify-content-between flex-wrap">
                <div class="d-inline-flex flex-column align-items-center">
                    <img src="https://via.placeholder.com/100" alt="">
                    <div class="mt-3">
                        <span>PT. Sultan</span>
                    </div>
                </div>
                <div class="d-inline-flex flex-column align-items-center">
                    <img src="https://via.placeholder.com/100" alt="">
                    <div class="mt-3">
                        <span>PT. Sultan</span>
                    </div>
                </div>
                <div class="d-inline-flex flex-column align-items-center">
                    <img src="https://via.placeholder.com/100" alt="">
                    <div class="mt-3">
                        <span>PT. Sultan</span>
                    </div>
                </div>
                <div class="d-inline-flex flex-column align-items-center">
                    <img src="https://via.placeholder.com/100" alt="">
                    <div class="mt-3">
                        <span>PT. Sultan</span>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>











<?= get_footer() ?>