<!DOCTYPE html>
<html lang="ru-RU">
<head>
<title><?php the_title(); ?> &middot; Сотек</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta charset="utf-8" />
<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/assets/images/favicon.png" type="image/x-icon">
<!--[if IE]> 
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/assets/css/ie/main.min.css" /> 
<![endif]-->
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
            <div class="navigation-menu cube-menu">
                <div class="cube flip-to-top">
                    <div class="default-state">
                        <span>главная</span>
                    </div>
                    <div class="active-state">
                        <a href="/">главная</a>
                    </div>
                </div>
                <div class="cube flip-to-top">
                    <div class="default-state">
                        <span>каталог</span>
                    </div>
                    <div class="active-state">
                        <a href="http://www.sotek.ru/katalog/">каталог</a>
                    </div>
                </div>
                <div class="cube flip-to-top">
                    <div class="default-state">
                        <span>компания</span>
                    </div>
                    <div class="active-state">
                        <a href="http://www.sotek.ru/o-kompanii/">компания</a>
                    </div>
                </div>
                <div class="cube flip-to-top">
                    <div class="default-state">
                        <span>производство</span>
                    </div>
                    <div class="active-state">
                        <a href="http://www.sotek.ru/proizvodstvo/">производство</a>
                    </div>
                </div>
                <div class="cube flip-to-top">
                    <div class="default-state">
                        <span>контакты</span>
                    </div>
                    <div class="active-state">
                        <a href="http://www.sotek.ru/kontaktyi/">контакты</a>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <div class="page-breadcrumps">
        <?php if ( function_exists('yoast_breadcrumb') ) {yoast_breadcrumb('<p id="breadcrumbs">','</p>');} ?>
    </div>
</header>
