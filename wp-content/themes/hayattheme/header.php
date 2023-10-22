<!doctype html>

<html>
    <head>
    <title><?php bloginfo('name'); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <?php wp_head(); ?>

    </head>

    <body>
        
    <nav id="main-nav">
        <div class="container">
            <a href="<?php echo site_url() ?>" class="logo">
                <?php bloginfo('name') ?>
             </a>
            <?php wp_nav_menu(array(
                    'theme_location' => 'main-menu',
                ));
            ?>
            
        </div>

    </nav>