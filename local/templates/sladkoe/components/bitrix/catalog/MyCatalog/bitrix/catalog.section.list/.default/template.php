<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<?php use Bitrix\Main\Localization\Loc; ?>
<div class="category">

    <div class="category_text">
        <div class="text_span">
            <?= Loc::getMessage('CATEGORIES') ?>
        </div>
    </div>


    <div class="category_items">


        <? foreach ($arResult["SECTIONS"] as $arItem): ?>

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


        <? endforeach; ?>
    </div>