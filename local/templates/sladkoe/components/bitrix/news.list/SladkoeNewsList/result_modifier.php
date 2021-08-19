<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

foreach ($arResult['ITEMS'] as $key => &$arItem) {
    $ddd[] = $arItem["IBLOCK_SECTION_ID"];
    $file = CFile::ResizeImageGet($arItem['DETAIL_PICTURE'], ['width' => $arParams['PICT_W'], 'height' => $arParams['PICT_H']], BX_RESIZE_IMAGE_PROPORTIONAL_ALT, true);
    $arItem['DETAIL_PICTURE'] = $file;

    if (count($arResult['ITEMS']) == ($key + 1)) {
        $arValue .= $arItem["DISPLAY_PROPERTIES"]['AUTHOR']['VALUE'];
    } else {
        $arValue .= $arItem["DISPLAY_PROPERTIES"]['AUTHOR']['VALUE'] . '|';
    }


}

if (isset($arValue)) {
    $arUser = CUser::GetList(
        ($by = "ID"),
        ($order = "asc"),
        [
            "ID" => $arValue
        ],
        [
            'FIELDS' => [
                'NAME',
                'LAST_NAME',
                'ID'
            ]
        ]
    );


    while ($fetchUser = $arUser->Fetch()) {
        $arFetchUser[$fetchUser['ID']] = $fetchUser;
    }
}

if ($arFetchUser) {
    foreach ($arResult['ITEMS'] as $key => &$arItem) {

        if ($arFetchUser[$arItem["DISPLAY_PROPERTIES"]['AUTHOR']['VALUE']]) {
            $arItem['AUTHOR'] = $arFetchUser[$arItem["DISPLAY_PROPERTIES"]['AUTHOR']['VALUE']];
        }
    }
}


//getArr($arFetchUser);

//getArr($arItem["DISPLAY_PROPERTIES"]['AUTHOR']['VALUE']);

if ($ddd) {
    $arFilter = ["IBLOCK_ID" => $arParams["IBLOCK_ID"], "ID" => $ddd, "!PICTURE" => false];
    $arSelect = [
        'NAME',
        'DESCRIPTION',
        'ID',
        'PICTURE'
    ];
    $db_list = CIBlockSection::GetList(["ID" => "ASC"], $arFilter, false, $arSelect);
    while ($arr = $db_list->GetNext(true, false)) {

        $arr["PICTURE_SRC"] = CFile::GetPath($arr["PICTURE"]);

        $arResult["SECTION"][$arr["ID"]] = $arr;


    }
}


$cp = $this->__component;

getArr($cp);
$cp->SetResultCacheKeys();

//while ($arr = $db_list->GetNext(true, false)) {
//
//    $picture = CFile::GetByID($arr['PICTURE']);
//
//    while ($arPicture = $picture->Fetch()) {
//        $arr['PICTURE'] = $arPicture;
//
//    }
//    $arResult["SECTION"][$arr["ID"]] = $arr;
//
//
//}




