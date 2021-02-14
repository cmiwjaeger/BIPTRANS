<?php /* Template Name: Services */ ?>

<?= get_header() ?>


<?php

$args = array(
    'post_type' => 'service',
    'post_status' => 'publish',
    'posts_per_page' => 8,
    "orderby’" => 'id',
    "order" => 'ASC'
);


$loop = new WP_Query($args);





?>






<div class="container px-5 py-3 sky-blue">
    <div class="row align-items-center justify-content-center">
        <div class="col-md-12">

            <h3 class="title" style="font-weight: normal;">
                Our <span style="font-weight: bold;">Services</span>
            </h3>
            <div style="width: 100%; border: 1px solid #797979;" class="mb-4"></div>

            <div class="row">
                <div class="col-md-3">
                    asdasd
                </div>
                <div class="col-md-9">
                    <div class="row">


                        <?php
                        while ($loop->have_posts()) : $loop->the_post();
                        ?>
                            <div class="col-12">

                                <?php
                                get_template_part('template-parts/service', 'card');
                                ?>

                            </div>

                        <?php
                        endwhile;
                        wp_reset_postdata();
                        ?>
                    </div>
                </div>

            </div>

            <div style="width: 100%; border: 1px solid #797979;" class="mb-4"></div>

        </div>

    </div>
</div>











<?= get_footer() ?>