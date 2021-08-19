<?php

const DEFAULT_TEMPLATE_PATH = "/local/templates/sladkoe";


//use Bitrix\Main\Application;
//$docRoot = Application::getInstance()->getContext()->getServer()->getDocumentRoot();

function getArr($arr)
{
    echo '<pre>';
    print_r($arr);
    echo '</pre>';
}

//spl_autoload_register(function ($class){
//    $ds = DIRECTORY_SEPARATOR;
//    $filename = $_SERVER["DOCUMENT_ROOT"] . $ds . str_replace('\\', $ds, $class) . '.php';
//    require ($filename);
//
////    echo '<pre>';
////    print_r($filename);
////    echo '</pre>';
//});

CModule::AddAutoloadClasses('', [
    'lib\Company\Company' => '/lib/Company/Company.php',
    'lib\User' => '/lib/User.php',
    'lib\Employee' => '/lib/Employee.php',
]);


if (file_exists($_SERVER["DOCUMENT_ROOT"] . "/local/php_interface/includes/event_handlers.php"))
    require_once($_SERVER["DOCUMENT_ROOT"] . "/local/php_interface/includes/event_handlers.php");
