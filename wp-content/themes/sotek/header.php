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
<script>
    jQuery(window).on('load', function () {
    var $preloader = jQuery('#page-preloader'),
        $spinner   = $preloader.find('.spinner');
        $preloader.delay(1100).fadeOut('slow');
        $spinner.delay(400).fadeOut();
        setTimeout(function(){
            wow = new WOW(
                {
                    boxClass:     'wow',      // default
                    animateClass: 'animated', // default
                    offset:       150,        // default 
                    mobile:       true,       // default
                    live:         true        // default
                }
            )
            wow.init();
        }, 350);
    });
</script>
</head>
<body <?php body_class(); ?>>
<div id="page-preloader">
<div class="spinner">
    <span>с</span><span class="out">о</span><span>тек</span>
</div>
</div>
<header id="header" class="wow fadeInDown">
    <div class="row">
        <div class="logo"><a href="/">СотекКомЦентр</a></div>
        <nav class="navigation">
            <div class="mobile-burger">
                меню
            </div>
            <?php echo do_shortcode('[widget id="nav_menu-2"]'); ?>
            <div class="navigation-menu">
                <div class="header-navigation-item header-navigation-item--vu-par-richard-mille">
                    <a href="/" class="header-navigation-item-link">
                        <div class="header-navigation-item-state-wrapper">
                            <div class="header-navigation-item-state header-navigation-item-state--white">
                                <span class="header-navigation-item-state-content header-navigation-item-state-content--white">главная</span>
                            </div>

                            <div class="header-navigation-item-state header-navigation-item-state--black">
                                <span class="header-navigation-item-state-content header-navigation-item-state-content--black" href="/">главная</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="header-navigation-item header-navigation-item--vu-par-richard-mille">
                    <a href="http://www.sotek.ru/katalog/" class="header-navigation-item-link">
                        <div class="header-navigation-item-state-wrapper">
                            <div class="header-navigation-item-state header-navigation-item-state--white">
                                <span class="header-navigation-item-state-content header-navigation-item-state-content--white">каталог</span>
                            </div>

                            <div class="header-navigation-item-state header-navigation-item-state--black">
                                <span class="header-navigation-item-state-content header-navigation-item-state-content--black">каталог</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="header-navigation-item header-navigation-item--vu-par-richard-mille">
                    <a href="http://www.sotek.ru/o-kompanii/" class="header-navigation-item-link">
                        <div class="header-navigation-item-state-wrapper">
                            <div class="header-navigation-item-state header-navigation-item-state--white">
                                <span class="header-navigation-item-state-content header-navigation-item-state-content--white">компания</span>
                            </div>

                            <div class="header-navigation-item-state header-navigation-item-state--black">
                                <span class="header-navigation-item-state-content header-navigation-item-state-content--black">компания</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="header-navigation-item header-navigation-item--vu-par-richard-mille">
                    <a href="http://www.sotek.ru/proizvodstvo/" class="header-navigation-item-link">
                        <div class="header-navigation-item-state-wrapper">
                            <div class="header-navigation-item-state header-navigation-item-state--white">
                                <span class="header-navigation-item-state-content header-navigation-item-state-content--white">производство</span>
                            </div>

                            <div class="header-navigation-item-state header-navigation-item-state--black">
                                <span class="header-navigation-item-state-content header-navigation-item-state-content--black">производство</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="header-navigation-item header-navigation-item--vu-par-richard-mille">
                    <a href="http://www.sotek.ru/kontaktyi/" class="header-navigation-item-link">
                        <div class="header-navigation-item-state-wrapper">
                            <div class="header-navigation-item-state header-navigation-item-state--white">
                                <span class="header-navigation-item-state-content header-navigation-item-state-content--white">контакты</span>
                            </div>

                            <div class="header-navigation-item-state header-navigation-item-state--black">
                                <span class="header-navigation-item-state-content header-navigation-item-state-content--black">контакты</span>
                            </div>
                        </div>
                    </a>
                </div>
                
            </div>
        </nav>
    </div>
    <div class="page-breadcrumps">
        <?php if ( function_exists('yoast_breadcrumb') ) {yoast_breadcrumb('<p id="breadcrumbs">','</p>');} ?>
    </div>
</header>
