<!DOCTYPE html>
<html lang="<?= Yii::app()->language; ?>">
<head>
    <?php \yupe\components\TemplateEvent::fire(DefautThemeEvents::HEAD_START); ?>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta http-equiv="Content-Language" content="ru-RU"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>

    <title><?= $this->title; ?></title>
    <meta name="description" content="<?= $this->description; ?>"/>
    <meta name="keywords" content="<?= $this->keywords; ?>"/>

    <?php if ($this->canonical): ?>
        <link rel="canonical" href="<?= $this->canonical ?>"/>
    <?php endif; ?>
    <?php
    Yii::app()->getClientScript()->registerCssFile($this->mainAssets . '/css/main.css');
    Yii::app()->getClientScript()->registerCssFile($this->mainAssets . '/css/flags.css');
    Yii::app()->getClientScript()->registerCssFile($this->mainAssets . '/css/yupe.css');
    Yii::app()->getClientScript()->registerCssFile($this->mainAssets . '/css/grid.css');
    Yii::app()->getClientScript()->registerCssFile($this->mainAssets . '/css/contact-form.css');
    Yii::app()->getClientScript()->registerCssFile($this->mainAssets . '/css/grid.css');
    Yii::app()->getClientScript()->registerCssFile($this->mainAssets . '/css/jquery.fancybox.css');
    Yii::app()->getClientScript()->registerCssFile($this->mainAssets . '/css/order-frontend.css');
    Yii::app()->getClientScript()->registerCssFile($this->mainAssets . '/css/search.css');
    Yii::app()->getClientScript()->registerCssFile($this->mainAssets . '/css/store-frontend.css');
    Yii::app()->getClientScript()->registerCssFile($this->mainAssets . '/css/style.css');
    Yii::app()->getClientScript()->registerCssFile($this->mainAssets . '/css/tmMultimediaGallery.css');
    Yii::app()->getClientScript()->registerCssFile($this->mainAssets . '/css/unslider.css');
    Yii::app()->getClientScript()->registerCssFile($this->mainAssets . '/css/unslider-dots.css');
    Yii::app()->getClientScript()->registerCssFile($this->mainAssets . '/css/user-popup-info.css');
    Yii::app()->getClientScript()->registerCssFile($this->mainAssets . '/css/lightslider.css');
    Yii::app()->getClientScript()->registerCssFile($this->mainAssets . '/css/jquery-ui.css');
    Yii::app()->getClientScript()->registerCssFile($this->mainAssets . '/css/jquery-ui.structure.css');
    Yii::app()->getClientScript()->registerCssFile($this->mainAssets . '/css/jquery-ui.theme.css');
    Yii::app()->getClientScript()->registerScriptFile($this->mainAssets . '/js/blog.js');
    Yii::app()->getClientScript()->registerScriptFile($this->mainAssets . '/js/bootstrap-notify.js');
    Yii::app()->getClientScript()->registerScriptFile($this->mainAssets . '/js/jquery.li-translit.js');
    Yii::app()->getClientScript()->registerScriptFile($this->mainAssets . '/js/device.min.js');
    Yii::app()->getClientScript()->registerScriptFile($this->mainAssets . '/js/ga.js');
    Yii::app()->getClientScript()->registerScriptFile($this->mainAssets . '/js/imagesloaded.min.js');
    Yii::app()->getClientScript()->registerScriptFile($this->mainAssets . '/js/jquery.cookie.js');
    Yii::app()->getClientScript()->registerScriptFile($this->mainAssets . '/js/jquery.easing.1.3.js');
    Yii::app()->getClientScript()->registerScriptFile($this->mainAssets . '/js/jquery.equalheights.js');
    Yii::app()->getClientScript()->registerScriptFile($this->mainAssets . '/js/jquery.fancybox.js');
    Yii::app()->getClientScript()->registerScriptFile($this->mainAssets . '/js/jquery.li-translit.js');
    Yii::app()->getClientScript()->registerScriptFile($this->mainAssets . '/js/jquery.mobilemenu.js');
    Yii::app()->getClientScript()->registerScriptFile($this->mainAssets . '/js/jquery.mousewheel.min.js');
    Yii::app()->getClientScript()->registerScriptFile($this->mainAssets . '/js/jquery.simplr.smoothscroll.min.js');
    Yii::app()->getClientScript()->registerScriptFile($this->mainAssets . '/js/jquery.touchSwipe.min.js');
    Yii::app()->getClientScript()->registerScriptFile($this->mainAssets . '/js/jquery.ui.totop.js');
    Yii::app()->getClientScript()->registerScriptFile($this->mainAssets . '/js/jquery.ui.touch-punch.js');
    Yii::app()->getClientScript()->registerScriptFile($this->mainAssets . '/js/jquery-ui-1.10.3.custom.min.js');
    Yii::app()->getClientScript()->registerScriptFile($this->mainAssets . '/js/masonry.min.js');
    Yii::app()->getClientScript()->registerScriptFile($this->mainAssets . '/js/search.js');
    Yii::app()->getClientScript()->registerScriptFile($this->mainAssets . '/js/slides.js');
    Yii::app()->getClientScript()->registerScriptFile($this->mainAssets . '/js/store.js');
    Yii::app()->getClientScript()->registerScriptFile($this->mainAssets . '/js/superfish.js');
    Yii::app()->getClientScript()->registerScriptFile($this->mainAssets . '/js/tmDraggablePagination.js');
    Yii::app()->getClientScript()->registerScriptFile($this->mainAssets . '/js/tmFileList.js');
    Yii::app()->getClientScript()->registerScriptFile($this->mainAssets . '/js/TMForm.js');
    Yii::app()->getClientScript()->registerScriptFile($this->mainAssets . '/js/tmMultimediaGallery.js');
    Yii::app()->getClientScript()->registerScriptFile($this->mainAssets . '/js/tmMultimediaGallery_init.js');
    Yii::app()->getClientScript()->registerScriptFile($this->mainAssets . '/js/tmPaginationGenerator.js');
    Yii::app()->getClientScript()->registerScriptFile($this->mainAssets . '/js/tmstickup.js');
    Yii::app()->getClientScript()->registerScriptFile($this->mainAssets . '/js/unslider-min.js');
    Yii::app()->getClientScript()->registerScriptFile($this->mainAssets . '/js/wow.js');
    Yii::app()->getClientScript()->registerScriptFile($this->mainAssets . '/js/lightslider.js');
    Yii::app()->getClientScript()->registerScriptFile($this->mainAssets . '/js/masonry.pkgd.min.js');
    Yii::app()->getClientScript()->registerScriptFile($this->mainAssets . '/js/hoverIntent.js');
    Yii::app()->getClientScript()->registerScriptFile($this->mainAssets . '/js/jquery-ui.js');
    Yii::app()->getClientScript()->registerScriptFile($this->mainAssets . '/js/jquery.validate.min.js');
    Yii::app()->getClientScript()->registerScriptFile($this->mainAssets . '/js/jquery.inputmask.js');
    Yii::app()->getClientScript()->registerScriptFile($this->mainAssets . '/js/mail-script.js');
    Yii::app()->getClientScript()->registerScriptFile($this->mainAssets . '/js/camera.js');
    ?>
    <script>
        $(function () {
            from = $("#datepicker-from")
                .datepicker({
                    dateFormat: "dd.mm.yy",
                    numberOfMonths: 1,
                    minDate: 0,
                    monthNames: ['Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь',
                        'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь'],
                    dayNames: ['воскресенье', 'понедельник', 'вторник', 'среда', 'четверг', 'пятница', 'суббота'],
                    dayNamesShort: ['вск', 'пнд', 'втр', 'срд', 'чтв', 'птн', 'сбт'],
                    dayNamesMin: ['Вс', 'Пн', 'Вт', 'Ср', 'Чт', 'Пт', 'Сб'],
                    closeText: 'Закрыть',
                    prevText: '&#x3c;Пред',
                    nextText: 'След&#x3e;',
                    currentText: 'Сегодня',
                })
                .on("change", function () {
                    to.datepicker("option", "minDate", getDate(this));
                }),
                to = $("#datepicker-to").datepicker({
                    dateFormat: "dd.mm.yy",
                    numberOfMonths: 1,
                    monthNames: ['Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь',
                        'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь'],
                    dayNames: ['воскресенье', 'понедельник', 'вторник', 'среда', 'четверг', 'пятница', 'суббота'],
                    dayNamesShort: ['вск', 'пнд', 'втр', 'срд', 'чтв', 'птн', 'сбт'],
                    dayNamesMin: ['Вс', 'Пн', 'Вт', 'Ср', 'Чт', 'Пт', 'Сб'],
                    closeText: 'Закрыть',
                    prevText: '&#x3c;Пред',
                    nextText: 'След&#x3e;',
                    currentText: 'Сегодня',
                })
                    .on("change", function () {
                        from.datepicker("option", "maxDate", getDate(this));
                    });

            function getDate(element) {
                var date;
                try {
                    date = $.datepicker.parseDate(element.value);
                } catch (error) {
                    date = null;
                }

                return date;
            }
        });


    </script>
    <script>
        $(function () {
            $("#rooms").selectmenu();
            $("#medicalCenter").selectmenu();
            $("#people")
                .selectmenu()
                .selectmenu("menuWidget")
                .addClass("overflow")

        });
    </script>
    <script type="text/javascript">
        $(document).ready(function () {
            $("#phone").inputmask("+7(999)999-99-99")
        });
    </script>
    <script type="text/javascript">
        var yupeTokenName = '<?= Yii::app()->getRequest()->csrfTokenName;?>';
        var yupeToken = '<?= Yii::app()->getRequest()->getCsrfToken();?>';
    </script>
    <!--[if IE]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="http://yandex.st/highlightjs/8.2/styles/github.min.css">
    <script src="http://yastatic.net/highlightjs/8.2/highlight.min.js"></script>
    <?php \yupe\components\TemplateEvent::fire(DefautThemeEvents::HEAD_END); ?>
