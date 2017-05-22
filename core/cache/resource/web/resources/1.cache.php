<?php  return array (
  'resourceClass' => 'modDocument',
  'resource' => 
  array (
    'id' => 1,
    'type' => 'document',
    'contentType' => 'text/html',
    'pagetitle' => 'Главная',
    'longtitle' => 'Lacasa.by',
    'description' => '',
    'alias' => 'index',
    'link_attributes' => '',
    'published' => 1,
    'pub_date' => 0,
    'unpub_date' => 0,
    'parent' => 0,
    'isfolder' => 0,
    'introtext' => '',
    'content' => '',
    'richtext' => 1,
    'template' => 1,
    'menuindex' => 0,
    'searchable' => 1,
    'cacheable' => 1,
    'createdby' => 1,
    'createdon' => 1477811740,
    'editedby' => 1,
    'editedon' => 1477840652,
    'deleted' => 0,
    'deletedon' => 0,
    'deletedby' => 0,
    'publishedon' => 0,
    'publishedby' => 0,
    'menutitle' => '',
    'donthit' => 0,
    'privateweb' => 0,
    'privatemgr' => 0,
    'content_dispo' => 0,
    'hidemenu' => 0,
    'class_key' => 'modDocument',
    'context_key' => 'web',
    'content_type' => 1,
    'uri' => 'index',
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
    <title>Lacasa.by</title>
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
<li class="menu__item last"><a href="/index.php?id=17" class="link menu__link" title="Наш салон" >Наш салон</a></li>
</ul>
    </div>
</div>
                <div class="content__main">
                    <div class="content__slider">
                        <div class="owl-carousel main-slider">
                            <div class="main-slider__item">
    <a href="http://tut.by" class="main-slider__link">
        <img class="main-slider__img" src="/phpthumbsup/w/893/h/317/zc/1/src/assets/img/slide_main.jpg" alt="Название слайда 1">
    </a>
</div><div class="main-slider__item">
    <a href="--" class="main-slider__link">
        <img class="main-slider__img" src="/phpthumbsup/w/893/h/317/zc/1/src/assets/img/slide_main.jpg" alt="Название слайда 2">
    </a>
</div>
                        </div>
                        <div class="owl-prev"></div>
                        <div class="owl-next"></div>
                    </div>
                    <div class="content__title hidden-sm hidden-xs">НОВИНКИ НАШЕГО АТЕЛЬЕ</div>
                    <div class="content__mobile-title hidden-lg hidden-md">Добро пожаловать в каталог
                        продукции компании Lacasa</div>
                    <div class="content__links">
                        <a class="content__link" href="http://dveri">
    <img class="content__link-img" src="/phpthumbsup/w/429/h/300/zc/1/src/assets/img/door.jpg" alt="Двери" alt="Двери">
    <span class="content__label">Двери</span>
</a><a class="content__link" href="http://mebel">
    <img class="content__link-img" src="/phpthumbsup/w/429/h/300/zc/1/src/assets/img/furniture.jpg" alt="Мебель" alt="Мебель">
    <span class="content__label">Мебель</span>
</a>
                    </div>
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
    '[[*pagetitle]]' => 'Главная',
    '[[*longtitle]]' => 'Lacasa.by',
    '[[*longtitle:is=``:then=`Главная`:else=`Lacasa.by`]]' => 'Lacasa.by',
    '[[*description]]' => '',
    '[[$head]]' => '<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lacasa.by</title>
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
<li class="menu__item last"><a href="/index.php?id=17" class="link menu__link" title="Наш салон" >Наш салон</a></li>
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
<li class="menu__item last"><a href="/index.php?id=17" class="link menu__link" title="Наш салон" >Наш салон</a></li>
</ul>
    </div>
</div>',
    '[[getImageList?
                                &tvname=`main-slider`
                                &tpl=`main-slider`
                                &where=`{"is_published:=":"1"}`
                            ]]' => '<div class="main-slider__item">
    <a href="http://tut.by" class="main-slider__link">
        <img class="main-slider__img" src="/phpthumbsup/w/893/h/317/zc/1/src/assets/img/slide_main.jpg" alt="Название слайда 1">
    </a>
</div><div class="main-slider__item">
    <a href="--" class="main-slider__link">
        <img class="main-slider__img" src="/phpthumbsup/w/893/h/317/zc/1/src/assets/img/slide_main.jpg" alt="Название слайда 2">
    </a>
</div>',
    '[[getImageList?
                            &tvname=`main-blocks`
                            &tpl=`main-blocks`
                            &where=`{"is_published:=":"1"}`
                        ]]' => '<a class="content__link" href="http://dveri">
    <img class="content__link-img" src="/phpthumbsup/w/429/h/300/zc/1/src/assets/img/door.jpg" alt="Двери" alt="Двери">
    <span class="content__label">Двери</span>
</a><a class="content__link" href="http://mebel">
    <img class="content__link-img" src="/phpthumbsup/w/429/h/300/zc/1/src/assets/img/furniture.jpg" alt="Мебель" alt="Мебель">
    <span class="content__label">Мебель</span>
