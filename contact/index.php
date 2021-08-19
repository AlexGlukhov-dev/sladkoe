<?php
// подключение служебной части пролога
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");

$APPLICATION->SetTitle("Каталог");
?>
    <div class="Abcontacts">

        <form id="Abcontact" action="./mail.php" method="post">

            <div id="Abfields">


                <div class="Abcall_go">Заполните форму обращения</div>

                <div class="Abfields_info">
                    <input type="text" name="name" id="Abauthor" class="Abelement Abelem" placeholder="Введите ваше имя"
                           required>

                    <input type="email" name="email" id="Abemail" class="Abelement Abelem" placeholder="Ваш E-mail"
                           required>

                    <input type="number" name="number" id="Abnumber" class="Abelement Abelem" placeholder="Ваш телефон"
                           required>
                </div>

                <div>
                    <textarea name="text" id="Abtext" class="Abelem" placeholder="Сообщение..." cols="53"
                              rows="8"></textarea>
                </div>

                <div>
                    <button type="submit" id="Absubmit" class="Abgo">Отправить</button>
                </div>

            </div>

        </form>

    </div>


<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>