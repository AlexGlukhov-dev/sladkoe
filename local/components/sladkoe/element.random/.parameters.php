<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

if (!CModule::IncludeModule("iblock"))
    return;

$arIBlockType = CIBlockParameters::GetIBlockTypes();

$arIBlock = [
    "-" => GetMessage("IBLOCK_ANY"),
];
$rsIBlock = CIBlock::GetList(["sort" => "asc"], ["TYPE" => $arCurrentValues["IBLOCK_TYPE"], "ACTIVE" => "Y"]);
while ($arr = $rsIBlock->Fetch()) {
    $arIBlock[$arr["ID"]] = "[" . $arr["ID"] . "] " . $arr["NAME"];
}


$arrProperties = [];
$properties = CIBlockProperty::GetList(["ID" => "DESC"], ["ACTIVE" => "Y", "IBLOCK_ID" => $arCurrentValues["IBLOCK_ID"]]);
while ($prop_fields = $properties->GetNext()) {
    $arrProperties[$prop_fields['CODE']] = $prop_fields["NAME"];
}


$arComponentParameters = [
    "GROUPS" => [
    ],
    "PARAMETERS" => [
        "IBLOCK_TYPE" => [
            "PARENT" => "BASE",
            "NAME" => GetMessage("IBLOCK_TYPE"),
            "TYPE" => "LIST",
            "VALUES" => $arIBlockType,
            "REFRESH" => "Y",
        ],
        "IBLOCK_ID" => [
            "PARENT" => "BASE",
            "NAME" => GetMessage("IBLOCK_IBLOCK"),
            "TYPE" => "LIST",
            "VALUES" => $arIBlock,
            "REFRESH" => "Y",
        ],
        "PARENT_SECTION" => [
            "PARENT" => "ADDITIONAL_SETTINGS",
            "NAME" => GetMessage("IBLOCK_SECTION_ID"),
            "TYPE" => "STRING",
            "DEFAULT" => '',
        ],
        "DETAIL_URL" => CIBlockParameters::GetPathTemplateParam(
            "DETAIL",
            "DETAIL_URL",
            GetMessage("IBLOCK_DETAIL_URL"),
            "",
            "URL_TEMPLATES"
        ),
        "CACHE_TIME" => ["DEFAULT" => 180],
        "CACHE_GROUPS" => [
            "PARENT" => "CACHE_SETTINGS",
            "NAME" => GetMessage("CP_BPR_CACHE_GROUPS"),
            "TYPE" => "CHECKBOX",
            "DEFAULT" => "Y",
        ],
        "IBLOCK_PROP" => [
            "PARENT" => "BASE",
            "NAME" => GetMessage("IBLOCK_PROP"),
            "TYPE" => "LIST",
            "VALUES" => $arrProperties,
            "MULTIPLE" => "Y",
            "SIZE" => "3",
        ],
        "IMG_WIDTH" => [
            "PARENT" => "BASE",
            "NAME" => GetMessage("IMG_WIDTH"),
            "TYPE" => "STRING",
            "DEFAULT" => "130",
        ],
        "IMG_HEIGHT" => [
            "PARENT" => "BASE",
            "NAME" => GetMessage("IMG_HEIGHT"),
            "TYPE" => "STRING",
            "DEFAULT" => "96",
        ],
    ],
];
?>