</a>',
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
    '[[*id]]' => 1,
    '[[~1]]' => 'index.php?id=1',
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
      'getImageList' => 
      array (
        'fields' => 
        array (
          'id' => 1,
          'source' => 0,
          'property_preprocess' => false,
          'name' => 'getImageList',
          'description' => '',
          'editor_type' => 0,
          'category' => 1,
          'cache_type' => 0,
          'snippet' => '/**
 * getImageList
 *
 * Copyright 2009-2014 by Bruno Perner <b.perner@gmx.de>
 *
 * getImageList is free software; you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by the Free
 * Software Foundation; either version 2 of the License, or (at your option) any
 * later version.
 *
 * getImageList is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * getImageList; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package migx
 */
/**
 * getImageList
 *
 * display Items from outputvalue of TV with custom-TV-input-type MIGX or from other JSON-string for MODx Revolution 
 *
 * @version 1.4
 * @author Bruno Perner <b.perner@gmx.de>
 * @copyright Copyright &copy; 2009-2014
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU General Public License
 * version 2 or (at your option) any later version.
 * @package migx
 */

/*example: <ul>[[!getImageList? &tvname=`myTV`&tpl=`@CODE:<li>[[+idx]]<img src="[[+imageURL]]"/><p>[[+imageAlt]]</p></li>`]]</ul>*/
/* get default properties */


$tvname = $modx->getOption(\'tvname\', $scriptProperties, \'\');
$tpl = $modx->getOption(\'tpl\', $scriptProperties, \'\');
$wrapperTpl = $modx->getOption(\'wrapperTpl\', $scriptProperties, \'\');
$limit = $modx->getOption(\'limit\', $scriptProperties, \'0\');
$offset = $modx->getOption(\'offset\', $scriptProperties, 0);
$totalVar = $modx->getOption(\'totalVar\', $scriptProperties, \'total\');
$randomize = $modx->getOption(\'randomize\', $scriptProperties, false);
$preselectLimit = $modx->getOption(\'preselectLimit\', $scriptProperties, 0); // when random preselect important images
$where = $modx->getOption(\'where\', $scriptProperties, \'\');
$where = !empty($where) ? $modx->fromJSON($where) : array();
$sort = $modx->getOption(\'sort\', $scriptProperties, \'\');
$sort = !empty($sort) ? $modx->fromJSON($sort) : array();
$toSeparatePlaceholders = $modx->getOption(\'toSeparatePlaceholders\', $scriptProperties, false);
$toPlaceholder = $modx->getOption(\'toPlaceholder\', $scriptProperties, false);
$outputSeparator = $modx->getOption(\'outputSeparator\', $scriptProperties, \'\');
$splitSeparator = $modx->getOption(\'splitSeparator\', $scriptProperties, \'\');
$placeholdersKeyField = $modx->getOption(\'placeholdersKeyField\', $scriptProperties, \'MIGX_id\');
$toJsonPlaceholder = $modx->getOption(\'toJsonPlaceholder\', $scriptProperties, false);
$jsonVarKey = $modx->getOption(\'jsonVarKey\', $scriptProperties, \'migx_outputvalue\');
$outputvalue = $modx->getOption(\'value\', $scriptProperties, \'\');
$outputvalue = isset($_REQUEST[$jsonVarKey]) ? $_REQUEST[$jsonVarKey] : $outputvalue;
$docidVarKey = $modx->getOption(\'docidVarKey\', $scriptProperties, \'migx_docid\');
$docid = $modx->getOption(\'docid\', $scriptProperties, (isset($modx->resource) ? $modx->resource->get(\'id\') : 1));
$docid = isset($_REQUEST[$docidVarKey]) ? $_REQUEST[$docidVarKey] : $docid;
$processTVs = $modx->getOption(\'processTVs\', $scriptProperties, \'1\');
$reverse = $modx->getOption(\'reverse\', $scriptProperties, \'0\');
$sumFields = $modx->getOption(\'sumFields\', $scriptProperties, \'\');
$sumPrefix = $modx->getOption(\'sumPrefix\', $scriptProperties, \'summary_\');
$addfields = $modx->getOption(\'addfields\', $scriptProperties, \'\');
$addfields = !empty($addfields) ? explode(\',\', $addfields) : null;
//split json into parts
$splits = $modx->fromJson($modx->getOption(\'splits\', $scriptProperties, 0));
$splitTpl = $modx->getOption(\'splitTpl\', $scriptProperties, \'\');
$splitSeparator = $modx->getOption(\'splitSeparator\', $scriptProperties, \'\');
$inheritFrom = $modx->getOption(\'inheritFrom\', $scriptProperties, \'\'); //commaseparated list of resource-ids or/and the keyword \'parents\' where to inherit from
$inheritFrom = !empty($inheritFrom) ? explode(\',\',$inheritFrom) : \'\';

$modx->setPlaceholder(\'docid\', $docid);

$base_path = $modx->getOption(\'base_path\', null, MODX_BASE_PATH);
$base_url = $modx->getOption(\'base_url\', null, MODX_BASE_URL);

$migx = $modx->getService(\'migx\', \'Migx\', $modx->getOption(\'migx.core_path\', null, $modx->getOption(\'core_path\') . \'components/migx/\') . \'model/migx/\', $scriptProperties);
if (!($migx instanceof Migx))
    return \'\';
$migx->working_context = isset($modx->resource) ? $modx->resource->get(\'context_key\') : \'web\';

if (!empty($tvname)) {
    if ($tv = $modx->getObject(\'modTemplateVar\', array(\'name\' => $tvname))) {

        /*
        *   get inputProperties
        */


        $properties = $tv->get(\'input_properties\');
        $properties = isset($properties[\'formtabs\']) ? $properties : $tv->getProperties();

        $migx->config[\'configs\'] = $modx->getOption(\'configs\', $properties, \'\');
        if (!empty($migx->config[\'configs\'])) {
            $migx->loadConfigs();
            // get tabs from file or migx-config-table
            $formtabs = $migx->getTabs();
        }
        if (empty($formtabs) && isset($properties[\'formtabs\'])) {
            //try to get formtabs and its fields from properties
            $formtabs = $modx->fromJSON($properties[\'formtabs\']);
        }

        if (!empty($properties[\'basePath\'])) {
            if ($properties[\'autoResourceFolders\'] == \'true\') {
                $scriptProperties[\'base_path\'] = $base_path . $properties[\'basePath\'] . $docid . \'/\';
                $scriptProperties[\'base_url\'] = $base_url . $properties[\'basePath\'] . $docid . \'/\';
            } else {
                $scriptProperties[\'base_path\'] = $base_path . $properties[\'base_path\'];
                $scriptProperties[\'base_url\'] = $base_url . $properties[\'basePath\'];
            }
        }
        if ($jsonVarKey == \'migx_outputvalue\' && !empty($properties[\'jsonvarkey\'])) {
            $jsonVarKey = $properties[\'jsonvarkey\'];
            $outputvalue = isset($_REQUEST[$jsonVarKey]) ? $_REQUEST[$jsonVarKey] : $outputvalue;
        }
        
        if (empty($outputvalue)){
            $outputvalue = $tv->renderOutput($docid);
            if (empty($outputvalue) && !empty($inheritFrom)){
                foreach ($inheritFrom as $from){
                    if ($from == \'parents\'){
                        $outputvalue = $tv->processInheritBinding(\'\',$docid);
                    }else{
                        $outputvalue = $tv->renderOutput($from);
                    }
                    if (!empty($outputvalue)){
                        break;
                    }                    
                }
            }
        }

       
        /*
        *   get inputTvs 
        */
        $inputTvs = array();
        if (is_array($formtabs)) {

            //multiple different Forms
            // Note: use same field-names and inputTVs in all forms
            $inputTvs = $migx->extractInputTvs($formtabs);
        }
        if ($migx->source = $tv->getSource($migx->working_context, false)){
            $migx->source->initialize();
        }
        
    }


}

if (empty($outputvalue)) {
    return \'\';
}

//echo $outputvalue.\'<br/><br/>\';

$items = $modx->fromJSON($outputvalue);

// where filter
if (is_array($where) && count($where) > 0) {
    $items = $migx->filterItems($where, $items);
}
$modx->setPlaceholder($totalVar, count($items));

if (!empty($reverse)) {
    $items = array_reverse($items);
}

// sort items
if (is_array($sort) && count($sort) > 0) {
    $items = $migx->sortDbResult($items, $sort);
}

$summaries = array();
$output = \'\';
$items = $offset > 0 ? array_slice($items, $offset) : $items;
$count = count($items);

if ($count > 0) {
    $limit = $limit == 0 || $limit > $count ? $count : $limit;
    $preselectLimit = $preselectLimit > $count ? $count : $preselectLimit;
    //preselect important items
    $preitems = array();
    if ($randomize && $preselectLimit > 0) {
        for ($i = 0; $i < $preselectLimit; $i++) {
            $preitems[] = $items[$i];
            unset($items[$i]);
        }
        $limit = $limit - count($preitems);
    }

    //shuffle items
    if ($randomize) {
        shuffle($items);
    }

    //limit items
    $count = count($items);
    $tempitems = array();

    for ($i = 0; $i < $limit; $i++) {
        if ($i >= $count) {
            break;
        }
        $tempitems[] = $items[$i];
    }
    $items = $tempitems;

    //add preselected items and schuffle again
    if ($randomize && $preselectLimit > 0) {
        $items = array_merge($preitems, $items);
        shuffle($items);
    }

    $properties = array();
    foreach ($scriptProperties as $property => $value) {
        $properties[\'property.\' . $property] = $value;
    }

    $idx = 0;
    $output = array();
    $template = array();
    $count = count($items);

    foreach ($items as $key => $item) {
        $formname = isset($item[\'MIGX_formname\']) ? $item[\'MIGX_formname\'] . \'_\' : \'\';
        $fields = array();
        foreach ($item as $field => $value) {
            if (is_array($value)) {
                if (is_array($value[0])) {
                    //nested array - convert to json
                    $value = $modx->toJson($value);
                } else {
                    $value = implode(\'||\', $value); //handle arrays (checkboxes, multiselects)
                }
            }


            $inputTVkey = $formname . $field;

            if ($processTVs && isset($inputTvs[$inputTVkey])) {
                if (isset($inputTvs[$inputTVkey][\'inputTV\']) && $tv = $modx->getObject(\'modTemplateVar\', array(\'name\' => $inputTvs[$inputTVkey][\'inputTV\']))) {

                } else {
                    $tv = $modx->newObject(\'modTemplateVar\');
                    $tv->set(\'type\', $inputTvs[$inputTVkey][\'inputTVtype\']);
                }
                $inputTV = $inputTvs[$inputTVkey];

                $mTypes = $modx->getOption(\'manipulatable_url_tv_output_types\', null, \'image,file\');
                //don\'t manipulate any urls here
                $modx->setOption(\'manipulatable_url_tv_output_types\', \'\');
                $tv->set(\'default_text\', $value);
                $value = $tv->renderOutput($docid);
                //set option back
                $modx->setOption(\'manipulatable_url_tv_output_types\', $mTypes);
                //now manipulate urls
                if ($mediasource = $migx->getFieldSource($inputTV, $tv)) {
                    $mTypes = explode(\',\', $mTypes);
                    if (!empty($value) && in_array($tv->get(\'type\'), $mTypes)) {
                        //$value = $mediasource->prepareOutputUrl($value);
                        $value = str_replace(\'/./\', \'/\', $mediasource->prepareOutputUrl($value));
                    }
                }

            }
            $fields[$field] = $value;

        }

        if (!empty($addfields)) {
            foreach ($addfields as $addfield) {
                $addfield = explode(\':\', $addfield);
                $addname = $addfield[0];
                $adddefault = isset($addfield[1]) ? $addfield[1] : \'\';
                $fields[$addname] = $adddefault;
            }
        }

        if (!empty($sumFields)) {
            $sumFields = is_array($sumFields) ? $sumFields : explode(\',\', $sumFields);
            foreach ($sumFields as $sumField) {
                if (isset($fields[$sumField])) {
                    $summaries[$sumPrefix . $sumField] = $summaries[$sumPrefix . $sumField] + $fields[$sumField];
                    $fields[$sumPrefix . $sumField] = $summaries[$sumPrefix . $sumField];
                }
            }
        }


        if ($toJsonPlaceholder) {
            $output[] = $fields;
        } else {
            $fields[\'_alt\'] = $idx % 2;
            $idx++;
            $fields[\'_first\'] = $idx == 1 ? true : \'\';
            $fields[\'_last\'] = $idx == $limit ? true : \'\';
            $fields[\'idx\'] = $idx;
            $rowtpl = \'\';
            //get changing tpls from field
            if (substr($tpl, 0, 7) == "@FIELD:") {
                $tplField = substr($tpl, 7);
                $rowtpl = $fields[$tplField];
            }

            if ($fields[\'_first\'] && !empty($tplFirst)) {
                $rowtpl = $tplFirst;
            }
            if ($fields[\'_last\'] && empty($rowtpl) && !empty($tplLast)) {
                $rowtpl = $tplLast;
            }
            $tplidx = \'tpl_\' . $idx;
            if (empty($rowtpl) && !empty($$tplidx)) {
                $rowtpl = $$tplidx;
            }
            if ($idx > 1 && empty($rowtpl)) {
                $divisors = $migx->getDivisors($idx);
                if (!empty($divisors)) {
                    foreach ($divisors as $divisor) {
                        $tplnth = \'tpl_n\' . $divisor;
                        if (!empty($$tplnth)) {
                            $rowtpl = $$tplnth;
                            if (!empty($rowtpl)) {
                                break;
                            }
                        }
                    }
                }
            }

            if ($count == 1 && isset($tpl_oneresult)) {
                $rowtpl = $tpl_oneresult;
            }

            $fields = array_merge($fields, $properties);

            if (!empty($rowtpl)) {
                $template = $migx->getTemplate($tpl, $template);
                $fields[\'_tpl\'] = $template[$tpl];
            } else {
                $rowtpl = $tpl;

            }
            $template = $migx->getTemplate($rowtpl, $template);


            if ($template[$rowtpl]) {
                $chunk = $modx->newObject(\'modChunk\');
                $chunk->setCacheable(false);
                $chunk->setContent($template[$rowtpl]);


                if (!empty($placeholdersKeyField) && isset($fields[$placeholdersKeyField])) {
                    $output[$fields[$placeholdersKeyField]] = $chunk->process($fields);
                } else {
                    $output[] = $chunk->process($fields);
                }
            } else {
                if (!empty($placeholdersKeyField)) {
                    $output[$fields[$placeholdersKeyField]] = \'<pre>\' . print_r($fields, 1) . \'</pre>\';
                } else {
                    $output[] = \'<pre>\' . print_r($fields, 1) . \'</pre>\';
                }
            }
        }


    }
}

if (count($summaries) > 0) {
    $modx->toPlaceholders($summaries);
}


if ($toJsonPlaceholder) {
    $modx->setPlaceholder($toJsonPlaceholder, $modx->toJson($output));
    return \'\';
}

if (!empty($toSeparatePlaceholders)) {
    $modx->toPlaceholders($output, $toSeparatePlaceholders);
    return \'\';
}
/*
if (!empty($outerTpl))
$o = parseTpl($outerTpl, array(\'output\'=>implode($outputSeparator, $output)));
else 
*/

if ($count > 0 && $splits > 0) {
    $size = ceil($count / $splits);
    $chunks = array_chunk($output, $size);
    $output = array();
    foreach ($chunks as $chunk) {
        $o = implode($outputSeparator, $chunk);
        $output[] = $modx->getChunk($splitTpl, array(\'output\' => $o));
    }
    $outputSeparator = $splitSeparator;
}

if (is_array($output)) {
    $o = implode($outputSeparator, $output);
} else {
    $o = $output;
}

if (!empty($o) && !empty($wrapperTpl)) {
    $template = $migx->getTemplate($wrapperTpl);
    if ($template[$wrapperTpl]) {
        $chunk = $modx->newObject(\'modChunk\');
        $chunk->setCacheable(false);
        $chunk->setContent($template[$wrapperTpl]);
        $properties[\'output\'] = $o;
        $o = $chunk->process($properties);
    }
}

if (!empty($toPlaceholder)) {
    $modx->setPlaceholder($toPlaceholder, $o);
    return \'\';
}

return $o;',
          'locked' => false,
          'properties' => 
          array (
          ),
          'moduleguid' => '',
          'static' => false,
          'static_file' => '',
          'content' => '/**
 * getImageList
 *
 * Copyright 2009-2014 by Bruno Perner <b.perner@gmx.de>
 *
 * getImageList is free software; you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by the Free
 * Software Foundation; either version 2 of the License, or (at your option) any
 * later version.
 *
 * getImageList is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * getImageList; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package migx
 */
/**
 * getImageList
 *
 * display Items from outputvalue of TV with custom-TV-input-type MIGX or from other JSON-string for MODx Revolution 
 *
 * @version 1.4
 * @author Bruno Perner <b.perner@gmx.de>
 * @copyright Copyright &copy; 2009-2014
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU General Public License
 * version 2 or (at your option) any later version.
 * @package migx
 */

/*example: <ul>[[!getImageList? &tvname=`myTV`&tpl=`@CODE:<li>[[+idx]]<img src="[[+imageURL]]"/><p>[[+imageAlt]]</p></li>`]]</ul>*/
/* get default properties */


$tvname = $modx->getOption(\'tvname\', $scriptProperties, \'\');
$tpl = $modx->getOption(\'tpl\', $scriptProperties, \'\');
$wrapperTpl = $modx->getOption(\'wrapperTpl\', $scriptProperties, \'\');
$limit = $modx->getOption(\'limit\', $scriptProperties, \'0\');
$offset = $modx->getOption(\'offset\', $scriptProperties, 0);
$totalVar = $modx->getOption(\'totalVar\', $scriptProperties, \'total\');
$randomize = $modx->getOption(\'randomize\', $scriptProperties, false);
$preselectLimit = $modx->getOption(\'preselectLimit\', $scriptProperties, 0); // when random preselect important images
$where = $modx->getOption(\'where\', $scriptProperties, \'\');
$where = !empty($where) ? $modx->fromJSON($where) : array();
$sort = $modx->getOption(\'sort\', $scriptProperties, \'\');
$sort = !empty($sort) ? $modx->fromJSON($sort) : array();
$toSeparatePlaceholders = $modx->getOption(\'toSeparatePlaceholders\', $scriptProperties, false);
$toPlaceholder = $modx->getOption(\'toPlaceholder\', $scriptProperties, false);
$outputSeparator = $modx->getOption(\'outputSeparator\', $scriptProperties, \'\');
$splitSeparator = $modx->getOption(\'splitSeparator\', $scriptProperties, \'\');
$placeholdersKeyField = $modx->getOption(\'placeholdersKeyField\', $scriptProperties, \'MIGX_id\');
$toJsonPlaceholder = $modx->getOption(\'toJsonPlaceholder\', $scriptProperties, false);
$jsonVarKey = $modx->getOption(\'jsonVarKey\', $scriptProperties, \'migx_outputvalue\');
$outputvalue = $modx->getOption(\'value\', $scriptProperties, \'\');
$outputvalue = isset($_REQUEST[$jsonVarKey]) ? $_REQUEST[$jsonVarKey] : $outputvalue;
$docidVarKey = $modx->getOption(\'docidVarKey\', $scriptProperties, \'migx_docid\');
$docid = $modx->getOption(\'docid\', $scriptProperties, (isset($modx->resource) ? $modx->resource->get(\'id\') : 1));
$docid = isset($_REQUEST[$docidVarKey]) ? $_REQUEST[$docidVarKey] : $docid;
$processTVs = $modx->getOption(\'processTVs\', $scriptProperties, \'1\');
$reverse = $modx->getOption(\'reverse\', $scriptProperties, \'0\');
$sumFields = $modx->getOption(\'sumFields\', $scriptProperties, \'\');
$sumPrefix = $modx->getOption(\'sumPrefix\', $scriptProperties, \'summary_\');
$addfields = $modx->getOption(\'addfields\', $scriptProperties, \'\');
$addfields = !empty($addfields) ? explode(\',\', $addfields) : null;
//split json into parts
$splits = $modx->fromJson($modx->getOption(\'splits\', $scriptProperties, 0));
$splitTpl = $modx->getOption(\'splitTpl\', $scriptProperties, \'\');
$splitSeparator = $modx->getOption(\'splitSeparator\', $scriptProperties, \'\');
$inheritFrom = $modx->getOption(\'inheritFrom\', $scriptProperties, \'\'); //commaseparated list of resource-ids or/and the keyword \'parents\' where to inherit from
$inheritFrom = !empty($inheritFrom) ? explode(\',\',$inheritFrom) : \'\';

$modx->setPlaceholder(\'docid\', $docid);

$base_path = $modx->getOption(\'base_path\', null, MODX_BASE_PATH);
$base_url = $modx->getOption(\'base_url\', null, MODX_BASE_URL);

$migx = $modx->getService(\'migx\', \'Migx\', $modx->getOption(\'migx.core_path\', null, $modx->getOption(\'core_path\') . \'components/migx/\') . \'model/migx/\', $scriptProperties);
if (!($migx instanceof Migx))
    return \'\';
$migx->working_context = isset($modx->resource) ? $modx->resource->get(\'context_key\') : \'web\';

if (!empty($tvname)) {
    if ($tv = $modx->getObject(\'modTemplateVar\', array(\'name\' => $tvname))) {

        /*
        *   get inputProperties
        */


        $properties = $tv->get(\'input_properties\');
        $properties = isset($properties[\'formtabs\']) ? $properties : $tv->getProperties();

        $migx->config[\'configs\'] = $modx->getOption(\'configs\', $properties, \'\');
        if (!empty($migx->config[\'configs\'])) {
            $migx->loadConfigs();
            // get tabs from file or migx-config-table
            $formtabs = $migx->getTabs();
        }
        if (empty($formtabs) && isset($properties[\'formtabs\'])) {
            //try to get formtabs and its fields from properties
            $formtabs = $modx->fromJSON($properties[\'formtabs\']);
        }

        if (!empty($properties[\'basePath\'])) {
            if ($properties[\'autoResourceFolders\'] == \'true\') {
                $scriptProperties[\'base_path\'] = $base_path . $properties[\'basePath\'] . $docid . \'/\';
                $scriptProperties[\'base_url\'] = $base_url . $properties[\'basePath\'] . $docid . \'/\';
            } else {
                $scriptProperties[\'base_path\'] = $base_path . $properties[\'base_path\'];
                $scriptProperties[\'base_url\'] = $base_url . $properties[\'basePath\'];
            }
        }
        if ($jsonVarKey == \'migx_outputvalue\' && !empty($properties[\'jsonvarkey\'])) {
            $jsonVarKey = $properties[\'jsonvarkey\'];
            $outputvalue = isset($_REQUEST[$jsonVarKey]) ? $_REQUEST[$jsonVarKey] : $outputvalue;
        }
        
        if (empty($outputvalue)){
            $outputvalue = $tv->renderOutput($docid);
            if (empty($outputvalue) && !empty($inheritFrom)){
                foreach ($inheritFrom as $from){
                    if ($from == \'parents\'){
                        $outputvalue = $tv->processInheritBinding(\'\',$docid);
                    }else{
                        $outputvalue = $tv->renderOutput($from);
                    }
                    if (!empty($outputvalue)){
                        break;
                    }                    
                }
            }
        }

       
        /*
        *   get inputTvs 
        */
        $inputTvs = array();
        if (is_array($formtabs)) {

            //multiple different Forms
            // Note: use same field-names and inputTVs in all forms
            $inputTvs = $migx->extractInputTvs($formtabs);
        }
        if ($migx->source = $tv->getSource($migx->working_context, false)){
            $migx->source->initialize();
        }
        
    }


}

if (empty($outputvalue)) {
    return \'\';
}

//echo $outputvalue.\'<br/><br/>\';

$items = $modx->fromJSON($outputvalue);

// where filter
if (is_array($where) && count($where) > 0) {
    $items = $migx->filterItems($where, $items);
}
$modx->setPlaceholder($totalVar, count($items));

if (!empty($reverse)) {
    $items = array_reverse($items);
}

// sort items
if (is_array($sort) && count($sort) > 0) {
    $items = $migx->sortDbResult($items, $sort);
}

$summaries = array();
$output = \'\';
$items = $offset > 0 ? array_slice($items, $offset) : $items;
$count = count($items);

if ($count > 0) {
    $limit = $limit == 0 || $limit > $count ? $count : $limit;
    $preselectLimit = $preselectLimit > $count ? $count : $preselectLimit;
    //preselect important items
    $preitems = array();
    if ($randomize && $preselectLimit > 0) {
        for ($i = 0; $i < $preselectLimit; $i++) {
            $preitems[] = $items[$i];
            unset($items[$i]);
        }
        $limit = $limit - count($preitems);
    }

    //shuffle items
    if ($randomize) {
        shuffle($items);
    }

    //limit items
    $count = count($items);
    $tempitems = array();

    for ($i = 0; $i < $limit; $i++) {
        if ($i >= $count) {
            break;
        }
        $tempitems[] = $items[$i];
    }
    $items = $tempitems;

    //add preselected items and schuffle again
    if ($randomize && $preselectLimit > 0) {
        $items = array_merge($preitems, $items);
        shuffle($items);
    }

    $properties = array();
    foreach ($scriptProperties as $property => $value) {
        $properties[\'property.\' . $property] = $value;
    }

    $idx = 0;
    $output = array();
    $template = array();
    $count = count($items);

    foreach ($items as $key => $item) {
        $formname = isset($item[\'MIGX_formname\']) ? $item[\'MIGX_formname\'] . \'_\' : \'\';
        $fields = array();
        foreach ($item as $field => $value) {
            if (is_array($value)) {
                if (is_array($value[0])) {
                    //nested array - convert to json
                    $value = $modx->toJson($value);
                } else {
                    $value = implode(\'||\', $value); //handle arrays (checkboxes, multiselects)
                }
            }


            $inputTVkey = $formname . $field;

            if ($processTVs && isset($inputTvs[$inputTVkey])) {
                if (isset($inputTvs[$inputTVkey][\'inputTV\']) && $tv = $modx->getObject(\'modTemplateVar\', array(\'name\' => $inputTvs[$inputTVkey][\'inputTV\']))) {

                } else {
                    $tv = $modx->newObject(\'modTemplateVar\');
                    $tv->set(\'type\', $inputTvs[$inputTVkey][\'inputTVtype\']);
                }
                $inputTV = $inputTvs[$inputTVkey];

                $mTypes = $modx->getOption(\'manipulatable_url_tv_output_types\', null, \'image,file\');
                //don\'t manipulate any urls here
                $modx->setOption(\'manipulatable_url_tv_output_types\', \'\');
                $tv->set(\'default_text\', $value);
                $value = $tv->renderOutput($docid);
                //set option back
                $modx->setOption(\'manipulatable_url_tv_output_types\', $mTypes);
                //now manipulate urls
                if ($mediasource = $migx->getFieldSource($inputTV, $tv)) {
                    $mTypes = explode(\',\', $mTypes);
                    if (!empty($value) && in_array($tv->get(\'type\'), $mTypes)) {
                        //$value = $mediasource->prepareOutputUrl($value);
                        $value = str_replace(\'/./\', \'/\', $mediasource->prepareOutputUrl($value));
                    }
                }

            }
            $fields[$field] = $value;

        }

        if (!empty($addfields)) {
            foreach ($addfields as $addfield) {
                $addfield = explode(\':\', $addfield);
                $addname = $addfield[0];
                $adddefault = isset($addfield[1]) ? $addfield[1] : \'\';
                $fields[$addname] = $adddefault;
            }
        }

        if (!empty($sumFields)) {
            $sumFields = is_array($sumFields) ? $sumFields : explode(\',\', $sumFields);
            foreach ($sumFields as $sumField) {
                if (isset($fields[$sumField])) {
                    $summaries[$sumPrefix . $sumField] = $summaries[$sumPrefix . $sumField] + $fields[$sumField];
                    $fields[$sumPrefix . $sumField] = $summaries[$sumPrefix . $sumField];
                }
            }
        }


        if ($toJsonPlaceholder) {
            $output[] = $fields;
        } else {
            $fields[\'_alt\'] = $idx % 2;
            $idx++;
            $fields[\'_first\'] = $idx == 1 ? true : \'\';
            $fields[\'_last\'] = $idx == $limit ? true : \'\';
            $fields[\'idx\'] = $idx;
            $rowtpl = \'\';
            //get changing tpls from field
            if (substr($tpl, 0, 7) == "@FIELD:") {
                $tplField = substr($tpl, 7);
                $rowtpl = $fields[$tplField];
            }

            if ($fields[\'_first\'] && !empty($tplFirst)) {
                $rowtpl = $tplFirst;
            }
            if ($fields[\'_last\'] && empty($rowtpl) && !empty($tplLast)) {
                $rowtpl = $tplLast;
            }
            $tplidx = \'tpl_\' . $idx;
            if (empty($rowtpl) && !empty($$tplidx)) {
                $rowtpl = $$tplidx;
            }
            if ($idx > 1 && empty($rowtpl)) {
                $divisors = $migx->getDivisors($idx);
                if (!empty($divisors)) {
                    foreach ($divisors as $divisor) {
                        $tplnth = \'tpl_n\' . $divisor;
                        if (!empty($$tplnth)) {
                            $rowtpl = $$tplnth;
                            if (!empty($rowtpl)) {
                                break;
                            }
                        }
                    }
                }
            }

            if ($count == 1 && isset($tpl_oneresult)) {
                $rowtpl = $tpl_oneresult;
            }

            $fields = array_merge($fields, $properties);

            if (!empty($rowtpl)) {
                $template = $migx->getTemplate($tpl, $template);
                $fields[\'_tpl\'] = $template[$tpl];
            } else {
                $rowtpl = $tpl;

            }
            $template = $migx->getTemplate($rowtpl, $template);


            if ($template[$rowtpl]) {
                $chunk = $modx->newObject(\'modChunk\');
                $chunk->setCacheable(false);
                $chunk->setContent($template[$rowtpl]);


                if (!empty($placeholdersKeyField) && isset($fields[$placeholdersKeyField])) {
                    $output[$fields[$placeholdersKeyField]] = $chunk->process($fields);
                } else {
                    $output[] = $chunk->process($fields);
                }
            } else {
                if (!empty($placeholdersKeyField)) {
                    $output[$fields[$placeholdersKeyField]] = \'<pre>\' . print_r($fields, 1) . \'</pre>\';
                } else {
                    $output[] = \'<pre>\' . print_r($fields, 1) . \'</pre>\';
                }
            }
        }


    }
}

if (count($summaries) > 0) {
    $modx->toPlaceholders($summaries);
}


if ($toJsonPlaceholder) {
    $modx->setPlaceholder($toJsonPlaceholder, $modx->toJson($output));
    return \'\';
}

if (!empty($toSeparatePlaceholders)) {
    $modx->toPlaceholders($output, $toSeparatePlaceholders);
    return \'\';
}
/*
if (!empty($outerTpl))
$o = parseTpl($outerTpl, array(\'output\'=>implode($outputSeparator, $output)));
else 
*/

if ($count > 0 && $splits > 0) {
    $size = ceil($count / $splits);
    $chunks = array_chunk($output, $size);
    $output = array();
    foreach ($chunks as $chunk) {
        $o = implode($outputSeparator, $chunk);
        $output[] = $modx->getChunk($splitTpl, array(\'output\' => $o));
    }
    $outputSeparator = $splitSeparator;
}

if (is_array($output)) {
    $o = implode($outputSeparator, $output);
} else {
    $o = $output;
}

if (!empty($o) && !empty($wrapperTpl)) {
    $template = $migx->getTemplate($wrapperTpl);
    if ($template[$wrapperTpl]) {
        $chunk = $modx->newObject(\'modChunk\');
        $chunk->setCacheable(false);
        $chunk->setContent($template[$wrapperTpl]);
        $properties[\'output\'] = $o;
        $o = $chunk->process($properties);
    }
}

if (!empty($toPlaceholder)) {
    $modx->setPlaceholder($toPlaceholder, $o);
    return \'\';
}

return $o;',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
        ),
      ),
      'phpthumbsup' => 
      array (
        'fields' => 
        array (
          'id' => 18,
          'source' => 0,
          'property_preprocess' => false,
          'name' => 'phpthumbsup',
          'description' => '',
          'editor_type' => 0,
          'category' => 2,
          'cache_type' => 0,
          'snippet' => '/**
 * Turns a set of arguments passed to this snippet into a phpThumbsUp url for a thumbnail
 *
 *
 * @package   phpThumbsUp
 * @author    Darkstar Design (info@darkstardesign.com)
 */

// input
$image = !empty($input) ? trim($input) : \'\';
$options = !empty($options) ? trim($options) : \'\';

// path to model
$default_path = $modx->getOption(\'core_path\') . \'components/phpthumbsup/\';
$path = $modx->getOption(\'phpthumbsup.core_path\', NULL, $default_path) . \'model/phpthumbsup/\';
$thumbsup = $modx->getService(\'thumbsup\', \'PhpThumbsUp\', $path, $scriptProperties);

// make sure we have an image and options
if (!empty($image)) {
    $image = $thumbsup->options_to_path($image, $options);
}

// return image path
return $image;',
          'locked' => false,
          'properties' => NULL,
          'moduleguid' => '',
          'static' => false,
          'static_file' => '',
          'content' => '/**
 * Turns a set of arguments passed to this snippet into a phpThumbsUp url for a thumbnail
 *
 *
 * @package   phpThumbsUp
 * @author    Darkstar Design (info@darkstardesign.com)
 */

// input
$image = !empty($input) ? trim($input) : \'\';
$options = !empty($options) ? trim($options) : \'\';

// path to model
$default_path = $modx->getOption(\'core_path\') . \'components/phpthumbsup/\';
$path = $modx->getOption(\'phpthumbsup.core_path\', NULL, $default_path) . \'model/phpthumbsup/\';
$thumbsup = $modx->getService(\'thumbsup\', \'PhpThumbsUp\', $path, $scriptProperties);

// make sure we have an image and options
if (!empty($image)) {
    $image = $thumbsup->options_to_path($image, $options);
}

// return image path
return $image;',
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