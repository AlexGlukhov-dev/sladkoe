<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

if (isset($arResult["PROPERTY_AUTHOR_VALUE"])) {
    $arUser = CUser::GetList(
        ($by = "ID"),
        ($order = "asc"),
        [
            "ID" => $arResult["PROPERTY_AUTHOR_VALUE"]
        ],
        [
            'FIELDS' => [
                'NAME',
                'LAST_NAME',
                'ID'
            ]
        ]
    );


    $fetchUser = $arUser->Fetch();
    $arResult['AUTHOR'] = $fetchUser;
}
//getArr($arResult);


