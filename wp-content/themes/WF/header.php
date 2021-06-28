<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
    <?php
    wp_head();
    ?>
    <title><?php bloginfo('name');
        echo " | ";
        bloginfo('description'); ?>
    </title>
</head>
<body>
<header id="header" class="header">
    <div class="container">
        <div class="header__block">
            <div class="header__logo">
                <div href="#">
                    <?php the_custom_logo(); ?>
                </div>
            </div>
            <div id="header__phone" class="header__phone">
                <a class="header__phone_first" href="<?php the_field('phone', 2); ?>">
                    <?php the_field('phone', 2); ?></a>
                <a class="header__phone_second" href="<?php the_field('phone', 2); ?>">
                    <?php the_field('phone', 2); ?></a>
            </div>
            <div id="burger" class="burger">
                <span id="burger1" class="burger1"></span>
                <span id="burger2" class="burger2 inline"></span>
                <span id="burger3" class="burger3"></span>
            </div>
            <nav id="menu" class="menu">
                <ul class="menu__links">
                    <li><a href="#">Для начинающих <img
                                    src="<?php echo bloginfo('template_url'); ?>/assets/img/vector.png" alt=""></a></li>
                    <li><a id="profession" class="menu__profession" href="#">IT-специалисты<img
                                    src="<?php echo bloginfo('template_url'); ?>/assets/img/vector.png"
                                    alt=""></a>
                    </li>
                    <li><a href="#">IT-школа <img src="<?php echo bloginfo('template_url'); ?>/assets/img/vector.png"
                                                  alt=""></a></li>
                    <li><a href="#">Онлайн-обучение <img
                                    src="<?php echo bloginfo('template_url'); ?>/assets/img/vector.png" alt=""></a></li>
                    <li><a href="#">Полезное <img src="<?php echo bloginfo('template_url'); ?>/assets/img/vector.png"
                                                  alt=""></a></li>
                </ul>
            </nav>
            <div class="search">
                <input id="input-search" type="text" placeholder="Поиск" class="hide">
                <img id="search" src="<?php echo bloginfo('template_url'); ?>/assets/img/search.png" alt=""
                     class="search__img">
            </div>
        </div>
    </div>
    <section id="popup-burger" class="popup-burger hide">
        <div class="container">
            <div id="popup-burger__info" class="popup-burger__info">
                <ul id="burger-specialists">
                    <li id="burger-popap_beginners">Для начинающих<img
                                src="<?php echo bloginfo('template_url'); ?>/assets/img/vector-right_black.png"
                                alt="vector-right"></li>
                    <li id="burger-popap_specialists">IT-специалисты<img
                                src="<?php echo bloginfo('template_url'); ?>/assets/img/vector-right_black.png"
                                alt="vector-right"></li>
                    <li id="burger-popap_school">IT-школа<img
                                src="<?php echo bloginfo('template_url'); ?>/assets/img/vector-right_black.png"
                                alt="vector-right"></li>
                    <li id="burger-popap_online-training">Онлайн-обучение<img
                                src="<?php echo bloginfo('template_url'); ?>/assets/img/vector-right_black.png"
                                alt="vector-right"></li>
                    <li id="burger-popap_useful">Полезное<img
                                src="<?php echo bloginfo('template_url'); ?>/assets/img/vector-right_black.png"
                                alt="vector-right"></li>
                </ul>
            </div>
            <div id="burger-nav_specialists" class="burger-nav_specialists hide">
                <ul>
                    <h2>IT-специалисты<img src="<?php echo bloginfo('template_url'); ?>/assets/img/vector-button.png"
                                           alt="vector-button"></h2>
                    <li id="front" class="front">Front-end разработчик <img
                                src="<?php echo bloginfo('template_url'); ?>/assets/img/vector-right_black.png"
                                alt="vector-right">
                        <ul id="submenu-front" class="submenu-front hide">
                            <li>Введение и основы HTML</li>
                            <li>Основы CSS</li>
                            <li>Верстка сайта: HTML+CSS</li>
                        </ul>
                    </li>
                    <li>Back-end разработчик <img
                                src="<?php echo bloginfo('template_url'); ?>/assets/img/vector-right_black.png"
                                alt="vector-right"></li>
                    <li>FullStack разработчик<img
                                src="<?php echo bloginfo('template_url'); ?>/assets/img/vector-right_black.png"
                                alt="vector-right"></li>
                    <li>Верстальщик<img src="<?php echo bloginfo('template_url'); ?>/assets/img/vector-right_black.png"
                                        alt="vector-right"></li>
                    <li>Курс контент-менеджера<img
                                src="<?php echo bloginfo('template_url'); ?>/assets/img/vector-right_black.png"
                                alt="vector-right"></li>
                </ul>
            </div>
            <div class="popup-burger__search">
                <input type="text" placeholder="Поиск">
                <span>
                <img src="<?php echo bloginfo('template_url'); ?>/assets/img/search_black.png" alt="search">
            </span>
            </div>
            <div class="popup-burger__networks">
                <a href="#"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/skype_black.png"
                                 alt="skype"></a>
                <a href="#"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/insta.png" alt="instagram"></a>
                <a href="#"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/vk_black.png" alt="vk"></a>
                <a href="#"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/face.png" alt="facebook"></a>
                <a href="#"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/link.png" alt="linkedin"></a>
            </div>
        </div>
    </section>
</header>