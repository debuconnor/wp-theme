<!DOCTYPE html>
<html <?= language_attributes() ?>>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= bloginfo('name') ?></title>
    <?= wp_head() ?>
</head>
<body <?= body_class() ?>>    
    <div class="container">
        <header>
            <div class="nav-wrapper">
                <a href="<?= get_home_url() ?>/">
                <?php 
                    if(function_exists('the_custom_logo')){
                        the_custom_logo();
                    }
                ?>
                </a>
                <nav class="clearfix">
                    <?php
                        $args = array(
                            'theme_location' => 'primary'
                        )
                    ?>
                    <?= wp_nav_menu($args) ?>
                </nav>
            </div>
        </header>