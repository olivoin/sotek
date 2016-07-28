<!DOCTYPE html>
<html lang="ru-RU">
<head>
<title><?php the_title(); ?> &middot; Сотек</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta charset="utf-8" />
<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/assets/images/favicon.png" type="image/x-icon">
<?php wp_head(); ?>
<link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:400,300&subset=latin,cyrillic-ext' rel='stylesheet' type='text/css'>
</head>
<body <?php body_class(); ?>>
<header id="header">
    <div class="row">
        <div class="logo">СотекКомЦентр</div>
        <nav class="navigation">
            <div class="mobile-burger">
                меню
            </div>
            <?php echo do_shortcode('[widget id="nav_menu-2"]'); ?>
        </nav>
    </div>
    <div class="page-breadcrumps">
        <?php if ( function_exists('yoast_breadcrumb') ) {yoast_breadcrumb('<p id="breadcrumbs">','</p>');} ?>
    </div>
</header>
