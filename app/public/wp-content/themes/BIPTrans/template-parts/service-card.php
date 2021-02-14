<div class="d-flex flex-column text-color-biptrans-primary mb-3">
    <h4 class="mb-3">
        <?= the_title() ?>
    </h4>
    <div class="mb-3">
        <img src="<?= get_the_post_thumbnail_url() ?>" class="service-image" />
    </div>
    <div class="text-excerpt">

        <?=
        the_excerpt()
        ?>

    </div>
</div>