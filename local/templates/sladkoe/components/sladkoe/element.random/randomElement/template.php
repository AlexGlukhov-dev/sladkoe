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
$frame = $this->createFrame()->begin('');

?>

<? if ($arResult['PICTURE']['srс']) ?>

<div class="categoryElement">
    <div style="margin-right: 20px;"><img src="<?= $arResult['PICTURE']['src'] ?>"></div>

    <div>
        <? if ($arResult["NAME"]): ?>
            <div style="color: #00a67c;font-size: 35px;font-weight: bold;">
                <?= $arResult["NAME"]; ?>
            </div>

        <? endif; ?>

        <? if (!empty($arResult["DETAIL_PAGE_URL"]) && !empty($arResult["DETAIL_PAGE_URL"]) && !empty($arResult['PREVIEW_TEXT'])): ?>
            <div style="margin: 10px;">
                → <a style="color: #c719aa; font-weight: bold; "
                     href="<?= $arResult["DETAIL_PAGE_URL"]; ?>"><?= $arResult['PREVIEW_TEXT'] ?>
                </a> ←<br>
            </div>
        <? endif; ?>
        <? foreach ($arParams["IBLOCK_PROP"] as $prop): ?>
            <? if ($prop == "ELEMENT_LINK" && !empty($arResult["PROPERTY_ELEMENT_LINK_NAME"])): ?>
                <div style="margin: 10px;">
                    <span>Категория изделия: <?= $arResult["PROPERTY_ELEMENT_LINK_NAME"] ?></span>
                </div>
            <? endif; ?>

            <? if ($prop == "AUTHOR" && !empty($arResult['AUTHOR']['LAST_NAME']) && !empty($arResult['AUTHOR']['NAME'])): ?>
                <div style="margin: 10px;">
                    <span>Повар: <?= $arResult['AUTHOR']['NAME'] . " " . $arResult['AUTHOR']['LAST_NAME'] ?></span>
                </div>
            <? endif; ?>
        <? endforeach; ?>
    </div>
</div>

<?
$frame->end();
?>



