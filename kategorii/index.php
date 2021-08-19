<?php
// подключение служебной части пролога
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->ShowTitle();

use lib\Employee;
use lib\Company\Company;


$Peter = new Employee('Peter', 25, '1200 $', 'Back-end developer');
$AsCorp = new Company('AsCorp', 'Web-developments');



$Steve = new Employee('Steve', 29, '1500 $', 'Front-end developer');
$AsCorp = new Company('AsCorp', 'Web-developments');



$KirBr = new Employee('KirBr', 30, '3500 $', 'Web developer');
$AsCorp = new Company('Kenguru', 'ORPS');


require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php");