<?php  return array (
  'resourceClass' => 'modDocument',
  'resource' => 
  array (
    'id' => 17,
    'type' => 'document',
    'contentType' => 'text/html',
    'pagetitle' => 'Наш салон',
    'longtitle' => '',
    'description' => '',
    'alias' => 'nash-salon',
    'link_attributes' => '',
    'published' => 1,
    'pub_date' => 0,
    'unpub_date' => 0,
    'parent' => 0,
    'isfolder' => 0,
    'introtext' => '',
    'content' => '<p><span>Друг к плоскости галактики тоже будет понятно дискретными источниками. Тем, что большинство из этой полосе около галактического экватора и распределенных. Немногочисленных близких, которые случайным образом оказались в окнах видимости между облаками. Другой стороны, оптически наблюдать объекты обнаруживают. Чем у звезд с эти­ми. Источниками радиоизлучения в радиоизлучений источника радиоизлучения являются. Какой именно из галактическому экватору которого достаточно сильное галактическому экватору.</span></p>',
    'richtext' => 1,
    'template' => 6,
    'menuindex' => 7,
    'searchable' => 1,
    'cacheable' => 1,
    'createdby' => 1,
    'createdon' => 1477829355,
    'editedby' => 1,
    'editedon' => 1477939446,
    'deleted' => 0,
    'deletedon' => 0,
    'deletedby' => 0,
    'publishedon' => 1477829340,
    'publishedby' => 1,
    'menutitle' => '',
    'donthit' => 0,
    'privateweb' => 0,
    'privatemgr' => 0,
    'content_dispo' => 0,
    'hidemenu' => 0,
    'class_key' => 'modDocument',
    'context_key' => 'web',
    'content_type' => 1,
    'uri' => 'nash-salon',
    'uri_override' => 0,
    'hide_children_in_tree' => 0,
    'show_in_tree' => 1,
    'properties' => NULL,
    '_content' => '<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Наш салон</title>
    <meta name="description" content="">

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&amp;subset=cyrillic" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/main.css">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <div class="modal fade" id="headerButton" tabindex="-1" role="dialog" aria-labelledby="headerButtonLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <div class="modal-title" id="headerButtonLabel">Заказать звонок</div>
            </div>
            <div class="modal-body">
                [[!AjaxForm?
                    &snippet=`FormIt`
                    &form=`form-header`
                    &hooks=`email,spam`
                    &emailTpl=`headerEmail`
                    &emailSubject=`Заказ звонка`
                    &emailTo=`vanek988@gmail.com`
                    &validate=`headerPhone:required,headerNospam:blank`
                    &successMessage=`Заказ звонка успешно отправлен`
                ]]
            </div>
        </div>
    </div>
</div>
<div class="header affix-header">
    <div class="container">
        <div class="row header__wrap">
            <div class="col-lg-3 col-md-3 col-xs-4">
                <div class="header__logo">
                    <a class="header__link" href="/"></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 hidden-sm hidden-xs">
                <div class="header__place font_light">Минск, Тимирязева, 123/2, ТЦ “Град”, пав.229</div>
                <div class="header__time font_light">Время работы: вт - вскр, 10<sup>00</sup>-19<sup>00</sup></div>
            </div>
            <div class="col-lg-4 col-md-4 col-xs-6">
                <div class="row">
                    <div class="col-lg-9 col-md-8">
                        <a href="tel:+375291919393" class="font_light link header__phone">+37529 1919393</a>
                        <a href="mailto:salon@lacasa.by" class="header__mail font_light link hidden-sm hidden-xs">salon@lacasa.by</a>
                    </div>
                    <div class="col-lg-3 col-md-4 hidden-sm hidden-xs">
                        <a href="" target="_blank" class="insta link">
                            <object data="/assets/img/insta_green.svg" type="image/svg+xml" class="insta__img"></object>
                        </a>
                        <a href="" target="_blank" class="fb link">
                            <object data="/assets/img/fb_green.svg" type="image/svg+xml" class="fb__img"></object>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-1 hidden-sm hidden-xs">
                <button type="button" class="button header__button" data-toggle="modal" data-target="#headerButton">Заказать звонок</button>
            </div>
            <div class="col-xs-1 hidden-lg hidden-md">
                <button class="button header__menu"></button>
            </div>
        </div>
    </div>
</div>
    <div class="mobile-menu hidden-lg hidden-md">
    <div class="mobile-menu__inner">
        <ul class="list-unstyled mobile-menu__pages">
            <li class="mobile-menu__category">
                <a href="" class="mobile-menu__link link mobile-menu_toggle">Каталог</a>
                <span class="mobile-menu__ico mob-catalog"></span>
                <ul class="list-unstyled mobile-menu__submenu"><li class="mobile-menu__subitem first"><a href="/index.php?id=7" class="mobile-menu__sublink link" >Межкомнатные двери</a></li>
<li class="mobile-menu__subitem"><a href="/index.php?id=12" class="mobile-menu__sublink link" >Интерьерная мебель</a></li>
<li class="mobile-menu__subitem"><a href="/index.php?id=14" class="mobile-menu__sublink link" >Стеновые панели</a></li>
<li class="mobile-menu__subitem"><a href="/index.php?id=15" class="mobile-menu__sublink link" >Паркетная доска</a></li>
<li class="mobile-menu__subitem"><a href="/index.php?id=16" class="mobile-menu__sublink link" >Фурнитура</a></li>
<li class="mobile-menu__subitem last"><a href="/index.php?id=2" class="mobile-menu__sublink link" >Наши работы</a></li>
</ul>
            </li>
            <li class="mobile-menu__category">
                <a href="index.php?id=17" class="mobile-menu__link link">Фотогалерея</a>
                <span class="mobile-menu__ico mob-gallery"></span>
            </li>
            <li class="mobile-menu__category">
                <a href="" class="mobile-menu__link link">Услуги</a>
                <span class="mobile-menu__ico mob-services"></span>
            </li>
            <li class="mobile-menu__category">
                <a href="" class="mobile-menu__link link">Контакты</a>
                <span class="mobile-menu__ico mob-contact"></span>
            </li>
        </ul>
        <ul class="list-unstyled mobile-menu__contacts">
            <li class="mobile-menu__contact">
                <a href="tel:+375291919393" class="mobile-menu__link link">+37529 1919393</a>
                <span class="mobile-menu__ico mob-phone"></span>
            </li>
            <li class="mobile-menu__contact">
                <a href="mailto:salon@lacasa.by" class="mobile-menu__link link">salon@lacasa.by</a>
                <span class="mobile-menu__ico mob-mail"></span>
            </li>
        </ul>
        <ul class="list-unstyled mobile-menu__socials">
            <li class="mobile-menu__social">
                <a href="" target="_blank" class="mobile-menu__link link">Мы в Instagram</a>
                <span class="mobile-menu__ico mob-insta"></span>
            </li>
            <li class="mobile-menu__social">
                <a href="" target="_blank" class="mobile-menu__link link">Мы в Facebook</a>
                <span class="mobile-menu__ico mob-fb"></span>
            </li>
        </ul>
    </div>
</div>
    <div class="content">
        <div class="container">
            <div class="row flb">
                <div class="col-lg-3 col-md-3 hidden-sm hidden-xs">
    <div class="content__menu affix-menu">
        <ul class="menu list-unstyled"><li class="menu__item first"><a href="/index.php?id=7" class="link menu__link" title="Межкомнатные двери" >Межкомнатные двери</a><ul class="menu__submenu list-unstyled"><li class="menu__item first"><a href="/index.php?id=8" class="link menu__link" title="Классические" >Классика</a></li>
<li class="menu__item"><a href="/index.php?id=9" class="link menu__link" title="Современные" >Современные</a></li>
<li class="menu__item"><a href="/index.php?id=10" class="link menu__link" title="Раздвижные" >Раздвижные</a></li>
<li class="menu__item last"><a href="/index.php?id=11" class="link menu__link" title="Стеклянные" >Стеклянные</a></li>
</ul></li>
<li class="menu__item"><a href="/index.php?id=12" class="link menu__link" title="Мебель" >Интерьерная мебель</a></li>
<li class="menu__item"><a href="/index.php?id=14" class="link menu__link" title="Стеновые панели" >Стеновые панели</a></li>
<li class="menu__item"><a href="/index.php?id=15" class="link menu__link" title="Паркетная доска" >Паркетная доска</a></li>
<li class="menu__item"><a href="/index.php?id=16" class="link menu__link" title="Фурнитура" >Фурнитура</a></li>
<li class="menu__item"><a href="/index.php?id=2" class="link menu__link" title="Наши выполненные работы" >Наши работы</a></li>
<li class="menu__item last active"><a href="/index.php?id=17" class="link menu__link" title="Наш салон" >Наш салон</a></li>
</ul>
    </div>
</div>
                <div class="content__main">
                    <ul class="crumbs list-inline"><li class="crumbs__item"><a class="crumbs__link" href="/">Главная</a></li>&gt;<li class="crumbs__item">Наш салон</li></ul>
                    <h1 class="page-title">Наш салон</h1>
                    <p><span>Друг к плоскости галактики тоже будет понятно дискретными источниками. Тем, что большинство из этой полосе около галактического экватора и распределенных. Немногочисленных близких, которые случайным образом оказались в окнах видимости между облаками. Другой стороны, оптически наблюдать объекты обнаруживают. Чем у звезд с эти­ми. Источниками радиоизлучения в радиоизлучений источника радиоизлучения являются. Какой именно из галактическому экватору которого достаточно сильное галактическому экватору.</span></p>
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 hidden-sm hidden-xs">
                <div class="footer__logo">
                    <div class="footer__link"></div>
                    <div class="footer__copy">2017. Все права защищены.</div>
                </div>
            </div>
            <div class="col-lg-4 col-md-3 hidden-sm hidden-xs">
                <div class="footer__menublock">
                    <div class="footer__list-title">Меню</div>
                    <ul class="list-unstyled footer__menu">
                        <li class="footer__item"><a href="" class="footer__menu-link link">Каталог</a></li>
                        <li class="footer__item"><a href="" class="footer__menu-link link">Фотогалерея</a></li>
                        <li class="footer__item"><a href="" class="footer__menu-link link">Услуги</a></li>
                        <li class="footer__item"><a href="" class="footer__menu-link link">Контакты</a></li>
                    </ul>
                </div>
                <div class="footer__menublock">
                    <div class="footer__list-title">Каталог</div>
                    <ul class="list-unstyled footer__menu">
                        <li class="footer__item"><a href="" class="footer__menu-link link">Межкомнатные двери</a></li>
                        <li class="footer__item"><a href="" class="footer__menu-link link">Раздвижные двери</a></li>
                        <li class="footer__item"><a href="" class="footer__menu-link link">Мебель</a></li>
                        <li class="footer__item"><a href="" class="footer__menu-link link">Фурнитура</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-xs-7">
                <div class="footer__place font_light">Тимирязева, 123/2, ТЦ “Град”, пав.229</div>
                <div class="footer__time font_light">Время работы: вт - вскр с 10<sup>00</sup> до 19<sup>00</sup></div>
            </div>
            <div class="col-lg-2 col-md-3 col-xs-5">
                <a href="tel:+375291919393" class="footer__phone link">+37529 1919393</a>
                <a href="mailto:salon@lacasa.by" class="footer__mail link">salon@lacasa.by</a>
            </div>
            <div class="footer__social hidden-sm hidden-xs">
                <a href="" target="_blank" class="insta link">
                    <object data="/assets/img/insta_footer.svg" type="image/svg+xml" class="insta__img"></object>
                </a>
                <a href="" target="_blank" class="fb link">
                    <object data="/assets/img/fb_footer.svg" type="image/svg+xml" class="fb__img"></object>
                </a>
            </div>
        </div>
    </div>
</div>
<script src="/assets/js/main.js"></script>
</body>
</html>',
    '_isForward' => false,
  ),
  'contentType' => 
  array (
    'id' => 1,
    'name' => 'HTML',
    'description' => 'HTML content',
    'mime_type' => 'text/html',
    'file_extensions' => '',
    'headers' => NULL,
    'binary' => 0,
  ),
  'policyCache' => 
  array (
  ),
  'elementCache' => 
  array (
    '[[*pagetitle]]' => 'Наш салон',
    '[[*longtitle]]' => '',
    '[[*longtitle:is=``:then=`Наш салон`:else=``]]' => 'Наш салон',
    '[[*description]]' => '',
    '[[$head]]' => '<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Наш салон</title>
    <meta name="description" content="">

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&amp;subset=cyrillic" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/main.css">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>',
    '[[$header]]' => '<div class="modal fade" id="headerButton" tabindex="-1" role="dialog" aria-labelledby="headerButtonLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <div class="modal-title" id="headerButtonLabel">Заказать звонок</div>
            </div>
            <div class="modal-body">
                [[!AjaxForm?
                    &snippet=`FormIt`
                    &form=`form-header`
                    &hooks=`email,spam`
                    &emailTpl=`headerEmail`
                    &emailSubject=`Заказ звонка`
                    &emailTo=`vanek988@gmail.com`
                    &validate=`headerPhone:required,headerNospam:blank`
                    &successMessage=`Заказ звонка успешно отправлен`
                ]]
            </div>
        </div>
    </div>
</div>
<div class="header affix-header">
    <div class="container">
        <div class="row header__wrap">
            <div class="col-lg-3 col-md-3 col-xs-4">
                <div class="header__logo">
                    <a class="header__link" href="/"></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 hidden-sm hidden-xs">
                <div class="header__place font_light">Минск, Тимирязева, 123/2, ТЦ “Град”, пав.229</div>
                <div class="header__time font_light">Время работы: вт - вскр, 10<sup>00</sup>-19<sup>00</sup></div>
            </div>
            <div class="col-lg-4 col-md-4 col-xs-6">
                <div class="row">
                    <div class="col-lg-9 col-md-8">
                        <a href="tel:+375291919393" class="font_light link header__phone">+37529 1919393</a>
                        <a href="mailto:salon@lacasa.by" class="header__mail font_light link hidden-sm hidden-xs">salon@lacasa.by</a>
                    </div>
                    <div class="col-lg-3 col-md-4 hidden-sm hidden-xs">
                        <a href="" target="_blank" class="insta link">
                            <object data="/assets/img/insta_green.svg" type="image/svg+xml" class="insta__img"></object>
                        </a>
                        <a href="" target="_blank" class="fb link">
                            <object data="/assets/img/fb_green.svg" type="image/svg+xml" class="fb__img"></object>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-1 hidden-sm hidden-xs">
                <button type="button" class="button header__button" data-toggle="modal" data-target="#headerButton">Заказать звонок</button>
            </div>
            <div class="col-xs-1 hidden-lg hidden-md">
                <button class="button header__menu"></button>
            </div>
        </div>
    </div>
</div>',
    '[[Wayfinder?
                    &startId=`0`
                    &level=`1`
                    &excludeDocs=`1,17`
                    &scheme=`abs`
                    &sortBy=`menuindex`
                    &outerClass=`list-unstyled mobile-menu__submenu`
                    &rowClass=`mobile-menu__subitem`
                    &rowTpl=`@CODE:<li[[+wf.id]][[+wf.classes]]><a href="[[+wf.link]]" class="mobile-menu__sublink link" [[+wf.attributes]]>[[+wf.linktext]]</a>[[+wf.wrapper]]</li>`
                ]]' => '<ul class="list-unstyled mobile-menu__submenu"><li class="mobile-menu__subitem first"><a href="/index.php?id=7" class="mobile-menu__sublink link" >Межкомнатные двери</a></li>
