<footer id="footer" class="footer">
    <div class="container">
        <div class="footer__block">
            <div>
                <img src="<?php echo bloginfo('template_url'); ?>/assets/img/logo_footer.png" alt="logo">
            </div>
            <div class="footer__block-nc">
                <div class="footer__nav">
                    <h3>Навигация</h3>
                    <ul>
                        <a href="#">
                            <li>Для начинающих</li>
                        </a>
                        <a href="#">
                            <li>IT-специалисты</li>
                        </a>
                        <a href="#">
                            <li>IT-школа</li>
                        </a>
                        <a href="#">
                            <li>Онлайн-обучение</li>
                        </a>
                        <a href="#">
                            <li>Полезное</li>
                        </a>
                    </ul>
                </div>
                <div class="footer__contact">
                    <h3>Контакты</h3>
                    <a href="<?php the_field('phone', 2); ?>">
                        <?php the_field('phone', 2); ?></a>
                    <span><?php the_field('mail', 2); ?></span>
                    <span><?php the_field('address'); ?></span>
                </div>
            </div>
            <div class="footer-networks">
                <a href="#"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/skype.png" alt="skype"> </a>
                <a href="#"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/instagram.png" alt="instagram"></a>
                <a href="#"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/vk.png" alt="vk"></a>
                <a href="#"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/facebook.png"
                                 alt="facebook"></a>
                <a href="#"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/linkedin.png"
                                 alt="linkedin"></a>
            </div>
        </div>
        <p>Разработка и продвижение сайта - Digital агентство «Веб Фокус»</p>
    </div>
</footer>
<div id="cloud-popup" class="cloud_popup hide">
    <div id="cloud-popup-record" class="cloud_popup-record">
        <h3 id="cloud-popup-h3">Записаться</h3>
        <span class="hide">Имя</span>
        <input type="text" value="Имя">
        <span class="hide">Телефон</span>
        <input type="text" value="Телефон">
        <span class="hide">Email</span>
        <input type="text" value="Email">
        <div class="button_arrow-cloud">
            <div class="cloud_button">
                <a id="cloud-popup-text" class="button_arrow__text-form" href="#">Отправить</a>
                <a class="button_arrow__circle" href="#">
                    <span class="circle-arrow">
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/arrow.png" alt="arrow">
                    </span>
                </a>
            </div>
        </div>
    </div>
    <span class="cloud_popup-cross">
        <img id="cloud-popup-cross" src="<?php echo bloginfo('template_url'); ?>/assets/img/closing-cross.png"
             alt="close">
    </span>
</div>
<?php
wp_footer();
?>