</head>
<body>
<div class="main_branch">
    <img class="main_branch__pic" src="/themes/default/web/images/branch.png" alt="">
</div>
<!--========================================================
                          HEADER
=========================================================-->
<div class="background-wrapper">
    <div class="big-wrapper">
        <header id="header">
            <div class="container">
                <div class="row" style="margin-right: 0">
                    <div class="grid_12">
                        <div class="info">

                            <div class="row" style="margin-right: 0">

                                <div class="grid_8">
                                    <div class="info__block" style="text-align: right">
                                        <div>
                                            <h1 class="logo-title"><a href="/"><span
                                                        class="first">Усадьба НИКА </span></a>
                                            </h1>
                                            <div class="logo-title__description">Отдых в Горном Алтае</div>

                                        </div>

                                        <div style="clear: both"></div>
                                    </div>
                                </div>
                                <div class="grid_4">
                                    <div class="b-info">
                                        <div style="margin-bottom: 10px">8 903 956 4292</div>
                                        usadbavu@mail.ru
                                        <div style="font-size: 13px;margin-top: 5px"> с.Узнезя, ул.Центральная 48, <br>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="grass-substrate"
                             style="background-image: url('/themes/default/web/images/grasssubstrate.png')">

                        </div>
                    </div>
                </div>
            </div>
            <div id="stuck_container">
                <div class="container">
                    <div class="row" style="margin-right: 0">
                        <div class="grid_12">
                            <div class="menu-wrapper">
                                <nav>
                                    <?php if (Yii::app()->hasModule('menu')): ?>
                                        <?php $this->widget('application.modules.menu.widgets.MenuWidget', ['name' => 'verhnee-menyu']); ?>
                                    <?php endif; ?>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!--========================================================
                                  CONTENT
        =========================================================-->
        <section id="content">
            <div class="container">
                <div class="row" style="margin-right: 0">
                    <div class="grid_12">
                        <div style="min-height: 960px">
                            <?= $content; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
