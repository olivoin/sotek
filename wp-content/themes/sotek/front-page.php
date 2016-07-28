<?php get_header(); ?>
<div id="frontpage">
    <div class="section section-hello">
        <div class="full-height full-width middle-parent">
            <div class="full-height full-width middle-children">
                <div class="wrap hor-wrap">
                    <div class="section-desc">

                    </div>
                    <div class="section-content">
                        <h1>производство и поставка<br>запасных частей<br>к грузовым вагонам</h1>
                        <div class="cube flip-to-top">
                            <div class="default-state">
                                <span>подробнее</span>
                            </div>
                            <div class="active-state">
                                <a href="#second">подробнее</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section section-cat" style="background-image:url(<?php bloginfo('template_url'); ?>/assets/images/katalog/klin.png);">
        <div class="wrap hor-wrap">
            <div class="section-desc">
                <h2>Износотойкие элементы</h2>
                <p>...</p>
                <div class="row">
                    <div class="cube flip-to-top float-r">
                        <div class="default-state">
                            <span>перейти к каталогу</span>
                        </div>
                        <div class="active-state">
                            <a href="http://www.sotek.ru/katalog/">перейти к каталогу</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-content">
                <div class="section-content-video">
                    <video id="katalog-video" data-autoplay preload poster="<?php bloginfo('template_url'); ?>/assets/images/katalog/klin.png">
                        <source src="<?php bloginfo('template_url'); ?>/assets/video/klin.webm" type="video/webm">
                        <source src="<?php bloginfo('template_url'); ?>/assets/video/klin.ogg" type="video/ogg">
                        <source src="<?php bloginfo('template_url'); ?>/assets/video/klin.mp4" type="video/mp4">
                    </video>
                </div>
                <div class="section-content-desc">
                    М1698.
                </div>
            </div>
        </div>
    </div>
    <div class="section section-cat" style="background-image:url(<?php bloginfo('template_url'); ?>/assets/images/katalog/zpu.png);">
        <div class="wrap hor-wrap">
            <div class="section-desc">
                <h2>запорно-пломбировочное устройство</h2>
                <p>для пломбирования вагонов</p>
                <div class="row">
                    <div class="cube flip-to-top float-r">
                        <div class="default-state">
                            <span>перейти к детали</span>
                        </div>
                        <div class="active-state">
                            <a href="http://www.sotek.ru/katalog/zaporno-plombirovochnoe-ustroystvo/">перейти к детали</a>
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="section-content">
                <div class="section-content-video">
                    <video data-autoplay poster="<?php bloginfo('template_url'); ?>/assets/images/katalog/zpu.png">
                        <source src="<?php bloginfo('template_url'); ?>/assets/video/zpu.webm" type="video/webm">
                        <source src="<?php bloginfo('template_url'); ?>/assets/video/zpu.ogg" type="video/ogg">
                        <source src="<?php bloginfo('template_url'); ?>/assets/video/zpu.mp4" type="video/mp4">
                    </video>
                </div>
            </div>
        </div>
    </div>
    <div class="section section-cat" style="background-image:url(<?php bloginfo('template_url'); ?>/assets/images/katalog/zud.png);">
        <div class="wrap hor-wrap">
            <div class="section-desc">
                <h2>запорное устройство дверей</h2>
                <p>для грузового вагона</p>
                <div class="row">
                    <div class="cube flip-to-top float-r">
                        <div class="default-state">
                            <span>перейти к детали</span>
                        </div>
                        <div class="active-state">
                            <a href="http://www.sotek.ru/katalog/zapornoe-ustroystvo-dverey/">перейти к детали</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-content">
                <div class="section-content-video">
                    <video data-autoplay poster="<?php bloginfo('template_url'); ?>/assets/images/katalog/zud.png">
                        <source src="<?php bloginfo('template_url'); ?>/assets/video/zud.webm" type="video/webm">
                        <source src="<?php bloginfo('template_url'); ?>/assets/video/zud.ogg" type="video/ogg">
                        <source src="<?php bloginfo('template_url'); ?>/assets/video/zud.mp4" type="video/mp4">
                    </video>
                </div>
                <div class="section-content-desc">
                    мзу 07072-000.00сб
                </div>
            </div>
        </div>
    </div>

    <div class="section section-contacts">
        <div class="wrap hor-wrap">
            <div class="section-desc"></div>
            <div class="section-content">
                <div class="padding-40">
                    <div class="text-block">
                        <h2>контакты</h2>
                        <p><a href="tel:84959339909">8 (495) 933-99-09</a></p>
                        <p><a href="mailto:info@sotek.ru">sotek@sotek.ru</a></p>
                        <p>105005, г.Москва, набережная Академика Туполева д.15, стр.12</p>
                    </div>
                    <div class="contact-form">
                        <?php echo do_shortcode('[contact-form-7 id="4" title="Обратная связь"]'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--<div class="section-counter">
    <div class="section-counter-current">0</div>
    <div class="section-counter-total">0</div>
</div>-->
<?php get_footer(); ?>