<?php
global $sTemplateURL;
$sTemplateURL = get_template_directory_uri();
?>
<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7">
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8">
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="<?php echo $sTemplateURL ?>/images/favicon.ico">
    <link href="<?php echo $sTemplateURL ?>/css/styles.min.css" rel="stylesheet">
    <title><?php
        wp_title('|', true, 'right');
        bloginfo('name');
        $site_description = get_bloginfo('description', 'display');
        if ($site_description && ( is_home() || is_front_page() ))
            echo " | $site_description";
        ?></title>
    <?php wp_head(); ?>
    <?php get_template_part('seo-general') ?>
</head>
<body <?php body_class(); ?>>
<a href="#top" title="Back to top" class="back-to-top"><i class="fa fa-arrow-up"></i></a>
<header class="site-header">
    <div class="container">
        <div class="row">
            <div class="col-md-4 header-left">
                <img src="<?= $sTemplateURL ?>/images/head-panel.png" alt="" class="head-panel">
            </div>
            <div class="col-md-4">
                <div class="logo">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                        <img src="<?= $sTemplateURL ?>/images/logo2.png" alt="<?php bloginfo('name') ?>">
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <img src="<?= $sTemplateURL ?>/images/lang.png" alt="" class="float-right">
            </div>
        </div>
    </div>
</header>
<div class="container">
    <nav class="navbar navbar-expand-lg navbar-main navbar-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse-top">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse navbar-collapse-top">
            <?php
            wp_nav_menu(array(
                'theme_location'   => 'main-menu',
                'menu_class' => 'nav navbar-nav',
                'container'  => '',
                'walker' => new wp_bootstrap_navwalker()
            ));
            ?>
        </div>
    </nav>
</div>