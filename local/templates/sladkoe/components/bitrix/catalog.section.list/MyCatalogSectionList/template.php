<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

use  Bitrix\Main\Localization\Loc;

/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);

?>
<?php
if (!$arResult["SECTIONS"]) {
    return;
}

?>
<div class="category">

    <div class="category_text">
        <div class="text_span">
            <?= Loc::getMessage('CATEGORIES') ?>
        </div>
        <div class="text_small">
            <? $APPLICATION->IncludeComponent(
                "bitrix:main.include",
                "",
                [
                    "AREA_FILE_SHOW" => "file",
                    "EDIT_TEMPLATE" => "",
                    "PATH" => "/includes/category_description.php"
                ]
            ); ?>
        </div>
    </div>
    <div class="category_items">
        <? $key = 1; ?>
        <? foreach ($arResult["SECTIONS"] as $arItem): ?>
            <? if ($key > 3) {
                break;
            } ?>
            <?
            $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
            $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), ["CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')]);
            ?>
            <? if ($arItem["PICTURE"]['SRC']): ?>

                <div class="category_element" id="<?= $this->GetEditAreaId($arItem['ID']); ?>"
                     style="background-image: url('<?= $arItem['PICTURE']['SRC']; ?>')">

                    <? if ($arItem["NAME"]): ?>
                        <div class="category_name">
                            <?= $arItem["NAME"]; ?>
                        </div>

                    <? endif; ?>

                    <? if (!empty($arItem["SECTION_PAGE_URL"])): ?>
                        <div class="category_link">
                            <a href="<?= $arItem["SECTION_PAGE_URL"]; ?>"><?= Loc::getMessage('GO_CATEGORY') ?></a>
                        </div>
                    <? endif; ?>

                </div>

            <? endif ?>

            <? $key++ ?>
        <? endforeach; ?>
    </div>
    <div class="category_btn">
        <a href="<?= '/catalog/index.php' ?>" class="c_btn">Все категории</a>
    </div>
</div>