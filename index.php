<?php
// подключение служебной части пролога
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();
?>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");

global $APPLICATION;

$APPLICATION->SetTitle("Главная");
$APPLICATION->SetPageProperty("NOT_SHOW_NAV_CHAIN", "Y");
$APPLICATION->SetPageProperty("keywords", "sladkoezhka, вкусные торты, торты на заказ в иваново");
$APPLICATION->SetPageProperty("title", "sladkoezhka");
?>

    <div class="contactes" id="form">

        <form id="contact" method="post">

            <div id="fields">
                <button id="close" class="close">&times;</button>

                <div class="call_go">Заполните форму обращения</div>

                <div class="fields_info">
                    <input type="text" name="name" id="author" class="element elem"
                           placeholder="Введите ваше имя"
                           required>

                    <input type="email" name="email" id="email" class="element elem"
                           placeholder="Ваш E-mail" required>

                    <input type="number" name="number" id="number" class="element elem"
                           placeholder="Ваш телефон"
                           required>
                </div>

                <div>
                                                            <textarea name="text" class="text elem"
                                                                      placeholder="Сообщение..."
                                                                      cols="53"
                                                                      rows="8"></textarea>
                </div>

                <div>
                    <button type="submit" id="submit" class="go">Отправить</button>
                </div>

            </div>

        </form>

    </div>
    <div class="main">
        <div class="main_text">

            <div class="text_h">
                <? $APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    [
                        "AREA_FILE_SHOW" => "file",
                        "AREA_FILE_SUFFIX" => "inc",
                        "EDIT_TEMPLATE" => "",
                        "PATH" => "/includes/main_text_h.php"
                    ]
                ); ?>
                <span><? $APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        [
                            "AREA_FILE_SHOW" => "file",
                            "AREA_FILE_SUFFIX" => "inc",
                            "EDIT_TEMPLATE" => "",
                            "PATH" => "/includes/main_text_h_span.php"
                        ]
                    ); ?></span>
            </div>

            <div class="text_p">
                <? $APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    [
                        "AREA_FILE_SHOW" => "file",
                        "AREA_FILE_SUFFIX" => "inc",
                        "EDIT_TEMPLATE" => "",
                        "PATH" => "/includes/main_text_p.php"
                    ]
                ); ?>
            </div>

            <div class="text_btn">
                <a href="#" id="btn" class="btn">Заказать</a>
            </div>

        </div>
        <div class="main_img">
            <img alt="banner" src="<?= DEFAULT_TEMPLATE_PATH ?>/images/banner.png">
        </div>
    </div>
<? $APPLICATION->IncludeComponent("bitrix:catalog.section.list", "MyCatalogSectionList", [
    "ADD_SECTIONS_CHAIN" => "Y",    // Включать раздел в цепочку навигации
    "CACHE_FILTER" => "N",    // Кешировать при установленном фильтре
    "CACHE_GROUPS" => "Y",    // Учитывать права доступа
    "CACHE_TIME" => "36000000",    // Время кеширования (сек.)
    "CACHE_TYPE" => "A",    // Тип кеширования
    "COUNT_ELEMENTS" => "Y",    // Показывать количество элементов в разделе
    "COUNT_ELEMENTS_FILTER" => "CNT_ACTIVE",    // Показывать количество
    "FILTER_NAME" => "sectionsFilter",    // Имя массива со значениями фильтра разделов
    "IBLOCK_ID" => "1",    // Инфоблок
    "IBLOCK_TYPE" => "Catalog",    // Тип инфоблока
    "SECTION_CODE" => "",    // Код раздела
    "SECTION_FIELDS" => [    // Поля разделов
        0 => "",
        1 => "",
    ],
    "SECTION_ID" => $_REQUEST["SECTION_ID"],    // ID раздела
    "SECTION_URL" => "",    // URL, ведущий на страницу с содержимым раздела
    "SECTION_USER_FIELDS" => [    // Свойства разделов
        0 => "",
        1 => "",
    ],
    "SHOW_PARENT_NAME" => "Y",    // Показывать название раздела
    "TOP_DEPTH" => "2",    // Максимальная отображаемая глубина разделов
    "VIEW_MODE" => "LINE",    // Вид списка подразделов
],
    false
); ?>

    <div class="contacts">
        <div class="form">
            <div class="form_h">
                Закажи торт прямо сейчас !
            </div>
            <div class="form_p">
 <span>Заполни простейшую форму и мы вам <br>
			 перезвоним в течении <i>10 минут</i> ! </span>
            </div>
            <div class="form_f">
                <form action="#" method="POST">
                    <label for="lastname">Ваше имя.</label><br>
                    <input type="text" id="lastname" name="name"
                           style="border:1px solid #E420CA;border-radius: 12px;padding: 3px;"><br>
                    <br>
                    <label for="lastname">Ваш номер.</label><br>
                    <input type="number" id="lastname" name="number"
                           style="border:1px solid #E420CA;border-radius: 12px;padding: 3px;"><br>
                    <br>
                    <a href="#" class="f_btn">Отправить</a>
                </form>
            </div>
        </div>
        <div class="contact">
            <div class="contact_h">
                Наши координаты !
            </div>
            <div class="contact_p">
 <span>г.Иваново, ул.8 марта д.8 <br>
			 ТЦ "Серебрянный город"</span>
            </div>
            <div class="contact_m">
                <div style="position:relative;overflow:hidden;">
                    <a href="https://yandex.ru/maps/org/serebryany_gorod/1090731857/?utm_medium=mapframe&utm_source=maps"
                       style="color:#eee;font-size:12px;position:absolute;top:0px;">Серебряный город</a><a
                            href="https://yandex.ru/maps/5/ivanovo/category/shopping_mall/184108083/?utm_medium=mapframe&utm_source=maps"
                            style="color:#eee;font-size:12px;position:absolute;top:14px;">Торговый центр в Иванове</a>
                    <iframe src="https://yandex.ru/map-widget/v1/-/CCUiEEb4gC" width="360"
                            height="200" frameborder="1" allowfullscreen="true"
                            style="position:relative;border:3px solid #E420CA; border-radius:12px;"></iframe>
                </div>
            </div>
        </div>
    </div>
    <script>

        let paddingOffset = window.innerWidth - document.body.offsetWidth + 'px';
        document.getElementById('btn').onclick = function () {

            document.getElementById('form').classList.add('active');
            document.body.classList.add('no-scroll');

            document.body.style.paddingRight = paddingOffset;
            //document.body.style.paddingRight = '0px';
        }

        document.getElementById('submit').onclick = function () {
            document.getElementById('form').classList.remove('active');
            document.body.classList.remove('no-scroll');

            document.body.style.paddingRight = '0px';
        }
        document.getElementById('close').onclick = function () {
            document.getElementById('form').classList.remove('active');
            document.body.classList.remove('no-scroll');

            document.body.style.paddingRight = '0px';
        }


        document.getElementById('open_sub').onclick = function () {

            document.getElementById('sub_list').classList.toggle('sub_active');

        }

    </script>
    <br><? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>