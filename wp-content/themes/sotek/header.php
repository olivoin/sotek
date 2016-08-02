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
        <div class="logo"><a href="/">СотекКомЦентр</a></div>
        <nav class="navigation">
            <div class="mobile-burger">
                меню
            </div>
            <?php echo do_shortcode('[widget id="nav_menu-2"]'); ?>
            <div class="navigation-menu">
                <div class="header-navigation-item header-navigation-item--vu-par-richard-mille">
                    <div class="header-navigation-item-state-wrapper">
                        <div class="header-navigation-item-state header-navigation-item-state--white">
                            <span class="header-navigation-item-state-content header-navigation-item-state-content--white">главная</span>
                        </div>

                        <div class="header-navigation-item-state header-navigation-item-state--black">
                            <a class="header-navigation-item-state-content header-navigation-item-state-content--black" href="/">главная</a>
                        </div>
                    </div>
                </div>
                <div class="header-navigation-item header-navigation-item--vu-par-richard-mille">
                    <div class="header-navigation-item-state-wrapper">
                        <div class="header-navigation-item-state header-navigation-item-state--white">
                            <span class="header-navigation-item-state-content header-navigation-item-state-content--white">каталог</span>
                        </div>

                        <div class="header-navigation-item-state header-navigation-item-state--black">
                            <a class="header-navigation-item-state-content header-navigation-item-state-content--black" href="/">каталог</a>
                        </div>
                    </div>
                </div>
                <div class="header-navigation-item header-navigation-item--vu-par-richard-mille">
                    <div class="header-navigation-item-state-wrapper">
                        <div class="header-navigation-item-state header-navigation-item-state--white">
                            <span class="header-navigation-item-state-content header-navigation-item-state-content--white">компания</span>
                        </div>

                        <div class="header-navigation-item-state header-navigation-item-state--black">
                            <a class="header-navigation-item-state-content header-navigation-item-state-content--black" href="/">компания</a>
                        </div>
                    </div>
                </div>
                <div class="header-navigation-item header-navigation-item--vu-par-richard-mille">
                    <div class="header-navigation-item-state-wrapper">
                        <div class="header-navigation-item-state header-navigation-item-state--white">
                            <span class="header-navigation-item-state-content header-navigation-item-state-content--white">производство</span>
                        </div>

                        <div class="header-navigation-item-state header-navigation-item-state--black">
                            <a class="header-navigation-item-state-content header-navigation-item-state-content--black" href="/">производство</a>
                        </div>
                    </div>
                </div>
                <div class="header-navigation-item header-navigation-item--vu-par-richard-mille">
                    <div class="header-navigation-item-state-wrapper">
                        <div class="header-navigation-item-state header-navigation-item-state--white">
                            <span class="header-navigation-item-state-content header-navigation-item-state-content--white">контакты</span>
                        </div>

                        <div class="header-navigation-item-state header-navigation-item-state--black">
                            <a class="header-navigation-item-state-content header-navigation-item-state-content--black" href="/">контакты</a>
                        </div>
                    </div>
                </div>
                
            </div>
        </nav>
    </div>
    <div class="page-breadcrumps">
        <?php if ( function_exists('yoast_breadcrumb') ) {yoast_breadcrumb('<p id="breadcrumbs">','</p>');} ?>
    </div>
</header>
