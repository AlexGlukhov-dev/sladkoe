<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
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
<div class="category">

    <div class="category_text">
        <div class="text_span">
            Категории
        </div>
        <div class="text_small">
            торты любой категории, на любой вкус, цвет и праздник
        </div>
    </div>
    <? getArr($arResult["SECTION"]); ?>
    <div class="category_items">
        <? foreach ($arResult["ITEMS"] as $arItem): ?>

            <?
            $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
            $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), ["CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')]);
            ?>
            <? //getArr($arResult); ?>
            <? if (
                $arParams["DISPLAY_PICTURE"] != "N" &&
                $arItem["PREVIEW_PICTURE"]['SRC'] &&
                !$arParams["HIDE_LINK_WHEN_NO_DETAIL"] ||
                ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])
            ): ?>

                <div class="category_left" id="<?= $this->GetEditAreaId($arItem['ID']); ?>"
                     style="background-image: url('<?= $arItem['PREVIEW_PICTURE']['SRC']; ?>')">

                    <? if ($arParams["DISPLAY_NAME"] != "N" && $arItem["NAME"]): ?>
                        <div class="category_name">
                            <?= $arItem["NAME"]; ?>
                        </div>

                    <? endif; ?>

                    <? if (!empty($arItem["DETAIL_PAGE_URL"])): ?>
                        <div class="category_link">
                            <a href="<?= $arItem["DETAIL_PAGE_URL"]; ?>"><?= $arItem['PREVIEW_TEXT'] ?></a>
                        </div>
                    <? endif; ?>

                    <? if ($arItem['AUTHOR']): ?>
                        <div class="category_link">
                            <span>Автор: <?= $arItem['AUTHOR']['NAME'] ?></span>
                        </div>
                    <? endif; ?>
                </div>

            <? endif ?>


        <? endforeach; ?>
    </div>
    <div class="category_btn">
        <button class="c_btn">Все категории</button>
    </div>
</div>