</div>
<!--========================================================
                          FOOTER
=========================================================-->
<footer id="footer">
    <div class="wrapper">
        <div class="container">
            <div class="row" style="margin-right: 0">
                <div class="grid_6" style="margin: 0">
                    <div class="privacy-block  ">
                        © <span id="copyright-year">2016</span> <a
                            href="/#">Усадьба Ника</a>
                        <br>
                        <div>
                            Телефон 8-903-956-4292, E-mail: usadbavu@mail.ru
                        </div>
                        <!--{%FOOTER_LINK} -->
                    </div>
                    <div class="cleafix"></div>
                </div>
                <div class="grid_6" style="text-align: right;margin: 0">
                    с.Узнезя, ул.Центральная 48,
                    <br>
                </div>
            </div>
        </div>
    </div>
</footer>

<script>
    $('.my-slider').unslider({
        autoplay: true,
        arrows: false,
        delay: 5200,
        speed: 2250
    });
</script>
<script>
    $('.my-slider-news').unslider({
        autoplay: true,
        arrows: false,
        delay: 5200,
        speed: 2250
    });
</script>

<script type="text/javascript">
    $(document).ready(function () {
        $(".fancybox").fancybox();
    });
</script>

<script>
    $(document).ready(function () {
        $('ul.sf-menu').superfish();
    });
</script>
<meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0">


</body>
</html>