<li class="mobile-menu__subitem"><a href="/index.php?id=12" class="mobile-menu__sublink link" >Интерьерная мебель</a></li>
<li class="mobile-menu__subitem"><a href="/index.php?id=14" class="mobile-menu__sublink link" >Стеновые панели</a></li>
<li class="mobile-menu__subitem"><a href="/index.php?id=15" class="mobile-menu__sublink link" >Паркетная доска</a></li>
<li class="mobile-menu__subitem"><a href="/index.php?id=16" class="mobile-menu__sublink link" >Фурнитура</a></li>
<li class="mobile-menu__subitem last"><a href="/index.php?id=2" class="mobile-menu__sublink link" >Наши работы</a></li>
</ul>',
    '[[~17]]' => 'index.php?id=17',
    '[[$mobile-menu]]' => '<div class="mobile-menu hidden-lg hidden-md">
    <div class="mobile-menu__inner">
        <ul class="list-unstyled mobile-menu__pages">
            <li class="mobile-menu__category">
                <a href="" class="mobile-menu__link link mobile-menu_toggle">Каталог</a>
                <span class="mobile-menu__ico mob-catalog"></span>
                <ul class="list-unstyled mobile-menu__submenu"><li class="mobile-menu__subitem first"><a href="/index.php?id=7" class="mobile-menu__sublink link" >Межкомнатные двери</a></li>
<li class="mobile-menu__subitem"><a href="/index.php?id=12" class="mobile-menu__sublink link" >Интерьерная мебель</a></li>
<li class="mobile-menu__subitem"><a href="/index.php?id=14" class="mobile-menu__sublink link" >Стеновые панели</a></li>
<li class="mobile-menu__subitem"><a href="/index.php?id=15" class="mobile-menu__sublink link" >Паркетная доска</a></li>
<li class="mobile-menu__subitem"><a href="/index.php?id=16" class="mobile-menu__sublink link" >Фурнитура</a></li>
<li class="mobile-menu__subitem last"><a href="/index.php?id=2" class="mobile-menu__sublink link" >Наши работы</a></li>
</ul>
            </li>
            <li class="mobile-menu__category">
                <a href="index.php?id=17" class="mobile-menu__link link">Фотогалерея</a>
                <span class="mobile-menu__ico mob-gallery"></span>
            </li>
            <li class="mobile-menu__category">
                <a href="" class="mobile-menu__link link">Услуги</a>
                <span class="mobile-menu__ico mob-services"></span>
            </li>
            <li class="mobile-menu__category">
                <a href="" class="mobile-menu__link link">Контакты</a>
                <span class="mobile-menu__ico mob-contact"></span>
            </li>
        </ul>
        <ul class="list-unstyled mobile-menu__contacts">
            <li class="mobile-menu__contact">
                <a href="tel:+375291919393" class="mobile-menu__link link">+37529 1919393</a>
                <span class="mobile-menu__ico mob-phone"></span>
            </li>
            <li class="mobile-menu__contact">
                <a href="mailto:salon@lacasa.by" class="mobile-menu__link link">salon@lacasa.by</a>
                <span class="mobile-menu__ico mob-mail"></span>
            </li>
        </ul>
        <ul class="list-unstyled mobile-menu__socials">
            <li class="mobile-menu__social">
                <a href="" target="_blank" class="mobile-menu__link link">Мы в Instagram</a>
                <span class="mobile-menu__ico mob-insta"></span>
            </li>
            <li class="mobile-menu__social">
                <a href="" target="_blank" class="mobile-menu__link link">Мы в Facebook</a>
                <span class="mobile-menu__ico mob-fb"></span>
            </li>
        </ul>
    </div>
</div>',
    '[[Wayfinder?
            &startId=`0`
            &level=`2`
            &excludeDocs=`1`
            &scheme=`abs`
            &sortBy=`menuindex`
            &outerClass=`menu list-unstyled`
            &innerClass=`menu__submenu list-unstyled`
            &rowClass=`menu__item`
            &rowTpl=`@CODE:<li[[+wf.id]][[+wf.classes]]><a href="[[+wf.link]]" class="link menu__link" title="[[+wf.title]]" [[+wf.attributes]]>[[+wf.linktext]]</a>[[+wf.wrapper]]</li>`
        ]]' => '<ul class="menu list-unstyled"><li class="menu__item first"><a href="/index.php?id=7" class="link menu__link" title="Межкомнатные двери" >Межкомнатные двери</a><ul class="menu__submenu list-unstyled"><li class="menu__item first"><a href="/index.php?id=8" class="link menu__link" title="Классические" >Классика</a></li>
<li class="menu__item"><a href="/index.php?id=9" class="link menu__link" title="Современные" >Современные</a></li>
<li class="menu__item"><a href="/index.php?id=10" class="link menu__link" title="Раздвижные" >Раздвижные</a></li>
<li class="menu__item last"><a href="/index.php?id=11" class="link menu__link" title="Стеклянные" >Стеклянные</a></li>
</ul></li>
<li class="menu__item"><a href="/index.php?id=12" class="link menu__link" title="Мебель" >Интерьерная мебель</a></li>
<li class="menu__item"><a href="/index.php?id=14" class="link menu__link" title="Стеновые панели" >Стеновые панели</a></li>
<li class="menu__item"><a href="/index.php?id=15" class="link menu__link" title="Паркетная доска" >Паркетная доска</a></li>
<li class="menu__item"><a href="/index.php?id=16" class="link menu__link" title="Фурнитура" >Фурнитура</a></li>
<li class="menu__item"><a href="/index.php?id=2" class="link menu__link" title="Наши выполненные работы" >Наши работы</a></li>
<li class="menu__item last active"><a href="/index.php?id=17" class="link menu__link" title="Наш салон" >Наш салон</a></li>
</ul>',
    '[[$left-menu]]' => '<div class="col-lg-3 col-md-3 hidden-sm hidden-xs">
    <div class="content__menu affix-menu">
        <ul class="menu list-unstyled"><li class="menu__item first"><a href="/index.php?id=7" class="link menu__link" title="Межкомнатные двери" >Межкомнатные двери</a><ul class="menu__submenu list-unstyled"><li class="menu__item first"><a href="/index.php?id=8" class="link menu__link" title="Классические" >Классика</a></li>
<li class="menu__item"><a href="/index.php?id=9" class="link menu__link" title="Современные" >Современные</a></li>
<li class="menu__item"><a href="/index.php?id=10" class="link menu__link" title="Раздвижные" >Раздвижные</a></li>
<li class="menu__item last"><a href="/index.php?id=11" class="link menu__link" title="Стеклянные" >Стеклянные</a></li>
</ul></li>
<li class="menu__item"><a href="/index.php?id=12" class="link menu__link" title="Мебель" >Интерьерная мебель</a></li>
<li class="menu__item"><a href="/index.php?id=14" class="link menu__link" title="Стеновые панели" >Стеновые панели</a></li>
<li class="menu__item"><a href="/index.php?id=15" class="link menu__link" title="Паркетная доска" >Паркетная доска</a></li>
<li class="menu__item"><a href="/index.php?id=16" class="link menu__link" title="Фурнитура" >Фурнитура</a></li>
<li class="menu__item"><a href="/index.php?id=2" class="link menu__link" title="Наши выполненные работы" >Наши работы</a></li>
<li class="menu__item last active"><a href="/index.php?id=17" class="link menu__link" title="Наш салон" >Наш салон</a></li>
</ul>
    </div>
</div>',
    '[[BreadCrumb? 
    &scheme=`abs`
    &containerTpl=`crumbs-container`
    &homeCrumbTpl=`crumbs-home`
    &currentCrumbTpl=`crumbs-current`
    &linkCrumbTpl=`crumbs-link`
]]' => '<ul class="crumbs list-inline"><li class="crumbs__item"><a class="crumbs__link" href="/">Главная</a></li>&gt;<li class="crumbs__item">Наш салон</li></ul>',
    '[[$crumbs]]' => '<ul class="crumbs list-inline"><li class="crumbs__item"><a class="crumbs__link" href="/">Главная</a></li>&gt;<li class="crumbs__item">Наш салон</li></ul>',
    '[[getDate:date=`%Y`]]' => '2017',
    '[[$footer]]' => '<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 hidden-sm hidden-xs">
                <div class="footer__logo">
                    <div class="footer__link"></div>
                    <div class="footer__copy">2017. Все права защищены.</div>
                </div>
            </div>
            <div class="col-lg-4 col-md-3 hidden-sm hidden-xs">
                <div class="footer__menublock">
                    <div class="footer__list-title">Меню</div>
                    <ul class="list-unstyled footer__menu">
                        <li class="footer__item"><a href="" class="footer__menu-link link">Каталог</a></li>
                        <li class="footer__item"><a href="" class="footer__menu-link link">Фотогалерея</a></li>
                        <li class="footer__item"><a href="" class="footer__menu-link link">Услуги</a></li>
                        <li class="footer__item"><a href="" class="footer__menu-link link">Контакты</a></li>
                    </ul>
                </div>
                <div class="footer__menublock">
                    <div class="footer__list-title">Каталог</div>
                    <ul class="list-unstyled footer__menu">
                        <li class="footer__item"><a href="" class="footer__menu-link link">Межкомнатные двери</a></li>
                        <li class="footer__item"><a href="" class="footer__menu-link link">Раздвижные двери</a></li>
                        <li class="footer__item"><a href="" class="footer__menu-link link">Мебель</a></li>
                        <li class="footer__item"><a href="" class="footer__menu-link link">Фурнитура</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-xs-7">
                <div class="footer__place font_light">Тимирязева, 123/2, ТЦ “Град”, пав.229</div>
                <div class="footer__time font_light">Время работы: вт - вскр с 10<sup>00</sup> до 19<sup>00</sup></div>
            </div>
            <div class="col-lg-2 col-md-3 col-xs-5">
                <a href="tel:+375291919393" class="footer__phone link">+37529 1919393</a>
                <a href="mailto:salon@lacasa.by" class="footer__mail link">salon@lacasa.by</a>
            </div>
            <div class="footer__social hidden-sm hidden-xs">
                <a href="" target="_blank" class="insta link">
                    <object data="/assets/img/insta_footer.svg" type="image/svg+xml" class="insta__img"></object>
                </a>
                <a href="" target="_blank" class="fb link">
                    <object data="/assets/img/fb_footer.svg" type="image/svg+xml" class="fb__img"></object>
                </a>
            </div>
        </div>
    </div>
