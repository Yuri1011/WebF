<?php
get_header();
?>
    <section id="popup" class="popup hide">
        <div class="container">
            <div class="popup__list">
                <ul id="popup__list_specialists" class="popup__list_specialists">
                    <h1>IT-специалисты</h1>
                    <a href="#">
                        <li>Front-end разработчик <img
                                    src="<?php echo bloginfo('template_url'); ?>/assets/img/vector-right.png"
                                    alt="vector"></li>
                    </a>
                    <a href="#">
                        <li>Back-end разработчик<img
                                    src="<?php echo bloginfo('template_url'); ?>/assets/img/vector-right.png"
                                    alt="vector"></li>
                    </a>
                    <a href="#">
                        <li>FullStack разработчик <img
                                    src="<?php echo bloginfo('template_url'); ?>/assets/img/vector-right.png"
                                    alt="vector"></li>
                    </a>
                    <li>Верстальщик</li>
                    <a href="#">
                        <li>Курс контент-менеджера <img
                                    src="<?php echo bloginfo('template_url'); ?>/assets/img/vector-right.png"
                                    alt="vector"></li>
                    </a>
                </ul>
                <ul id="popup__list_lesson" class="popup__list_lesson hide">
                    <h1>IT-специалисты</h1>
                    <a href="#">
                        <span>Back-end разработчик<img
                                    src="<?php echo bloginfo('template_url'); ?>/assets/img/vector-left.png"
                                    alt="vector"></span>
                    </a>
                    <li>Курс ОС семейства UNUX (Linux, Mac)</li>
                    <li>Программирование на PHP</li>
                    <li>MySQL с нуля</li>
                    <li>Базовые знания и возможности AJAX, Json, XML</li>
                </ul>

                <div id="closing_cross" class="closing_cross">
                    <img src="<?php echo bloginfo('template_url'); ?>/assets/img/closing-cross.png" alt="closing cross">
                </div>
            </div>
        </div>
    </section>
    <main>
        <section id="banner" class="main_banner">
            <div class="container">
                <div class="main_block">
                    <div class="main_block__first">
                        <div class="main__block-button">
                            <div class="main__block-text">
                                <h1><?php the_field('banner_title') ?></h1>
                                <p>
                                    <?php the_field('banner_descr') ?>
                                </p>
                                <div class="button_arrow">
                                    <a class="button_arrow__text" href="#form_anhor">Записаться</a>
                                        <a id="button-arrow-circle" class="button_arrow__circle" href="#form_anhor">
                                     <span id="circle-arrow" class="circle-arrow">
                                         <img src="<?php echo bloginfo('template_url'); ?>/assets/img/arrow.png"
                                              alt="arrow">
                                     </span>
                                        </a>
                                </div>
                            </div>
                            <div class="img_computer">
                                <!--<img src="--><?php //the_field('banner_img') ?><!--" alt="computer">-->

                                <?php
                                $image = get_field('banner_img');
                                if (!empty($image)): ?>
                                    <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>">
                                <?php endif;
                                ?>

                            </div>
                            <div id="cloud" class="cloud">
                                <img src="<?php echo bloginfo('template_url'); ?>/assets/img/cloud.png" alt="cloud">
                            </div>
                        </div>
                        <ul class="main__block-list">
                            <div class="block-li1">
                                <li class="c">Только полезная информация</li>
                                <li class="c">Много практики</li>
                            </div>
                            <div class="block-li2">
                                <li class="c">Поддержка наставников</li>
                                <li class="c">Быстрый старт</li>
                            </div>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="networks">
                <a href="#"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/skype.png" alt="skype"> </a>
                <a href="#"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/instagram.png" alt="instagram"></a>
                <a href="#"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/vk.png" alt="vk"></a>
                <a href="#"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/facebook.png"
                                 alt="facebook"></a>
                <a href="#"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/linkedin.png"
                                 alt="linkedin"></a>
            </div>
        </section>
        <section id="presentation" class="main_block-present">
            <div class="container">
                <div class="block-present_text-img">
                    <div class="block_text-img__text">
                        <h2>Почему это выгодно</h2>
                        <p>Интернет сегодня не только площадка для общения, просмотра видео, получения полезной
                            информации и
                            актуальных новостей. Это работающая бизнес-платформа для продавцов и покупателей,
                            соискателей и
                            работодателей, заказчиков и исполнителей — уникальная платформа для товаров и услуг.
                        </p>
                        <p>
                            Более 5 миллиардов людей в мире пользуются интернетом: заказывают, бронируют, инвестируют,
                            продают и
                            покупают. После создания сайта доходность бизнеса увеличивается, как минимум, в 2-3 раза, а
                            то и
                            больше. К примеру, прибыль онлайн-магазина Amazon только за час составляет 10 млн. долларов.
                            Что
                            мешает и Вам так зарабатывать?
                        </p>
                        <p>
                            Если Вашей компании еще нет в интернете — скорее создавайте сайт. Это будет самое
                            оправданное и
                            перспективное вложение.
                        </p>
                        <p>
                            Не знаете, как воплотить мечту в реальность? Пройдите курсы веб-разработки и приступайте к
                            делу.</p>
                    </div>
                    <div class="block_text-img__img">
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/chess.png" alt="chess">
                    </div>
                </div>
                <div class="block-present_title-task">
                    <div class="block-present__title">
                        <h2>Задачи, которые решает веб-сервис:</h2>
                    </div>
                    <div class="block-present__task">
                        <p>
                            расширяет клиентскую базу с помощью использования инструментов по привлечению внимания
                            целевой
                            аудитории (SEO-продвижение, контекстная и таргетированная реклама, инфографика);
                        </p>
                        <p>
                            автоматизирует работу с клиентом (настройка чат-ботов: онлайн-консультирование, оформление
                            заказа,
                            оповещение об акциях, обратная связь и т. д.);
                        </p>
                        <p>
                            автоматизирует работу с клиентом (настройка чат-ботов: онлайн-консультирование, оформление
                            заказа,
                            оповещение об акциях, обратная связь и т. д.);
                        </p>
                        <p>
                            увеличивает продажи за счет расширения сфер влияния;
                        </p>
                        <p>
                            укрепляет имидж компании;
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section id="service" class="main_block-service">
            <div class="container">
                <div class="block_service-title">
                    <h2>Плюсы <br>интернет-сервиса:</h2>
                </div>
                <div class="block_service-imgs-text">
                    <div class="block_service__imgs">
                        <div>
                            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/clock.png" alt="image">
                            <p>Работает круглосуточно</p>
                        </div>
                        <div>
                            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/documents.png" alt="image">
                            <p>Способен обрабатывать одновременно сотни заявок клиентов</p>
                        </div>
                        <div>
                            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/catalog.png" alt="image">
                            <p>Открывает доступ к просмотру полного каталога товаров и услуг</p>
                        </div>
                        <div>
                            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/star.png" alt="image">
                            <p>Выгодно представляет бизнес и подчеркивает имидж компании</p>
                        </div>
                        <div>
                            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/map.png" alt="image">
                            <p>Помогает заключать сделки с заказчиками, которые находятся даже в отдаленных точках
                                мира</p>
                        </div>
                        <div>
                            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/key.png" alt="image">
                            <p>Надежный источник достоверной информации для покупателей</p>
                        </div>
                    </div>
                    <p class="block_service__text">
                        Научиться создавать сайты может каждый, только нужно время. Главное начать и чем раньше, тем
                        лучше.
                        <br>
                        <br>
                        Наши опытные web-разработчики готовы щедро делиться знаниями, которые Вы легко примените к
                        бизнесу и
                        создадите, отвечающий популярным запросам пользователей, личным вкусам и предпочтениям сайт.
                    </p>
                </div>
            </div>
        </section>
        <section id="description" class="main_block-description">
            <div class="container">
                <div class="descr_prof">
                    <div class="descr_prof__tittle">
                        <h2>Профессия веб-разработчика — беспроигрышный вариант</h2>
                        <p>Малознакомая лет 10 назад специальность, сейчас — топовое IT-направление, в которое
                            вкладываются
                            огромные средства.</p>
                    </div>
                    <div class="descr_prof__description">
                        <div>
                            <h3>Востребованность</h3>
                            <p>Веб-разработка — бурно развивающаяся сфера, в которой при этом остро ощущается дефицит
                                кадров.
                                Как
                                показывает статистика «Рейтинга Рунета» и CMS Magazine, только 28% компаний и веб-студий
                                полноценно
                                обеспечены такими специалистами. Востребованность профессии подтверждает и
                                многочисленное
                                количество
                                вакансий на различных job-ресурсах. Это первый неоспоримый довод, чтобы пойти на курсы
                                разработки
                                сайтов в Минске.</p>
                        </div>
                        <div>
                            <h3>Достойная оплата</h3>
                            <p>Среднемесячная заработная плата веб-разработчика — составляет от 2 тыс. руб. и выше,
                                средняя
                                – 5
                                тыс.
                                Из других плюсов — карьерный рост, работа удаленно из дома, возможность совмещения с
                                учебой
                                и
                                другими занятиями.</p>
                        </div>
                        <div>
                            <h3>Обучение с нуля</h3>
                            <p>Освоить профессию можно в 20, 30 и в 40 лет. Главное — желание. Записывайтесь на курсы по
                                созданию
                                сайтов с нуля от агентства интернет-маркетинга Web Focus и обучайтесь трендовой
                                профессии.
                                Заказчики
                                ждут только Вас. Не откладывайте на потом, звоните прямо сейчас.</p>
                        </div>
                    </div>
                </div>
                <div class="descr_course">
                    <div class="descr_course__tittle">
                        <h2>Курсы по созданию сайтов в Минске</h2>
                        <p>Услуги веб-мастера — дорогое удовольствие. Станьте им сами и сэкономьте на найме
                            дополнительных
                            сотрудников. Пройдите курсы разработки сайтов, и продвигайте бизнес в интернете.</p>
                        <div class="descr_block-text">
                            <h3>Учитесь у профессионалов</h3>
                            <p> Чтобы сайт приносил ожидаемые результаты, обучайтесь только у специалистов с многолетним
                                практическим
                                опытом в области разработки и верстки. Тогда средства, инвестированные в знания,
                                окупятся
                                втройне.
                                <br>
                                <br>
                                Сотни онлайн-сервисов в сети предлагают использовать автоматические конструкторы сайтов
                                без
                                возможности редактирования кода. Несмотря на привлекательную рекламу, создать эффектный
                                сайт
                                с
                                помощью такого сервиса не удастся, потому что он шаблонный и бесплатный, а значит с
                                доменом
                                второго
                                и третьего уровня и невозможностью добавлять новые плагины, скрипты и коды.
                                <br>
                                <br>
                                Вряд ли такой «корявый» сайт заинтересует клиентов. Помимо этого, подобные
                                интернет-площадки
                                всегда
                                занижаются в поисковой выдаче, что делает его заведомо неконкурентным.</p>
                        </div>
                    </div>
                    <div class="descr_course__img">
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/screen.png" alt="img">
                        <div class="descr_block-text2">
                            <h3>Записывайтесь на обучение в Web Focus</h3>
                            <p>Среднемесячная заработная плата веб-разработчика — составляет от 2 тыс. руб. и выше,
                                средняя
                                – 5
                                тыс.
                                Из других плюсов — карьерный рост, работа удаленно из дома, возможность совмещения с
                                учебой
                                и
                                другими занятиями.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="form" class="main_block-form">
            <div class="container">
                <div id="form_anchor" class="form_get">
                    <form id="form_consultation" class="form_get__consultation" action="">
                        <div class="form_inputs">
                            <h3>Получить консультацию</h3>
                            <div class="form_inputs-block flex">
                                <div id="form_inputs__name">
                                    <span class="hide">Имя</span>
                                    <span id="error_input-name" class="error_input hide">Необходимо заполнить</span>
                                    <input id="input_name" type="text" value="Имя" name="username">
                                </div>
                                <div id="form_inputs__phone">
                                    <span class="hide">Телефон</span>
                                    <input id="input_phone" type="text" value="Телефон" name="phone">
                                    <span id="error_input-phone" class="error_phone hide">Необходимо заполнить</span>
                                </div>
                                <div id="form_inputs__email">
                                    <span class="hide">Email</span>
                                    <input id="input_email" type="email" value="Email" name="email">
                                    <span id="error_input-email" class="error_email hide">Необходимо заполнить</span>
                                </div>
                            </div>
                            <div class="checkbox">
                                <input checked type="checkbox">
                                <p>Даю согласие на обработку персональных данных</p>
                            </div>
                        </div>
                        <div class="button_arrow-form">
                            <a class="button_arrow__text-form" href="#">Отправить</a>
                            <a id="button_arrow__circle" class="button_arrow__circle" href="#">
                        <span class="circle-arrow">
                            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/arrow.png" alt="arrow">
                        </span>
                            </a>
                        </div>
                        <span id="error_correctly"
                              class="error_correctly hide">Проверьте правильность заполнения формы!</span>
                    </form>
                    <div id="form_popup" class="form_get__popup hide">
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/confirmation.png" alt="img">
                        <p>Спасибо. Мы cвяжемся с Вами в ближайшее время!</p>
                    </div>
                </div>
            </div>
        </section>
        <section id="proposal" class="main_block-proposal">
            <div class="container">
                <div class="main_block-prop">
                    <div class="main_block-prop__title">
                        <h2>Что мы предлагаем</h2>
                        <p>Интерактивный курс создание сайтов от агентства интернет-маркетинга Web Focus разработан
                            специально
                            для тех, кто еще не знаком с этой сферой и для продолжающих обучение веб-мастеров.
                            <br>
                            <br>
                            Мы подготовили программу, которая включает теорию и интенсивную практику. Вас ждет базовый и
                            продвинутый курс по html и css, работа с современными IT-технологиями.</p>
                    </div>
                    <h3>На курсе по созданию сайтов Вы научитесь:</h3>
                    <div class="main_block-prop__lesson">
                        <div>
                            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/notebook.png" alt="img">
                            <p>Базовым навыкам работы с HTML, CSS, JS</p>
                        </div>
                        <div>
                            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/cms.png" alt="img">
                            <p>Управлять блоками в CMS</p>
                        </div>
                        <div>
                            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/page.png" alt="img">
                            <p>Создавать интерактивные страницы</p>
                        </div>
                        <div>
                            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/java.png" alt="img">
                            <p>Программировать на языке JavaScript</p>
                        </div>
                        <div>
                            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/form.png" alt="img">
                            <p>Работать с виджетами, медиафайлами, анимацией, формами</p>
                        </div>
                        <div>
                            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/layout.png" alt="img">
                            <p>Готовить макеты к верстке и многое другое</p>
                        </div>
                    </div>
                </div>
                <div class="main_block-prop__info-text">
                    <div class="main_block-prop__info">
                        <div class="prop_info">
                            <h2>Только полезная информация</h2>
                            <p>Мы ценим время. А потому составили уроки таким образом, чтобы Вы могли получать только
                                нужные
                                знания
                                — «без воды». То, что Вы можете изучить, прочитав десятки книг, мы вместили в несколько
                                компактных
                                лекций.</p>
                        </div>
                        <div class="prop_prof">
                            <h3>Высокооплачиваемая профессия</h3>
                            <p>Мы — первая ступень в Вашей удачной карьере. На курсе по созданию сайтов Вы освоите
                                знания, с
                                которыми сможете начать работать веб-разработчиком и получать за это хорошие
                                гонорары.</p>
                        </div>
                    </div>
                    <div class="main_block-prop__text">
                        <div class="prop_text-block1">
                            <h3>Много практики</h3>
                            <p>Мы хотим, чтоб Вы не только знали, но и умели. После каждого занятия Вы будете выполнять
                                практические задания под руководством наставника. В процессе обучения Вы будете
                                создавать
                                собственные проекты.</p>
                        </div>
                        <div class="prop_block2-3">
                            <div class="prop_text-block2">
                                <h3>Поддержка наставников</h3>
                                <p>Мы всегда на связи. Вы сможете задавать преподавателям вопросы по теме и быстро
                                    получать
                                    на
                                    них
                                    ответы. Нам важно не продать уроки, а научить Вас создавать сайты.</p>
                            </div>
                            <div class="prop_text-block3">
                                <h3>Быстрый старт</h3>
                                <p>Мы заинтересованы в Вашем успехе. Занимайтесь разработкой сайта параллельно с
                                    прохождением
                                    обучения. Выполняйте задания, тестируйте инструменты на своей площадке и получайте
                                    результат.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="blog" class="blog">
            <div class="container">
                <div class="blog__title">
                    <h2>Блог</h2>
                    <div class="blog__title-button">
                        <div class="button_arrow-blog">
                            <a class="button_arrow__text-blog" href="#">Посмотреть все</a>
                            <a class="button_arrow__circle" href="#">
                        <span class="circle-arrow">
                            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/arrow.png" alt="arrow">
                        </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="all">
                    <input checked type="radio" name="respond" id="desktop">
                    <article id="slider">
                        <input checked type="radio" name="slider" id="switch1">
                        <input type="radio" name="slider" id="switch2">
                        <input type="radio" name="slider" id="switch3">
                        <input type="radio" name="slider" id="switch4">
                        <input type="radio" name="slider" id="switch5">
                        <div id="slides">
                            <div id="overflow">
                                <div class="image">

                                    <?php
                                    // параметры по умолчанию
                                    $posts = get_posts(array(
                                        'numberposts' => -1,
                                        'category_name' => 'slider',
                                        'orderby' => 'date',
                                        'order' => 'ASC',
                                        'post_type' => 'post',
                                        'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                                    ));

                                    foreach ($posts as $post) {
                                        setup_postdata($post);
                                        ?>
                                        <article>
                                            <a href="<?php the_field('slider_link') ?>">
                                                <img src="<?php the_field('slider_img') ?>">
                                                <span class="blog_data"><?php the_field('data') ?></span>
                                                <span class="blog_title"><?php the_field('slider_title') ?></span>
                                            </a>
                                        </article>
                                        <?php
                                    }
                                    wp_reset_postdata();
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="controls">
                            <label for="switch1"></label>
                            <label for="switch2"></label>
                            <label for="switch3"></label>
                            <label for="switch4"></label>
                            <label for="switch5"></label>
                        </div>
                        <div class="active" id="active">
                            <label for="switch1"></label>
                            <label for="switch2"></label>
                            <label for="switch3"></label>
                            <label for="switch4"></label>
                            <label for="switch5"></label>
                        </div>
                    </article>
                </div>
            </div>
        </section>
    </main>
<?php
get_footer();
?>