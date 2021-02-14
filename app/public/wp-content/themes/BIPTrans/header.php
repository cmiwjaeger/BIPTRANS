<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <?= wp_head() ?>
</head>

<body>

    <div class="container content">
        <nav class="navbar navbar-expand-lg navbar-dark my-navbar p-0">
            <div class="container px-5">
                <a class="navbar-brand" href="<?= get_page_link(get_page_by_title('Home')->ID) ?>">
                    <img height="60" src="<?= wp_get_attachment_image_src(24, '', true)[0] ?>" />
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="<?= get_page_link(get_page_by_title('About Us')->ID) ?>">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= get_page_link(get_page_by_title('Services')->ID) ?>">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= get_page_link(get_page_by_title('Routes')->ID) ?>">Routes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Hubungi Kami</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">News</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Career</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>