<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

global $APPLICATION;
?>


<?php use Bitrix\Main\Page\Asset; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <? $APPLICATION->ShowHead(); ?>
    <title><?php $APPLICATION->ShowTitle(); ?></title>
    <?php
    CJSCore::Init(["jquery"]);
    Asset::getInstance()->addCss(DEFAULT_TEMPLATE_PATH . '/css/style.css');
    Asset::getInstance()->addCss(DEFAULT_TEMPLATE_PATH . '/css/contact.css');
    Asset::getInstance()->addCss(DEFAULT_TEMPLATE_PATH . '/css/modal.css');
    Asset::getInstance()->addString('<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">');
    Asset::getInstance()->addString('<link rel="preconnect" href="https://fonts.googleapis.com">');
    Asset::getInstance()->addString('<link rel="preconnect" href="https://fonts.gstatic.com">');
    Asset::getInstance()->addString('<link href="https://fonts.googleapis.com/css2?family=Philosopher:wght@400;700&display=swap" rel="stylesheet">');

    ?>


</head>

<body>

<div id="panel"><? $APPLICATION->ShowPanel(); ?></div>

<div class="wrapper">
    <div class="container">

        <div class="header">
            <a href="/index.php">
                <div class="header_logo">Sladkoezhk<span>a</span></div>
            </a>
            <? $APPLICATION->IncludeComponent("bitrix:menu", "mainMenu", [
                "ALLOW_MULTI_SELECT" => "N",    // Разрешить несколько активных пунктов одновременно
                "CHILD_MENU_TYPE" => "top",    // Тип меню для остальных уровней
                "DELAY" => "N",    // Откладывать выполнение шаблона меню
                "MAX_LEVEL" => "1",    // Уровень вложенности меню
                "MENU_CACHE_GET_VARS" => [    // Значимые переменные запроса
                    0 => "",
                ],
                "MENU_CACHE_TIME" => "3600",    // Время кеширования (сек.)
                "MENU_CACHE_TYPE" => "N",    // Тип кеширования
                "MENU_CACHE_USE_GROUPS" => "Y",    // Учитывать права доступа
                "ROOT_MENU_TYPE" => "top",    // Тип меню для первого уровня
                "USE_EXT" => "N",    // Подключать файлы с именами вида .тип_меню.menu_ext.php
            ],
                false
            ); ?>

        </div>