</div>
<script src="/assets/js/main.js"></script>',
    '[[*id]]' => 17,
  ),
  'sourceCache' => 
  array (
    'modChunk' => 
    array (
      'head' => 
      array (
        'fields' => 
        array (
          'id' => 1,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'head',
          'description' => '',
          'editor_type' => 0,
          'category' => 0,
          'cache_type' => 0,
          'snippet' => '<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>[[*longtitle:is=``:then=`[[*pagetitle]]`:else=`[[*longtitle]]`]]</title>
    <meta name="description" content="[[*description]]">

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&amp;subset=cyrillic" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/main.css">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>[[*longtitle:is=``:then=`[[*pagetitle]]`:else=`[[*longtitle]]`]]</title>
    <meta name="description" content="[[*description]]">

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&amp;subset=cyrillic" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/main.css">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'header' => 
      array (
        'fields' => 
        array (
          'id' => 2,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'header',
          'description' => '',
          'editor_type' => 0,
          'category' => 0,
          'cache_type' => 0,
          'snippet' => '<div class="modal fade" id="headerButton" tabindex="-1" role="dialog" aria-labelledby="headerButtonLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <div class="modal-title" id="headerButtonLabel">Заказать звонок</div>
            </div>
            <div class="modal-body">
                [[!AjaxForm?
                    &snippet=`FormIt`
                    &form=`form-header`
                    &hooks=`email,spam`
                    &emailTpl=`headerEmail`
                    &emailSubject=`Заказ звонка`
                    &emailTo=`vanek988@gmail.com`
                    &validate=`headerPhone:required,headerNospam:blank`
                    &successMessage=`Заказ звонка успешно отправлен`
                ]]
            </div>
        </div>
    </div>
</div>
<div class="header affix-header">
    <div class="container">
        <div class="row header__wrap">
            <div class="col-lg-3 col-md-3 col-xs-4">
                <div class="header__logo">
                    <a class="header__link" href="/"></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 hidden-sm hidden-xs">
                <div class="header__place font_light">Минск, Тимирязева, 123/2, ТЦ “Град”, пав.229</div>
                <div class="header__time font_light">Время работы: вт - вскр, 10<sup>00</sup>-19<sup>00</sup></div>
            </div>
            <div class="col-lg-4 col-md-4 col-xs-6">
                <div class="row">
                    <div class="col-lg-9 col-md-8">
                        <a href="tel:+375291919393" class="font_light link header__phone">+37529 1919393</a>
                        <a href="mailto:salon@lacasa.by" class="header__mail font_light link hidden-sm hidden-xs">salon@lacasa.by</a>
                    </div>
                    <div class="col-lg-3 col-md-4 hidden-sm hidden-xs">
                        <a href="" target="_blank" class="insta link">
                            <object data="/assets/img/insta_green.svg" type="image/svg+xml" class="insta__img"></object>
                        </a>
                        <a href="" target="_blank" class="fb link">
                            <object data="/assets/img/fb_green.svg" type="image/svg+xml" class="fb__img"></object>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-1 hidden-sm hidden-xs">
                <button type="button" class="button header__button" data-toggle="modal" data-target="#headerButton">Заказать звонок</button>
            </div>
            <div class="col-xs-1 hidden-lg hidden-md">
                <button class="button header__menu"></button>
            </div>
        </div>
    </div>
</div>',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '<div class="modal fade" id="headerButton" tabindex="-1" role="dialog" aria-labelledby="headerButtonLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <div class="modal-title" id="headerButtonLabel">Заказать звонок</div>
            </div>
            <div class="modal-body">
                [[!AjaxForm?
                    &snippet=`FormIt`
                    &form=`form-header`
                    &hooks=`email,spam`
                    &emailTpl=`headerEmail`
                    &emailSubject=`Заказ звонка`
                    &emailTo=`vanek988@gmail.com`
                    &validate=`headerPhone:required,headerNospam:blank`
                    &successMessage=`Заказ звонка успешно отправлен`
                ]]
            </div>
        </div>
    </div>
</div>
<div class="header affix-header">
    <div class="container">
        <div class="row header__wrap">
            <div class="col-lg-3 col-md-3 col-xs-4">
                <div class="header__logo">
                    <a class="header__link" href="/"></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 hidden-sm hidden-xs">
                <div class="header__place font_light">Минск, Тимирязева, 123/2, ТЦ “Град”, пав.229</div>
                <div class="header__time font_light">Время работы: вт - вскр, 10<sup>00</sup>-19<sup>00</sup></div>
            </div>
            <div class="col-lg-4 col-md-4 col-xs-6">
                <div class="row">
                    <div class="col-lg-9 col-md-8">
                        <a href="tel:+375291919393" class="font_light link header__phone">+37529 1919393</a>
                        <a href="mailto:salon@lacasa.by" class="header__mail font_light link hidden-sm hidden-xs">salon@lacasa.by</a>
                    </div>
                    <div class="col-lg-3 col-md-4 hidden-sm hidden-xs">
                        <a href="" target="_blank" class="insta link">
                            <object data="/assets/img/insta_green.svg" type="image/svg+xml" class="insta__img"></object>
                        </a>
                        <a href="" target="_blank" class="fb link">
                            <object data="/assets/img/fb_green.svg" type="image/svg+xml" class="fb__img"></object>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-1 hidden-sm hidden-xs">
                <button type="button" class="button header__button" data-toggle="modal" data-target="#headerButton">Заказать звонок</button>
            </div>
            <div class="col-xs-1 hidden-lg hidden-md">
                <button class="button header__menu"></button>
            </div>
        </div>
    </div>
</div>',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'mobile-menu' => 
      array (
        'fields' => 
        array (
          'id' => 4,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'mobile-menu',
          'description' => '',
          'editor_type' => 0,
          'category' => 0,
          'cache_type' => 0,
          'snippet' => '<div class="mobile-menu hidden-lg hidden-md">
    <div class="mobile-menu__inner">
        <ul class="list-unstyled mobile-menu__pages">
            <li class="mobile-menu__category">
                <a href="" class="mobile-menu__link link mobile-menu_toggle">Каталог</a>
                <span class="mobile-menu__ico mob-catalog"></span>
                [[Wayfinder?
                    &startId=`0`
                    &level=`1`
                    &excludeDocs=`1,17`
                    &scheme=`abs`
                    &sortBy=`menuindex`
                    &outerClass=`list-unstyled mobile-menu__submenu`
                    &rowClass=`mobile-menu__subitem`
                    &rowTpl=`@CODE:<li[[+wf.id]][[+wf.classes]]><a href="[[+wf.link]]" class="mobile-menu__sublink link" [[+wf.attributes]]>[[+wf.linktext]]</a>[[+wf.wrapper]]</li>`
                ]]
            </li>
            <li class="mobile-menu__category">
                <a href="[[~17]]" class="mobile-menu__link link">Фотогалерея</a>
                <span class="mobile-menu__ico mob-gallery"></span>
            </li>
            <li class="mobile-menu__category">
                <a href="" class="mobile-menu__link link">Услуги</a>
                <span class="mobile-menu__ico mob-services"></span>
            </li>
            <li class="mobile-menu__category">
                <a href="" class="mobile-menu__link link">Контакты</a>
                <span class="mobile-menu__ico mob-contact"></span>
            </li>
        </ul>
        <ul class="list-unstyled mobile-menu__contacts">
            <li class="mobile-menu__contact">
                <a href="tel:+375291919393" class="mobile-menu__link link">+37529 1919393</a>
                <span class="mobile-menu__ico mob-phone"></span>
            </li>
            <li class="mobile-menu__contact">
                <a href="mailto:salon@lacasa.by" class="mobile-menu__link link">salon@lacasa.by</a>
                <span class="mobile-menu__ico mob-mail"></span>
            </li>
        </ul>
        <ul class="list-unstyled mobile-menu__socials">
            <li class="mobile-menu__social">
                <a href="" target="_blank" class="mobile-menu__link link">Мы в Instagram</a>
                <span class="mobile-menu__ico mob-insta"></span>
            </li>
            <li class="mobile-menu__social">
                <a href="" target="_blank" class="mobile-menu__link link">Мы в Facebook</a>
                <span class="mobile-menu__ico mob-fb"></span>
            </li>
        </ul>
    </div>
</div>',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '<div class="mobile-menu hidden-lg hidden-md">
    <div class="mobile-menu__inner">
        <ul class="list-unstyled mobile-menu__pages">
            <li class="mobile-menu__category">
                <a href="" class="mobile-menu__link link mobile-menu_toggle">Каталог</a>
                <span class="mobile-menu__ico mob-catalog"></span>
                [[Wayfinder?
                    &startId=`0`
                    &level=`1`
                    &excludeDocs=`1,17`
                    &scheme=`abs`
                    &sortBy=`menuindex`
                    &outerClass=`list-unstyled mobile-menu__submenu`
                    &rowClass=`mobile-menu__subitem`
                    &rowTpl=`@CODE:<li[[+wf.id]][[+wf.classes]]><a href="[[+wf.link]]" class="mobile-menu__sublink link" [[+wf.attributes]]>[[+wf.linktext]]</a>[[+wf.wrapper]]</li>`
                ]]
            </li>
            <li class="mobile-menu__category">
                <a href="[[~17]]" class="mobile-menu__link link">Фотогалерея</a>
                <span class="mobile-menu__ico mob-gallery"></span>
            </li>
            <li class="mobile-menu__category">
                <a href="" class="mobile-menu__link link">Услуги</a>
                <span class="mobile-menu__ico mob-services"></span>
            </li>
            <li class="mobile-menu__category">
                <a href="" class="mobile-menu__link link">Контакты</a>
                <span class="mobile-menu__ico mob-contact"></span>
            </li>
        </ul>
        <ul class="list-unstyled mobile-menu__contacts">
            <li class="mobile-menu__contact">
                <a href="tel:+375291919393" class="mobile-menu__link link">+37529 1919393</a>
                <span class="mobile-menu__ico mob-phone"></span>
            </li>
            <li class="mobile-menu__contact">
                <a href="mailto:salon@lacasa.by" class="mobile-menu__link link">salon@lacasa.by</a>
                <span class="mobile-menu__ico mob-mail"></span>
            </li>
        </ul>
        <ul class="list-unstyled mobile-menu__socials">
            <li class="mobile-menu__social">
                <a href="" target="_blank" class="mobile-menu__link link">Мы в Instagram</a>
                <span class="mobile-menu__ico mob-insta"></span>
            </li>
            <li class="mobile-menu__social">
                <a href="" target="_blank" class="mobile-menu__link link">Мы в Facebook</a>
                <span class="mobile-menu__ico mob-fb"></span>
            </li>
        </ul>
    </div>
</div>',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'left-menu' => 
      array (
        'fields' => 
        array (
          'id' => 13,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'left-menu',
          'description' => '',
          'editor_type' => 0,
          'category' => 0,
          'cache_type' => 0,
          'snippet' => '<div class="col-lg-3 col-md-3 hidden-sm hidden-xs">
    <div class="content__menu affix-menu">
        [[Wayfinder?
            &startId=`0`
            &level=`2`
            &excludeDocs=`1`
            &scheme=`abs`
            &sortBy=`menuindex`
            &outerClass=`menu list-unstyled`
            &innerClass=`menu__submenu list-unstyled`
            &rowClass=`menu__item`
            &rowTpl=`@CODE:<li[[+wf.id]][[+wf.classes]]><a href="[[+wf.link]]" class="link menu__link" title="[[+wf.title]]" [[+wf.attributes]]>[[+wf.linktext]]</a>[[+wf.wrapper]]</li>`
        ]]
    </div>
</div>',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '<div class="col-lg-3 col-md-3 hidden-sm hidden-xs">
    <div class="content__menu affix-menu">
        [[Wayfinder?
            &startId=`0`
            &level=`2`
            &excludeDocs=`1`
            &scheme=`abs`
            &sortBy=`menuindex`
            &outerClass=`menu list-unstyled`
            &innerClass=`menu__submenu list-unstyled`
            &rowClass=`menu__item`
            &rowTpl=`@CODE:<li[[+wf.id]][[+wf.classes]]><a href="[[+wf.link]]" class="link menu__link" title="[[+wf.title]]" [[+wf.attributes]]>[[+wf.linktext]]</a>[[+wf.wrapper]]</li>`
        ]]
    </div>
</div>',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'crumbs' => 
      array (
        'fields' => 
        array (
          'id' => 5,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'crumbs',
          'description' => '',
          'editor_type' => 0,
          'category' => 5,
          'cache_type' => 0,
          'snippet' => '[[BreadCrumb? 
    &scheme=`abs`
    &containerTpl=`crumbs-container`
    &homeCrumbTpl=`crumbs-home`
    &currentCrumbTpl=`crumbs-current`
    &linkCrumbTpl=`crumbs-link`
]]',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '[[BreadCrumb? 
    &scheme=`abs`
    &containerTpl=`crumbs-container`
    &homeCrumbTpl=`crumbs-home`
    &currentCrumbTpl=`crumbs-current`
    &linkCrumbTpl=`crumbs-link`
]]',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'footer' => 
      array (
        'fields' => 
        array (
          'id' => 3,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'footer',
          'description' => '',
          'editor_type' => 0,
          'category' => 0,
          'cache_type' => 0,
          'snippet' => '<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 hidden-sm hidden-xs">
                <div class="footer__logo">
                    <div class="footer__link"></div>
                    <div class="footer__copy">[[getDate:date=`%Y`]]. Все права защищены.</div>
                </div>
            </div>
            <div class="col-lg-4 col-md-3 hidden-sm hidden-xs">
                <div class="footer__menublock">
                    <div class="footer__list-title">Меню</div>
                    <ul class="list-unstyled footer__menu">
                        <li class="footer__item"><a href="" class="footer__menu-link link">Каталог</a></li>
                        <li class="footer__item"><a href="" class="footer__menu-link link">Фотогалерея</a></li>
                        <li class="footer__item"><a href="" class="footer__menu-link link">Услуги</a></li>
                        <li class="footer__item"><a href="" class="footer__menu-link link">Контакты</a></li>
                    </ul>
                </div>
                <div class="footer__menublock">
                    <div class="footer__list-title">Каталог</div>
                    <ul class="list-unstyled footer__menu">
                        <li class="footer__item"><a href="" class="footer__menu-link link">Межкомнатные двери</a></li>
                        <li class="footer__item"><a href="" class="footer__menu-link link">Раздвижные двери</a></li>
                        <li class="footer__item"><a href="" class="footer__menu-link link">Мебель</a></li>
                        <li class="footer__item"><a href="" class="footer__menu-link link">Фурнитура</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-xs-7">
                <div class="footer__place font_light">Тимирязева, 123/2, ТЦ “Град”, пав.229</div>
                <div class="footer__time font_light">Время работы: вт - вскр с 10<sup>00</sup> до 19<sup>00</sup></div>
            </div>
            <div class="col-lg-2 col-md-3 col-xs-5">
                <a href="tel:+375291919393" class="footer__phone link">+37529 1919393</a>
                <a href="mailto:salon@lacasa.by" class="footer__mail link">salon@lacasa.by</a>
            </div>
            <div class="footer__social hidden-sm hidden-xs">
                <a href="" target="_blank" class="insta link">
                    <object data="/assets/img/insta_footer.svg" type="image/svg+xml" class="insta__img"></object>
                </a>
                <a href="" target="_blank" class="fb link">
                    <object data="/assets/img/fb_footer.svg" type="image/svg+xml" class="fb__img"></object>
                </a>
            </div>
        </div>
    </div>
</div>
<script src="/assets/js/main.js"></script>',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 hidden-sm hidden-xs">
                <div class="footer__logo">
                    <div class="footer__link"></div>
                    <div class="footer__copy">[[getDate:date=`%Y`]]. Все права защищены.</div>
                </div>
            </div>
            <div class="col-lg-4 col-md-3 hidden-sm hidden-xs">
                <div class="footer__menublock">
                    <div class="footer__list-title">Меню</div>
                    <ul class="list-unstyled footer__menu">
                        <li class="footer__item"><a href="" class="footer__menu-link link">Каталог</a></li>
                        <li class="footer__item"><a href="" class="footer__menu-link link">Фотогалерея</a></li>
                        <li class="footer__item"><a href="" class="footer__menu-link link">Услуги</a></li>
                        <li class="footer__item"><a href="" class="footer__menu-link link">Контакты</a></li>
                    </ul>
                </div>
                <div class="footer__menublock">
                    <div class="footer__list-title">Каталог</div>
                    <ul class="list-unstyled footer__menu">
                        <li class="footer__item"><a href="" class="footer__menu-link link">Межкомнатные двери</a></li>
                        <li class="footer__item"><a href="" class="footer__menu-link link">Раздвижные двери</a></li>
                        <li class="footer__item"><a href="" class="footer__menu-link link">Мебель</a></li>
                        <li class="footer__item"><a href="" class="footer__menu-link link">Фурнитура</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-xs-7">
                <div class="footer__place font_light">Тимирязева, 123/2, ТЦ “Град”, пав.229</div>
                <div class="footer__time font_light">Время работы: вт - вскр с 10<sup>00</sup> до 19<sup>00</sup></div>
            </div>
            <div class="col-lg-2 col-md-3 col-xs-5">
                <a href="tel:+375291919393" class="footer__phone link">+37529 1919393</a>
                <a href="mailto:salon@lacasa.by" class="footer__mail link">salon@lacasa.by</a>
            </div>
            <div class="footer__social hidden-sm hidden-xs">
                <a href="" target="_blank" class="insta link">
                    <object data="/assets/img/insta_footer.svg" type="image/svg+xml" class="insta__img"></object>
                </a>
                <a href="" target="_blank" class="fb link">
                    <object data="/assets/img/fb_footer.svg" type="image/svg+xml" class="fb__img"></object>
                </a>
            </div>
        </div>
    </div>
</div>
<script src="/assets/js/main.js"></script>',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'form-header' => 
      array (
        'fields' => 
        array (
          'id' => 26,
          'source' => 0,
          'property_preprocess' => false,
          'name' => 'form-header',
          'description' => '',
          'editor_type' => 0,
          'category' => 8,
          'cache_type' => 0,
          'snippet' => '<span>[[+fi.successMessage]]</span>
[[!+fi.validation_error_message:notempty=`<p>[[!+fi.validation_error_message]]</p>`]]
<form role="form" action="[[~[[*id]]]]" method="post" class="ajax_form">
    <input type="hidden" name="nospam:blank" value="[[+fi.headerNospam]]" />
    <div class="form-group col-md-13">
        <input type="text" class="form-control" name="headerName" value="[[!+fi.headerName]]" placeholder="Ваше имя">
    </div>
    <div class="form-group col-md-13">
        <input type="tel" class="form-control" name="headerPhone" value="[[!+fi.headerPhone]]" placeholder="Телефон*">
    </div>
    <div class="form-group text-center">
        <button type="submit" class="button button-submit">Отправить</button>
    </div>
</form>',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '<span>[[+fi.successMessage]]</span>
[[!+fi.validation_error_message:notempty=`<p>[[!+fi.validation_error_message]]</p>`]]
<form role="form" action="[[~[[*id]]]]" method="post" class="ajax_form">
    <input type="hidden" name="nospam:blank" value="[[+fi.headerNospam]]" />
    <div class="form-group col-md-13">
        <input type="text" class="form-control" name="headerName" value="[[!+fi.headerName]]" placeholder="Ваше имя">
    </div>
    <div class="form-group col-md-13">
        <input type="tel" class="form-control" name="headerPhone" value="[[!+fi.headerPhone]]" placeholder="Телефон*">
    </div>
    <div class="form-group text-center">
        <button type="submit" class="button button-submit">Отправить</button>
    </div>
</form>',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
        ),
      ),
    ),
    'modSnippet' => 
    array (
      'Wayfinder' => 
      array (
        'fields' => 
        array (
          'id' => 23,
          'source' => 0,
          'property_preprocess' => false,
          'name' => 'Wayfinder',
          'description' => 'Wayfinder for MODx Revolution 2.0.0-beta-5 and later.',
          'editor_type' => 0,
          'category' => 0,
          'cache_type' => 0,
          'snippet' => '/**
 * Wayfinder Snippet to build site navigation menus
 *
 * Totally refactored from original DropMenu nav builder to make it easier to
 * create custom navigation by using chunks as output templates. By using
 * templates, many of the paramaters are no longer needed for flexible output
 * including tables, unordered- or ordered-lists (ULs or OLs), definition lists
 * (DLs) or in any other format you desire.
 *
 * @version 2.1.1-beta5
 * @author Garry Nutting (collabpad.com)
 * @author Kyle Jaebker (muddydogpaws.com)
 * @author Ryan Thrash (modx.com)
 * @author Shaun McCormick (modx.com)
 * @author Jason Coward (modx.com)
 *
 * @example [[Wayfinder? &startId=`0`]]
 *
 * @var modX $modx
 * @var array $scriptProperties
 * 
 * @package wayfinder
 */
$wayfinder_base = $modx->getOption(\'wayfinder.core_path\',$scriptProperties,$modx->getOption(\'core_path\').\'components/wayfinder/\');

/* include a custom config file if specified */
if (isset($scriptProperties[\'config\'])) {
    $scriptProperties[\'config\'] = str_replace(\'../\',\'\',$scriptProperties[\'config\']);
    $scriptProperties[\'config\'] = $wayfinder_base.\'configs/\'.$scriptProperties[\'config\'].\'.config.php\';
} else {
    $scriptProperties[\'config\'] = $wayfinder_base.\'configs/default.config.php\';
}
if (file_exists($scriptProperties[\'config\'])) {
    include $scriptProperties[\'config\'];
}

/* include wayfinder class */
include_once $wayfinder_base.\'wayfinder.class.php\';
if (!$modx->loadClass(\'Wayfinder\',$wayfinder_base,true,true)) {
    return \'error: Wayfinder class not found\';
}
$wf = new Wayfinder($modx,$scriptProperties);

/* get user class definitions
 * TODO: eventually move these into config parameters */
$wf->_css = array(
    \'first\' => isset($firstClass) ? $firstClass : \'\',
    \'last\' => isset($lastClass) ? $lastClass : \'last\',
    \'here\' => isset($hereClass) ? $hereClass : \'active\',
    \'parent\' => isset($parentClass) ? $parentClass : \'\',
    \'row\' => isset($rowClass) ? $rowClass : \'\',
    \'outer\' => isset($outerClass) ? $outerClass : \'\',
    \'inner\' => isset($innerClass) ? $innerClass : \'\',
    \'level\' => isset($levelClass) ? $levelClass: \'\',
    \'self\' => isset($selfClass) ? $selfClass : \'\',
    \'weblink\' => isset($webLinkClass) ? $webLinkClass : \'\'
);

/* get user templates
 * TODO: eventually move these into config parameters */
$wf->_templates = array(
    \'outerTpl\' => isset($outerTpl) ? $outerTpl : \'\',
    \'rowTpl\' => isset($rowTpl) ? $rowTpl : \'\',
    \'parentRowTpl\' => isset($parentRowTpl) ? $parentRowTpl : \'\',
    \'parentRowHereTpl\' => isset($parentRowHereTpl) ? $parentRowHereTpl : \'\',
    \'hereTpl\' => isset($hereTpl) ? $hereTpl : \'\',
    \'innerTpl\' => isset($innerTpl) ? $innerTpl : \'\',
    \'innerRowTpl\' => isset($innerRowTpl) ? $innerRowTpl : \'\',
    \'innerHereTpl\' => isset($innerHereTpl) ? $innerHereTpl : \'\',
    \'activeParentRowTpl\' => isset($activeParentRowTpl) ? $activeParentRowTpl : \'\',
    \'categoryFoldersTpl\' => isset($categoryFoldersTpl) ? $categoryFoldersTpl : \'\',
    \'startItemTpl\' => isset($startItemTpl) ? $startItemTpl : \'\'
);

/* process Wayfinder */
$output = $wf->run();
if ($wf->_config[\'debug\']) {
    $output .= $wf->renderDebugOutput();
}

/* output results */
if ($wf->_config[\'ph\']) {
    $modx->setPlaceholder($wf->_config[\'ph\'],$output);
} else {
    return $output;
}',
          'locked' => false,
          'properties' => 
          array (
            'level' => 
            array (
              'name' => 'level',
              'desc' => 'prop_wayfinder.level_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '0',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Depth (number of levels) to build the menu from. 0 goes through all levels.',
              'area' => '',
              'area_trans' => '',
            ),
            'includeDocs' => 
            array (
              'name' => 'includeDocs',
              'desc' => 'prop_wayfinder.includeDocs_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '0',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Acts as a filter and will limit the output to only the documents specified in this parameter. The startId is still required.',
              'area' => '',
              'area_trans' => '',
            ),
            'excludeDocs' => 
            array (
              'name' => 'excludeDocs',
              'desc' => 'prop_wayfinder.excludeDocs_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '0',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Acts as a filter and will remove the documents specified in this parameter from the output. The startId is still required.',
              'area' => '',
              'area_trans' => '',
            ),
            'contexts' => 
            array (
              'name' => 'contexts',
              'desc' => 'prop_wayfinder.contexts_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Specify the contexts for the Resources that will be loaded in this menu. Useful when used with startId at 0 to show all first-level items. Note: This will increase load times a bit, but if you set cacheResults to 1, that will offset the load time.',
              'area' => '',
              'area_trans' => '',
            ),
            'cacheResults' => 
            array (
              'name' => 'cacheResults',
              'desc' => 'prop_wayfinder.cacheResults_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => true,
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Cache the generated menu to the MODX Resource cache. Setting this to 1 will speed up the loading of your menus.',
              'area' => '',
              'area_trans' => '',
            ),
            'cacheTime' => 
            array (
              'name' => 'cacheTime',
              'desc' => 'prop_wayfinder.cacheTime_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 3600,
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'The number of seconds to store the cached menu, if cacheResults is 1. Set to 0 to store indefinitely until cache is manually cleared.',
              'area' => '',
              'area_trans' => '',
            ),
            'ph' => 
            array (
              'name' => 'ph',
              'desc' => 'prop_wayfinder.ph_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'To display send the output of Wayfinder to a placeholder set the ph parameter equal to the name of the desired placeholder. All output including the debugging (if on) will be sent to the placeholder specified.',
              'area' => '',
              'area_trans' => '',
            ),
            'debug' => 
            array (
              'name' => 'debug',
              'desc' => 'prop_wayfinder.debug_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'With the debug parameter set to 1, Wayfinder will output information on how each Resource was processed.',
              'area' => '',
              'area_trans' => '',
            ),
            'ignoreHidden' => 
            array (
              'name' => 'ignoreHidden',
              'desc' => 'prop_wayfinder.ignoreHidden_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'The ignoreHidden parameter allows Wayfinder to ignore the display in menu flag that can be set for each document. With this parameter set to 1, all Resources will be displayed regardless of the Display in Menu flag.',
              'area' => '',
              'area_trans' => '',
            ),
            'hideSubMenus' => 
            array (
              'name' => 'hideSubMenus',
              'desc' => 'prop_wayfinder.hideSubMenus_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'The hideSubMenus parameter will remove all non-active submenus from the Wayfinder output if set to 1. This parameter only works if multiple levels are being displayed.',
              'area' => '',
              'area_trans' => '',
            ),
            'useWeblinkUrl' => 
            array (
              'name' => 'useWeblinkUrl',
              'desc' => 'prop_wayfinder.useWeblinkUrl_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => true,
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => ' If WebLinks are used in the output, Wayfinder will output the link specified in the WebLink instead of the normal MODx link. To use the standard display of WebLinks (like any other Resource) set this to 0.',
              'area' => '',
              'area_trans' => '',
            ),
            'fullLink' => 
            array (
              'name' => 'fullLink',
              'desc' => 'prop_wayfinder.fullLink_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'If set to 1, will display the entire, absolute URL in the link. (It is recommended to use scheme instead.)',
              'area' => '',
              'area_trans' => '',
            ),
            'scheme' => 
            array (
              'name' => 'scheme',
              'desc' => 'prop_wayfinder.scheme_desc',
              'type' => 'list',
              'options' => 
              array (
                0 => 
                array (
                  'text' => 'prop_wayfinder.relative',
                  'value' => '',
                  'name' => 'Relative',
                ),
                1 => 
                array (
                  'text' => 'prop_wayfinder.absolute',
                  'value' => 'abs',
                  'name' => 'Absolute',
                ),
                2 => 
                array (
                  'text' => 'prop_wayfinder.full',
                  'value' => 'full',
                  'name' => 'Full',
                ),
              ),
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Determines how URLs are generated for each link. Set to "abs" to show the absolute URL, "full" to show the full URL, and blank to use the relative URL. Defaults to relative.',
              'area' => '',
              'area_trans' => '',
            ),
            'sortOrder' => 
            array (
              'name' => 'sortOrder',
              'desc' => 'prop_wayfinder.sortOrder_desc',
              'type' => 'list',
              'options' => 
              array (
                0 => 
                array (
                  'text' => 'prop_wayfinder.ascending',
                  'value' => 'ASC',
                  'name' => 'Ascending',
                ),
                1 => 
                array (
                  'text' => 'prop_wayfinder.descending',
                  'value' => 'DESC',
                  'name' => 'Descending',
                ),
              ),
              'value' => 'ASC',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Allows the menu to be sorted in either ascending or descending order.',
              'area' => '',
              'area_trans' => '',
            ),
            'sortBy' => 
            array (
              'name' => 'sortBy',
              'desc' => 'prop_wayfinder.sortBy_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'menuindex',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Sorts the output by any of the Resource fields on a level by level basis. This means that each submenu will be sorted independently of all other submenus at the same level. Random will sort the output differently every time the page is loaded if the snippet is called uncached.',
              'area' => '',
              'area_trans' => '',
            ),
            'limit' => 
            array (
              'name' => 'limit',
              'desc' => 'prop_wayfinder.limit_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '0',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Causes Wayfinder to only process the number of items specified per level.',
              'area' => '',
              'area_trans' => '',
            ),
            'cssTpl' => 
            array (
              'name' => 'cssTpl',
              'desc' => 'prop_wayfinder.cssTpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => false,
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'This parameter allows for a chunk containing a link to a style sheet or style information to be inserted into the head section of the generated page.',
              'area' => '',
              'area_trans' => '',
            ),
            'jsTpl' => 
            array (
              'name' => 'jsTpl',
              'desc' => 'prop_wayfinder.jsTpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => false,
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'This parameter allows for a chunk containing some Javascript to be inserted into the head section of the generated page.',
              'area' => '',
              'area_trans' => '',
            ),
            'rowIdPrefix' => 
            array (
              'name' => 'rowIdPrefix',
              'desc' => 'prop_wayfinder.rowIdPrefix_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => false,
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'If set, Wayfinder will replace the id placeholder with a unique id consisting of the specified prefix plus the Resource id.',
              'area' => '',
              'area_trans' => '',
            ),
            'textOfLinks' => 
            array (
              'name' => 'textOfLinks',
              'desc' => 'prop_wayfinder.textOfLinks_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'menutitle',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'This field will be inserted into the linktext placeholder.',
              'area' => '',
              'area_trans' => '',
            ),
            'titleOfLinks' => 
            array (
              'name' => 'titleOfLinks',
              'desc' => 'prop_wayfinder.titleOfLinks_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'pagetitle',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'This field will be inserted into the linktitle placeholder.',
              'area' => '',
              'area_trans' => '',
            ),
            'displayStart' => 
            array (
              'name' => 'displayStart',
              'desc' => 'prop_wayfinder.displayStart_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Show the document as referenced by startId in the menu.',
              'area' => '',
              'area_trans' => '',
            ),
            'firstClass' => 
            array (
              'name' => 'firstClass',
              'desc' => 'prop_wayfinder.firstClass_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'first',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'CSS class for the first item at a given menu level.',
              'area' => '',
              'area_trans' => '',
            ),
            'lastClass' => 
            array (
              'name' => 'lastClass',
              'desc' => 'prop_wayfinder.lastClass_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'last',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'CSS class for the last item at a given menu level.',
              'area' => '',
              'area_trans' => '',
            ),
            'hereClass' => 
            array (
              'name' => 'hereClass',
              'desc' => 'prop_wayfinder.hereClass_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'active',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'CSS class for the items showing where you are, all the way up the chain.',
              'area' => '',
              'area_trans' => '',
            ),
            'parentClass' => 
            array (
              'name' => 'parentClass',
              'desc' => 'prop_wayfinder.parentClass_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'CSS class for menu items that are a container and have children.',
              'area' => '',
              'area_trans' => '',
            ),
            'rowClass' => 
            array (
              'name' => 'rowClass',
              'desc' => 'prop_wayfinder.rowClass_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'CSS class denoting each output row.',
              'area' => '',
              'area_trans' => '',
            ),
            'outerClass' => 
            array (
              'name' => 'outerClass',
              'desc' => 'prop_wayfinder.outerClass_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'CSS class for the outer template.',
              'area' => '',
              'area_trans' => '',
            ),
            'innerClass' => 
            array (
              'name' => 'innerClass',
              'desc' => 'prop_wayfinder.innerClass_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'CSS class for the inner template.',
              'area' => '',
              'area_trans' => '',
            ),
            'levelClass' => 
            array (
              'name' => 'levelClass',
              'desc' => 'prop_wayfinder.levelClass_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'CSS class denoting every output row level. The level number will be added to the specified class (level1, level2, level3 etc if you specified "level").',
              'area' => '',
              'area_trans' => '',
            ),
            'selfClass' => 
            array (
              'name' => 'selfClass',
              'desc' => 'prop_wayfinder.selfClass_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'CSS class for the current item.',
              'area' => '',
              'area_trans' => '',
            ),
            'webLinkClass' => 
            array (
              'name' => 'webLinkClass',
              'desc' => 'prop_wayfinder.webLinkClass_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'CSS class for weblink items.',
              'area' => '',
              'area_trans' => '',
            ),
            'outerTpl' => 
            array (
              'name' => 'outerTpl',
              'desc' => 'prop_wayfinder.outerTpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Name of the chunk containing the template for the outer most container; if not included, a string including "<ul>[[+wf.wrapper]]</ul>" is assumed.',
              'area' => '',
              'area_trans' => '',
            ),
            'rowTpl' => 
            array (
              'name' => 'rowTpl',
              'desc' => 'prop_wayfinder.rowTpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Name of the chunk containing the template for the regular row items.',
              'area' => '',
              'area_trans' => '',
            ),
            'parentRowTpl' => 
            array (
              'name' => 'parentRowTpl',
              'desc' => 'prop_wayfinder.parentRowTpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Name of the chunk containing the template for any Resource that is a container and has children. Remember the [wf.wrapper] placeholder to output the children documents.',
              'area' => '',
              'area_trans' => '',
            ),
            'parentRowHereTpl' => 
            array (
              'name' => 'parentRowHereTpl',
              'desc' => 'prop_wayfinder.parentRowHereTpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Name of the chunk containing the template for the current Resource if it is a container and has children. Remember the [wf.wrapper] placeholder to output the children documents.',
              'area' => '',
              'area_trans' => '',
            ),
            'hereTpl' => 
            array (
              'name' => 'hereTpl',
              'desc' => 'prop_wayfinder.hereTpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Name of the chunk containing the template for the current Resource.',
              'area' => '',
              'area_trans' => '',
            ),
            'innerTpl' => 
            array (
              'name' => 'innerTpl',
              'desc' => 'prop_wayfinder.innerTpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Name of the chunk containing the template for each submenu. If no innerTpl is specified the outerTpl is used in its place.',
              'area' => '',
              'area_trans' => '',
            ),
            'innerRowTpl' => 
            array (
              'name' => 'innerRowTpl',
              'desc' => 'prop_wayfinder.innerRowTpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Name of the chunk containing the template for the row items in a subfolder.',
              'area' => '',
              'area_trans' => '',
            ),
            'innerHereTpl' => 
            array (
              'name' => 'innerHereTpl',
              'desc' => 'prop_wayfinder.innerHereTpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Name of the chunk containing the template for the current Resource if it is in a subfolder.',
              'area' => '',
              'area_trans' => '',
            ),
            'activeParentRowTpl' => 
            array (
              'name' => 'activeParentRowTpl',
              'desc' => 'prop_wayfinder.activeParentRowTpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Name of the chunk containing the template for items that are containers, have children and are currently active in the tree.',
              'area' => '',
              'area_trans' => '',
            ),
            'categoryFoldersTpl' => 
            array (
              'name' => 'categoryFoldersTpl',
              'desc' => 'prop_wayfinder.categoryFoldersTpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Name of the chunk containing the template for category folders. Category folders are determined by setting the template to blank or by setting the link attributes field to rel="category".',
              'area' => '',
              'area_trans' => '',
            ),
            'startItemTpl' => 
            array (
              'name' => 'startItemTpl',
              'desc' => 'prop_wayfinder.startItemTpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Name of the chunk containing the template for the start item, if enabled via the &displayStart parameter. Note: the default template shows the start item but does not link it. If you do not need a link, a class can be applied to the default template using the parameter &firstClass=`className`.',
              'area' => '',
              'area_trans' => '',
            ),
            'permissions' => 
            array (
              'name' => 'permissions',
              'desc' => 'prop_wayfinder.permissions_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'list',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Will check for a permission on the Resource. Defaults to "list" - set to blank to skip normal permissions checks.',
              'area' => '',
              'area_trans' => '',
            ),
            'hereId' => 
            array (
              'name' => 'hereId',
              'desc' => 'prop_wayfinder.hereId_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Optional. If set, will change the "here" Resource to this ID. Defaults to the currently active Resource.',
              'area' => '',
              'area_trans' => '',
            ),
            'where' => 
            array (
              'name' => 'where',
              'desc' => 'prop_wayfinder.where_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Optional. A JSON object for where conditions for all items selected in the menu.',
              'area' => '',
              'area_trans' => '',
            ),
            'templates' => 
            array (
              'name' => 'templates',
              'desc' => 'prop_wayfinder.templates_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Optional. A comma-separated list of Template IDs to restrict selected Resources to.',
              'area' => '',
              'area_trans' => '',
            ),
            'previewUnpublished' => 
            array (
              'name' => 'previewUnpublished',
              'desc' => 'prop_wayfinder.previewunpublished_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Optional. If set to Yes, if you are logged into the mgr and have the view_unpublished permission, it will allow previewing of unpublished resources in your menus in the front-end.',
              'area' => '',
              'area_trans' => '',
            ),
          ),
          'moduleguid' => '',
          'static' => false,
          'static_file' => '',
          'content' => '/**
 * Wayfinder Snippet to build site navigation menus
 *
 * Totally refactored from original DropMenu nav builder to make it easier to
 * create custom navigation by using chunks as output templates. By using
 * templates, many of the paramaters are no longer needed for flexible output
 * including tables, unordered- or ordered-lists (ULs or OLs), definition lists
 * (DLs) or in any other format you desire.
 *
 * @version 2.1.1-beta5
 * @author Garry Nutting (collabpad.com)
 * @author Kyle Jaebker (muddydogpaws.com)
 * @author Ryan Thrash (modx.com)
 * @author Shaun McCormick (modx.com)
 * @author Jason Coward (modx.com)
 *
 * @example [[Wayfinder? &startId=`0`]]
 *
 * @var modX $modx
 * @var array $scriptProperties
 * 
 * @package wayfinder
 */
$wayfinder_base = $modx->getOption(\'wayfinder.core_path\',$scriptProperties,$modx->getOption(\'core_path\').\'components/wayfinder/\');

/* include a custom config file if specified */
if (isset($scriptProperties[\'config\'])) {
    $scriptProperties[\'config\'] = str_replace(\'../\',\'\',$scriptProperties[\'config\']);
    $scriptProperties[\'config\'] = $wayfinder_base.\'configs/\'.$scriptProperties[\'config\'].\'.config.php\';
} else {
    $scriptProperties[\'config\'] = $wayfinder_base.\'configs/default.config.php\';
}
if (file_exists($scriptProperties[\'config\'])) {
    include $scriptProperties[\'config\'];
}

/* include wayfinder class */
include_once $wayfinder_base.\'wayfinder.class.php\';
if (!$modx->loadClass(\'Wayfinder\',$wayfinder_base,true,true)) {
    return \'error: Wayfinder class not found\';
}
$wf = new Wayfinder($modx,$scriptProperties);

/* get user class definitions
 * TODO: eventually move these into config parameters */
$wf->_css = array(
    \'first\' => isset($firstClass) ? $firstClass : \'\',
    \'last\' => isset($lastClass) ? $lastClass : \'last\',
    \'here\' => isset($hereClass) ? $hereClass : \'active\',
    \'parent\' => isset($parentClass) ? $parentClass : \'\',
    \'row\' => isset($rowClass) ? $rowClass : \'\',
    \'outer\' => isset($outerClass) ? $outerClass : \'\',
    \'inner\' => isset($innerClass) ? $innerClass : \'\',
    \'level\' => isset($levelClass) ? $levelClass: \'\',
    \'self\' => isset($selfClass) ? $selfClass : \'\',
    \'weblink\' => isset($webLinkClass) ? $webLinkClass : \'\'
);

/* get user templates
 * TODO: eventually move these into config parameters */
$wf->_templates = array(
    \'outerTpl\' => isset($outerTpl) ? $outerTpl : \'\',
    \'rowTpl\' => isset($rowTpl) ? $rowTpl : \'\',
    \'parentRowTpl\' => isset($parentRowTpl) ? $parentRowTpl : \'\',
    \'parentRowHereTpl\' => isset($parentRowHereTpl) ? $parentRowHereTpl : \'\',
    \'hereTpl\' => isset($hereTpl) ? $hereTpl : \'\',
    \'innerTpl\' => isset($innerTpl) ? $innerTpl : \'\',
    \'innerRowTpl\' => isset($innerRowTpl) ? $innerRowTpl : \'\',
    \'innerHereTpl\' => isset($innerHereTpl) ? $innerHereTpl : \'\',
    \'activeParentRowTpl\' => isset($activeParentRowTpl) ? $activeParentRowTpl : \'\',
    \'categoryFoldersTpl\' => isset($categoryFoldersTpl) ? $categoryFoldersTpl : \'\',
    \'startItemTpl\' => isset($startItemTpl) ? $startItemTpl : \'\'
);

/* process Wayfinder */
$output = $wf->run();
if ($wf->_config[\'debug\']) {
    $output .= $wf->renderDebugOutput();
}

/* output results */
if ($wf->_config[\'ph\']) {
    $modx->setPlaceholder($wf->_config[\'ph\'],$output);
} else {
    return $output;
}',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
        ),
      ),
      'BreadCrumb' => 
      array (
        'fields' => 
        array (
          'id' => 22,
          'source' => 0,
          'property_preprocess' => false,
          'name' => 'BreadCrumb',
          'description' => 'This snippet will create a breadcrumb navigation for the current resource or a specific resource.',
          'editor_type' => 0,
          'category' => 5,
          'cache_type' => 0,
          'snippet' => '/**
 * BreadCrumb
 * Copyright 2011 Benjamin Vauchel <contact@omycode.fr>
 *
 * BreadCrumb is free software; you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by the Free
 * Software Foundation; either version 2 of the License, or (at your option) any
 * later version.
 *
 * BreadCrumb is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * BreadCrumb; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package breadcrumb
 * @author Benjamin Vauchel <contact@omycode.fr>
 *
 * @version Version 1.4.3 pl
 * 07/03/15
 *
 * Breadcrumb is a snippet for MODx Revolution, inspired by the Jared\'s BreadCrumbs snippet.
 * It will create a breadcrumb navigation for the current resource or a specific resource.
 *
 * Optional properties:
 *
 * @property from - (int) Resource ID of the first crumb; [Default value : 0].
 * @property to - (int) Resource ID of the last crumb; [Default value : current resource id].
 * @property exclude - (string) Comma separated list of resources IDs not shown in breadcrumb. [Default value : []]
 * @property maxCrumbs - (int) Max crumbs shown in breadcrumb. Max delimiter template can be customize with property maxCrumbTpl ; [Default value : 100].
 * @property showHidden - (bool) Show hidden resources in breadcrumb; [Default value : true].
 * @property showContainer - (bool) Show container resources in breadcrumb; [Default value : true].
 * @property showUnPub - (bool) Show unpublished resources in breadcrumb; [Default value : true].
 * @property showCurrentCrumb - (bool) Show current resource as a crumb; [Default value : true].
 * @property showBreadCrumbAtHome - (bool) Show BreadCrumb on the home page; [Default value : true].
 * @property showHomeCrumb - (bool) Add the home page crumb at the start of the breadcrumb; [Default value : true].
 * @property useWebLinkUrl - (bool) Use the weblink url instead of the url to the weblink; [Default value : true].
 * @property direction - (string) Direction or breadcrumb : Left To Right (ltr) or Right To Left (rtl) for Arabic language for example; [Default value : ltr].
 * @property scheme - (string) URL Generation Scheme; [Default value : -1].
 *
 * Templates :
 *
 * @property containerTpl - (string) Container template for BreadCrumb; [Default value : BreadCrumbContainerTpl].
 * @property currentCrumbTpl - (string) Current crumb template for BreadCrumb; [Default value : BreadCrumbCurrentCrumbTpl].
 * @property linkCrumbTpl - (string) Default crumb template for BreadCrumb; [Default value : BreadCrumbLinkCrumbTpl].
 * @property categoryCrumbTpl - (string) Default category crumb template for BreadCrumb; [Default value : BreadCrumbCategoryCrumbTpl].
 * @property maxCrumbTpl - (string) Max delimiter crumb template for BreadCrumb; [Default value : BreadCrumbMaxCrumbTpl].
 */

// Script Properties
$from                 = !empty($from) ? $from : $modx->getOption(\'from\', $scriptProperties, 0, true, true);
$to                   = $currentResourceId = !empty($to) ? $to : $modx->getOption(\'to\', $scriptProperties, $modx->resource->get(\'id\'), true);
$exclude              = !empty($exclude) ? explode(\',\', $exclude) : array();
$maxCrumbs            = !empty($maxCrumbs) ? abs(intval($maxCrumbs)) : $modx->getOption(\'maxCrumbs\', $scriptProperties, 100, true);
$showHidden           = isset($showHidden) ? (bool)$showHidden : (bool)$modx->getOption(\'showHidden\', $scriptProperties, true, true);
$showContainer        = isset($showContainer) ? (bool)$showContainer : (bool)$modx->getOption(\'showContainer\', $scriptProperties, true, true);
$showUnPub            = isset($showUnPub) ? (bool)$showUnPub : (bool)$modx->getOption(\'showUnPub\', $scriptProperties, true, true);
$showCurrentCrumb     = isset($showCurrentCrumb) ? (bool)$showCurrentCrumb : (bool)$modx->getOption(\'showCurrentCrumb\', $scriptProperties, true, true);
$showBreadCrumbAtHome = isset($showBreadCrumbAtHome) ? (bool)$showBreadCrumbAtHome : (bool)$modx->getOption(\'showBreadCrumbAtHome\', $scriptProperties, true, true);
$showHomeCrumb        = isset($showHomeCrumb) ? (bool)$showHomeCrumb : (bool)$modx->getOption(\'showHomeCrumb\', $scriptProperties, true, true);
$useWebLinkUrl        = isset($useWebLinkUrl) ? (bool)$useWebLinkUrl : (bool)$modx->getOption(\'useWebLinkUrl\', $scriptProperties, true, true);
$direction            = !empty($direction) ? $direction : $modx->getOption(\'direction\', $scriptProperties, \'ltr\', true);
$scheme               = !empty($scheme) ? $scheme : $modx->getOption(\'scheme\', $scriptProperties, $modx->getOption(\'link_tag_scheme\'), true);
$containerTpl         = !empty($containerTpl) ? $containerTpl : $modx->getOption(\'containerTpl\', $scriptProperties, \'@INLINE <ul id="breadcrumb" itemprop="breadcrumb">[[+crumbs]]</ul>\');
$homeCrumbTpl         = !empty($homeCrumbTpl) ? $homeCrumbTpl : $modx->getOption(\'homeCrumbTpl\', $scriptProperties, \'@INLINE <li><a href="[[+link]]">[[+pagetitle]]</a></li>\');
$currentCrumbTpl      = !empty($currentCrumbTpl) ? $currentCrumbTpl : $modx->getOption(\'currentCrumbTpl\', $scriptProperties, \'@INLINE <li>[[+pagetitle]]</li>\');
$linkCrumbTpl         = !empty($linkCrumbTpl) ? $linkCrumbTpl : $modx->getOption(\'linkCrumbTpl\', $scriptProperties, \'@INLINE <li><a href="[[+link]]">[[+pagetitle]]</a></li>\');
$categoryCrumbTpl     = !empty($categoryCrumbTpl) ? $categoryCrumbTpl : $modx->getOption(\'categoryCrumbTpl\', $scriptProperties, \'@INLINE <li><a href="[[+link]]">[[+pagetitle]]</a></li>\');
$maxCrumbTpl          = !empty($maxCrumbTpl) ? $maxCrumbTpl : $modx->getOption(\'maxCrumbTpl\', $scriptProperties, \'@INLINE <li>...</li>\');

// include parseTpl
include_once $modx->getOption(\'breadcrumb.core_path\',null,$modx->getOption(\'core_path\').\'components/breadcrumb/includes/\').\'include.parsetpl.php\';

// Output variable
$output = \'\';

// We check if current resource is the homepage and if breadcrumb is shown for the homepage
if (!$showBreadCrumbAtHome && $modx->resource->get(\'id\') == $modx->getOption(\'site_start\')) {
    return \'\';
}

// We get all the other crumbs
$crumbs = array();
$crumbsCount = 0;
$resourceId = $to;
while ($resourceId != $from && $crumbsCount < $maxCrumbs)
{
    if (!$resource = $modx->getObject(\'modResource\', $resourceId)) {
        break;
    }

    // We check the conditions to show crumb
    if (
        $resourceId != $modx->getOption(\'site_start\')                                                                           // ShowHomeCrumb
        && (($resource->get(\'hidemenu\') && $showHidden) || !$resource->get(\'hidemenu\'))                                         // ShowHidden
        && (($resource->get(\'isfolder\') && $showContainer) || !$resource->get(\'isfolder\'))                                      // ShowContainer
        && ((!$resource->get(\'published\') && $showUnPub) || $resource->get(\'published\'))                                        // UnPub
        && (($resourceId == $currentResourceId && $showCurrentCrumb) || $resourceId != $currentResourceId)                      // ShowCurrent
        && !in_array($resourceId, $exclude)                                                                                     // Excluded resources
    ) {
        // If is LTR direction, we push resource at the beginning of the array
        if ($direction == \'ltr\') {
            array_unshift($crumbs, $resource);
        }
        // Else we push it at the end
        else {
            $crumbs[] = $resource;
        }

        $crumbsCount++;
    }
    $resourceId = $resource->get(\'parent\');
}

// Add home crumb
if ($showHomeCrumb && $resource = $modx->getObject(\'modResource\', $modx->getOption(\'site_start\'))) {
    if ($direction == \'ltr\') {
        array_unshift($crumbs, $resource);
    } else {
        $crumbs[] = $resource;
    }
}

// We build the output of crumbs
foreach($crumbs as $key => $resource)
{
    // Home crumb tpl ?
    if ($resource->get(\'id\') == $modx->getOption(\'site_start\'))
    {
        $tpl = $homeCrumbTpl;
    }
    // Current crumb tpl ?
    elseif ($showCurrentCrumb && ($resource->get(\'id\') == $currentResourceId))
    {
        $tpl = $currentCrumbTpl;
    }
    // resource is a container only, calculated in a similar manner to Wayfinder
    elseif ($resource->get(\'isfolder\')
        && ( $resource->get(\'template\') == 0
            || strpos($resource->get(\'link_attributes\'), \'rel="category"\') !== false
            )
    ) {
        $tpl = $categoryCrumbTpl;
    }
    // or default crumb tpl ?
    else {
        $tpl = $linkCrumbTpl;
    }

    // Placeholders
    $placeholders = $resource->toArray();
    if ($resource->get(\'class_key\') == \'modWebLink\' && $useWebLinkUrl) {
        if (is_numeric($resource->get(\'content\'))) {
            $link = $modx->makeUrl($resource->get(\'content\'), \'\', \'\', $scheme);
        } else {
            $link = $resource->get(\'content\');
        }
    } else {
        $link = $modx->makeUrl($resource->get(\'id\'), \'\', \'\', $scheme);
    }
    $placeholders = array_merge($resource->toArray(), array(\'link\' => $link));

    // Output
    $output .= parseTpl($tpl, $placeholders);
}

// We add the max delimiter to the crumbs output, if the max limit was reached
if ($crumbsCount == $maxCrumbs) {
    // If is LTR direction, we push the max delimiter at the beginning of the crumbs
    if ($direction == \'ltr\') {
        $output = parseTpl($maxCrumbTpl).$output;
    }
    // Else we push it at the end
    else {
        $output .= parseTpl($maxCrumbTpl);
    }
}

// We build the breadcrumb output
$output = parseTpl($containerTpl, array(
    \'crumbs\' => $output,
));

return $output;',
          'locked' => false,
          'properties' => 
          array (
            'from' => 
            array (
              'name' => 'from',
              'desc' => 'breadcrumb_snippet_from_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '0',
              'lexicon' => 'breadcrumb:properties',
              'area' => '',
              'desc_trans' => 'Resource ID of the first crumb.',
              'area_trans' => '',
            ),
            'to' => 
            array (
              'name' => 'to',
              'desc' => 'breadcrumb_snippet_to_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'breadcrumb:properties',
              'area' => '',
              'desc_trans' => 'Resource ID of the last crumb.',
              'area_trans' => '',
            ),
            'maxCrumbs' => 
            array (
              'name' => 'maxCrumbs',
              'desc' => 'breadcrumb_snippet_maxcrumbs_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '100',
              'lexicon' => 'breadcrumb:properties',
              'area' => '',
              'desc_trans' => 'Max crumbs shown in breadcrumb',
              'area_trans' => '',
            ),
            'showHidden' => 
            array (
              'name' => 'showHidden',
              'desc' => 'breadcrumb_snippet_showhidden_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => true,
              'lexicon' => 'breadcrumb:properties',
              'area' => '',
              'desc_trans' => 'Show hidden resources in breadcrumb.',
              'area_trans' => '',
            ),
            'showContainer' => 
            array (
              'name' => 'showContainer',
              'desc' => 'breadcrumb_snippet_showcontainer_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => true,
              'lexicon' => 'breadcrumb:properties',
              'area' => '',
              'desc_trans' => 'Show container resources in breadcrumb.',
              'area_trans' => '',
            ),
            'showUnPub' => 
            array (
              'name' => 'showUnPub',
              'desc' => 'breadcrumb_snippet_showunpub_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => true,
              'lexicon' => 'breadcrumb:properties',
              'area' => '',
              'desc_trans' => 'Show unpublished resources in breadcrumb.',
              'area_trans' => '',
            ),
            'showCurrentCrumb' => 
            array (
              'name' => 'showCurrentCrumb',
              'desc' => 'breadcrumb_snippet_showcurrentcrumb_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => true,
              'lexicon' => 'breadcrumb:properties',
              'area' => '',
              'desc_trans' => 'Show current resource as a crumb.',
              'area_trans' => '',
            ),
            'showBreadCrumbAtHome' => 
            array (
              'name' => 'showBreadCrumbAtHome',
              'desc' => 'breadcrumb_snippet_showbreadcrumbatHome_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => true,
              'lexicon' => 'breadcrumb:properties',
              'area' => '',
              'desc_trans' => 'Show BreadCrumb on the home page.',
              'area_trans' => '',
            ),
            'showHomeCrumb' => 
            array (
              'name' => 'showHomeCrumb',
              'desc' => 'breadcrumb_snippet_showhomecrumb_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => true,
              'lexicon' => 'breadcrumb:properties',
              'area' => '',
              'desc_trans' => 'Show the home page as a crumb.',
              'area_trans' => '',
            ),
            'useWebLinkUrl' => 
            array (
              'name' => 'useWebLinkUrl',
              'desc' => 'breadcrumb_snippet_useweblinkurl_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => true,
              'lexicon' => 'breadcrumb:properties',
              'area' => '',
              'desc_trans' => 'Use the weblink url instead of the url to the weblink.',
              'area_trans' => '',
            ),
            'direction' => 
            array (
              'name' => 'direction',
              'desc' => 'breadcrumb_snippet_direction_desc',
              'type' => 'list',
              'options' => 
              array (
                0 => 
                array (
                  'value' => 'ltr',
                  'text' => 'Left To Right (ltr)',
                  'name' => 'Left To Right (ltr)',
                ),
                1 => 
                array (
                  'value' => 'rtl',
                  'text' => ' Right To Left (rtl)',
                  'name' => ' Right To Left (rtl)',
                ),
              ),
              'value' => 'ltr',
              'lexicon' => 'breadcrumb:properties',
              'area' => '',
              'desc_trans' => 'Direction or breadcrumb : Left To Right (ltr) or Right To Left (rtl) for Arabic language for example.',
              'area_trans' => '',
            ),
            'scheme' => 
            array (
              'name' => 'scheme',
              'desc' => 'breadcrumb_snippet_scheme_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'breadcrumb:properties',
              'area' => '',
              'desc_trans' => 'URL Generation Scheme.',
              'area_trans' => '',
            ),
            'containerTpl' => 
            array (
              'name' => 'containerTpl',
              'desc' => 'breadcrumb_snippet_containertpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '@INLINE <ul id="breadcrumb" itemprop="breadcrumb">[[+crumbs]]</ul>',
              'lexicon' => 'breadcrumb:properties',
              'area' => '',
              'desc_trans' => 'Container template for BreadCrumb. Can be file (@FILE ), code (@INLINE ) or chunk name.',
              'area_trans' => '',
            ),
            'homeCrumbTpl' => 
            array (
              'name' => 'homeCrumbTpl',
              'desc' => 'breadcrumb_snippet_homecrumbtpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '@INLINE <li><a href="[[+link]]">[[+pagetitle]]</a></li>',
              'lexicon' => 'breadcrumb:properties',
              'area' => '',
              'desc_trans' => 'Home crumb template for BreadCrumb. Can be file (@FILE ), code (@INLINE ) or chunk name.',
              'area_trans' => '',
            ),
            'currentCrumbTpl' => 
            array (
              'name' => 'currentCrumbTpl',
              'desc' => 'breadcrumb_snippet_currentcrumbtpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '@INLINE <li>[[+pagetitle]]</li>',
              'lexicon' => 'breadcrumb:properties',
              'area' => '',
              'desc_trans' => 'Current crumb template for BreadCrumb. Can be file (@FILE ), code (@INLINE ) or chunk name.',
              'area_trans' => '',
            ),
            'linkCrumbTpl' => 
            array (
              'name' => 'linkCrumbTpl',
              'desc' => 'breadcrumb_snippet_linkcrumbtpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '@INLINE <li><a href="[[+link]]">[[+pagetitle]]</a></li>',
              'lexicon' => 'breadcrumb:properties',
              'area' => '',
              'desc_trans' => 'Default crumb template for BreadCrumb. Can be file (@FILE ), code (@INLINE ) or chunk name.',
              'area_trans' => '',
            ),
            'categoryCrumbTpl' => 
            array (
              'name' => 'categoryCrumbTpl',
              'desc' => 'breadcrumb_snippet_categorycrumbtpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '@INLINE <li><a href="[[+link]]">[[+pagetitle]]</a></li>',
              'lexicon' => 'breadcrumb:properties',
              'area' => '',
              'desc_trans' => 'Default category crumb template for BreadCrumb. Can be file (@FILE ), code (@INLINE ) or chunk name.',
              'area_trans' => '',
            ),
            'maxCrumbTpl' => 
            array (
              'name' => 'maxCrumbTpl',
              'desc' => 'breadcrumb_snippet_maxcrumbtpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '@INLINE <li>...</li>',
              'lexicon' => 'breadcrumb:properties',
              'area' => '',
              'desc_trans' => 'Max delimiter crumb template for BreadCrumb. Can be file (@FILE ), code (@INLINE ) or chunk name.',
              'area_trans' => '',
            ),
          ),
          'moduleguid' => '',
          'static' => false,
          'static_file' => '',
          'content' => '/**
 * BreadCrumb
 * Copyright 2011 Benjamin Vauchel <contact@omycode.fr>
 *
 * BreadCrumb is free software; you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by the Free
 * Software Foundation; either version 2 of the License, or (at your option) any
 * later version.
 *
 * BreadCrumb is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * BreadCrumb; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package breadcrumb
 * @author Benjamin Vauchel <contact@omycode.fr>
 *
 * @version Version 1.4.3 pl
 * 07/03/15
 *
 * Breadcrumb is a snippet for MODx Revolution, inspired by the Jared\'s BreadCrumbs snippet.
 * It will create a breadcrumb navigation for the current resource or a specific resource.
 *
 * Optional properties:
 *
 * @property from - (int) Resource ID of the first crumb; [Default value : 0].
 * @property to - (int) Resource ID of the last crumb; [Default value : current resource id].
 * @property exclude - (string) Comma separated list of resources IDs not shown in breadcrumb. [Default value : []]
 * @property maxCrumbs - (int) Max crumbs shown in breadcrumb. Max delimiter template can be customize with property maxCrumbTpl ; [Default value : 100].
 * @property showHidden - (bool) Show hidden resources in breadcrumb; [Default value : true].
 * @property showContainer - (bool) Show container resources in breadcrumb; [Default value : true].
 * @property showUnPub - (bool) Show unpublished resources in breadcrumb; [Default value : true].
 * @property showCurrentCrumb - (bool) Show current resource as a crumb; [Default value : true].
 * @property showBreadCrumbAtHome - (bool) Show BreadCrumb on the home page; [Default value : true].
 * @property showHomeCrumb - (bool) Add the home page crumb at the start of the breadcrumb; [Default value : true].
 * @property useWebLinkUrl - (bool) Use the weblink url instead of the url to the weblink; [Default value : true].
 * @property direction - (string) Direction or breadcrumb : Left To Right (ltr) or Right To Left (rtl) for Arabic language for example; [Default value : ltr].
 * @property scheme - (string) URL Generation Scheme; [Default value : -1].
 *
 * Templates :
 *
 * @property containerTpl - (string) Container template for BreadCrumb; [Default value : BreadCrumbContainerTpl].
 * @property currentCrumbTpl - (string) Current crumb template for BreadCrumb; [Default value : BreadCrumbCurrentCrumbTpl].
 * @property linkCrumbTpl - (string) Default crumb template for BreadCrumb; [Default value : BreadCrumbLinkCrumbTpl].
 * @property categoryCrumbTpl - (string) Default category crumb template for BreadCrumb; [Default value : BreadCrumbCategoryCrumbTpl].
 * @property maxCrumbTpl - (string) Max delimiter crumb template for BreadCrumb; [Default value : BreadCrumbMaxCrumbTpl].
 */

// Script Properties
$from                 = !empty($from) ? $from : $modx->getOption(\'from\', $scriptProperties, 0, true, true);
$to                   = $currentResourceId = !empty($to) ? $to : $modx->getOption(\'to\', $scriptProperties, $modx->resource->get(\'id\'), true);
$exclude              = !empty($exclude) ? explode(\',\', $exclude) : array();
$maxCrumbs            = !empty($maxCrumbs) ? abs(intval($maxCrumbs)) : $modx->getOption(\'maxCrumbs\', $scriptProperties, 100, true);
$showHidden           = isset($showHidden) ? (bool)$showHidden : (bool)$modx->getOption(\'showHidden\', $scriptProperties, true, true);
$showContainer        = isset($showContainer) ? (bool)$showContainer : (bool)$modx->getOption(\'showContainer\', $scriptProperties, true, true);
$showUnPub            = isset($showUnPub) ? (bool)$showUnPub : (bool)$modx->getOption(\'showUnPub\', $scriptProperties, true, true);
$showCurrentCrumb     = isset($showCurrentCrumb) ? (bool)$showCurrentCrumb : (bool)$modx->getOption(\'showCurrentCrumb\', $scriptProperties, true, true);
$showBreadCrumbAtHome = isset($showBreadCrumbAtHome) ? (bool)$showBreadCrumbAtHome : (bool)$modx->getOption(\'showBreadCrumbAtHome\', $scriptProperties, true, true);
$showHomeCrumb        = isset($showHomeCrumb) ? (bool)$showHomeCrumb : (bool)$modx->getOption(\'showHomeCrumb\', $scriptProperties, true, true);
$useWebLinkUrl        = isset($useWebLinkUrl) ? (bool)$useWebLinkUrl : (bool)$modx->getOption(\'useWebLinkUrl\', $scriptProperties, true, true);
$direction            = !empty($direction) ? $direction : $modx->getOption(\'direction\', $scriptProperties, \'ltr\', true);
$scheme               = !empty($scheme) ? $scheme : $modx->getOption(\'scheme\', $scriptProperties, $modx->getOption(\'link_tag_scheme\'), true);
$containerTpl         = !empty($containerTpl) ? $containerTpl : $modx->getOption(\'containerTpl\', $scriptProperties, \'@INLINE <ul id="breadcrumb" itemprop="breadcrumb">[[+crumbs]]</ul>\');
$homeCrumbTpl         = !empty($homeCrumbTpl) ? $homeCrumbTpl : $modx->getOption(\'homeCrumbTpl\', $scriptProperties, \'@INLINE <li><a href="[[+link]]">[[+pagetitle]]</a></li>\');
$currentCrumbTpl      = !empty($currentCrumbTpl) ? $currentCrumbTpl : $modx->getOption(\'currentCrumbTpl\', $scriptProperties, \'@INLINE <li>[[+pagetitle]]</li>\');
$linkCrumbTpl         = !empty($linkCrumbTpl) ? $linkCrumbTpl : $modx->getOption(\'linkCrumbTpl\', $scriptProperties, \'@INLINE <li><a href="[[+link]]">[[+pagetitle]]</a></li>\');
$categoryCrumbTpl     = !empty($categoryCrumbTpl) ? $categoryCrumbTpl : $modx->getOption(\'categoryCrumbTpl\', $scriptProperties, \'@INLINE <li><a href="[[+link]]">[[+pagetitle]]</a></li>\');
$maxCrumbTpl          = !empty($maxCrumbTpl) ? $maxCrumbTpl : $modx->getOption(\'maxCrumbTpl\', $scriptProperties, \'@INLINE <li>...</li>\');

// include parseTpl
include_once $modx->getOption(\'breadcrumb.core_path\',null,$modx->getOption(\'core_path\').\'components/breadcrumb/includes/\').\'include.parsetpl.php\';

// Output variable
$output = \'\';

// We check if current resource is the homepage and if breadcrumb is shown for the homepage
if (!$showBreadCrumbAtHome && $modx->resource->get(\'id\') == $modx->getOption(\'site_start\')) {
    return \'\';
}

// We get all the other crumbs
$crumbs = array();
$crumbsCount = 0;
$resourceId = $to;
while ($resourceId != $from && $crumbsCount < $maxCrumbs)
{
    if (!$resource = $modx->getObject(\'modResource\', $resourceId)) {
        break;
    }

    // We check the conditions to show crumb
    if (
        $resourceId != $modx->getOption(\'site_start\')                                                                           // ShowHomeCrumb
        && (($resource->get(\'hidemenu\') && $showHidden) || !$resource->get(\'hidemenu\'))                                         // ShowHidden
        && (($resource->get(\'isfolder\') && $showContainer) || !$resource->get(\'isfolder\'))                                      // ShowContainer
        && ((!$resource->get(\'published\') && $showUnPub) || $resource->get(\'published\'))                                        // UnPub
        && (($resourceId == $currentResourceId && $showCurrentCrumb) || $resourceId != $currentResourceId)                      // ShowCurrent
        && !in_array($resourceId, $exclude)                                                                                     // Excluded resources
    ) {
        // If is LTR direction, we push resource at the beginning of the array
        if ($direction == \'ltr\') {
            array_unshift($crumbs, $resource);
        }
        // Else we push it at the end
        else {
            $crumbs[] = $resource;
        }

        $crumbsCount++;
    }
    $resourceId = $resource->get(\'parent\');
}

// Add home crumb
if ($showHomeCrumb && $resource = $modx->getObject(\'modResource\', $modx->getOption(\'site_start\'))) {
    if ($direction == \'ltr\') {
        array_unshift($crumbs, $resource);
    } else {
        $crumbs[] = $resource;
    }
}

// We build the output of crumbs
foreach($crumbs as $key => $resource)
{
    // Home crumb tpl ?
    if ($resource->get(\'id\') == $modx->getOption(\'site_start\'))
    {
        $tpl = $homeCrumbTpl;
    }
    // Current crumb tpl ?
    elseif ($showCurrentCrumb && ($resource->get(\'id\') == $currentResourceId))
    {
        $tpl = $currentCrumbTpl;
    }
    // resource is a container only, calculated in a similar manner to Wayfinder
    elseif ($resource->get(\'isfolder\')
        && ( $resource->get(\'template\') == 0
            || strpos($resource->get(\'link_attributes\'), \'rel="category"\') !== false
            )
    ) {
        $tpl = $categoryCrumbTpl;
    }
    // or default crumb tpl ?
    else {
        $tpl = $linkCrumbTpl;
    }

    // Placeholders
    $placeholders = $resource->toArray();
    if ($resource->get(\'class_key\') == \'modWebLink\' && $useWebLinkUrl) {
        if (is_numeric($resource->get(\'content\'))) {
            $link = $modx->makeUrl($resource->get(\'content\'), \'\', \'\', $scheme);
        } else {
            $link = $resource->get(\'content\');
        }
    } else {
        $link = $modx->makeUrl($resource->get(\'id\'), \'\', \'\', $scheme);
    }
    $placeholders = array_merge($resource->toArray(), array(\'link\' => $link));

    // Output
    $output .= parseTpl($tpl, $placeholders);
}

// We add the max delimiter to the crumbs output, if the max limit was reached
if ($crumbsCount == $maxCrumbs) {
    // If is LTR direction, we push the max delimiter at the beginning of the crumbs
    if ($direction == \'ltr\') {
        $output = parseTpl($maxCrumbTpl).$output;
    }
    // Else we push it at the end
    else {
        $output .= parseTpl($maxCrumbTpl);
    }
}

// We build the breadcrumb output
$output = parseTpl($containerTpl, array(
    \'crumbs\' => $output,
));

return $output;',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
        ),
      ),
      'getDate' => 
      array (
        'fields' => 
        array (
          'id' => 19,
          'source' => 0,
          'property_preprocess' => false,
          'name' => 'getDate',
          'description' => 'A simple timestamp retrieval Snippet for MODX Revolution.',
          'editor_type' => 0,
          'category' => 3,
          'cache_type' => 0,
          'snippet' => '/**
 * A simple timestamp retrieval Snippet for MODX Revolution.
 *
 * @author David Pede <dev@tasianmedia.com> <https://twitter.com/davepede>
 * @version 1.0.0-pl
 * @released November 22, 2013
 * @since November 22, 2013
 * @package getdate
 *
 * Copyright (C) 2013 David Pede. All rights reserved. <dev@tasianmedia.com>
 *
 * getDate is free software; you can redistribute it and/or modify it under the
 * terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or any later version.
 *
 * getDate is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * getDate; if not, write to the Free Software Foundation, Inc., 59 Temple
 * Place, Suite 330, Boston, MA 02111-1307 USA
 */

/* set default properties */
$offset = !empty($offset) ? $offset : \'\';

$output = \'\';

$output = strtotime("$offset");

return (string) $output;',
          'locked' => false,
          'properties' => 
          array (
            'offset' => 
            array (
              'name' => 'offset',
              'desc' => 'The period of time to add or subtract from the current timestamp. Use relative date/time formats that the strtotime() parser understands.',
              'type' => 'textfield',
              'options' => '',
              'value' => 'now',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'The period of time to add or subtract from the current timestamp. Use relative date/time formats that the strtotime() parser understands.',
              'area_trans' => '',
            ),
          ),
          'moduleguid' => '',
          'static' => false,
          'static_file' => '',
          'content' => '/**
 * A simple timestamp retrieval Snippet for MODX Revolution.
 *
 * @author David Pede <dev@tasianmedia.com> <https://twitter.com/davepede>
 * @version 1.0.0-pl
 * @released November 22, 2013
 * @since November 22, 2013
 * @package getdate
 *
 * Copyright (C) 2013 David Pede. All rights reserved. <dev@tasianmedia.com>
 *
 * getDate is free software; you can redistribute it and/or modify it under the
 * terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or any later version.
 *
 * getDate is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * getDate; if not, write to the Free Software Foundation, Inc., 59 Temple
 * Place, Suite 330, Boston, MA 02111-1307 USA
 */

/* set default properties */
$offset = !empty($offset) ? $offset : \'\';

$output = \'\';

$output = strtotime("$offset");

return (string) $output;',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
        ),
      ),
      'AjaxForm' => 
      array (
        'fields' => 
        array (
          'id' => 33,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'AjaxForm',
          'description' => '',
          'editor_type' => 0,
          'category' => 8,
          'cache_type' => 0,
          'snippet' => '/** @var array $scriptProperties */
/** @var AjaxForm $AjaxForm */
if (!$modx->loadClass(\'ajaxform\', MODX_CORE_PATH . \'components/ajaxform/model/ajaxform/\', false, true)) {
    return false;
}
$AjaxForm = new AjaxForm($modx, $scriptProperties);

$snippet = $modx->getOption(\'snippet\', $scriptProperties, \'FormIt\', true);
$tpl = $modx->getOption(\'form\', $scriptProperties, \'tpl.AjaxForm.example\', true);
$formSelector = $modx->getOption(\'formSelector\', $scriptProperties, \'ajax_form\', true);
$objectName = $modx->getOption(\'objectName\', $scriptProperties, \'AjaxForm\', true);
$AjaxForm->loadJsCss($objectName);

/** @var pdoTools $pdo */
if (class_exists(\'pdoTools\') && $pdo = $modx->getService(\'pdoTools\')) {
    $content = $pdo->getChunk($tpl, $scriptProperties);
} else {
    $content = $modx->getChunk($tpl, $scriptProperties);
}
if (empty($content)) {
    return $modx->lexicon(\'af_err_chunk_nf\', array(\'name\' => $tpl));
}

// Add selector to tag form
if (preg_match(\'#<form.*?class=(?:"|\\\')(.*?)(?:"|\\\')#i\', $content, $matches)) {
    $classes = explode(\' \', $matches[1]);
    if (!in_array($formSelector, $classes)) {
        $classes[] = $formSelector;
        $classes = preg_replace(
            \'#class=(?:"|\\\')\' . $matches[1] . \'(?:"|\\\')#i\',
            \'class="\' . implode(\' \', $classes) . \'"\',
            $matches[0]
        );
        $content = str_ireplace($matches[0], $classes, $content);
    }
} else {
    $content = str_ireplace(\'<form\', \'<form class="\' . $formSelector . \'"\', $content);
}

// Add method = post
if (preg_match(\'#<form.*?method=(?:"|\\\')(.*?)(?:"|\\\')#i\', $content)) {
    $content = preg_replace(\'#<form(.*?)method=(?:"|\\\')(.*?)(?:"|\\\')#i\', \'<form\\\\1method="post"\', $content);
} else {
    $content = str_ireplace(\'<form\', \'<form method="post"\', $content);
}

// Add action for form processing
$hash = md5(http_build_query($scriptProperties));
$action = \'<input type="hidden" name="af_action" value="\' . $hash . \'" />\';
if ((stripos($content, \'</form>\') !== false)) {
    if (preg_match(\'#<input.*?name=(?:"|\\\')af_action(?:"|\\\').*?>#i\', $content, $matches)) {
        $content = str_ireplace($matches[0], \'\', $content);
    }
    $content = str_ireplace(\'</form>\', "\\n\\t$action\\n</form>", $content);
}

// Save settings to user`s session
$_SESSION[\'AjaxForm\'][$hash] = $scriptProperties;

// Call snippet for preparation of form
$action = !empty($_REQUEST[\'af_action\'])
    ? $_REQUEST[\'af_action\']
    : $hash;

$AjaxForm->process($action, $_REQUEST);

// Return chunk
return $content;',
          'locked' => false,
          'properties' => 
          array (
            'form' => 
            array (
              'name' => 'form',
              'desc' => 'ajaxform_prop_form',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'tpl.AjaxForm.example',
              'lexicon' => 'ajaxform:properties',
              'area' => '',
              'desc_trans' => 'Чанк с формой для отправки.',
              'area_trans' => '',
            ),
            'snippet' => 
            array (
              'name' => 'snippet',
              'desc' => 'ajaxform_prop_snippet',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'FormIt',
              'lexicon' => 'ajaxform:properties',
              'area' => '',
              'desc_trans' => 'Сниппет, который будет обрабатывать указанную форму.',
              'area_trans' => '',
            ),
            'frontend_css' => 
            array (
              'name' => 'frontend_css',
              'desc' => 'ajaxform_prop_frontend_css',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '[[+assetsUrl]]css/default.css',
              'lexicon' => 'ajaxform:properties',
              'area' => '',
              'desc_trans' => 'Файл с css стилями для подключения на фронтенде.',
              'area_trans' => '',
            ),
            'frontend_js' => 
            array (
              'name' => 'frontend_js',
              'desc' => 'ajaxform_prop_frontend_js',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '[[+assetsUrl]]js/default.js',
              'lexicon' => 'ajaxform:properties',
              'area' => '',
              'desc_trans' => 'Файл с javascript для подключения на фронтенде.',
              'area_trans' => '',
            ),
            'actionUrl' => 
            array (
              'name' => 'actionUrl',
              'desc' => 'ajaxform_prop_actionUrl',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '[[+assetsUrl]]action.php',
              'lexicon' => 'ajaxform:properties',
              'area' => '',
              'desc_trans' => 'Коннектор для обработки ajax запросов.',
              'area_trans' => '',
            ),
            'formSelector' => 
            array (
              'name' => 'formSelector',
              'desc' => 'ajaxform_prop_formSelector',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'ajax_form',
              'lexicon' => 'ajaxform:properties',
              'area' => '',
              'desc_trans' => 'Имя CSS класса, который будеи использован как jQuery селектор для инициализации формы. По умолчанию "ajax_form".',
              'area_trans' => '',
            ),
            'objectName' => 
            array (
              'name' => 'objectName',
              'desc' => 'ajaxform_prop_objectName',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'AjaxForm',
              'lexicon' => 'ajaxform:properties',
              'area' => '',
              'desc_trans' => 'Имя объекта для инициализации в подключаемом javascript. По умолчанию "AjaxForm".',
              'area_trans' => '',
            ),
          ),
          'moduleguid' => '',
          'static' => false,
          'static_file' => 'core/components/ajaxform/elements/snippets/snippet.ajaxform.php',
          'content' => '/** @var array $scriptProperties */
/** @var AjaxForm $AjaxForm */
if (!$modx->loadClass(\'ajaxform\', MODX_CORE_PATH . \'components/ajaxform/model/ajaxform/\', false, true)) {
    return false;
}
$AjaxForm = new AjaxForm($modx, $scriptProperties);

$snippet = $modx->getOption(\'snippet\', $scriptProperties, \'FormIt\', true);
$tpl = $modx->getOption(\'form\', $scriptProperties, \'tpl.AjaxForm.example\', true);
$formSelector = $modx->getOption(\'formSelector\', $scriptProperties, \'ajax_form\', true);
$objectName = $modx->getOption(\'objectName\', $scriptProperties, \'AjaxForm\', true);
$AjaxForm->loadJsCss($objectName);

/** @var pdoTools $pdo */
if (class_exists(\'pdoTools\') && $pdo = $modx->getService(\'pdoTools\')) {
    $content = $pdo->getChunk($tpl, $scriptProperties);
} else {
    $content = $modx->getChunk($tpl, $scriptProperties);
}
if (empty($content)) {
    return $modx->lexicon(\'af_err_chunk_nf\', array(\'name\' => $tpl));
}

// Add selector to tag form
if (preg_match(\'#<form.*?class=(?:"|\\\')(.*?)(?:"|\\\')#i\', $content, $matches)) {
    $classes = explode(\' \', $matches[1]);
    if (!in_array($formSelector, $classes)) {
        $classes[] = $formSelector;
        $classes = preg_replace(
            \'#class=(?:"|\\\')\' . $matches[1] . \'(?:"|\\\')#i\',
            \'class="\' . implode(\' \', $classes) . \'"\',
            $matches[0]
        );
        $content = str_ireplace($matches[0], $classes, $content);
    }
} else {
    $content = str_ireplace(\'<form\', \'<form class="\' . $formSelector . \'"\', $content);
}

// Add method = post
if (preg_match(\'#<form.*?method=(?:"|\\\')(.*?)(?:"|\\\')#i\', $content)) {
    $content = preg_replace(\'#<form(.*?)method=(?:"|\\\')(.*?)(?:"|\\\')#i\', \'<form\\\\1method="post"\', $content);
} else {
    $content = str_ireplace(\'<form\', \'<form method="post"\', $content);
}

// Add action for form processing
$hash = md5(http_build_query($scriptProperties));
$action = \'<input type="hidden" name="af_action" value="\' . $hash . \'" />\';
if ((stripos($content, \'</form>\') !== false)) {
    if (preg_match(\'#<input.*?name=(?:"|\\\')af_action(?:"|\\\').*?>#i\', $content, $matches)) {
        $content = str_ireplace($matches[0], \'\', $content);
    }
    $content = str_ireplace(\'</form>\', "\\n\\t$action\\n</form>", $content);
}

// Save settings to user`s session
$_SESSION[\'AjaxForm\'][$hash] = $scriptProperties;

// Call snippet for preparation of form
$action = !empty($_REQUEST[\'af_action\'])
    ? $_REQUEST[\'af_action\']
    : $hash;

$AjaxForm->process($action, $_REQUEST);

// Return chunk
return $content;',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
    ),
    'modTemplateVar' => 
    array (
    ),
  ),
);